<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Pet;


class Illness extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'diagnosis', 'treatment', 'notes'];
    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function pets() {
        return $this->belongsToMany(Pet::class);
    }
}
