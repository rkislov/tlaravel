<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Ramsey\Uuid\Uuid;
use App\Article;
use App\User;
use App\Country;
use App\Role;
class Core extends Controller
{
    protected static $articles;

    public function __construct()
    {
        //$this->middleware('mymiddle');
    }

    public static function addArticles($array){
        return self::$articles[] = $array;
    }
    public function getArticles()
    {
        //$user=User::find('0f225a09-18bc-4af0-9edf-d5425a86d410');
        //$country=$user->country;

        //$country=Country::find('0f115a09-18bc-4af0-9edf-d5425a86d410');
        //$articles = $user->articles()->where('id','5f6ad4c3-962c-4fe1-8f03-de891e2a325c')->first();
        /*foreach ($articles as $article){
            echo $article->name.'<br/>';
        }*/
        //$article = Article::find('04a33674-641d-4690-a406-bd58e6297376');
        //$user = User::find('ac5ff809-db8f-46bd-b8f5-9f802f2769dc');
        //dump($user->roles);
        /*foreach ($user->roles as $role){
            echo $role->name.'<br/>';
        }*/
        //$role = $user->roles()->where('roles.id','91e2fb85-aa60-4460-a49e-ef5b824c0101')->first();
        $role = Role::find('91e2fb85-aa60-4460-a49e-ef5b824c0101');
        dump($role->users);
        return;

    }

    public function getArticle($id)
    {
        echo  'Ответ -'.$id;
    }

}
