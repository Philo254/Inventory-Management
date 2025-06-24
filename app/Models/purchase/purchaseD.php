<?php

namespace App\Models\purchase;

use Illuminate\Database\Eloquent\Model;

class purchaseD extends Model
{
    protected $table= 'purchase_d';

    protected $fillable=[
        'id_purchase','id_product','total','price',
    ];

    public function purchase (){
        return $this->belongsTo('\App\Model\purchase\purchaseH','id_purchase');

    }

    public function product (){
        return $this->belongsTo('\App\Model\product','id_product');

    }

}
