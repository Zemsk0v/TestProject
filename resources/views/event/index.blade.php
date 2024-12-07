@extends('layouts.event')
@section('content')
    <div class="events-container">
        <ol class="list-group list-group-numbered">
            @foreach($events as $event)

                <li class="list-group-item d-flex justify-content-between align-items-start event-item" style="background-color: #f5e3d2;">
                    <div class="ms-2 me-auto custom">
                        <div class="fw-bold text-brown">{{$event->client_name}}</div>
                        <span class="text-brown">Date: {{$event->event_date}}, </span>
                        <span class="text-brown">Time: {{$event->event_time}}.</span>
                        <p class="event-type">{{$event->typeOfEvent->title}}</p>
                    </div>
                    <span class="badge bg-light text-dark rounded-pill">{{$event->guest_count}}</span>
                </li>
            @endforeach
        </ol>
    </div>

@endsection
