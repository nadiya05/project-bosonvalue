<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $table = 'voucher';
    protected $primaryKey = 'voucher_id';
    public $timestamps = false;

    protected $fillable = [
        'voucher_name',
        'description',
        'photo',
        'start_date',
        'end_date',
        'status',
        'date_added',
        'date_modified'
    ];
}
