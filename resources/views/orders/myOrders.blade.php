@extends('layouts.app')

@section('title', 'users')

@section('content')

<div class="mt-5 pt-5 pb-5 text-center">
        <h1 class="display-1">You Have {{ $orders->count() }} Of Orders</h1>
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
                        <p class="card-text h4 mb-2">You</p>
                        <p class="card-text h4 mb-2">Order: {{$order->item->name}}</p>
                        <p class="card-text h5 mb-2">Price: ${{ $order->item->price }}</p>
                        <div class="row">
                            @if($order->chatroom)
                            <!-- <a href="" class="btn btn-success">Open Chatroom</a> -->
                            @else
                            <span class="alert alert-info">Waiting..</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div> 

@endsection