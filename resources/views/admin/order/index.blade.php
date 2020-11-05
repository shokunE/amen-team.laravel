@extends('layouts.default')
@section('title' , 'Заявки')

@section('content')

    <table class="table my-5">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Book</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
        <tr>
            <th scope="row" class="align-middle">{{ $order->id }}</th>
            <td class="align-middle">{{ $order->name }}</td>
            <td class="align-middle">{{ $order->email }}</td>
            <td class="align-middle">{{ $order->phone }}</td>
            <td class="align-middle"><a href="{{ route('book.show', $order->book->id) }}">{{ $order->book->name }}</a></td>
            @if(!$order->book->status())
            <td><a class="btn btn-success" href="{{ route('admin.order.update', $order->id) }}">Подтвердить</a></td>
            @elseif($order->status)
                <td>
                    <div class="alert alert-success mb-0" role="alert">
                       Заказ подтвержден!
                    </div>
                </td>
            @else
            <td>
                <div class="alert alert-primary mb-0" role="alert">
                   Уже подтверждена!
                </div>
            </td>
            @endif
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection