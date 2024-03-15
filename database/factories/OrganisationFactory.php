<?php

namespace Database\Factories;

use App\Models\Organisation;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrganisationFactory extends Factory
{
    protected $model = Organisation::class;

    public function definition(): array
    {
        return [
            'org_ref' => fake()->unique()->numerify('org-#####'),
            'name' => fake()->company(),
            'address1' => fake()->address(),
            'town' => fake()->city(),
            'postcode' => fake()->postcode(),
            'tel' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'rate' => fake()->randomFloat(2,0, 2),
            'contact' => fake()->name()
        ];
    }
}
