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
        Schema::create('generic_profiles', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('address_id')->index();
            $table->unsignedBigInteger('phone_id')->index();

            $table->string('last_name', 64);
            $table->string('first_name', 64);
            $table->string('middle_name', 64)->nullable();

            $table->date('birthdate');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Schema::dropIfExists('generic_profiles');
        });
    }
};
