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
        Schema::create('generic_phones', function (Blueprint $table) {
            $table->id();

            $table->string('country_code', 5)->index()->default('+1');
            $table->string('area_code', 10)->nullable();
            $table->string('number', 20)->nullable();
            $table->string('extension', 10)->nullable();

            $table->string('label', 50)->nullable();
            $table->enum('type', ['mobile', 'home', 'work', 'fax', 'other'])->index()->default('mobile');
            $table->boolean('is_primary')->index()->unique()->default(false);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Schema::dropIfExists('generic_phones');
        });
    }
};
