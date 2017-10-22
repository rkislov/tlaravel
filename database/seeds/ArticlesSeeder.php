<?php

use Illuminate\Database\Seeder;
use App\Article;
use App\User;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        $userId = User::where('name','admin')->first();
        Article::create([

            'name'=>'Blog post',
            'text'=>"<p>В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн.</p>",
            'img'=>'pic1.jpg',
            'user_id'=>$userId->id
        ]);
        //2
        Article::create(
            [


                    'name'=>'Simple blog post',
                    'text'=>"Lorem Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной \"рыбой\" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.",
                    'img'=>'pic2.jpg',
                'user_id'=>$userId->id
                ]);
        Article::create([

                    'name'=>'Simple blog post2',
                    'text'=>"Lorem Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной \"рыбой\" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.",
                    'img'=>'pic3.jpg',
            'user_id'=>$userId->id
                ]);



        //3
        Article::create([

           'name'=>'Simple blog post3',
           'text'=>'Hello world',
           'img'=>'pict4.jpg',
            'user_id'=>$userId->id
        ]);
    }
}
