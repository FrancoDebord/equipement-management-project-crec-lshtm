<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PRE_EquipementUsageSheet extends Model
{
    use HasFactory;

    protected $table="preq_equips_usages_sheets";

    protected $guarded = ["created_at","updated_at"];
}
