<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill_poduct extends Model
{
    protected $fillable = ['quantity', 'Price','product_id','Bill_id','user_id'];

    public function getUser()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    public function getEmployee()
    {
        return $this->hasOne('App\Employee', 'id', 'emp_id');
    }

    public function getProduct()
    {
        return $this->hasOne('App\product', 'id', 'product_id');
    }
     public function getCompany_bill()
    {
        return $this->hasOne('App\company_bill', 'id', 'Bill_id');
    }
}

