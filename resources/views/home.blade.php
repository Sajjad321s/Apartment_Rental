<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="{{asset('home_frontend/user_home_page.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header class="header">
        <a href="#" class="logo">ApartmentRenting.</a>
        <div class="single-line-text">Welcome, {{ Auth::user()->name }}</div>
        <nav class="navbar">
            <a href="#" style="--i:1;" class="active">Home</a>
            <a href="#" style="--i:2;">About</a>
            <a href="#" style="--i:3;">Review</a>
            <a href="#" style="--i:4;">Featured</a>
            <a href="/logout" style="--i:5;">Logout</a>
        </nav>
        <div class="social-media">
            <a href="#" style="--i:1;"><i class='bx bxl-twitter'></i></a>
            <a href="#" style="--i:2;"><i class='bx bxl-facebook-circle' ></i></a>
            <a href="#" style="--i:3;"><i class='bx bxl-instagram' ></i></a>
        </div>
    </header>
    <section class="home">
        <div class="home-content">
            <h1>Apartment Renting Experience.</h1>
            <h3>Here!</h3>
            <p>Find your perfect apartment with our user-friendly website! Browse a wide selection
             of rental properties, filter by location, size, and price, 
             and easily connect with landlords. Simplify your apartment hunt and discover your dream home today!</p>
            <a href="/index1" class="btn">Explore Apartmets</a>

        </div>
        <div class="home-img">
            <div class="rhombus">
                <img src="{{asset('home_frontend/apartment1.png')}}" alt="">
            </div>
        </div>
        <div class="rhombus2">

        </div>
        
    </div>

    </section>
</body>
</html>