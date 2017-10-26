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

    public function store(Request $request,$id=FALSE)
    {

        if($request->isMethod('post')){
            $messages=[
                'name.required' => 'ПОЛЕ :attribute должно быть заполненным!!!!!',
                'email.max'=> 'Максимально допустимое количество символов - :max',
                'email.required'=> ':attribute  должен быть заполнен!!!!',
            ];
            $validator = Validator::make($request->all(),[
               'name'=>'required',
                //'email'=>'required'
           ], $messages);

            $validator->sometimes('email','required',function($input){
                return strlen($input->name) >= 10;
            });

            /*$validator->after(function($validator){

                $validator->errors()->add('name','Дополнительно есообщение');
            });*/
            if($validator->fails()){
                $messages = $validator->errors();
               /* if($messages->has('name')) {
                    dump($messages->first('name','<p> :message </p>'));
                }*/
            //dump($validator->failed());
            //exit();

                return redirect()->route('contact')->withErrors($validator)->withInput();
            }
            //dump($request->all());
        }
        return view('default.contact',['title'=>'Contact']);
    }


    public function show()
    {
        return view('default.contact',['title'=>'Contact']);
    }
}
