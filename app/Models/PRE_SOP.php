<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PRE_SOP extends Model
{
    use HasFactory;

    protected $table="pre_sops";

    protected $guarded = ["created_at","updated_at"];
}
