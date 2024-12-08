<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
 * Связь с моделью TypeOfEvent.
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
    protected $guarded = [];
    // Связь с моделью TypeOfEvent
    public function typeOfEvent()
    {
        return $this->belongsTo(TypeOfEvent::class, 'type_of_events_id');
    }
}
