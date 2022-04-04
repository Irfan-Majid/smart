<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $fillable = [
        'name', 'address', 'contact',
    ];
}
