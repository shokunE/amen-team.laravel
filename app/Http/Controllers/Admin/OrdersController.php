<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
      $orders = Order::orderBy('id', 'desc')->with('book')->get();

      return view('admin.order.index', compact('orders'));
    }


    /**
     * @param Order $order
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Order $order)
    {
       $order->status = true;
       $order->save();

       Book::where('id', $order->book_id)->update(['status' => true]);

       return redirect()->back();
    }
}
