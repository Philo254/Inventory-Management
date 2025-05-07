<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $fillable = ["item","quantity"];
    protected $guarded = ["price"];
}
