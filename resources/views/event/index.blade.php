@extends('layouts.event')
@section('content')
    <div class="events-container">
        <ol class="list-group list-group-numbered">
            @foreach($events as $event)
                <li class="list-group-item d-flex justify-content-between align-items-start event-item"
                    style="background-color: #f5e3d2;">
                    <a href="{{ route('events.show', $event->id) }}"
                       style="display: block; width: 100%; text-decoration: none; color: inherit;">
                        <div class="ms-2 me-auto custom">
                            <p class="text-brown">Client: {{$event->client_name}}</p><br>
                            <p class="card-text">Event type: {{$event->typeOfEvent->title}}</p>
                            <p class="text-brown">Date: {{$event->event_date}}, </p>
                            <p class="text-brown">Time: {{$event->event_time}}.</p>
                            <p class="event-type">Venue: {{$event->venue}}</p>
                            <p class="event-type">Guests: {{$event->guest_count}}</p>
                            <p class="event-type">Budget: {{$event->budget}}</p>
                            <p class="event-type">Theme: {{$event->theme}}</p>
                            <p class="event-type">Description: {{$event->description}}</p>
                        </div>
                    </a>
                    <span class="badge bg-light text-dark rounded-pill">{{$event->guest_count}}</span>

                </li>
            @endforeach
        </ol>
        <a href="{{ route('events.create') }}" class="btn btn-success mb-2">Add Post</a>
    </div>
@endsection
