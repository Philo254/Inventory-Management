<?php

namespace App\Models\purchase;

use Illuminate\Database\Eloquent\Model;

class purchaseH extends Model
{
    protected $table='purchase_h';
    protected $fillable=[
        'no_invoice','total','id_ven','active','status','date','information'
    ];

    public function vendor (){
        return $this->belongsTo('\App\Model\vendor','id_ven');

    }
}
