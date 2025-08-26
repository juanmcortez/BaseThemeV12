<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('generic_profiles', function (Blueprint $table) {
            // Address
            $table->foreign('address_id')
                ->references('id')
                ->on('generic_addresses')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            // Phone
            $table->foreign('phone_id')
                ->references('id')
                ->on('generic_phones')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });

        Schema::table('users', function (Blueprint $table) {
            // Profile
            $table->foreign('profile_id')
                ->references('id')
                ->on('generic_addresses')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }
};
