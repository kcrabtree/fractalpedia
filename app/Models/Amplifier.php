<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amplifier extends Model
{
    const PAGINATION_COUNT = 10;

    use HasFactory, Sluggable;

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function manual()
    {
        return $this->hasOne(AmplifierManual::class);
    }

    public function models()
    {
        return $this->hasMany(AmpModel::class);
    }

    public function links()
    {
        return $this->hasMany(AmplifierLink::class);
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
