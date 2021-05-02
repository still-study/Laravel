<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h3>NEWS / НОВОСТИ</h3>

@foreach($news as $block)

    <h3>{{ $block['title'] }}</h3>
    <p>{{ $block['text'] }}</p>
@endforeach

</body>
</html>
