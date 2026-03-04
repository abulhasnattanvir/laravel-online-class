<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tearcherinfo extends Model
{
    //this is modal for user
    use HasFactory;
    protected $table = 'teacher_info';
    protected $fillable = [
        'name',
        'email',
        'address',
        'mobile',
        'district'
    ];
}