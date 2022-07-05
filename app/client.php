<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    protected $fillable = ['name','user_id'];
    public function clientdetails(){
        return $this->hasMany(clientdetails::class,'client_id','id');
    }
}
