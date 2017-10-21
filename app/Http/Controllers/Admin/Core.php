<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Ramsey\Uuid\Uuid;
use App\Article;
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
        //$articles = Article::all();
        /*foreach ($articles as $article)
        {
            echo $article->text.'<br/>';
        }*/
        //$articles = Article::where('id', '=','b16e44cb-e170-4050-85a9-eddfb7ba5507')->get();
        //Article::chunk(2, function ($articles){

        //});
        //$article=Article::find('bacf3da4-a8f4-484c-b71e-9f4609232487');
        //echo $article->text;
        //$article=Article::findOrFail(1);
        //$article=Article::where('id',1)->firstOrFail();
        /*$article = new Article;
        $article->id=Uuid::uuid4();
        $article->name='New Article';
        $article->text='Article Text';
        $article->save();*/
        $article = Article::find('7787a348-5957-4d69-8d5f-e061be42cdf0');
        $article->name = 'New Name2';
        $article->text = 'New Text 2';
        $article->save();
        dump($article);
        return;

    }

    public function getArticle($id)
    {
        echo  'Ответ -'.$id;
    }

}
