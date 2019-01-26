<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>All Goods</title>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

        <div class="content">
            <ul>
            @for ($i = 0; $i < count($goods ); $i++)
            <?php $g = $goods[$i]; ?>
            <li> Категория - {{$g->category_id}}, название - {{$g->name}}, описание - {{$g->description}}  </li>
            @endfor
            </ul>
        </div>
        
    </body>
</html>