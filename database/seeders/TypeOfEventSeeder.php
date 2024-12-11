<?php

namespace Database\Seeders;

use App\Models\TypeOfEvent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeOfEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typesOfEvent = [
            ['title' => 'wedding '],
            ['title' => 'birthday '],
            ['title' => 'company party'],
        ];

        foreach ($typesOfEvent as $typeOfEvent) {
            TypeOfEvent::create($typeOfEvent);
        }
    }
}
