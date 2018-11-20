<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StaticPage;

class StaticPageController extends Controller
{
   public function getlist()
   {
        $pages=StaticPage::all();
       return view('admin.staticpage.list',compact('pages'));
   }
   public function getadd()
   {
       return view('admin.staticpage.add');
   }
   public function getedit($id)
   {
       $page=StaticPage::find($id);
       return view('admin.staticpage.edit',compact('page'));
   }
   public function getdelete($id)
   {
        $page=StaticPage::find($id);
        $page->delete();
        $temp=$page;
        $page->delete();
        return redirect(route('StaticPage_list'))->with('notice','Đã Xóa '.$temp->tieude);
   }
   public function postadd(Request $req)
   {
        $page=new StaticPage;
        $page->tieude=$req->tieude;
        $page->tieudekhongdau=changeTitle($req->tieude);
        $page->tomtat=$req->tomtat;
        $page->noidung=$req->noidung;
        $page->save();
        return redirect(route('StaticPage_list'))->with('notice', 'Đã thêm trang mới');
   }
   public function postedit(Request $req,$id)
   {
        $page=StaticPage::find($id);
        $page->tieude=$req->tieude;
        $page->tieudekhongdau=changeTitle($req->tieude);
        $page->tomtat=$req->tomtat;
        $page->noidung=$req->noidung;
        $page->save();
        return redirect(route('StaticPage_list'))->with('notice', 'Đã sửa trang '.$page->tieude);
   }

}
