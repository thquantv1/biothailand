<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsType extends Model
{
    protected $table="newstypes";
    public function News()
    {
        return $this->hasMany('App\News','id_newstype','id');
    }
}
