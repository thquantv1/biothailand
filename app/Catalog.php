<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $table='catalog';
    public function SanPham()
    {
    	return $this->hasMany('App\SanPham','id_catalog','id');
    }
}
