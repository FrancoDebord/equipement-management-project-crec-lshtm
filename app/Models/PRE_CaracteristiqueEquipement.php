<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PRE_CaracteristiqueEquipement extends Model
{
    use HasFactory;

    protected $table="preq_caracteristiques_equipements";

    protected $guarded = ["created_at","updated_at"];
}
