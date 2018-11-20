<?php

namespace App\Http\Controllers;

use App\NewsType;
use Illuminate\Http\Request;

class NewsTypeController extends Controller
{
	public function getlist()
	{
		$newstypes=NewsType::all();
		return view('admin.newstype.list',compact('newstypes'));
	}
	public function getadd()
	{
		return view('admin.newstype.add');
	}
	public function getedit($id)
	{
		$newstype=NewsType::findOrFail($id);
		return view('admin.newstype.edit',compact('newstype'));
	}
	public function getdelete($id)
	{
		$newstype=NewsType::findOrFail($id);
		foreach ($newstype->News as $news ) 
		{
			$news->delete();
			$news->save();
		}
		$newstype->delete();
		return redirect(route('NewsType_list'))->with('notice','Đã xóa');
	}
	public function postadd(Request $req)
	{
		$nt=new NewsType;
		$nt->title=$req->title;
		$nt->shorttitle=changeTitle($req->title);
		$nt->save();
		return redirect(route('NewsType_list'))->with('notice','Đã thêm loại tin mới');
	}
	public function postedit(Request $req,$id)
	{
		$nt=NewsType::find($id);
		$nt->title=$req->title;
		$nt->shorttitle=changeTitle($req->title);
		$nt->save();
		return redirect(route('NewsType_list'))->with('notice','Đã sửa loại tin '.$nt->title);
	}
}
