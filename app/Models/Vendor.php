<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
protected $table = 'Vendors';

public function user_modify(){
    return $this->belongsTo('\App\user','user_modified' );
}


}
