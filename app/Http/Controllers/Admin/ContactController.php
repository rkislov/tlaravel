<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /*protected $request;
    public function __construct(Request $request)
    {
        $this ->request = $request;
    }*/

    public function show(Request $request,$id=FALSE)
    {
        if($request->isMethod('post')){
            $rules = [
                'name'=>'unique:users,name',
                //'email'=>'required|email'
            ];

            $this->validate($request,$rules);
            //kod

            dump($request->all());
        }
        return view('default.contact',['title'=>'Contact']);
    }
}
