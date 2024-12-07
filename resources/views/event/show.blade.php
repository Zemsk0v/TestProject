@extends('layouts.event')

@section('content')

    <div class="events-container event-item">

        <p>{{$event->id}} .Client name: {{$event->client_name}}</p>
        <p>Guests: {{$event->guest_count}}</p>
        <p> Description: {{$event->description}}</p>
        <button class="btn btn-primary" onclick="window.location.href='{{ route('events.edit', $event->id) }}'">
            <span class="spinner-border spinner-border-sm"></span> Edit
        </button>
    </div>
@endsection
