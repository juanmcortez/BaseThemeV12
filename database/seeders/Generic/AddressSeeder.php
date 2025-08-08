<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

namespace Database\Seeders\Generic;

use Illuminate\Database\Seeder;
use App\Models\Generic\Address;

class AddressSeeder extends Seeder
{
    public function run(): void
    {
        Address::factory()->create();
    }
}
