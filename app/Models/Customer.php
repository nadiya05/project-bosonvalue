<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'customer_id';
    public $timestamps = false;

    protected $fillable = [
        'name','email','password',
        'password_hash','password_salt',
        'gender','level','point',
        'photo','tiktok_acc','ig_acc',
        'phone_number','identity_photo',
        'user_category_id','address',
        'city','district','post_code',
        'birth_date','date_added',
        'date_modified','status'
    ];
}
