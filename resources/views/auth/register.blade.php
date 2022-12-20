@extends('layouts.app')

@section('title','Register')

@section('content')

    <div class="mt-5 pt-5 d-flex justify-content-center">
        <form action="{{ route('registration') }}" method="POST">
            <h1 class="display-1 pb-3 text-center">Register</h1>
            @csrf
            
            <input type="phone" placeholder="Name" class="form-control mb-3 rounded-pill" name="name"/>
            @error('name')
                <div class="py-2 text-danger">{{$message}}</div>
            @enderror
            <input type="phone" placeholder="Phone" class="form-control mb-3 rounded-pill" name="phone"/>
            @error('phone')
                <div class="py-2 text-danger">{{$message}}</div>
            @enderror
            <input type="password" placeholder="Password" class="form-control mb-3 rounded-pill" name="password"/>
            @error('password')
                <div class="py-2 text-danger">{{$message}}</div>
            @enderror
            <input type="password" placeholder="Confirm password" class="form-control mb-3 rounded-pill" name="password_confirmation"/>
            <input type="submit" value="Register Now" class="btn btn-info w-100 rounded-pill py-1">
        </form>
    </div>

@endsection