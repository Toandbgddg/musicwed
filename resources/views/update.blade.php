

<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <title>DVT | Music</title>
        <link rel="stylesheet" href="{{asset('css/editvideo.css')}}" type="text/css">
    </head>


<body>
<div class="breadcrumb">
    <div class="container">
        <a class ="breadcrumb-item" href="home.php">Home</a>
       
        <span class="breadcrumb-item active"> Upload Video</span>
    </div>
</div>
<section class="static about-sec">
    <div class="container">
        <h1> Edit Video</h1>
        <div class="form">
            <form class="" action="{{route('video.edit')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class= "col-md-6">
                        <input type="hidden" name="id" value="{{$video->id }}">
                        <labeL for="name"> Video Name:</labeL>
                        <input type="text" name="name" value="{{ $video->name }}" required>
                        <label for ="video_url"> Video URL</label>
                        <input type="text" name="video_url" value="{{$video->video_url}}">
                        <label type="description"> Price</label>
                        <input type="text" name="description" value="{{$video->description}}" placeholder="">
                        <label for ="category"> Category</label>
                        <input type="text" name="category" value="{{$video->Category}}" placeholder="">     
                    </div>
                </div>
                <div class="col-lg-8 com-md-12">
                    <input type="hidden" name="id" value ="{{$video->id}}">
                    <button type="submit" class="btn black">Upload video</button>
                </div>
                
            </form>
        </div>
    </div>
</section>
</body>



        
