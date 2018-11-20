<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Form;
use App\CuaHang;
use App\pageSetting;

class ajaxTools extends Controller
{
    public function selectqh($matp)
    {
    	 echo Form::select('maqh', TinhThanhPho::where('matp',$matp)->first()->QuanHuyen->sortBy('name')->pluck('name','maqh'), null, ['id' => 'maqh', 'class' => 'form-control', 'required' => 'required']);
    }

    public function checklocation(Request $req)
    {
        $tinh=TinhThanhPho::where('matp',$req->matp)->first();
        echo view('tools.servicecheck',compact('tinh'));
    }
    public function readCurrency()
    {
        $url = "https://www.vietcombank.com.vn/exchangerates/ExrateXML.aspx";
        $xml = file_get_contents($url);
        $data = simplexml_load_string($xml);
        $thoi_gian_cap_nhat = $data->DateTime;
        echo 'Thời gian: '.$thoi_gian_cap_nhat.'<br>';
        $ty_gia = $data->Exrate;
        foreach($ty_gia as $ngoai_te) {
            $ma = $ngoai_te['CurrencyCode'];
            echo 'Mã: '.$ma.'<br>';
            $ten = $ngoai_te['CurrencyName'];
            echo 'Tên: '.$ten.'<br>';
            $gia_mua = $ngoai_te['Buy'];
            echo 'Giá Mua: '.$gia_mua.'<br>';
            $gia_chuyen_khoan = $ngoai_te['Transfer'];
            echo 'Giá Chuyển Khoản: '.$gia_chuyen_khoan.'<br>';
            $gia_ban = $ngoai_te['Sell'];
            echo 'Giá Bán: '.$gia_ban.'<br>';
            echo'----------------------------<br>';
            }

    }

    public function test(){
        $ch=new pageSetting;
        return $ch->valueof('slogan');
    }
}
