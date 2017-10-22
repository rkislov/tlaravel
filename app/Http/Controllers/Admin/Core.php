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
        /*$article = Article::find('7787a348-5957-4d69-8d5f-e061be42cdf0');
        $article->name = 'New Name2';
        $article->text = 'New Text 2';
        $article->save();*/

        /*Article::create([
            'id'=>Uuid::uuid4(),
            'name'=>'Hello World',
            'text'=>'Some text'

        ]);*/
        /*Article::firstOrCreate([

            'name'=>'Hello World',
            'text'=>'Some text'
        ]);*/
       /* $article = Article::firstOrNew([

            'name'=>'Hello World',
            'id'=>Uuid::uuid4(),
            'text'=>'Some text'
        ]);
        $article->save();*/
        //Article::destroy('1dcedb56-af61-4095-b231-7e8cc85230d7');
       //$article=Article::find('f60e3f13-7d22-453c-8f9a-95eeffdccc0f');
       //$article->delete();
       // $article = Article::find('525bc234-1f05-40e8-b814-f962b750b0b3');
        //$article->delete();
        //$articles = Article::onlyTrashed()->restore();
        $article = Article::find('525bc234-1f05-40e8-b814-f962b750b0b3');
        $article->forceDelete();

       /* foreach ($articles as $article){
            if($article->trashed()){
                echo $article->id.' Удалена <br/>';
                $article->restore();
            }else{
                echo $article->id.' Не удалена <br/>';
            }
        }*/
        //dump($article);
        //dump($articles);
        return;

    }

    public function getArticle($id)
    {
        echo  'Ответ -'.$id;
    }

}
