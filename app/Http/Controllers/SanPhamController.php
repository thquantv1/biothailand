<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\Catalog;

class SanPhamController extends Controller
{
    public function __construct()
    {
        $dscatalog=Catalog::all();
        view()->share(compact('dscatalog'));
    }
	public function getlist()
	{
		$dssanpham=SanPham::all();
		return view('admin.sanpham.list',compact('dssanpham'));
	}
	public function getadd()
	{
		return view('admin.sanpham.add');
	}
	public function getedit($id)
	{
		$sp=SanPham::find($id);
		return view('admin.sanpham.edit',compact('sp'));
	}
	public function postadd(Request $req)
	{
		$sp= new SanPham;
        $sp->id_catalog=$req->catalog;
    	$sp->ten=$req->ten;
    	$sp->loai=$req->loai;
    	$sp->quycach=$req->quycach;
    	$sp->chatluong=$req->chatluong;
    	$sp->congdung=$req->congdung;
    	$sp->nanglucdapung=$req->nanglucdapung;
    	$sp->gia=$req->gia;
    	$sp->mota=$req->mota;

    	if($req->hasFile('hinh'))
        {

            $file=$req->file('hinh');
            $name=$file->getClientOriginalName();
            while(file_exists("upload/sanpham/".$name))
            {
                $name=str_random(4)."_".$name;
            }
            $file->move("upload/sanpham",$name);
            $sp->hinh=$name;
        }
        else
        {
            $sp->hinh="";
        }
        $sp->save();
        return redirect(route('SanPham_list'))->with('notice','Đã Thêm Sản Phẩm Mới - '.$sp->ten);
	}
	public function postedit(Request $req,$id)
	{
		$sp= SanPham::find($id);
        $sp->id_catalog=$req->catalog;
    	$sp->ten=$req->ten;
    	$sp->loai=$req->loai;
    	$sp->quycach=$req->quycach;
    	$sp->chatluong=$req->chatluong;
    	$sp->congdung=$req->congdung;
    	$sp->nanglucdapung=$req->nanglucdapung;
    	$sp->gia=$req->gia;
    	$sp->mota=$req->mota;
    	if($req->hasFile('hinh'))
        {

            $file=$req->file('hinh');
            $name=$file->getClientOriginalName();
            while(file_exists("upload/sanpham/".$name))
            {
                $name=str_random(4)."_".$name;
            }
            $file->move("upload/sanpham",$name);

            if($sp->hinh!=""&&file_exists("upload/sanpham/".$sp->hinh))
            {
                unlink("upload/sanpham/".$sp->hinh);
            }
            $sp->hinh=$name;
        }
        $sp->save();
        return redirect(route('SanPham_list'))->with('notice','Đã Sửa Thông Tin Sản Phẩm '.$sp->ten);
	}
	public function getdelete($id)
	{
        $sp=SanPham::find($id);
        if($sp->hinh!=""&&file_exists("upload/sanpham/".$sp->hinh))
        {
            unlink("upload/sanpham/".$sp->hinh);
        }
        $temp=$sp;
        $sp->delete();
        return redirect(route('SanPham_list'))->with('notice','Đã Xóa '.$temp->ten);
	}
}
