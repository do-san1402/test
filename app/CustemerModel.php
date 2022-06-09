<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustemerModel extends Model
{
    protected $fillable = [
        'name_customer', 
        'phone_customer', 
        'email_customer', 
        'password_customer', 
        'address_customer', 
    ];
    protected $table = 'tbl_customer';

}
