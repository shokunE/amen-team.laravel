@extends('layouts.default')
@section('title', 'Создание книги')

@section('content')

    <form action="{{ route('admin.book.store') }}" method="post" enctype="multipart/form-data" class="mt-5">
        @csrf
        @include('admin.book.form.fields')

        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
@endsection