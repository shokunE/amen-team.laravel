@extends('layouts.default')
@section('title', 'Изменение отзыва')

@section('content')
    <form action="{{ route('admin.review.update', $review->id) }}" method="post" enctype="multipart/form-data" class="mt-5">
        @csrf
        @include('admin.review.form.fields')
        {{ method_field('PATCH') }}
        <button type="submit" class="btn btn-primary">Изменить</button>
    </form>

@endsection