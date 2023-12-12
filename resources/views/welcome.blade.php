
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="{{asset('home_frontend/user_home_page_demo.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header class="header">
        <a href="#" class="logo">ApartmentRenting.</a>
        
        <div class="social-media">
            <a href="#" style="--i:1;"><i class='bx bxl-twitter'></i></a>
            <a href="#" style="--i:2;"><i class='bx bxl-facebook-circle' ></i></a>
            <a href="#" style="--i:3;"><i class='bx bxl-instagram' ></i></a>
        </div>
    </header>
    <section class="home">
        <div class="home-content">
            <h1>Apartment Renting Experience.</h1>
            <div class="links">
                @if (Route::has('login'))
                    <a href="{{ route('login') }}">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endif
            </div>
            

        </div>
        
        

        
        <div class="home-img">
        <div class="rhombus">
                
            </div>
        </div>
        <div class="rhombus2">

        </div>
    </section>
</body>
</html>



