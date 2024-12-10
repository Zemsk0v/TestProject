<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\TypeOfEvent;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $typesOfEvent = TypeOfEvent::all();
        return view('event.create', compact('typesOfEvent'));
    }
}
