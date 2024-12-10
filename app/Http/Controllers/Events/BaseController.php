<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Services\Events\EventsService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;

    public function __construct(EventsService $service)
    {
        $this->service = $service;
    }
}
