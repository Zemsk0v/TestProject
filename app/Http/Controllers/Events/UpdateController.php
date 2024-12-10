<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Http\Requests\Events\UpdateRequest;
use App\Models\Event;
use App\Models\TypeOfEvent;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request, Event $event)
    {

        $data = $request->validated();
        $this->service->update($event, $data);
        return redirect()->route('events.show', $event->id);
    }
}
