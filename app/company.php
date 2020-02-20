<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    
    protected $fillable = ['name', 'phone','type','address','paid_up','remain'];

    public function getUser()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
