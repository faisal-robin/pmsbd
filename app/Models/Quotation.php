<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    /**
    *   The table associated with the model.
    *
    *   @var string
    */
    protected $table = 'quotations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['quotation_no','first_name', 'last_name', 'address', 'email', 'country_id', 'city', 'postcode', 'phone','description'];

    public function quotation_items() {
        return $this->hasMany(QuotationItem::class, 'quotation_id','id');
    }

}
