<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>หน้าแรก</title>
</head>

<body>
    <?php
        $user = "Naihot";    
        $arrayName = array("home", "member", "about");
    ?>
    <h2>ยินดีต้อนรับ admin {{$user}}</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quae voluptatum, modi doloremque corrupti
        deserunt, dolores dignissimos voluptas nihil maxime enim non cumque sunt. Doloribus velit qui cumque inventore
        voluptas.</p>

        @if ($user == "Naihot")
            <h3>ผู้ใช้ท่านเป็น admin</h3>
        @else
        <h3>ผู้ใช้ท่านไม่ได้เป็น admin</h3>
        @endif

        @foreach ($arrayName as $menu)
            <a href="">{{$menu}}</a>
        @endforeach
        <br>
        <a href="{{url('/')}}">home</a>
        <a href="{{route('admin')}}">admin</a>
        <a href="{{route('member')}}">member</a>
        <a href="{{route('about')}}">about</a>
</body>

</html>
