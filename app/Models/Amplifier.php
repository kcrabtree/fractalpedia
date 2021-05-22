<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amplifier extends Model
{
    use HasFactory;

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function manual()
    {
        return $this->hasOne(AmplifierManual::class);
    }

    public function model()
    {
        return $this->hasOne(AmpModel::class);
    }

    public function clips()
    {
        return $this->hasMany(AmplifierClip::class);
    }
}
