<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tearcherinfo extends Model
{
    protected $fillable = [
        'name',
        'email',
        'address',
        'mobile'
    ];
}