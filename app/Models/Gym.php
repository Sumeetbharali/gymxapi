<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
    use HasFactory;

    protected $fillable = ['brand_name', 'photo', 'accent_color'];

    public function members()
    {
        return $this->hasMany(Member::class);
    }

    public function plans()
    {
        return $this->hasMany(Plan::class);
    }

    public function staff()
    {
        return $this->hasMany(Staff::class);
    }

    public function trainers()
    {
        return $this->hasMany(Trainer::class);
    }
}
