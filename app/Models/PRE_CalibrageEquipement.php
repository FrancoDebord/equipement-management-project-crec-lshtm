<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PRE_CalibrageEquipement extends Model
{
    use HasFactory;

    
    protected $table="preq_calibrages_equips";

    protected $guarded = ["created_at","updated_at"];
}
