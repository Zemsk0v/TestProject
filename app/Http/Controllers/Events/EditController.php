<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\TypeOfEvent;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Event $event)
    {

        $typesOfEvent = TypeOfEvent::all();
        return view('event.edit', compact('event', 'typesOfEvent'));
    }
}
