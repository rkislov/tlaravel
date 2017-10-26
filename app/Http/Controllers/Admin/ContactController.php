<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    /*protected $request;
    public function __construct(Request $request)
    {
        $this ->request = $request;
    }*/

    public function store(ContactRequest $request,$id=FALSE)
    {

        if($request->isMethod('post')){
            /*$messages=[];
            $validator = Validator::make($request->all(),[
               'name'=>'required',
           ], $messages);
            if($validator->fails()){
                return redirect()->route('contact')->withErrors($validator)->withInput();
            }
            dump($request->all());*/
        }
        return view('default.contact',['title'=>'Contact']);
    }


    public function show()
    {
        return view('default.contact',['title'=>'Contact']);
    }
}
