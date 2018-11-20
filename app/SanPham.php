<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table='sanpham';
    public function Catalog()
    {
    	return $this->belongsTo('App\Catalog','id_catalog','id');
    }
}
