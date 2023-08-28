<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pet;

class Vaccination extends Model
{
    use HasFactory;

    public function pets() {
        return $this->belongsToMany(Pet::class);
    }
}
