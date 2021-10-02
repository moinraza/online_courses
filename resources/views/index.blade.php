@extends('layout')
@section('content')

<div class ="custom-product">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{url('/image/laravel-bg.jpg')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{url('/image/react-bg.png')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{url('/image/django-bg.jpg')}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
  <div id="about">
      <div class="about-info">
        <h1>About Us</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem perferendis id at illo tempore. Nisi totam a odio amet dolor velit quo commodi repudiandae sint aut cupiditate reiciendis, eligendi ipsa.</p>
        <form action="">
          <button type="submit" name="submit">Learn more</button>
        </form>
      </div>
      <div class="about-image">
        <img src="{{url('/image/about.jpg')}}" alt="">
      </div>
  </div>
  <section>
  <div id="gallary">
    <h1>Gallery</h1>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
        <div class="gallary-image">
        <img src="{{url('/image/laravel.png')}}" alt="">
        <div class="gallary-detains">
        <h6>Laravel Full Course</h6>
          <p>Price: $450</p>
        </div>
        </div>
        </div>
        <div class="col-md-3">
        <div class="gallary-image">
        <img src="{{url('/image/angular.png')}}" alt="">
        <div class="gallary-detains">
        <h6>Angular Full Course</h6>
          <p>Price: $400</p>
        </div>
        </div>
        </div>
        <div class="col-md-3">
        <div class="gallary-image">
        <img src="{{url('/image/react.jpg')}}" alt="">
        <div class="gallary-detains">
        <h6>React Full Course</h6>
          <p>Price: $500</p>
        </div>
        </div>
        </div>
        <div class="col-md-3">
        <div class="gallary-image">
        <img src="{{url('/image/django.jpg')}}" alt="">
        <div class="gallary-detains">
          <h6>Django Full Course</h6>
          <p>Price: $550</p>
        </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  <section id="service">
  <h1>Our Services</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ea voluptate fugit voluptas officia delectus </p>
  <div class="container">
  <div class="row">
        <div class="col-md-3">
        <div class="logo-image">
        <img src="{{url('/image/laravel-logo.png')}}" alt="">
</div>
        <div class="service-detains">
          <h1>Laravel</h1>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis saepe culpa doloribus illo totam tempore numquam quas </p>
        </div>
        </div>
        <div class="col-md-3">
        <div class="logo-image">
        <img src="{{url('/image/react-logo.png')}}" alt="">
</div>
        <div class="service-detains">
        <h1>React Js</h1>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis saepe culpa doloribus illo totam tempore numquam quas </p>
        </div>
        </div>
        <div class="col-md-3">
        <div class="logo-image">
        <img src="{{url('/image/angular-logo.png')}}" alt="">
</div>
        <div class="service-detains">
        <h1>Angular.Js</h1>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis saepe culpa doloribus illo totam tempore numquam quas </p>
        </div>
        </div>
        <div class="col-md-3">
        <div class="logo-image">
        <img src="{{url('/image/django-logo.png')}}" alt="">
</div>
        <div class="service-detains">
        <h1>Django</h1>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis saepe culpa doloribus illo totam tempore numquam quas  </p>
        </div>
        </div>
        </div>
        </div>
  </section>
  <section>
  <div id="blog">
    <h1>Blog</h1>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
        <div class="blog-image">
        <img src="{{url('/image/laravel.png')}}" alt="">
        <div class="blog-details">
        <h3> Introduction to Laravel </h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis qui earum blanditiis dolorem iusto quisquam, officiis sint tenetur animi possimus nam expedita. Nulla illo commodi nobis ratione eaque, praesentium  <a href="">Learn more</a></p>
        </div>
        </div>
        </div>
        <div class="col-md-3">
        <div class="blog-image">
        <img src="{{url('/image/angular.png')}}" alt="">
        <div class="blog-details">
        <h3> Introduction to Angular </h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet tempore voluptatibus iusto minus velit labore ut impedit in, saepe ipsa similique! Distinctio maxime cupiditate aspernatur non inventore sit quia laudantium <a href="">Learn more</a></p>
        </div>
        </div>
        </div>
        <div class="col-md-3">
        <div class="blog-image">
        <img src="{{url('/image/react.jpg')}}" alt="">
        <div class="blog-details">
        <h3> Introduction to React</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum sint dolore iusto! Iusto laudantium id voluptatibus aspernatur ducimus tempore minus nobis accusamus molestias, eligendi nisi eaque rerum illo.<br><a href="">Learn more </a></p>
        </div>
        </div>
        </div>
        <div class="col-md-3">
        <div class="blog-image">
        <img src="{{url('/image/django.jpg')}}" alt="">
        <div class="blog-details">
          <h3>Introduction to Django</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consequatur incidunt error tempora hic laudantium consequuntur, voluptate adipisci esse vitae nisi maiores, magnam molestias impedit quod tempore,  <a href="">Learn more</a></p>
        </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  <section>
  <div id="testimonial">
    <h1>Testimonial</h1>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="testimonial-image">
            <img src="{{url('/image/testi-1.png')}}" alt="">
            <div class="detail-para">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ratione vel ex fugit! Molestias sequi, aliquam blanditiis reprehenderit excepturi natus, beatae molestiae at aspernatur nihil dignissimos iste accusantium odio quos.</p>
            <div class="name">
              <h3>John Crack</h3>
              <p>Student</p>
              </div>
            </div>
            </div>
            </div>
        <div class="col-md-3">
          <div class="testimonial-image">
            <img src="{{url('/image/testi-1.png')}}" alt="">
            <div class="detail-para">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ratione vel ex fugit! Molestias sequi, aliquam blanditiis reprehenderit excepturi natus, beatae molestiae at aspernatur nihil dignissimos iste accusantium odio quos.</p>
            <div class="name">
              <h3>John Crack</h3>
              <p>Student</p>
              </div>
            </div>
            </div>
            </div>
        <div class="col-md-3">
          <div class="testimonial-image">
            <img src="{{url('/image/testi-1.png')}}" alt="">
            <div class="detail-para">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ratione vel ex fugit! Molestias sequi, aliquam blanditiis reprehenderit excepturi natus, beatae molestiae at aspernatur nihil dignissimos iste accusantium odio quos.</p>
            <div class="name">
              <h3>John Crack</h3>
              <p>Student</p>
              </div>
            </div>
            </div>
            </div>
        <div class="col-md-3">
          <div class="testimonial-image">
            <img src="{{url('/image/testi-1.png')}}" alt="">
            <div class="detail-para">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ratione vel ex fugit! Molestias sequi, aliquam blanditiis reprehenderit excepturi natus, beatae molestiae at aspernatur nihil dignissimos iste accusantium odio quos.</p>
            <div class="name">
              <h3>John Crack</h3>
              <p>Student</p>
              </div>
            </div>
            </div>
            </div>
            </div>
            </div>
    </div>
  </section>
  <section>
  <div id="contact">
    <h1>Contact</h1>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="contact-form">
            <form action="">
              <h3>Contact us</h3>
              <label for="">Name</label><br>
              <input type="text" name="name" placeholder="Enter Full Name"><br>
              <label for="">Email</label><br>
              <input type="email" name="email" placeholder="Enter Email Address"><br>
              <label for="">Mobile No.</label><br>
              <input type="text" name="phone" placeholder="Enter Mobile Number"><br>
              <label for="">Occupation</label><br>
              <input type="text" name="occup" placeholder="Enter occupation"><br>
              <label for="">Image</label><br>
              <input type="file" name="image" placeholder="Image"><br>
              <button type="submit" name="submit">Submit</button>
            </form>
          </div>
          </div>
          <div class="col-md-6">
            <div class="contact-me">
              <h3>Contact me</h3>
              <p>New York, NY 10012, US</p>
              <p>md7505013@gmail.com</p>
              <p>+91-9122726758</p>
            </div>
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14663.249719279447!2d77.40594411523192!3d23.249911707412025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c4262a9e81025%3A0xd38c98743534091!2sJahangirabad%2C%20Bhopal%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1629711947805!5m2!1sen!2sin" width="600" height="320" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
          </div>
          </div>
          </div>
  </section>
@endsection