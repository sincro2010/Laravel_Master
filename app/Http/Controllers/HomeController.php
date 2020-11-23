<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;

class HomeController extends Controller
{
    public function MainPage() {
        return view('home');
           }

    public function OrdersList() {
        $orders = new Order;
         
       return view('orders', ['orders' => $orders->all()]);
  
            }       
}
