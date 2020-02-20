<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
     protected $fillable = ['NAME', 'QUANTITY','Alarm_QUANTITY','PRICE','Gomla','Profit','BARCODE','Expiration_Date','classification_id'];

    public function getUser()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    public function getEmployee()
    {
        return $this->hasOne('App\Employee', 'id', 'emp_id');
    }
    public function getStore_Classification()
    {
        return $this->hasOne('App\Store_Classification', 'id', 'classification_id');
    }
}
