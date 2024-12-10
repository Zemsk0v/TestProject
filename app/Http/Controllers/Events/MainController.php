<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\TypeOfEvent;
use Illuminate\Http\Request;

class MainController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {

        return view('event.main');
    }
}
