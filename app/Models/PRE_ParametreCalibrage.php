<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PRE_ParametreCalibrage extends Model
{
    use HasFactory;

    

    protected $table="preq_params_calibrages";

    protected $guarded = ["created_at","updated_at"];
}
