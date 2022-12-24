@extends('layouts.app')

@section('content')
    <div class="container vh-100">
        <div style="max-width: 300px;" class="card mx-auto h-75 d-flex flex-column px-2 pb-1">
            <div class="flex-fill d-flex flex-column justify-content-end" style="overflow-y: scroll;">
                @foreach($messages as $message)
                <div class="d-flex pb-4 justify-content-{{ ($message->user_id == auth()->id() )? 'start' : 'end' }}">
                    <span class="bg-info text-light px-2 py3 rounded">{{ $message->message }}</span>
                </div>
                @endforeach
            </div>

            <form action="{{ route('chatroom.send', $order->id) }}" method="POST">
                @csrf
                <input type="hidden" name="chatroom_id" value="{{ $order->chatroom->id }}">
                <div class="input-group rounded-5">
                    <input name="message" type="text" required placeholder="Type Message" class="form-control">
                    <button class="btn btn-info text-white" type="submit">Send</button>
                </div>
            </form>
        </div>
    </div>
@endsection