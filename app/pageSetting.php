<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pageSetting extends Model
{
    protected $table="pagesetting";

    public function get($keyname)
    {
    	return $this->where('keyname',$keyname)->first();
    }
    public function set($keyname,$keyvalue)
    {
        if(is_string($keyvalue)&& $keyvalue!="")
        {
            $temp= $this->where('keyname',$keyname)->first();
            $temp->value=$keyvalue;
            $saved=$temp->save();
            if(!$saved){
                App::abort(500, 'Update'.$keyname.' failed - Contact web administrator/developer for more info');
            }
        }
        else return false;
    }

    public static function getvalue($keyname)
    {
        return pageSetting::where('keyname',$keyname)->first()->value;
    }
    public function valueof($keyname)
    {
        return $this->where('keyname',$keyname)->first()->value;
    }
}
