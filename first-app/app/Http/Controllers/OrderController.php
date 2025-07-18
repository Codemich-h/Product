<?php

namespace App\Http\Controllers;


use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function orders()
    {
        $viewData = [];
        $viewData['title'] = 'My Orders - Online Store';
        $viewData['subtitle'] = 'My Order';

        // dd('orders');
        $viewData['orders'] = Order::with(['items.product'])->where('user_id', Auth::user()->id)->get();

        if($viewData['orders']->isEmpty()) {
            $viewData['message'] = 'You have no orders yet.';
        }

        return view('orders.order')->with('viewData', $viewData);
    }
}
