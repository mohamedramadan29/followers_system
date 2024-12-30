<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\Api;

class ProductController extends Controller
{
    public function index($slug)
    {
        $service = Product::where('slug', $slug)->first();
        
        return view("front.product",compact('service'));
    }

    public function showServiceDetails($id)
    {
        $api = new Api();
        // جلب كل الخدمات من الـ API
        $services = $api->services(); // البيانات مباشرةً من الدالة
        //dd($services);
        if (!$services) {
            return redirect()->back()->with('error', 'فشل في جلب البيانات من الـ API.');
        }

        // إذا كانت البيانات تحتوي على مفتاح `data`، استخراجها
        //$services = is_array($services) && isset($services['data']) ? $services['data'] : $services;

        // البحث عن الخدمة بناءً على $id
        $service = collect($services)->firstWhere('service', $id);
        dd($service);
        if (!$service) {
            return redirect()->back()->with('error', 'الخدمة غير موجودة.');
        }

        // عرض الخدمة في الصفحة
        return view('service-details', compact('service'));
    }
}
