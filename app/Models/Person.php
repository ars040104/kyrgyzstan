<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'passport', 'inn', 'oblast_id', 'rayon_id'];

    public function oblast()
    {
        return $this->belongsTo(Oblast::class);
    }

    public function rayon()
    {
        return $this->belongsTo(Rayon::class);
    }
}
