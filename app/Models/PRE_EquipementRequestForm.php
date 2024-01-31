<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PRE_EquipementRequestForm extends Model
{
    use HasFactory;

    

    protected $table="preq_equips_requests_forms";

    protected $guarded = ["created_at","updated_at"];
}
