<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\category;
use Illuminate\Http\Request;


class categoryPagesController extends Controller
{




    public function index(){


        return view('admin.category.acategory');

    }


    public function storeCategory(Request $request){

        $this->validate($request,[
            'name'=>'required|string',
            'description'=>'required|string',

        ]);



      $categories=new category();
      $categories->name=$request->name;
      $categories->slug=Str::slug($request->name,'');
      $categories->description=$request->description;

      $categories->save();

      return view('admin.category.acategory');

    }

    public function list(){

        $categories=category::all();
        return view('admin.category.clist',compact('categories'));

    }

    public function edit($id){

        $category=category::find($id);
        return view('admin.category.cedit',compact('category'));

    }

    public function update(Request $request,$id){

        $this->validate($request,[
            'name'=>'required|string',
            'description'=>'required|string',

        ]);

        $category=category::find($id);
        $category->name=$request->name;
        $category->slug=Str::slug($request->name,'');
        $category->description=$request->description;

        $category->save();


        return view('admin.category.clist');

    }


    public function delete($id){
        $category=category::find($id);
        $category->delete();
        return view('admin.category.clist');


    }


    public function cview($id){

        $category=category::find($id);
        return view('admin.category.view',compact('category'));
    }

}
