@extends('layouts.app')

@section('title', 'users')

@section('content')

<div class="mt-5 pt-5 pb-5 text-center">
        <h1 class="display-1">Site Has {{ $users->count() }} Of Users</h1>
    </div>

    <div class="table w-75 mx-auto">
        @foreach($users as $user)
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-3">
                    <img src="{{ url('/img/user-icon.png') }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <p class="card-text h4 mb-2">{{$user->name}}</p>
                        <p class="card-text h4 mb-2">Phone: {{$user->phone}}</p>
                        <p class="card-texts-5 mb-2">access: {{$user->access? 'admin': 'visitor'}}</p>
                        <div class="row">
                            <a href="" class="btn btn-info rounded-5 col-md-5 mb-1">Open New</a>
                            <a href="" class="btn btn-info rounded-5 col-md-5">Open New</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div> 

@endsection