<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuotationItem extends Model
{
    /**
    *   The table associated with the model.
    *
    *   @var string
    */
    protected $table = 'quotation_item';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['product_id', 'product_qty'];

    public function product() {
        return $this->hasOne(Product::class, 'id','product_id');
    }

}
