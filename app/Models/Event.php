<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $guarded = [];
    // Связь с моделью TypeOfEvent
    public function typeOfEvent()
    {
        return $this->belongsTo(TypeOfEvent::class, 'type_of_events_id');
    }
}
