<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PRE_ParametreCalibrageValeur extends Model
{
    use HasFactory;

    protected $table="params_calibrages_valeurs";
    protected $guarded = ["created_at","updated_at"];
}
