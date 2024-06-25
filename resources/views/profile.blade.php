<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My profile</title>
</head>
<body>
    <h1>welcome to my profile</h1>
    <h4>{{$name}}</h4>
     <h1>id: {{$id}}</h1>
     <h1>id: {{$semester}}</h1>
      @foreach($courses as $course)
         <h5>{{$course}}</h5>
         @endforeach
</body>
</html>