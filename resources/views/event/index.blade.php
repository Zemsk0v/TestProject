@extends('layouts.event')
@section('content')
    <div>
        <ol class="list-group list-group-numbered">
            @foreach($events as $event)
                    <li class="list-group-item d-flex justify-content-between align-items-start custom-border" style="background-color: #f5e3d2;">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold text-brown">{{$event->client_name}}</div>
                            <span class="text-brown">Date: {{$event->event_date}}, </span>
                            <span class="text-brown">Time: {{$event->event_time}}.</span>
                            <p class="event-type">{{$event->typeOfEvent->title}}</p>
                        </div>
                        <span class="badge bg-light text-dark rounded-pill">{{$event->guest_count}}</span> <!-- Нежно-бежевый фон и тёмно-коричневый текст -->
                    </li>


            @endforeach
        </ol>
    </div>

@endsection
