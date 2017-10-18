<div class="col-md-9">


   @if (count($data)<3)

         В массиве меньше трех элементов
    @elseif(count($data)>10)
       В массиве больше 10 элеиентов
    @else
        В массиве неизвестное количество элементов
    @endif

    <ul>
        @for($i=0; $i < count($dataI); $i++)
            <li>{{ $dataI[$i] }}</li>
        @endfor
    </ul>
       <ul>
           @foreach($data as $k=>$value)
               <li>{{ $k.'=>'.$value }}</li>
           @endforeach
       </ul>
       <ul>
           @forelse($data as $k=>$value)
               <li>{{ $k.'=>'.$value }}</li>
           @empty
               <p>No items</p>
           @endforelse
       </ul>
    @each('default.list',$dataI, 'value')
    @myDir('hello')
    <div class="col-md-6">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-6">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div>

    <div style="clear: both"></div>
    <div class="blog-post">
        <div class="page-header">
            <h1>Sample blog</h1>
        </div>
        <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.</p>
        <p>В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.</p>
        <blockquote>
            <p>Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и,<strong>в более недавнее время, программы электронной </strong> вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>
        </blockquote>
        <p>Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад.</p>
    </div>
</div>