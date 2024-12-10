<?php

namespace App\Services\Events;

use App\Models\Event;

class EventsService
{
    public function store($data)
    {
        Event::create($data);
}

    public function update($event, $data)
    {
        $event->update($data); // Использую экземпляр $event для вызова метода update()
}
}
