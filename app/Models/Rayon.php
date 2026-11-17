<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'id_oblast'];

    public function oblast()
    {
        return $this->belongsTo(Oblast::class, 'id_oblast');
    }
}
