<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use SoftDeletes;

    public $table = 'product';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'product',
        'shipping_address',
        'price',
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
        'product' => 'integer',
        'shipping_address' => 'string',
        'price' => 'integer',
        'created_userid' => 'integer',
        'updated_userid' => 'integer'
    ];

    public static $rules = [
        'id' => 'integer',
        'product' => 'integer',
        'shipping_address' => 'string',
        'price' => 'integer',
        'created_userid' => 'integer',
        'updated_userid' => 'integer'
    ];
}
