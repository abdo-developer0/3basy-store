@extends('layouts.app')

@section('title','Dashbord')

@section('content')

    <div class="container">
        <div class="mt-5 pt-5 pb-5 text-center">
            <h1 class="display-1">Dashbord</h1>
            <p class="">You has fullcontroll on <a href="{{ route('home') }}" class="btn btn-link">3basy-store</a></p>
        </div>

        <div class="row justify-content-around">
            
        <div class="col-md-3">
                <div class="card bg-primary text-light text-center py-4 rounded-circle">
                    <h2 class="display-2">{{ $item_count }}</h2>
                    <p class="card-text">Items</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card bg-primary text-light text-center py-4 rounded-circle">
                    <h2 class="display-2">{{ $order_count }}</h2>
                    <p class="card-text">Orders</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card bg-primary text-light text-center py-4 rounded-circle">
                    <h2 class="display-2">{{ $user_count }}</h2>
                    <p class="card-text">Users</p>
                </div>
            </div>

        </div>

    </div>

@endsection