<?php

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert(['id'=>Uuid::uuid4(),
            'alias'=>'about',
            'name'=>'About outher company',
            'text'=>"<div class=\"content\">

        <div id=\"Panes\"><div>
                <h2>Что такое Lorem Ipsum?</h2>
                <p><strong>Lorem Ipsum</strong> - это текст-\"рыба\", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной \"рыбой\" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>
            </div><div>
                <h2>Почему он используется?</h2>
                <p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации \"Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..\"
                    Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам \"lorem ipsum\" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).</p>
            </div><br /><div>
                <h2>Откуда он появился?</h2>
                <p>Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, \"consectetur\", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги \"de Finibus Bonorum et Malorum\" (\"О пределах добра и зла\"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", происходит от одной из строк в разделе 1.10.32</p><p>Классический текст Lorem Ipsum, используемый с XVI века, приведён ниже. Также даны разделы 1.10.32 и 1.10.33 \"de Finibus Bonorum et Malorum\" Цицерона и их английский перевод, сделанный H. Rackham, 1914 год.</p>
            </div><div>
                <h2>Где его взять?</h2>
                <p>Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или \"невозможных\" слов.</p>
                <form method=\"post\" action=\"/feed/html\"><table style=\"width:100%\"><tr><td rowspan=\"2\"><input type=\"text\" name=\"amount\" value=\"5\" size=\"3\" id=\"amount\" /></td><td rowspan=\"2\"><table style=\"text-align:left\"><tr><td style=\"width:20px\"><input type=\"radio\" name=\"what\" value=\"paras\" id=\"paras\" checked=\"checked\" /></td><td><label for=\"paras\">абзацев</label></td></tr><tr><td style=\"width:20px\"><input type=\"radio\" name=\"what\" value=\"words\" id=\"words\" /></td><td><label for=\"words\">слов</label></td></tr><tr><td style=\"width:20px\"><input type=\"radio\" name=\"what\" value=\"bytes\" id=\"bytes\" /></td><td><label for=\"bytes\">байтов</label></td></tr><tr><td style=\"width:20px\"><input type=\"radio\" name=\"what\" value=\"lists\" id=\"lists\" /></td><td><label for=\"lists\">списков</label></td></tr></table></td><td style=\"width:20px\"><input type=\"checkbox\" name=\"start\" id=\"start\" value=\"yes\" checked=\"checked\" /></td><td style=\"text-align:left\"><label for=\"start\">Начать с 'Lorem ipsum dolor sit amet...'</label></td></tr><tr><td></td><td style=\"text-align:left\"><input type=\"submit\" name=\"generate\" id=\"generate\" value=\"Сгенерировать Lorem Ipsum\" /></td></tr></table></form></div></div><hr /><div class=\"boxedTight\"><a href=\"/116/1508217396/ding.io\" target=\"_blank\" rel=\"nofollow\"><img src=\"/banners/ding.png\" alt=\"Time tracking for freelancers\" style=\"width:100%\" /></a></div>
        <hr /><div class=\"boxed\" style=\"color:#ff0000;\"><strong>Перевод:</strong> Можете помочь с переводом этого сайта на какой-либо иностранный язык? Если да, то посылайте e-mail с деталями.</div>

        <hr /><div class=\"boxed\">Теперь также предлагается набор графических баннеров-\"рыб\" в трёх цветах и множестве размеров:<br /><a href=\"/banners\"><img src=\"/images/banners/black_234x60.gif\" width=\"234\" height=\"60\" alt=\"Banners\" /></a><a href=\"/banners\"><img src=\"/images/banners/grey_234x60.gif\" width=\"234\" height=\"60\" alt=\"Banners\" /></a><a href=\"/banners\"><img src=\"/images/banners/white_234x60.gif\" width=\"234\" height=\"60\" alt=\"Banners\" /></a></div>

        <hr /><div class=\"boxed\"><strong>Пожертвования:</strong> Если вы регулярно пользуетесь этим сайтом и хотите быть уверенным в его дальнейшем постоянном функционировании, подумайте о небольшом пожертвовании, которое помогло бы оплатить его хостинг и трафик. Нет никаких минимальных сумм - любое пожертвование принимается с благодарностью. Вы можете щёлкнуть <a target=\"_blank\" href=\"/donate\" class=\"lnk\">здесь</a> чтобы перевести деньги через PayPal. Спасибо за вашу поддержку.</div>

        <hr /><div class=\"boxed\" id=\"Packages\">
            <a target=\"_blank\" rel=\"nofollow\" href=\"https://chrome.google.com/extensions/detail/jkkggolejkaoanbjnmkakgjcdcnpfkgi\">Chrome</a>
            <a target=\"_blank\" rel=\"nofollow\" href=\"https://addons.mozilla.org/en-US/firefox/addon/dummy-lipsum/\">Firefox Add-on</a>
            <a target=\"_blank\" rel=\"nofollow\" href=\"https://github.com/traviskaufman/node-lipsum\">NodeJS</a>
            <a target=\"_blank\" rel=\"nofollow\" href=\"http://ftp.ktug.or.kr/tex-archive/help/Catalogue/entries/lipsum.html\">TeX Package</a>
            <a target=\"_blank\" rel=\"nofollow\" href=\"http://code.google.com/p/pypsum/\">Python Interface</a>
            <a target=\"_blank\" rel=\"nofollow\" href=\"http://gtklipsum.sourceforge.net/\">GTK Lipsum</a>
            <a target=\"_blank\" rel=\"nofollow\" href=\"http://github.com/gsavage/lorem_ipsum/tree/master\">Rails</a>
            <a target=\"_blank\" rel=\"nofollow\" href=\"https://github.com/cerkit/LoremIpsum/\">.NET</a>
            <a target=\"_blank\" rel=\"nofollow\" href=\"http://groovyconsole.appspot.com/script/64002\">Groovy</a>
            <a target=\"_blank\" rel=\"nofollow\" href=\"http://www.layerhero.com/lorem-ipsum-generator/\">Adobe Plugin</a></div>

        <hr /><div id=\"Translation\">

            <h3>Классический текст Lorem Ipsum, используемый с XVI века</h3><p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p><h3>Абзац 1.10.32 \"de Finibus Bonorum et Malorum\", написанный Цицероном в 45 году н.э.</h3><p>\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</p>
            <h3>Английский перевод 1914 года, H. Rackham</h3>
            <p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>
            <h3>Абзац 1.10.33 \"de Finibus Bonorum et Malorum\", написанный Цицероном в 45 году н.э.</h3>
            <p>\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p>
            <h3>Английский перевод 1914 года, H. Rackham</h3>
            <p>\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"</p>
        </div>
        </div>"]);
    }
}
