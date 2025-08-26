<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

namespace Database\Factories\Generic;

use App\Models\Generic\Phone;
use Illuminate\Support\Carbon;
use App\Models\Generic\Profile;
use App\Models\Generic\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    protected $model = Profile::class;

    public function definition(): array
    {
        return [
            'address_id' => Address::factory(),
            'phone_id' => Phone::factory(),

            'last_name' => $this->faker->lastName(),
            'first_name' => $this->faker->firstName(),
            'middle_name' => $this->faker->randomElement([null, $this->faker->name()]),

            'birthdate' => Carbon::now(),
        ];
    }
}
