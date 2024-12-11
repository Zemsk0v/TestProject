<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\TypeOfEvent;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_name' => $this->faker->name(),
            'event_date' => $this->faker->date(),
            'event_time' => $this->faker->time(),
            'venue' => $this->faker->word(),
            'guest_count' => random_int(2, 300),
            'description' => $this->faker->sentence(random_int(2, 30)),
            'budget' => random_int(10000,1000000),
            'theme' => $this->faker->sentence(random_int(1,3)),
            'type_of_events_id' => TypeOfEvent::get()->random()->id,
        ];
    }
}
