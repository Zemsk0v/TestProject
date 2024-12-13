<?php

namespace App\Http\Requests\Events;

use Illuminate\Foundation\Http\FormRequest;

class FilterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'client_name'=> 'string',           // тип: строка
            'type_of_events_id' => '',    // тип:
            'event_date' => 'date',             // тип: дата
            'event_time' => 'date_format:H:i',  // тип: время часы минуты
            'venue' => 'string',                // тип: строка
            'guest_count' => 'integer',         // тип: целое число
            'description' => 'string',          // тип: строка
            'budget' => 'integer',              // тип: целое число
            'theme' => 'string',                // тип: строка
        ];
    }
}