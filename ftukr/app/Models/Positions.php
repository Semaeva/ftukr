<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{
    protected $guarded  = ["name","prioritet", "ManagementTeam"];
    public $timestamps = false;

    use HasFactory;
    public function topManagers()
    {
        return $this->belongsToMany(Managers::class);
    }
}
