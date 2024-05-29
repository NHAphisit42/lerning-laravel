<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>เกี่ยวกับเรา</title>
</head>

<body>
    <h2>เกี่ยวกับเรา</h2>
    <h3>{{$address}}</h3>
    <h3>{{$tel}}</h3>
    <h3>{{$email}}</h3>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum dolores quidem quam, magni, reiciendis in ab
        praesentium sequi ut recusandae minima sit accusantium rerum dicta at cumque expedita aliquid dolorum?</p>
        <a href="{{url('/')}}">home</a>
        <a href="{{route('admin')}}">admin</a>
        <a href="{{route('member')}}">member</a>
        <a href="{{route('about')}}">about</a>
</body>

</html>
