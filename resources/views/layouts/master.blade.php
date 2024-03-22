<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hồ Thị Sang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>
        .custom-service {
            text-align: start;
            line-height: 40px;
            list-style-type: none;
        }
    </style>
</head>

<body>

    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="">ANNA</a>

            <div class="collapse navbar-collapse justify-content-end">
                <ul class="custom-navbar-nav navbar-nav ">
                    <li class="active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li><a class="nav-link" href="#">Shop</a></li>
                    <li><a class="nav-link" href="a#">About us</a></li>
                    <li><a class="nav-link" href="#">Services</a></li>
                    <li><a class="nav-link" href="#">Blog</a></li>
                    <li><a class="nav-link" href="#">Contact us</a></li>
                </ul>

                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li><a class="nav-link" href="#"><img src="images/user.svg"></a></li>
                    <li><a class="nav-link" href="#"><img src="images/cart.svg"></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="hero">
        <div class="container">
            <div class="row d-flex ">
                <div class="col-md-5">
                    <h2>{{ $title }}</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis eveniet suscipit quos voluptate explicabo quo, quam perferendis dolorem, placeat voluptatum eum esse a sit aspernatur aliquid odit odio, possimus similique.</p>
                    <button type="button" class="btn  btn-secondary">Shop now</button>
                    <button type="button" class="btn btn-primary btn-white-outline">Explore</button>
                </div>
                <div class="col-md-7 hero-img-wrap">
                    <img src="{{asset('images/couch.png')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>

    @yield('content')


    <footer class="footer-section mt-4">
        <div class="container relative mt-0">
            <div class="row">
                <div class="col-4">
                    <h4>Anna</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, sint ipsum amet corrupti odit facere velit explicabo, repellat facilis sunt accusantium, quo perferendis perspiciatis in doloribus voluptatum! Optio, ipsa tempora.</p>
                    <div class="icon">
                        <ul class="custom-social">
                            <li><a href=""> <i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href=""> <i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href=""> <i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-2">
                    <ul class="custom-service">
                        <li>Home</li>
                        <li>About us</li>
                        <li>Blog</li>
                        <li>Contact us</li>
                    </ul>
                </div>
                <div class="col-2">
                    <ul class="custom-service">
                        <li>Support</li>
                        <li> Knowledge base</li>
                        <li> Live chat</li>
                    </ul>
                </div>
                <div class="col-2">
                    <ul class="custom-service">
                        <li>Job</li>
                        <li>Our team</li>
                        <li>Leadership</li>
                        <li>Privacy Policy</li>
                    </ul>
                </div>
                <div class="col-2">
                    <ul class="custom-service">
                        <li>Nordic Chair</li>
                        <li> Kruzo Aero</li>
                        <li> Ergonomic Chair</li>

                    </ul>
                </div>
            </div>
            <div class="border-top copyright">
                <div class="row">
                    <div class="col-lg-6">
                        <p>Copyright ©2024. All Rights Reserved. — Designed with love by Untree.co</p>
                        <p>Distributed By ThemeWagon</p>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end justify-content-around">
                        <a href="">Terms & Conditions</a>
                        <a href="">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>



    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>