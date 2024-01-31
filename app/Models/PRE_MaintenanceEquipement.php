<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PRE_MaintenanceEquipement extends Model
{
    use HasFactory;
    
    protected $table="preq_maintenances_equips";

    protected $guarded = ["created_at","updated_at"];
}
