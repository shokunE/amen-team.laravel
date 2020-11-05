@extends('layouts.default')
@section('title' , 'Админка')

@section('content')

    <div class="row mt-5">
        <div class="col-12">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('admin.book.create') }}">Добавить книгу</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.order.index') }}">Заявки</a>
                </li>
            </ul>
        </div>
    </div>

    @if (\Session::has('error'))
        <div class="alert alert-danger mt-5" role="alert">
            {{ \Session::get('error') }}
        </div>
    @endif

    <div class="row">
        @foreach($books as $book)
            <div class="col-4">
                <div class="card my-5" style="width: 18rem;">
                    <img class="card-img-top" src="/storage/{{$book->photo}}" alt="{{$book->name}}">
                    <div class="card-body">
                        <h5 class="card-title">Книга: {{$book->name}}</h5>
                        <p class="card-text">Автор: {{$book->author}}</p>
                        <p class="card-text">Описание: {{$book->desc}}</p>
                        <div class="d-flex">
                            <a href="{{ route('admin.book.edit', $book->id) }}"
                               class="btn btn-primary px-2 mr-1">Редактировать</a>
                            @if(!$book->orders->count())
                                <form action="{{ route('admin.book.destroy', $book->id) }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">Удалить книгу</button>
                                </form>
                             @endif

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection