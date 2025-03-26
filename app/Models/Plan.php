<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = ['gym_id', 'name', 'type', 'price', 'description'];

    public function gym()
    {
        return $this->belongsTo(Gym::class);
    }
}
