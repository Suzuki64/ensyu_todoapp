<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COACHTECH</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <style>
    body {
      font-size:16px;
      margin: 5px;
      background-color: #191970;
    }
    h1 {
      font-size:24px;
      margin: 10px;
    }
    .box{
      width:50%;
      padding: 20px;
      background-color: #ffffff;
      border-radius:10px;
      position:relative;
      top: 50%;
      left:50%;
      transform: translate(-50%,-50%);
    }
    form{
      width:95%;
      margin:0 auto 30px;
    }
    .addtodo{
      display: flex;
      justify-content: space-between;
    }
    input{
      border-radius:5px;
      border: solid #d3d3d3 1.5px;
    }
    .addinput{
      width:80%;
      height:35px;
    }
    button{
      height: 35px;
      width: 60px;
      font-weight:bold;
      padding:5px 10px;
      background-color: #ffffff;
      border-style: solid; 
      border-width: 2px;
      border-radius:5px;
    }
    button:hover{
      color: #ffffff
    }
    .addbutton{
      color:#ee82ee;
      border-color:#ee82ee;
    }
    .addbutton:hover{
      background-color:#ee82ee;
      transition-duration:0.4s;
    }
    .content {
      margin:10px; 
    }
    </style>
  </head>
  <body>
  <div class="box">
    <h1>Todo List</h1>
    @if (count($errors) > 0)
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  @endif
    <form class="addtodo" action="/todo/create" method="post" >
    @csrf
      <input class="addinput" type="text" name="task">
      <button class="addbutton" type="submit">追加</button>
    </form>
    <div class="content">
    @yield('content')
    </div>
  </div>
</body>
</html>