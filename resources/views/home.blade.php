<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DVT | Music</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/templatemo-style.css')}}">
    <!--
    
TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->
</head>

<body>
    <!-- Page Loader -->

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://127.0.0.1:8000/">
                <i class="fas fa-film mr-2"></i>
                DVT | Music 🎧
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-link-1" href="https://www.facebook.com/V.toan203"><button class="abc">Contact Us</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-2 active" aria-current="page" href="http://127.0.0.1:8000/listvideo"><button class="abc">Videos</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-3" href="http://127.0.0.1:8000/login"><button class="abc">Login</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-4" href="http://127.0.0.1:8000/add"><button class="abc">Up Load</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/hero.jpg">
        <form action="{{route('search')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
            <input class="form-control tm-search-input" type="text" placeholder="Search" name="keyWord" id="keyWord">
            </div>
        </form> 
    </div>


    <div class="row mb-4">
        <h2 class="col-12 tm-text-primary">
            All Videos
        </h2>
    </div>
    <div class="row mb-3 tm-gallery">
        @foreach($videos as $video)
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <<iframe src="https://youtube.com/embed/{{ $video->video_url}}" framborder="0" allow="accelerometer; autoplay" class="img-fluid"></iframe> 
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
                <b class="tm-text-gray-light">{{$video->name}}</b>
               <a href=""><button  class="buy">Buy</button></a> 
                <b>{{$video->description}}</b>
            </div>
        </div>
        @endforeach

    </div>

    </div> <!-- container-fluid, tm-container-content -->

    <footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer">
        <div class="container-fluid tm-container-small">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">About DVT | Music</h3>
                    <p>Address : 80-xuan phuong-nam tu liem-Ha Noi</p>  
                    <p>Phone : 0934499331</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title"></h3>
                    <ul class="tm-footer-links pl-0">      
                    </ul>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-7 col-12 px-5 mb-3">
                  
                </div>
                <div class="col-lg-4 col-md-5 col-12 px-5 text-right">
                    Designed by <a href="https://templatemo.com" class="tm-text-gray" rel="sponsored" target="_parent">Van Toan</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>

</html>