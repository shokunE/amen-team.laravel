<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use App\Models\Review;

class ReviewController extends Controller
{

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $review = Review::find($id);

        return view('admin.review.edit', compact('review'));
    }

    /**
     * @param ReviewRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ReviewRequest $request, $id)
    {
        $book = Review::find($id);
        $book->name = $request->name;
        $book->text = $request->text;
        $book->email = $request->email;
        $book->save();

        return redirect()->back();
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $review = Review::find($id);
        $review->delete();
        return redirect()->back();
    }
}
