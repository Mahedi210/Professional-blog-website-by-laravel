<?php

namespace App\Http\Controllers;

use App\category;
use App\tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagPagesController extends Controller

{

    public function index(){


        return view('admin.tag.create');

    }


    public function store(Request $request){

        $this->validate($request,[
            'name'=>'required|string',
            'description'=>'required|string',

        ]);


        $tag=new tag();
        $tag->name=$request->name;
        $tag->slug=Str::slug($request->name,'');
        $tag->description=$request->description;
        $tag->save();

        return view('admin.tag.create');

    }

    public function list(){

        $tags=tag::all();
        return view('admin.tag.list',compact('tags'));

    }

    public function edit($id){

        $tag=tag::find($id);
        return view('admin.tag.edit',compact('tag'));

    }

    public function update(Request $request,$id){

        $this->validate($request,[
            'name'=>'required|string',
            'description'=>'required|string',

        ]);

        $tag=tag::find($id);
        $tag->name=$request->name;
        $tag->slug=Str::slug($request->name,'');
        $tag->description=$request->description;

        $tag->save();


        return redirect()->back();

    }


    public function delete($id){
        $tag=tag::find($id);
        $tag->delete();
        return view('admin.tag.list');

    }


    public function cview($id){

        $tag=tag::find($id);
        return view('admin.tag.view',compact('tag'));
    }
}
