<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employeeleave extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'email',
        'leavereason',
        'leavedays',
        'leavetype',
        'leavestatus',
    ];
}
