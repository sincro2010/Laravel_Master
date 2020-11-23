<?php

namespace App\Http\Controllers;
use App\Partner;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;

class OrderProductController extends Controller
{
    public function OneOrder($id) {
        $orders = new Order;
         
       return view('order', ['orders' => $orders->find($id)]);
  
            }       

    public function UpdateOrder($id) {
        $orders = new Order;
        return view('updateOrder', ['orders' => $orders->find($id)]);
    }


    public function UpdateOrderSubmit($id, OrderRequest $request) {
        $orders= Order::find($id);
    
        $orders->partner_id= $request->input('partner-select'); 
        $orders->status= $request->input('status-select'); 
        $orders->client_email = $request->input('email'); 
        $orders -> save();

        return redirect()->route('one-order', $id)->with('success', 'Order was updated successfully');
             } 
    }

