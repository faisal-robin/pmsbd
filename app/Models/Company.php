<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
    *   The table associated with the model.
    *
    *   @var string
    */
    public $timestamps = false;
    protected $table = 'company';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = ['brand_name', 'brand_image'];

}
