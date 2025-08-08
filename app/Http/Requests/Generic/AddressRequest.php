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

class AddressRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'street_name' => ['nullable', 'string', 'max:100'],
            'street_name_extended' => ['nullable', 'string', 'max:100'],
            'city' => ['nullable', 'string', 'max:64'],
            'state' => ['nullable', 'string', 'max:64'],
            'postal_code' => ['nullable', 'string', 'max:16'],
            'country_code' => ['nullable', 'string', 'max:16'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
