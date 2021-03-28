<?php

namespace App\Http\Controllers;

use App\category;
use App\contact;
use App\post;
use App\setting;
use App\tag;
use App\User;
use Illuminate\Http\Request;

class FrontHomeController extends Controller
{
    public function index(){
//        $posts=post::all();
        $posts=post::with('category','user')->orderBy('created_at','DESC')->take(5)->get();
        $firstposts=$posts->splice(0,2);
        $middleposts=$posts->splice(0,1);
        $lastposts=$posts->splice(0);

        $footerposts=post::with('category','user')->inRandomOrder()->limit(4)->get();
        $firstfooter=$footerposts->splice(0,1);
        $middlefooter=$footerposts->splice(0,2);
        $lastfooter=$footerposts->splice(0,1);





        $posts=post::with('category','user')->orderBy('created_at','DESC')->paginate(5);
        return view('front.home.home',compact('posts','firstposts','middleposts','lastposts','footerposts','firstfooter'
        ,'lastfooter','middlefooter'));
    }

    public function BlogCategory($slug){

        $category=category::where('slug',$slug)->first();

        if($category){

            $posts=post::where('category_id',$category->id)->paginate(5);
            return view('front.category.category',compact('category','posts'));
        }else{

            return redirect('/');
        }

    }

    public function BlogTag($slug){

        $tag=tag::where('slug',$slug)->first();

        if($tag){

            $posts=post::where('tag_ids',$tag->id)->paginate(5);
            return view('front.tag.tag',compact('tag','posts'));
        }else{

            return redirect('/');
        }

    }




    public function BlogAbout(){
        $user=User::first();
        $setting=setting::first();

        return view('front.about.about',compact('user','setting'));
    }

    public function BlogContact(){
        $user=User::first();
        $setting=setting::first();

        return view('front.contact.contact',compact('user','setting'));

    }

    public function message(Request $request){

//        $this->validate($request,[
//
//            'name'=>'required|max:200',
//            'email'=>'required|email|max:200',
//            'subject'=>'required|max:255',
//            'message'=>'required',
//        ]);



        $contacts=new contact();
        $contacts->name=$request->name;
        $contacts->email=$request->email;
        $contacts->subject=$request->subject;
        $contacts->message=$request->message;

        $contacts->save();

        return redirect()->back();

    }


    public function posts($slug){





       $post=post::with('category','user')->where('slug',$slug)->first();
       $posts=post::with('category','user')->inRandomOrder()->limit(3)->get();

        $relatedposts=post::orderBy('category_id','desc')->inRandomOrder()->take(4)->get();
        $firstrelatedposts =$relatedposts->splice(0,1);
        $middlerelatedposts =$relatedposts->splice(0,2);
        $lastrelatedposts =$relatedposts->splice(0,1);

       $categories=category::all();
       $tags=tag::all();


       if($post){
           return view('front.post.post',compact('post','posts','categories','tags','firstrelatedposts','middlerelatedposts','lastrelatedposts'));
        }else{

        }
       return redirect('/');
    }
}
