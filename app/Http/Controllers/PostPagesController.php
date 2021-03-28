<?php

namespace App\Http\Controllers;

use App\category;
use App\post;
use App\tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostPagesController extends Controller
{


    public function create(){

        $categories=category::all();
        $tags=tag::all();

        return view('admin.post.pcreate',compact(['categories','tags']));
    }



    public function store(Request $request){

//        $this->validate($request,[
//            'title'=>'required|string',
//            'image'=>'required|image',
//            'description'=>'required|string',
//            'category_id'=>'required',
//
//        ]);





        $posts=new post();
        $posts->title=$request->title;
        $posts->slug=Str::slug($request->title,'');
        $posts->description=$request->description;
        $posts->category_id=$request->category;
        $posts->user_id=auth()->user()->id;

        $posts->tag_ids = implode($request->tags, ',');

//        $posts->tags()->attach($request->tags);



        $big_file=$request->file('image');
        Storage::putFile('public/img/',$big_file);
        $posts->image="storage/img/".$big_file->hashName();


        $posts->save();

        return view('admin.tag.create');

    }

    public function list(){


       $posts=post::all();

        return view('admin.post.plist',compact('posts'));

    }

    public function edit($id){

        $post=post::find($id);
        $categories=category::all();
        $tags=tag::all();
        return view('admin.post.pedit',compact('post','categories','tags'));

    }



    public function update(Request $request,$id){


//        $this->validate($request,[
//            'title'=>'required|string',
//            'image'=>'required|image',
//            'description'=>'required|string',
//            'category_id'=>'required',
//
//        ]);



        $posts=post::find($id);
        $posts->title=$request->title;
        $posts->slug=Str::slug($request->name,'');
        $posts->description=$request->description;
        $posts->category_id=$request->category;
//        $posts->user_id=auth()->user()->id;


        if($request->file('image')){

            $big_file=$request->file('image');
            Storage::putFile('public/img/',$big_file);
            $posts->image="storage/img/".$big_file->hashName();

        }


//        $big_file=$request->file('image');
//        Storage::putFile('public/img/',$big_file);
//        $posts->image="storage/img/".$big_file->hashName();


        $posts->save();

        return view('admin.post.plist');

    }


    public function delete($id){
        $post=post::find($id);
        $post->delete();
        return view('admin.post.plist');

    }



    public function pview($id){



        $post=post::find($id);
        $categories=category::all();
        $tags=tag::all();

        return view('admin.post.pview',compact('post','categories','tags'));

    }
}
