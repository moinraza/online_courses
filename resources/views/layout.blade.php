<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo E-comm project</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel ="stylesheet" href="/css/style.css">
    <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="navbar-up">
        <div class="row">
            <div class="col-md-6">
            <div class="logo">
                <img src="{{url('/image/logo.png')}}" alt="">
            </div>
            </div>
       <div class="col-md-6">
            <div class="social">
            <img src="{{url('/image/icon.png')}}" alt="">
            </div>
      </div>
       </div>
     </div> 
    </div>
    <div class="navbar">
        <ul>
            <li><a href="index">Home</a></li>
            <li><a href="#about">About</a</li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#gallary">Gallery</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#testimonial">Testimonial</a></li>
            <li><a href="#service">Service</a></li>
            </ul>
            <div class="login">
                <ul>
                <li><a href="signup">signup</a></li>
                <li><a href="login">Login</a></li>
                </ul>
            </div>
    </div>
    
    @yield('content')
    <div class="footer">
        <div class="container-fluid">
        <div class="row">
        <div class="col-md-3">
            <div class="company">
                <h2>Company</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur necessitatibus, reprehenderit nemo architecto tempore error. Corporis quis, alias suscipit odit, .</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product">
                <h2>Products</h2>
                <ul>
                    <li>Laravel</li>
                    <li>Angular</li>
                    <li>React.js</li>
                    <li>Django</li>
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="quick-links">
            <h2>Quick Links</h2>
                <ul>
                    <li>About</li>
                    <li>Contact</li>
                    <li>Services</li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="contact">
            <h2>Contact</h2>
                <ul>
                    <li>New York, NY 10012, US</li>
                    <li>md7505013@gmail.com</li>
                    <li>+91-9122726758</li>
                    <li>+91-6203155118</li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="footer-down">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h5>© 2021 Copyright: MDBootstrap.com</h5>
                </div>
                <div class="col-md-6">
                    <div class="social-icon">
                    <img src="{{url('/image/icon.png')}}" alt="">
                </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
</body>
</html>