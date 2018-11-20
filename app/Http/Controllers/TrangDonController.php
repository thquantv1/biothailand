<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\TinhThanhPho;
use App\QuanHuyen;
use App\CuaHang;
use App\News;
use App\Story;
use App\ThanhVien;
use App\SanPham;
use App\pageSetting;
use App\StaticPage;
use App\Catalog;
use App\NewsType;
use Mail;
use Carbon;
use Session;
class TrangDonController extends Controller
{
    public function __construct()
    {
        $cauhinh=new pageSetting;
        view()->share(['cauhinh'=>$cauhinh]);
    }
    public function getdssanpham()
    {
        $dssanpham=SanPham::paginate(9);
        return view('trangdon.dssanpham',compact('dssanpham'));
    }

    public function getdssanphamtheocatalog($id, $ten)
    {
        $dssanpham = SanPham::where('id_catalog', $id)->paginate(9);
        $tieude= Catalog::find($id)->name;
        return view('trangdon.dssanpham',compact('dssanpham','tieude'));
    }

    public function gettrangdon($id)
    {
        $page=StaticPage::findOrFail($id);
        return view('trangdon.trangdon',compact('page'));
    }
    public function getsanpham($id)
    {
        $sp=SanPham::find($id);
        return view('trangdon.chitietsanpham',compact('sp'));
    }
    public function getdstintuc()
    {
       $dstintuc=News::latest()->paginate(8);
       return view('trangdon.dstintuc',compact('dstintuc'));
    }
    public function getdstintuctheocatalog($id, $ten)
    {
        $dstintuc = News::where('id_newstype',$id)->paginate(6);
        $tieude = NewsType::find($id)->title;
       return view('trangdon.dstintuc',compact('dstintuc', 'tieude'));
    }
    public function gettintuc($id)
    {
        $tt=News::find($id);
        return view('trangdon.chitiettintuc',compact('tt'));
    }
    public function getcuahang($id)
    {
        $ch=CuaHang::find($id);
        return view('trangdon.cuahang',compact('ch'));
    }

    public function gettongquan()
    {
       return view('trangdon.tongquancongty',compact('tongquancongty'));
    }

    public function mailfb($req)
    {
        return Mail::send('mailfb', array('name'=>$req->name,'email'=>$req->email,'sdt'=>$req->phone , 'noidung'=>$req->message),
                function($message)
                {
                    $admail=pageSetting::getvalue('admin-email');
                    $message->to($admail, 'Quản trị viên')->subject('Yêu Cầu Liên Hệ Vào Lúc: '.Carbon::now());
                });
    }
    public function guimail(Request $req)
    {
        //apply when client first send email
        if(!session()->has('lastsentmail'))
        {
            // send the mail to admin
            $this->mailfb($req);
            // store session
            session(['lastsentmail' => Carbon::now()]);
            echo "E-mail sent";
        }
        else
        {
            $last=session('lastsentmail');
            $now=Carbon::now();
            if($now->DiffInMinutes($last)>15)
            {
                // send the mail to admin
                $this->mailfb($req);
                // store session
                session(['lastsentmail' => Carbon::now()]);
                echo "E-mail sent";
            }
            else
            {
                echo "Vui lòng thử lại sau 15 phút";
            }
        }
    }
    public function getdknq($maqh)
    {
        $qh=QuanHuyen::findMaqh($maqh);
        $data1=StaticPage::find(4);
        $data2=StaticPage::find(5);
        return view('trangdon.dangkynq',compact('data1','data2','qh'));
    }
     public function maildk($req)
    {
         return Mail::send('maildk',
            array(
                    'name'=>$req->name,
                    'diachi'=>$req->diachi,
                    'cmnd'=>$req->cmnd,
                    'email'=>$req->email,
                    'ngaysinh'=>$req->ngaysinh,
                    'sdt'=>$req->sdt,
                    'noidung'=>$req->noidung
                ),
            function($message)
                {
                    $admail=pageSetting::getvalue('admin-email');
                    $message->to($admail, 'Quản trị viên')->subject('Yêu Cầu Đăng Ký NQ Vào Lúc: '.Carbon::now());
                });
    }
    public function postformdknq(Request $req)
    {

        if(!session()->has('dang_ky_NQ'))
        {
            // send the mail to admin
            $this->maildk($req);
            // store session
            session(['dang_ky_NQ' => Carbon::now()]);
            echo "<h1>Xin cảm ơn</h1><br><h4>Yêu cầu đăng ký nhượng quyền của bạn đã được ghi nhận</h4>";
            echo "<br><h4>Nhân viên của chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất</h4>";
        }
        else
        {
            $last=session('dang_ky_NQ');
            $now=Carbon::now();
            if($now->DiffInMinutes($last)>15)
            {
                // send the mail to admin
                $this->maildk($req);
                // store session
                session(['dang_ky_NQ' => Carbon::now()]);
                echo "E-mail sent";
            }
            else
            {
                echo "Vui lòng thử lại sau 15 phút";
            }
        }
    }

}
