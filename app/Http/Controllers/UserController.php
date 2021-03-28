<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(){

        $users=User::latest()->paginate(10);
        return view('admin.user.user',compact('users'));

    }

    public function create(){

        return view('admin.user.ucreate');
    }

    public function store(Request $request){


        $this->validate($request,[
            'name'=>'required|string',
            'email'=>'required|email',
            'password'=>'required|min:8',
        ]);

        $users=new User();

        $users->name=$request->name;
        $users->email=$request->email;
        $users->password=bcrypt($request->password);
        $users->description=$request->description;



        $users->save();


        return redirect('/ucreate')->with('success','New portfolio Created');
    }



    public function list(){

        $users=User::all();
        return view('admin.user.ulist',compact('users'));
    }


    public function edit($id){
        $user=User::find($id);
        return view('admin.user.uedit',compact('user'));
    }

    public function update(Request $request,$id){

//        $this->validate($request,[
//            'name'=>'required|string',
//            'email'=>'required|email',
//            'password'=>'required|min:8',
//        ]);

        $users=User::find($id);

        $users->name=$request->name;
        $users->email=$request->email;
        $users->password=bcrypt($request->password);
        $users->description=$request->description;


        $users->save();


        return redirect('/ulist')->with('success','New portfolio Created');
    }

    public function destroy($id){


            $user=User::find($id);
            $user->delete();
            return redirect('/ulist')->with('success','Delete successfully');

    }


    public function profile(){
        $user=auth()->user();

        return view('admin.user.profile',compact('user'));
    }

    public function proUpdate(Request $request){
        $user=auth()->user();

        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->description=$request->description;

        if ($request->file('image')){

            $big_file=$request->file('image');
            Storage::putFile('public/img/',$big_file);
            $user->image="Storage/img/".$big_file->hashName();
        }


        $user->save();


        return redirect('/ulist')->with('success','New portfolio Created');


    }
}
