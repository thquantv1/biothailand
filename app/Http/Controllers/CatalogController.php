<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalog;

class CatalogController extends Controller
{
   public function getlist()
   {
       $dscatalog=Catalog::all();
       return view('admin.catalog.list',compact('dscatalog'));
   }
   public function getadd()
   {
       return view('admin.catalog.add');
   }
   public function getedit($id)
   {
      $catalog=Catalog::find($id);
      return view('admin.catalog.edit',compact('catalog'));
   }
   public function getdelete($id)
    {
      $catalog=Catalog::find($id);
      foreach($catalog->SanPham as $sp)
      {
        $sp->delete();
      }
      $catalog->delete();
      return redirect(route('Catalog_list'))->with('notice','Đã xoá loại sản phẩm');
    }
   public function postadd(Request $req)
    {
      $ct=new Catalog;
      $ct->name=$req->name;
      $ct->intro=$req->intro;
      $ct->content=$req->content;
      if($req->hasFile('hinh'))
        {
            $file=$req->file('hinh');
            $name=$file->getClientOriginalName();
            while(file_exists("upload/catalog/".$name))
            {
                $name=str_random(4)."_".$name;
            }
            $file->move("upload/catalog",$name);
            $ct->picture=$name;
        }
        else
        {
            $ct->picture="";
        }
      $ct->save();
      return redirect(route('Catalog_list'))->with('notice','Đã thêm loại sản phẩm mới');
    }
    public function postedit(Request $req,$id)
    {
      $ct=Catalog::find($id);
      $ct->name=$req->name;
      $ct->intro=$req->intro;
      $ct->content=$req->content;
      if($req->hasFile('hinh'))
      {
        $file=$req->file('hinh');
        $name=$file->getClientOriginalName();
        while(file_exists("upload/catalog/".$name))
        {
          $name=str_random(4)."_".$name;
        }
        $file->move("upload/catalog",$name);
        $ct->picture=$name;
      }
      else
      {
        $ct->picture="";
      }
      $ct->save();
      return redirect(route('Catalog_list'))->with('notice','Đã sửa loại sản phẩm ');
    }
}
