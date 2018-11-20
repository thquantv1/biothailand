<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    public function getlist()
    {
        $dsuser=User::all()->except(3);
        return view('admin.user.list',compact('dsuser'));
    }
    public function getedit($id)
    {
        $uss=User::find($id);
        return view('admin.user.edit',compact('uss'));
    }
    public function postedit(Request $req,$id)
    {
        $uss=User::find($id);
        $uss->name=$req->name;
        $uss->email=$req->email;
        $uss->password=Hash::make($req->password);
        $uss->save();
        return redirect(route('User_list'))->with('notice',"Đã sửa thông tin quản trị viên".$uss->name);

    }
    public function getadd()
    {
        return redirect(route('register'));
    }
}
