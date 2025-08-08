<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

namespace Database\Factories\Generic;

use App\Models\Generic\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    protected $model = Address::class;

    public function definition(): array
    {
        return [
            'street_name' => $this->faker->streetAddress(),
            'street_name_extended' => $this->faker->randomElement(['', $this->faker->streetAddress()]),

            'city' => $this->faker->city(),
            'state' => $this->faker->word(),
            'postal_code' => $this->faker->postcode(),
            'country_code' => 'US',
        ];
    }
}
