<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\Message_Trait;
use App\Http\Traits\Slug_Trait;
use App\Http\Traits\Upload_Images;
use App\Models\admin\MainCategory;
use App\Models\admin\Product;
use App\Models\admin\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    use Message_Trait;
    use Slug_Trait;
    use Upload_Images;

    public function index()
    {
        $products = Product::with('Main_Category')->orderBy('id', 'desc')->get();
        $MainCategories = MainCategory::where('status', '1')->get();
        $SubCategories = SubCategory::where('status', '1')->get();
        return view('admin.Products.index', compact('products', 'MainCategories', 'SubCategories'));
    }


    public function getSubCategories(Request $request)
    {
        $subCategories = SubCategory::where('parent_id', $request->category_id)->pluck('name', 'id');
        if ($subCategories->isEmpty()) {
            return response()->json(['message' => 'لا يوجد أقسام فرعية داخل هذا القسم']);
        }
        return response()->json($subCategories);
    }

    public function store(Request $request)
    {
        $MainCategories = MainCategory::where('status', '1')->get();
        $SubCategories = SubCategory::where('status', '1')->get();
        if ($request->isMethod('post')) {
            try {
                $data = $request->all();
                $rules = [
                    'name' => 'required',
                    'category_id' => 'required',
                    'description' => 'required'
                ];
                if ($request->hasFile('image')) {
                    $rules['image'] = 'image|mimes:jpg,png,jpeg,webp';
                }
                $messages = [
                    'name.required' => ' من فضلك ادخل اسم المنتج  ',
                    'category_id.required' => ' من فضلك حدد القسم الرئيسي للمنتج  ',
                    'description.required' => ' من فضلك ادخل الوصف الخاص بالمنتج ',
                    'image.mimes' =>
                        'من فضلك يجب ان يكون نوع الصورة jpg,png,jpeg,webp',
                    'image.image' => 'من فضلك ادخل الصورة بشكل صحيح',
                ];
                $validator = Validator::make($data, $rules, $messages);
                if ($validator->fails()) {
                    return Redirect::back()->withInput()->withErrors($validator);
                }
                if ($request->hasFile('image')) {
                    $file_name = $this->saveImage($request->image, public_path('assets/uploads/product_images'));
                }
                /////// Check if This Product In Db Or Not
                ///
                $count_old_product = Product::where('name', $data['name'])->count();
                if ($count_old_product > 0) {
                    return Redirect::back()->withInput()->withErrors(' اسم المنتج متواجد من قبل من فضلك ادخل منتج جديد  ');
                }
                DB::beginTransaction();
                $product = new Product();
                $product->name = $data['name'];
                if ($data['slug'] && $data['slug'] != '') {
                    $slug = $this->CustomeSlug($data['slug']);
                } else {
                    $slug = $this->CustomeSlug($data['name']);
                }
                $product->slug = $slug;
                $product->category_id = $data['category_id'];
                $product->sub_category_id = $data['sub_category_id'];
                $product->provider = 1;
                $product->status = $data['status'];
                $product->short_description = $data['short_description'];
                $product->description = $data['description'];
                $product->purchase_price = $data['purchase_price'];
                $product->price = $data['price'];
                //$product->discount = $data['discount'];
                $product->meta_title = $data['meta_title'];
                $product->meta_keywords = $data['meta_keywords'];
                $product->meta_description = $data['meta_description'];
                $product->image = $file_name;
                $product->save();
                DB::commit();
                return $this->success_message(' تم اضافة الخدمة  بنجاح  ');
            } catch (\Exception $e) {
                return $this->exception_message($e);
            }
        }
        return view('admin.products.add', compact('MainCategories', 'SubCategories'));

    }

    public function update(Request $request, $slug)
    {
        // جلب الفئات الرئيسية والفرعية والعلامات التجارية والسمات
        $MainCategories = MainCategory::where('status', '1')->get();
        $SubCategories = SubCategory::where('status', '1')->get();

        // جلب المنتج مع الفئة الفرعية والمتغيرات المرتبطة به
        $product = Product::with('Sub_Category')->where('slug', $slug)->first();

        if ($request->isMethod('post')) {
            // التحقق من صحة المدخلات
            $request->validate([
                'name' => 'required|string|max:255',
                'category_id' => 'required|integer',
                'sub_category_id' => 'nullable|integer',
            ]);
            DB::beginTransaction();

            try {
                $data = $request->all();
                if ($request->hasFile('image')) {
                    $file_name = $this->saveImage($request->image, public_path('assets/uploads/product_images'));
                    ////// / Delete Old Image
                    $old_image = public_path('assets/uploads/product_images/'.$product['image']);
                    if (file_exists($old_image)){
                        @unlink($old_image);
                    }

                    $product->update([
                        'image'=>$file_name,
                    ]);
                }
                // تحديث معلومات المنتج
                $product->name = $data['name'];
                if ($data['slug'] && $data['slug'] != '') {
                    $slug = $this->CustomeSlug($data['slug']);
                } else {
                    $slug = $this->CustomeSlug($data['name']);
                }
                $product->slug = $slug;
                $product->category_id = $data['category_id'];
                $product->sub_category_id = $data['sub_category_id'];
                $product->provider = 1;
                $product->status = $data['status'];
                $product->short_description = $data['short_description'];
                $product->description = $data['description'];
                $product->purchase_price = $data['purchase_price'];
                $product->price = $data['price'];
                //$product->discount = $data['discount'];
                $product->meta_title = $data['meta_title'];
                $product->meta_keywords = $data['meta_keywords'];
                $product->meta_description = $data['meta_description'];
                $product->save();
                DB::commit();
                // بعد تحديث المنتج بنجاح
                return Redirect::route('product.update', ['slug' => $product->slug])
                    ->with('Success_message', 'تم تعديل الخدمة  بنجاح');
            } catch (\Exception $e) {
              //  DB::rollback();
                return $this->exception_message($e);
            }

        }
        // عرض صفحة التعديل
        return view('admin.Products.update', compact('product', 'MainCategories', 'SubCategories'));
    }


    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return $this->success_message(' تم حذف المنتج بنجاح  ');
    }

    public function follow(Request $request)
    {
        try {
            $api_url = 'https://drd3m.me/api/v2';
            $api_key = 'eedc222172a35153a14e059bb50433fa';
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $api_key, // تأكد من أن المفتاح هنا هو نفسه الذي زودك به المزود
            ])->post($api_url, [
                'action' => 'services',
            ]);
            dd($response->body());
          //  dd($response);
            if ($response->successful()) {
                $data = $response->json();
                return response()->json($data);
            }
//            else {
//                return back()->with('error', 'حدث خطأ في الاتصال بالمزود');
//            }
        }catch (\Exception $e){
            return $e;
        }

    }
}
