<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pageSetting;

class pagesettingController extends Controller
{
    public function getlist()
    {
    	$deepset=pageSetting::all();
    	return view('admin.deepsetting.list',['deepset'=>$deepset]);
    }

    public function getadd()
    {
    	return view('admin.deepsetting.add');
    }

    public function postadd(Request $re)
    {

    	$sett=new pageSetting;
    	$sett->keyname=$re->keyname;

        if($re->hasFile('setfile'))
            {
                $file=$re->file('setfile');
                $name=$re->keyname.$file->getClientOriginalName();
                while(file_exists("img/".$name))
                {
                    $name=str_random(4)."_".$name;
                }
                $file->move("img",$name);
                $sett->value="img/".$name;
            }
        else{$sett->value=$re->value;}
    	$sett->description=$re->description;
    	$sett->save();
    	return redirect('admin/setting/list')->with('notice','Add new field succedd');
    }

    public function getedit($id)
    {
    	$sett=pageSetting::find($id);
    	return view('admin.deepsetting.edit',['field'=>$sett]);
    }

    public function postedit(Request $re,$id)
    {
    	$sett=pageSetting::find($id);
    	//$sett->keyname=$re->keyname;
    	$sett->value=$re->value;
        if($re->hasFile('setfile'))
            {
                $file=$re->file('setfile');
                $name=$sett->keyname.$file->getClientOriginalName();
                while(file_exists("img/".$name))
                {
                    $name=str_random(4)."_".$name;
                }
                $file->move("img",$name);
                if($sett->value!=""&&file_exists($sett->value))
                {unlink($sett->value);}
                $sett->value="img/".$name;
            }
        else{$sett->value=$re->value;}
    	$sett->description=$re->description;
    	$sett->save();
    	return redirect('admin/setting/list')->with('notice','Edited field '.$id.'-'.$sett->keyname.' succedd');
    }
    public function getdelete($id)
    {
    	$sett=pageSetting::find($id);
         if($sett->value!=""&&file_exists($sett->value))
                {unlink($sett->value);}
    	$sett->delete();
    	return redirect('admin/setting/list')->with('notice','Deleted field '.$id.'-'.$sett->keyname.' succedd');
    }
    public function getpageconfig()
    {
        $cauhinh=new pageSetting;
        return view('admin.cauhinh.cauhinh',compact('cauhinh'));
    }

    // function ajax
    public function postbasicsetting(Request $re)
    {
        $cauhinh=new pageSetting;
        $cauhinh->set('title',$re->title);
        $cauhinh->set('tencty',$re->tencty);
        $cauhinh->set('tencty_daydu',$re->tencty_daydu);
        if($re->hasFile('logo'))
            {
                $file=$re->file('logo');
                $name='logo'.$file->getClientOriginalName();
                while(file_exists("img/".$name))
                {
                    $name=str_random(4)."_".$name;
                }
                $file->move("img",$name);
                if($cauhinh->valueof('logo')!=""&&file_exists($cauhinh->valueof('logo')))
                {unlink($cauhinh->valueof('logo'));}
                $cauhinh->set('logo',"img/".$name);
            }
        echo view('admin.cauhinh.coban',compact('cauhinh'));
    }

     public function postadditionsetting(Request $re)
    {
        $cauhinh=new pageSetting;
        $cauhinh->set('email',$re->email);
        $cauhinh->set('keyword',$re->keyword);
        $cauhinh->set('page_description',$re->page_description);
        $cauhinh->set('Search_pagename',$re->Search_pagename);
        $cauhinh->set('sdtlienhe',$re->sdtlienhe);
        $cauhinh->set('loi1',$re->loi1);
        $cauhinh->set('loi2',$re->loi2);
        $cauhinh->set('loi3',$re->loi3);
        if($re->hasFile('bgtrangchu'))
            {
                $file=$re->file('bgtrangchu');
                $name='bgtrangchu'.$file->getClientOriginalName();
                while(file_exists("img/".$name))
                {
                    $name=str_random(4)."_".$name;
                }
                $file->move("img",$name);
                if($cauhinh->valueof('bgtrangchu')!=""&&file_exists($cauhinh->valueof('bgtrangchu')))
                {unlink($cauhinh->valueof('bgtrangchu'));}
                $cauhinh->set('bgtrangchu',"img/".$name);
            }
        if($re->hasFile('page_picture'))
            {
                $file=$re->file('page_picture');
                $name='page_picture'.$file->getClientOriginalName();
                while(file_exists("img/".$name))
                {
                    $name=str_random(4)."_".$name;
                }
                $file->move("img",$name);
                if($cauhinh->valueof('page_picture')!=""&&file_exists($cauhinh->valueof('page_picture')))
                {unlink($cauhinh->valueof('page_picture'));}
                $cauhinh->set('page_picture',"img/".$name);
            }
        echo view('admin.cauhinh.nangcao',compact('cauhinh'));
    }
}
