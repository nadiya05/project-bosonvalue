<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    protected $table = 'mission';
    protected $primaryKey = 'mission_id';
    public $timestamps = false;

    protected $fillable = [
        'mission_name',
        'reward_point',
        'notes',
        'start_date',
        'end_date',
        'target_id',
        'method',
        'mission_type',
        'created_by',
        'date_added',
        'date_modified'
    ];
}
