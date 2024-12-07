@extends('layouts.event')

@section('content')
    <form action="{{ route('events.store') }}" method="POST" class="custom-form">
        @csrf
        <div class="mb-3 mt-3">
            <label for="client_name" class="form-label">Client name:</label>
            <input type="text" class="form-control" id="client_name" placeholder="Enter name" name="client_name">
        </div>

        <select class="form-select mb-3" aria-label="Default select example" name="event_type">
            @foreach($typesOfEvent as $typeOfEvent)
                <option value="{{$typeOfEvent->id}}">{{$typeOfEvent->title}}</option>
            @endforeach
        </select>

        <div class="mb-3">
            <label for="event_date" class="form-label">Event date:</label>
            <input type="date" class="form-control" id="event_date" name="event_date">
        </div>

        <div class="mb-3">
            <label for="event_time" class="form-label">Event time:</label>
            <input type="time" class="form-control" id="event_time" name="event_time">
        </div>

        <div class="mb-3">
            <label for="venue" class="form-label">The venue of the event:</label>
            <input type="text" class="form-control" id="venue" placeholder="Enter venue" name="venue">
        </div>

        <div class="mb-3">
            <label for="guest_count" class="form-label">Guest count:</label>
            <input type="number" class="form-control" id="guest_count" placeholder="Enter the number of guests" name="guest_count">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" rows="5" id="description" name="description"></textarea>
        </div>

        <div class="mb-3">
            <label for="budget" class="form-label">Event budget:</label>
            <input type="number" class="form-control" id="budget" placeholder="Enter budget" name="budget">
        </div>

        <div class="mb-3">
            <label for="theme" class="form-label">Event theme:</label>
            <input type="text" class="form-control" id="theme" placeholder="Enter theme" name="theme">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
