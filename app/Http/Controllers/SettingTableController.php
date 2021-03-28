<?php

namespace App\Http\Controllers;

use App\setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingTableController extends Controller
{
 public function edit(){


 $setting=setting::all();

     return view('admin.setting.edit',compact('setting'));

 }


 public function update(Request $request){

//     $this->validate($request,[
//         'title'=>'required|string',
//         'sub_title'=>'required|string',
//         'big_image'=>'required|image',
//         'small_image'=>'required|image',
//         'description'=>'required|string',
//         'client'=>'required|string',
//         'category'=>'required|string',
//     ]);

     $settings=new setting();
     $settings->name=$request->name;
     $settings->about_site=$request->about_site;
     $settings->facebook=$request->facebook;
     $settings->twitter=$request->twitter;
     $settings->inst=$request->inst;
     $settings->reddite=$request->reddite;
     $settings->email=$request->email;
     $settings->copy_right=$request->copy_right;
     $settings->address=$request->address;
     $settings->phone_number=$request->phone_number;


     $big_file=$request->file('site_logo');
     Storage::putFile('public/img/',$big_file);
     $settings->site_logo="storage/img/".$big_file->hashName();

     $settings->save();


     return redirect('/setting')->with('success','New portfolio Created');

 }


}
