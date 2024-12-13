<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Http\Filters\EventFilter;
use App\Http\Requests\Events\FilterRequest;
use App\Models\Event;
use App\Models\TypeOfEvent;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
        $filter = app()->make(EventFilter::class, ['queryParams'=>array_filter($data)]);
        $events = Event::filter($filter)->paginate(10);
        return view('event.index', compact('events'));
    }
}
