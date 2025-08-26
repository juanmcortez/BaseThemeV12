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

class ProfileRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'last_name' => ['required', 'min:2', 'max:64'],
            'first_name' => ['required', 'min:2', 'max:64'],
            'middle_name' => ['nullable', 'max:64'],
            'birthdate' => ['required', 'date'],
            'address_id' => ['required', 'exists:generic_addresses'],
            'phone_id' => ['required', 'exists:generic_phones'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
