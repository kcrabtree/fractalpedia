<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmpModel extends Model
{
    use HasFactory, Sluggable;

    protected $casts = [
        'tips' => 'array',
        'third_party_cabs' => 'array',
        'yek_quotes' => 'array',
        'cliff_quotes' => 'array',
        'control_mappings' => 'array'
    ];

    public function amplifier()
    {
        return $this->belongsTo(Amplifier::class);
    }

    public function favorites()
    {
        return $this->hasMany(AmpModelFavorite::class);
    }

    public function ratings()
    {
        return $this->hasMany(AmpModelRating::class);
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
