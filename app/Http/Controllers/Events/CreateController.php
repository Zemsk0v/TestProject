<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\TypeOfEvent;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $typesOfEvent = TypeOfEvent::all();
        $events = Event::all();
        return view('event.create', compact('typesOfEvent'));
    }
}
