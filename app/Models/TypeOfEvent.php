<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeOfEvent extends Model
{

    // Связь с моделью Event
    public function events()
    {
        return $this->hasMany(Event::class, 'type_of_events_id');
    }
}
