<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmplifierLink extends Model
{
    use HasFactory;

    public function amplifier()
    {
        return $this->belongsTo(Amplifier::class);
    }
}
