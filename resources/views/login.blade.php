<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{asset('css/login.css')}}" type="text/css">
<!------ Include the above in your HEAD tag ---------->
<head>
    <title>Login</title>
</head>
<body>


    <section>
        <div class="img-bg">
            <img src="https://scontent.fhan14-3.fna.fbcdn.net/v/t39.30808-6/302314766_5307817625934280_8670021754870084950_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=pLaHB8jOVrYAX8QO9Ic&_nc_ht=scontent.fhan14-3.fna&oh=00_AfCi8XJZZa3OI_Jd_T0XesI5eNa6-KZa0NVM1s6ltfP2SQ&oe=638F8765" alt="">
        </div>
        <!--Bắt Đầu Phần Nội Dung-->
        <div class="noi-dung">
            <div class="form">
                <form id="login-form" class="form" action="{{route('auth.login')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h2>Login to continue</h2>

                    <div class="input-form">
                        <span>Email</span>
                        <input type="email" name="email">
                    </div>
                    <div class="input-form">
                        <span>Password</span>
                        <input type="password" name="password">
                    </div>
                    <div class="nho-dang-nhap">
                        <div class="form-group">
                            <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                        </div>
                        <div class="input-form">
                            <button type="submit">Login</button>
                        </div>
                        <div class="input-form">
                            <p>Do not have an account? <a href="http://127.0.0.1:8000/register">Register</a></p>
                        </div>

                    </div>
                </form>
            </div>
    </section>


</body>