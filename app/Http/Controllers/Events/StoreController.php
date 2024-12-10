<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Http\Requests\Events\StoreRequest;
use App\Models\Event;
use App\Models\TypeOfEvent;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $request)
    {
    $data = $request->validated();
    $this->service->store($data);
    return redirect()->route('events.index');
    }
}
