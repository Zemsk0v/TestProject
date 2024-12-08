@extends('layouts.event')
@section('content')
    <div>
        <div class="container mt-5">
            <div class="card">
                <div class="card-header">
                    id: {{ $event->id }}
                </div>
                <div class="card-body">
                    <p class="card-text">Client name: {{$event->client_name}}</p>
                    <p class="card-text">Event type: {{$event->typeOfEvent->title}}</p>
                    <p class="card-text">Date: {{$event->event_date}} . Time {{$event->event_time}}</p>
                    <p class="card-text">Venue: {{$event->venue}}</p>
                    <p class="card-text">Guests: {{$event->guest_count}}</p>
                    <p class="card-text">Budget: {{$event->budget}}</p>
                    <p class="card-text">Theme: {{$event->theme}}</p>
                    <p class="card-text">Description: {{$event->description}}</p>
                    <div>
                        <a href="{{ route('events.index') }}" class="button-my-button">Back</a>
                        <a href="{{ route('events.edit', $event->id) }}" class="button-my-button-brown">Edit</a>
                        <form action="{{ route('events.destroy', $event->id) }}" method="POST" onsubmit="return confirm('Delete the event?')" >
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button-my-button-red">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
