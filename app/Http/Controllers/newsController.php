<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\News;
use App\NewsType;
class newsController extends Controller
{
    public function __construct()
    {
        $dsloaitin=NewsType::all();
        view()->share(['dsloaitin'=>$dsloaitin]);
    }
    public function getlist()
    {
        $news=News::all();
        return view('admin.news.list',['news'=>$news]);
    }
    public function getadd()
    {
        $loaitin=NewsType::all();
        return view('admin.news.add');
    }
    public function getedit($id)
    {
        $new=News::find($id);
        return view('admin.news.edit',['tintuc'=>$new]);
    }
    public function getdelete($id)
    {
       $new=News::find($id);
       if($new->picture!=""&&file_exists("upload/news/".$new->picture))
                {unlink("upload/news/".$new->picture);}
        $new->delete();
        return redirect(route('news_list'))->with('notice','Deleted news');
    }
    public function postadd(Request $re)
    {
        $news= new News;
        $news->id_newstype=$re->loaitin;
        $news->title=$re->title;
        $news->titleShort=changeTitle($re->title);
        $news->summary=$re->summary;
        $news->content=$re->content;
        $news->highlight=$re->highlight;
        if($re->hasFile('picture'))
            {
                $file=$re->file('picture');
                $name=$file->getClientOriginalName();
                while(file_exists("upload/news/".$name))
                {
                $name=str_random(4)."_".$name;}
                $file->move("upload/news",$name);
                $news->picture=$name;
            }
            else{
                $news->picture="";
            }
        $news->save();
        return redirect(route('news_list'))->with('notice','Add news success');
    }
    public function postedit(Request $re,$id)
    {
        $news= News::find($id);
        $news->id_newstype=$re->loaitin;
        $news->title=$re->title;
        $news->titleShort=changeTitle($re->title);
        $news->summary=$re->summary;
        $news->content=$re->content;
        $news->highlight=$re->highlight;
        if($re->hasFile('picture'))
            {
                $file=$re->file('picture');
                $name=$file->getClientOriginalName();
                while(file_exists("upload/news/".$name))
                {$name=str_random(4)."_".$name;}
                $file->move("upload/news",$name);
                if($news->picture!=""&&file_exists("upload/news/".$news->picture))
                {unlink("upload/news/".$news->picture);}
                $news->picture=$name;
            }
            $news->save();
        return redirect(route('news_list'))->with('notice','Edit news success');
    }

}
