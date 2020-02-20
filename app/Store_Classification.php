<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store_Classification extends Model
{
    protected $fillable = ['name'];

    public function getUser()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }


    public function getEmployee()
    {
        return $this->hasOne('App\Employee', 'id', 'emp_id');
    }
}
