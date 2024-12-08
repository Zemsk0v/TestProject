<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Http\Requests\Events\StoreRequest;
use App\Models\Event;
use App\Models\TypeOfEvent;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $request)
    {
    $data = $request->validated();
    Event::create($data);
    return redirect()->route('events.index');
    }
}
