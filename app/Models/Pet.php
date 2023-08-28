<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vaccination;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'species', 'date_born', 'genre', 'owner', 'notes'];

    public function vaccinations() {
        return $this->belongsToMany(Vaccination::class);
    }
}
