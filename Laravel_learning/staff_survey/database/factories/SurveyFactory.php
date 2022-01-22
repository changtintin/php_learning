<?php

namespace Database\Factories;

use App\Models\Survey;
use Illuminate\Database\Eloquent\Factories\Factory;

class SurveyFactory extends Factory
{
    protected $model = Survey::class;
    public function definition()
    {
        return [
            'name'=> $this -> faker -> name,
            'salary'=> $this -> faker -> numberBetween($min = 2000, $max = 90000),
            'email'=> $this -> faker -> freeEmail,
            'personality'=> $this -> faker -> word,
        ];
    }
}
