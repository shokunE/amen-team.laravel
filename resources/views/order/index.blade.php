@extends('layouts.default')
@section('title' , 'Заказать книгу')

@section('content')

    <div class="row">
        <div class="col-4">
            <div class="card my-5" style="width: 18rem;">
                <img class="card-img-top" src="/storage/{{$book->photo}}" alt="{{$book->name}}">
                <div class="card-body">
                    <h5 class="card-title">Книга: {{$book->name}}</h5>
                    <p class="card-text">Автор: {{$book->author}}</p>
                    <p class="card-text">Описание: {{$book->desc}}</p>
                </div>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="mb-2">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('order.store', $book->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" name="email">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <button type="submit" class="btn btn-primary">Заказать</button>
    </form>

@endsection