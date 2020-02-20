<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company_bill extends Model
{
   	 protected $fillable = ['bill_num', 'total_bill', 'quantity', 'discount', 'Paied', 'Remain', 'Notes','emp_id','user_id'];

    public function getUser()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
     public function getCompany()
    {
        return $this->hasOne('App\company', 'id', 'company_id');
    }
     public function getEmployee()
    {
        return $this->hasOne('App\Employee', 'id', 'emp_id');
    }
}
