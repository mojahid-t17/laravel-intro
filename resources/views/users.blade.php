<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello !! this is my first laravel code </h1>
    
    <h1>my products is : {{$products}} and {{$products2}}</h1>
    <h3>the following name i write on those:</h3>
    @foreach($names as $name)
        <p style="color:red">{{$name}}</p>
    @endforeach
    @foreach($countries as $country)
        <h1>{{$country}}</h1>
        @endforeach
</body>
</html>