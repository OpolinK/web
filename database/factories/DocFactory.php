<?php

namespace Database\Factories;

use App\Models\Doc;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DocFactory extends Factory
{
    protected $model = Doc::class;

    public function definition(): array
    {
        return [
            'docs_hash' => $this->faker->randomNumber(6),
            'docs_name' => $this->faker->words(3, true),
            'docs_type_id' => null,
            'docs_status_id' => null,
            'access_id' => null,
            'priority_id' => null,
            'abstract' => $this->faker->sentence(10),
            'parent_docs_id' => null,
            'deadline' => $this->faker->dateTimeBetween('+1 days', '+1 month'),
            'date_created' => now(),
            'date_updated' => now(),
        ];
    }
}
