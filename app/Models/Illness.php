<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Illness extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'diagnosis', 'treatments', 'notes'];
    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }
}
