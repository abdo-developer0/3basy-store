@extends('layouts.app')

@section('title','create item')

@section('content')

    <div class="container py-5">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ url('/img/uc_img.jpeg') }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="h1 pb-3">Create New</h5>
                        <form action="{{ route('item.store') }}" method="POST" class="w-50 mx-auto">
                            @csrf
                            <input type="text" name="name" class="form-control mb-2" placeholder="Enter Item Name.">
                            <input type="text" name="price" class="form-control" placeholder="Enter Item Price.">
                            <button type="submit" class="btn btn-info d-block w-75 mx-auto mt-2">Save.</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection