<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

namespace App\Models\Generic;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use LaravelIdea\Helper\App\Models\Generic\_IH_Phone_QB;

class Phone extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'generic_phones';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'country_code',
        'area_code',
        'number',
        'extension',
        'label',
        'type',
        'is_primary',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'id',
        'extension',
        'label',
        'type',
        'is_primary',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'is_primary' => 'boolean',
        ];
    }

    /**
     * Build the full phone number
     *
     * @return string
     */
    public function fullNumber(): string
    {
        $parts = array_filter([
            $this->country_code,
            ' ('.$this->area_code.') ',
            $this->number,
        ]);
        return implode('', $parts);
    }

    /**
     * Scope to get primary phone numbers.
     *
     * @param $query
     * @return _IH_Phone_QB
     */
    public function scopePrimary($query): _IH_Phone_QB
    {
        return $query->where('is_primary', true);
    }

    /**
     * Set as primary phone number.
     *
     * @return bool
     */
    public function setAsPrimary(): bool
    {
        return $this->update(['is_primary' => true]);
    }

    /**
     * Scope to get by type.
     *
     * @param $query
     * @param  string  $type
     * @return _IH_Phone_QB
     */
    public function scopeOfType($query, string $type): _IH_Phone_QB
    {
        return $query->where('type', $type);
    }

    /**
     * Check if phone number is mobile.
     *
     * @return bool
     */
    public function isMobile(): bool
    {
        return $this->type === 'mobile';
    }
}
