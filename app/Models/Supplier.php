<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table ="supplier";//this is brand

    public function product(){
    	return $this->hasMany('App\Models\Product','id_supplier','id');
    }
}
