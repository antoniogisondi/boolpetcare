<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vaccination;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'species', 'date_born', 'genre', 'owner', 'notes', 'slug'];

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function vaccinations() {
        return $this->belongsToMany(Vaccination::class);
    }
}
