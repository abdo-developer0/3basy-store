@extends('layouts.app')

@section('title', 'users')

@section('content')

<div class="mt-5 pt-5 pb-5 text-center">
        <h1 class="display-1">Site Has {{ $orders->count() }} Of Orders</h1>
    </div>

    <div class="table w-75 mx-auto">
        @foreach($orders as $order)
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-3">
                    <img src="{{ url('/img/uc-icon.png') }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <p class="card-text h4 mb-2">{{ $order->user->name }}</p>
                        <p class="card-text h4 mb-2">Item: {{$order->item->name}}<br>Price: {{ $order->item->price }}</p>
                        <div class="row pt-2">
                            @if($order->chatroom)
                            <a href="{{ route('chatroom', $order->id) }}" class="btn btn-primary col-md-5">Open Chatroom</a>
                            @else
                            <a href="{{ route('chatroom', $order->id) }}" class="btn btn-success col-md-5 rounded-pill me-1 mb-1">Create Chatroom</a>
                            <a href="" class="btn btn-danger col-md-5 rounded-pill">Remove Order</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div> 

@endsection