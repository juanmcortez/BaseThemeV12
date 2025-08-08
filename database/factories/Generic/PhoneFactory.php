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
use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneFactory extends Factory
{
    protected $model = Phone::class;

    public function definition(): array
    {
        return [
            'area_code' => $this->faker->randomNumber('3', true),
            'number' => $this->faker->randomNumber('3', true).'-'.$this->faker->randomNumber('4', true),

            'type' => $this->faker->randomElement(['mobile', 'home', 'work', 'fax', 'other']),

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
