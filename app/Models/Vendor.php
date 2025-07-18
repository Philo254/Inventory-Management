<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'vendors';
    protected $primaryKey = 'id';
    protected $fillable = ["name","address","cp", "phone","active","user_modified",];
}
