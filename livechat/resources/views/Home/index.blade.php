

@extends('layout.general')
@section('content')
    <div class="container">
        <h1 class="center">Live Chat</h1>
        @livewire('chat-form')
        @livewire('chat-list')

    </div>
@endsection('content')