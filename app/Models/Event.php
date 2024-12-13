<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use Filterable;
    use HasFactory;
    protected $guarded = [];
    // Связь с моделью TypeOfEvent
    public function typeOfEvent()
    {
        return $this->belongsTo(TypeOfEvent::class, 'type_of_events_id');
    }
}
