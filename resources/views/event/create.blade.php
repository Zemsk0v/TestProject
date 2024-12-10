@extends('layouts.event')

@section('content')
    <form action="{{ route('events.store') }}" method="POST" class="custom-form">
        @csrf
        <div class="mb-3 mt-3">
            <label for="client_name" class="form-label">Client name:</label>
            <input value="{{old('clint_name')}}" type="text" class="form-control" id="client_name"
                   placeholder="Enter name" name="client_name">
            @error('client_name')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <select class="form-select mb-3" aria-label="Default select example" name="type_of_events_id">
                @foreach($typesOfEvent as $typeOfEvent)
                    <option value="{{$typeOfEvent->id}}">{{$typeOfEvent->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="event_date" class="form-label">Event date:</label>
            <input value="{{old('event_date')}}" type="date" class="form-control" id="event_date" name="event_date">
            @error('event_date')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="event_time" class="form-label">Event time:</label>
            <input value="{{old('event_time')}}" type="time" class="form-control" id="event_time" name="event_time">
            @error('event_time')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="venue" class="form-label">The venue of the event:</label>
            <input value="{{old('venue')}}" type="text" class="form-control" id="venue" placeholder="Enter venue"
                   name="venue">
            @error('venue')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="guest_count" class="form-label">Guest count:</label>
            <input value="{{old('guest_count')}}" type="number" class="form-control" id="guest_count"
                   placeholder="Enter the number of guests"
                   name="guest_count">
            @error('guest_count')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="budget" class="form-label">Event budget:</label>
            <input value="{{old('budget')}}" type="number" class="form-control" id="budget" placeholder="Enter budget"
                   name="budget">
            @error('budget')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="theme" class="form-label">Event theme:</label>
            <input value="{{old('theme')}}" type="text" class="form-control" id="theme" placeholder="Enter theme"
                   name="theme">
            @error('theme')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" rows="5" id="description"
                      name="description">{{old('description')}}</textarea>
            @error('description')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection
