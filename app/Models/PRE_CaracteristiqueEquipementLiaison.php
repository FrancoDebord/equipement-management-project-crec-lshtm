<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PRE_CaracteristiqueEquipementLiaison extends Model
{
    use HasFactory;

    protected $table="preq_caract_equips_liaison";

    protected $guarded = ["created_at","updated_at"];
}
