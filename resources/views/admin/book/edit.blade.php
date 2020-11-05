@extends('layouts.default')
@section('title', 'Создание книги')

@section('content')
    <form action="{{ route('admin.book.update', $book->id) }}" method="post" enctype="multipart/form-data" class="mt-5">
        @csrf
        @include('admin.book.form.fields')
        {{ method_field('PATCH') }}
        <button type="submit" class="btn btn-primary">Изменить</button>
    </form>

    <div class="mt-5">
        @foreach($book->reviews as $review)
            <div class="review">
                <div class="name">{{$review->name}}</div>
                <div class="email">{{$review->email}}</div>
                <div class="text mb-3">{{$review->text}}</div>
                <form action="{{ route('admin.review.destroy', $review->id) }}" method="post" class="mt-5 d-inline">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">Удалить</button>
                </form>
                <a class="btn btn-primary" href="{{ route('admin.review.edit', $review->id) }}">Изменить</a>
            </div>
        @endforeach
    </div>


@endsection