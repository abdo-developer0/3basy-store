@extends('layouts.app')

@section('title', 'take order' )

@section('content')

    <div class="container py-5">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ url('/img/uc_img.jpeg') }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title h1 ms-5">{{ $item->name }}</h5>
                        <p class="card-text h4 ms-5 mb-2">price is ${{$item->price}}</p>
                        <a href="{{ route('order.store', $item->id ) }}" class="btn btn-info text-light w-50 rounded-pill ms-5">Make Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection