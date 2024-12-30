<?php

namespace App\Http\Controllers\front;

use App\Services\Api;
use Illuminate\Http\Request;
use App\Models\admin\Product;
use App\Models\admin\Provider;
use App\Http\Controllers\Controller;
use App\Models\admin\SubService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{

    public function index($slug)
    {
        $service = Product::with('Main_Category', 'SubServices')->where('slug', $slug)->first();
        $service_id = $service['service_id'];
        $provider_id = $service['provider_id'];
        $provider = Provider::where('id', $provider_id)->first();
        $cacheKey = "provider_service_{$provider_id}_{$service_id}";
        ######################### Get Service Details From Provider #####################################
        // $api = new Api($provider->api_url, $provider->api_key);
        // $services = $api->services();
        // $service_from_provider = collect($services)->firstWhere('service', $service_id);

        // استخدام الكاش لجلب البيانات
        $service_from_provider = Cache::remember($cacheKey, 3600, function () use ($provider, $service_id) {
            $api = new Api($provider->api_url, $provider->api_key);
            $services = $api->services();
            return collect($services)->firstWhere('service', $service_id);
        });
        if ($service_from_provider) {
            // سعر الخدمة الأساسي
            $rate = $service_from_provider->rate; // السعر لكل وحدة
            $min = $service_from_provider->min;   // الحد الأدنى
            // حساب التكلفة الإجمالية للحد الأدنى
            $base_price = $rate * $min;
            // نسبة الربح
            $profit_percentage = $service->profit_percentage; // يمكنك تغييرها حسب احتياجك
            // إضافة نسبة الربح
            $final_price = $base_price + ($base_price * $profit_percentage / 100);
            // تحويل البيانات إلى العرض
            $service_from_provider->base_price = round($base_price, 2);
            $service_from_provider->final_price = round($final_price, 2);
        } else {
            abort(404);
        }
        //dd($service_from_provider);
        #######################################################################################################
        return view("front.product", compact('service', 'service_from_provider'));
    }
    public function getSubServiceDetails($product_id, $provider_service_id)
    {
        // جلب الخدمة الرئيسية
        $mainService = Product::find($product_id);

        if (!$mainService) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        $provider = Provider::find($mainService->provider_id);

        if (!$provider) {
            return response()->json(['error' => 'Provider not found'], 404);
        }

        // جلب الخدمة الفرعية المخزنة محليًا
        $subService = SubService::where('product_id', $product_id)
            ->where('provider_service_id', $provider_service_id)
            ->first();

        if (!$subService) {
            return response()->json(['error' => 'SubService not found'], 404);
        }

        // مفتاح الكاش
        $cacheKey = "provider_service_{$provider->id}_{$provider_service_id}";

        // جلب بيانات الخدمة من مزود الخدمة باستخدام الكاش
        $serviceFromProvider = Cache::remember($cacheKey, 3600, function () use ($provider, $provider_service_id) {
            $api = new Api($provider->api_url, $provider->api_key);
            $services = $api->services();
            return collect($services)->firstWhere('service', $provider_service_id);
        });

        if (!$serviceFromProvider) {
            return response()->json(['error' => 'Service details not found from provider'], 404);
        }
        // حساب السعر النهائي
        $rate = $serviceFromProvider->rate; // السعر لكل وحدة
        $min = $serviceFromProvider->min;   // الحد الأدنى
        $max = $serviceFromProvider->max;   // الحد الأقصى

        $basePrice = $rate * $min; // التكلفة الأساسية
        $profitPercentage = $mainService->profit_percentage; // نسبة الربح

        $finalPrice = $basePrice + ($basePrice * $profitPercentage / 100);

        // دمج البيانات المحلية مع بيانات المزود
        $response = [
            'min' => $min,
            'max' => $max,
            'rate' => $rate,
            'base_price' => $basePrice,
            'final_price' => $finalPrice,
        ];
        return response()->json($response);
    }

}
