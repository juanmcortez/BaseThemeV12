<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

namespace App\Models\Generic;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'generic_profiles';

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['address', 'phone'];

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'address_id',
        'phone_id',
        'last_name',
        'first_name',
        'middle_name',
        'birthdate',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'id',
        'address_id',
        'phone_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'birthdate' => 'date: M d, Y',
        ];
    }

    /**
     * Get the short_name attribute created on the fly
     *
     * @return Attribute
     */
    protected function shortName(): Attribute
    {
        $short_name = Str::excerpt(Str::headline(Str::lower($this->first_name)), '', ['radius' => 2, 'omission' => '. ']);
        $short_name .= Str::headline(Str::lower($this->last_name));
        return Attribute::make(
            get: fn() => $short_name,
        );
    }

    /**
     * Get the full_name attribute created on the fly
     *
     * @return Attribute
     */
    protected function fullName(): Attribute
    {
        $full_name = Str::headline(Str::lower($this->last_name)).', ';
        $full_name .= Str::headline(Str::lower($this->first_name));
        $full_name .= (($this->middle_name) ? ' '.Str::headline(Str::lower($this->middle_name)) : '');
        return Attribute::make(
            get: fn() => $full_name,
        );
    }

    /**
     * Get the profile for the user
     *
     * @return HasOne
     */
    public function address(): HasOne
    {
        return $this->hasOne(Address::class, 'id', 'address_id')->withDefault();
    }

    /**
     * Get the profile for the user
     *
     * @return HasOne
     */
    public function phone(): HasOne
    {
        return $this->hasOne(Phone::class, 'id', 'phone_id')->withDefault();
    }
}
