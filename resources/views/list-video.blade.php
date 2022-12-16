<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="DJoz Template">
    <meta name="keywords" content="DJoz, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/Listvideo.css')}}">
    <title>DVT | Music</title>

</head>

<body>

    <div class="bars">
        <div class="container">
            <a class="breadcrumb-item" href="http://127.0.0.1:8000/" style="color:red">
            <img src="https://scontent.fhan14-3.fna.fbcdn.net/v/t1.15752-9/318187944_671176474673242_445374697494745251_n.png?_nc_cat=109&ccb=1-7&_nc_sid=ae9488&_nc_ohc=QqQJQQSz9c0AX8hQmj_&_nc_ht=scontent.fhan14-3.fna&oh=03_AdQ4VkAXuwhLcvh32ADCk_B5b61kYIwuilX59fRLQa8xwA&oe=63B99873" class="logolist">
            </a>
            <br>
            <a href="{{route('add')}}">
                <label>
                    <font color="red" class="">Add</font>
                </label>
            </a>
        </div>
    </div>
    <div class="listvideo">
         <b class="qqq">List of videos Availble </b>
         <form action="{{route('searchlist')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
            <input class="form-control tm-search-input" type="text" placeholder="Search" name="keyWord" id="keyWord">
            </div>
        </form> 
        <table class="col-md-12">
            <tr>
                <th>Name</th>
                <th></th>
                <th>Description</th>
                <th></th>
                <th></th>
                <th></th>
                <th>Accions</th>
            </tr>
        @foreach($videos as $video)
        <tr>
            <td><b>{{ $video ->name}}</b></td>
            <td></td>
            <td><b>{{ $video->description}}</b></td>
            <td></td>
            <td>
                <iframe width="200" height="150" src="https://www.youtube.com/embed/{{$video->video_url}}" frameborder="0" allow="accelerometer;autoplay"></iframe>
            </td>
            <td></td>
            <td>
                <a href="{{route('video.delete',$video->id)}}">
                    <button type="button" class="delete">DELETE</button>
                </a>
                <a href="{{route('video.update',$video->id)}}">
                    <button type="button" class="update">UPDATE</button>
                </a>
                <a> <span><button class="buy">Buy</button></span></a>
            </td>
        </tr>
        @endforeach
        </table>
    </div>

   

    <!-- Music Plugin -->
    <script src="js/jquery.jplayer.min.js"></script>
    <script src="js/jplayerInit.js"></script>
</body>

</html>