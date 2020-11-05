<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Book;
use App\Models\Order;
use Illuminate\Support\Arr;

class OrderController extends Controller
{
    /**
     * @param Book $book
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Book $book)
    {
        return view('order.index', compact('book'));
    }

    /**
     * @param OrderRequest $request
     * @param $bookId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(OrderRequest $request, $bookId)
    {
        $data = Arr::only($request->validated(), ['name', 'phone', 'email']);
        $data['book_id'] = $bookId;

        Order::create($data);

        return redirect()->route('book.index');
    }
}
