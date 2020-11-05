@extends('layouts.default')
@section('title' , 'Книги')

@section('content')
    <div class="row">
        @foreach($books as $book)
            <div class="col-4">
                <div class="card my-5" style="width: 18rem;">
                    <img class="card-img-top" src="/storage/{{$book->photo}}" alt="{{$book->name}}">
                    <div class="card-body">
                        <h5 class="card-title">Книга: {{$book->name}}</h5>
                        <p class="card-text">Автор: {{$book->author}}</p>
                        <p class="card-text">Описание: {{$book->desc}}</p>
                        <a href="{{ route('book.show', $book->id) }}" class="btn btn-primary">Просмотр</a>
                        <a href="{{ route('order.show', $book->id) }}" class="btn btn-primary">Заказать</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection