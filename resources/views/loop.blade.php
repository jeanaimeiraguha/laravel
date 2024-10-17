<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @php
    echo("Loop statement:");
@endphp
<p>This is Use of laravel blade loop</p>
@for ($i=0 ;$i <5; $i++)
<p>The value of i is:{{$i}}</p>


@endfor

</body>
</html>
