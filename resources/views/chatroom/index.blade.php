@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="card col-md-6">


        <form action="{{ route('chatroom.send') }}" method="POST" class="row">
            @csrf
            <input type="text" class="form-control">
        </form>
        </div>
    </div>
@endsection