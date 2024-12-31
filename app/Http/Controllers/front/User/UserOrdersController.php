<?php

namespace App\Http\Controllers\front\User;

use App\Http\Controllers\Controller;
use App\Http\Traits\Message_Trait;
use App\Models\admin\Provider;
use App\Models\front\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\Api;
class UserOrdersController extends Controller
{
    use Message_Trait;

    public function index()
    {
        // استرجاع الطلبات مع بيانات المزود
        $orders = Order::with('provider') // تحميل المزود مع الطلبات
            ->where('user_id', Auth::id())
            ->orderBy('id', 'desc')
            ->get();

        // إضافة بيانات الحالة من المزود
        $orders_with_status = $orders->map(function ($order) {
            try {
                // التأكد من وجود بيانات المزود
                if ($order->provider) {
                    $api = new Api($order->provider->api_url, $order->provider->api_key);
                    $provider_order_data = $api->status($order->order_number);
                    // إضافة جميع البيانات المسترجعة من المزود إلى الطلب
                    $order->provider_details = $provider_order_data;
                } else {
                    $order->provider_details = null;
                }
            } catch (\Exception $e) {
                $order->provider_details = null; // في حالة حدوث خطأ
            }

            return $order;
            
        });

        return view('front.users.orders.orders', compact('orders_with_status'));
    }
}
