<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfEvent extends Model
{
    use HasFactory;
    protected $guarded = [];
    // Связь с моделью Event
    public function events()
    {

        return $this->hasMany(Event::class, 'type_of_events_id');
    }
}
