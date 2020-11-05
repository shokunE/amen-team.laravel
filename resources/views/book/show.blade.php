@extends('layouts.default')
@section('title' , $book->name)

@section('content')

    <div class="row">
            <div class="col-4">
                <div class="card my-5" style="width: 18rem;">
                    <img class="card-img-top" src="/storage/{{$book->photo}}" alt="{{$book->name}}">
                    <div class="card-body">
                        <h5 class="card-title">Книга: {{$book->name}}</h5>
                        <p class="card-text">Автор: {{$book->author}}</p>
                        <p class="card-text">Описание: {{$book->desc}}</p>
                        <a href="{{ route('order.show', $book->id) }}" class="btn btn-primary">Заказать</a>
                    </div>
                </div>
            </div>
    </div>

    @foreach($book->reviews as $review)
        <div class="review">
            <div class="name">{{$review->name}}</div>
            <div class="email">{{$review->email}}</div>
            <div class="text">{{$review->text}}</div>
        </div>
    @endforeach


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="mb-2">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="col-12 mt-5 mb-5">

        <form action="{{ route('review.store', $book->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" name="email">
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Ваш отзыв</label>
                <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Оставить отзыв</button>
        </form>

    </div>



@endsection