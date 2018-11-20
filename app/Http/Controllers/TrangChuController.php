<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Catalog;
use App\SanPham;
use App\pageSetting;
use App\StaticPage;

class TrangChuController extends Controller
{
    public function gettrangchu()
    {
    	$dssanpham=SanPham::all();
    	if($dssanpham->count()>5)
    		{$dssanpham=$dssanpham->random(6);}
    	$dstintuc=News::where('id_newstype',1)->latest()->take(4)->get();
		$cauhinh=new pageSetting;
			
			
    	return view('welcome',compact('cauhinh','dstintuc','dssanpham'));
    }
}
