<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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


        /*$country = Country::find(1);
        $user = User::find(2);
        $country->user()->associate($user);
        $country->save();*/
        /*$articles = Article::all();
        $user = User::find(2);
        foreach ($articles as $article){
            $article->user()->associate($user);
            $article->save();
        }*/
        /*$user = User::find(2);
        $role_id = Role::find(2)->id;

        //$user->roles()->attach($role_id);
        $user->roles()->detach($role_id);*/

        $article = Article::find(2);
        //dump($article);
        //$article->name = 'Some text';
        //$array=['key'=>'Hello world'];
        //$article->text=$array;
        //$article->save();
        //echo $article->name;
        dump((string)$article);

        return;

    }

    public function getArticle($id)
    {
        echo  'Ответ -'.$id;
    }

}
