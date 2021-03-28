<?php

namespace App\Http\Controllers;

use App\contact;
use Illuminate\Http\Request;

class ContactPagesController extends Controller
{
    public function showContact(){

        $contacts=contact::all();
        return view('admin.contact.contact',compact('contacts'));
    }
}
