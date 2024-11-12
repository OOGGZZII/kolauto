<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// use
class Maker extends Model
{
    use HasFactory;

    public $timestamps = false;

    function carModels()
    {
        return $this->hasMany(carModel::class);
    }
}