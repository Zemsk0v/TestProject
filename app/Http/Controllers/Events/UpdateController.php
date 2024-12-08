<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Http\Requests\Events\UpdateRequest;
use App\Models\Event;
use App\Models\TypeOfEvent;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request, Event $event)
    {

        $data = $request->validated();
        $event->update($data); // Использую экземпляр $event для вызова метода update()
        return redirect()->route('events.show', $event->id);
    }
}
