<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;


class AboutController extends Controller
{
    //

    public function show()
    {
        //return 'hello';
        if(view()->exists('default.about')){

         $page = DB::select("SELECT `name`,`text` FROM `pages` WHERE `alias`=:alias",['alias'=>'about']);
           return view('default.about')->withPage($page[0])->withTitle('About our company');

        }
        abort(404);
    }
}
