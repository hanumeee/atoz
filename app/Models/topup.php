<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class topup extends Model
{
    use SoftDeletes;

    public $table = 'topup_balance';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'phone_number',
        'value',
        'created_userid',
        'updated_userid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'phone_number' => 'required|integer',
        'value' => 'string',
        'created_userid' => 'integer',
        'updated_userid' => 'integer'
    ];

    public static $rules = [
        'id' => 'integer',
        'phone_number' => 'required|integer',
        'value' => 'string',
        'created_userid' => 'integer',
        'updated_userid' => 'integer'
    ];

}
