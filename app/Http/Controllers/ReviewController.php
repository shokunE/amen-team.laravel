<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Models\Review;
use Illuminate\Support\Arr;

class ReviewController extends Controller
{
    public function store(ReviewRequest $request, $bookId)
    {
        $data = Arr::only($request->validated(), ['name', 'text', 'email']);
        $data['book_id'] = $bookId;

        Review::create($data);

        return redirect()->back();

    }
}
