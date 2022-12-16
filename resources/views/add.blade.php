

<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <title>ADD | Music</title>
        <link rel="stylesheet" href="{{asset('css/upload.css')}}">
        
    </head>
    <body>
<div class="breadcrumb">
    <div class="container">
        <a class ="breadcrumb-item" href="{{url('/')}}">Home</a>
    </div>
</div>
<section class="static-about-sec">
    <div class="container">
        <h1> Upload</h1>
        <div class="form">
            <form class="form" action="{{route('addvideo')}}" method="POST">
                @csrf
                <div class="row">
                    <div class= "col-md-6">
                        <input type="hidden" name="id" value="">
                        <labeL for="name"> Name of Music:</labeL>
                        <input type="text" name="name" value=""  required><br>  
                        <label for ="video_url"> Music URL</label>
                        <input type="text" name="video_url" value=""><br>
                        <label type="description">Price</label> 
                        <input type="text" name="description" value="" ><br>
                        
                        <label for ="category"> Category</label>
                        <select name="category" class="form-control">
                            <option value="MUSIC"> Music</option>
                            <option value="FILM"> Film</option>
                            <option value="NATURE"> Nature</option>
                            <option value="OTHERS"> Others</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-8-com-md-12">
                    <button type="submit" class="btn black">Upload video</button>
                </div>
            </form>
        </div>
    </div>
    
    <div class="col-lg-5 p-0">
        <div class="track__pic">
            <img src="https://scontent.fhan14-1.fna.fbcdn.net/v/t1.15752-9/317746370_816804216279602_5237371659253436217_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=ae9488&_nc_ohc=IusO8fSFjksAX_-OFXQ&_nc_ht=scontent.fhan14-1.fna&oh=03_AdRwEm_ZCBQyLE2F5eqym_GdTMUMWFvCS1IHLDFdFH-6jQ&oe=63B6DA22" alt="">
        </div>
    </div>
</section>
    </body>



        
