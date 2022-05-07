<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Managers extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ["name","description", "image_path"];

    public function positions()
    {
        return $this->belongsToMany(Positions::class);
    }
}
