<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trim extends Model
{

    use HasFactory;
    public $timestamps = false;

    function model(){
        return $this->belongsTo(carModel::class);
    }
}
