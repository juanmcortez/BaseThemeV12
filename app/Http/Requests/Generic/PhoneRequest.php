<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

namespace App\Http\Requests\Generic;

use Illuminate\Foundation\Http\FormRequest;

class PhoneRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'country_code' => ['nullable', 'max:5'],
            'area_code' => ['nullable', 'max:10'],
            'number' => ['nullable', 'max:20'],
            'extension' => ['nullable', 'max:10'],
            'type' => ['enum'],
            'is_primary' => ['nullable', 'boolean'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
