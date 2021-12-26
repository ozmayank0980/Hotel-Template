<?php
 require('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Shanti Inn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<style>
    *
    {
      font-family: 'Poppins', sans-serif;
    }
    .h-font
    {
        font-family: 'Merienda', cursive;
    }
    .av-form
    {
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }
    @media screen and (max-width:575px) {
     .av-form
     {
       margin-top: 0px;
       padding: 0 35px;
     }
      
    }
</style>
</head>
<body>

    <div class=" container-fluid menu sticky-top" >
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-0 py-lg-2 shadow">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fs-bold h-font fs-3" href="index.php"><span class="navbar-brand me-5 fs-bold h-font fs-3" style="color: red;">HOTEL </span> <BR/>SHANTI INN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">About Us</a>
        </li>
      </ul>
      <div class="d-flex">
        <button class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#LoginModal">>Login</button>
        <button class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#RegisterModal">Register</button>
</div>
    </div>
  </div>
</nav>
    </div>
    <!--Login Modal -->
<div class="modal fade" id="LoginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form method="post">
               <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-circle fs-3 me-2"></i> User Login</h5>
        <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control shadow-none" name="email_user">
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control shadow-none" name="password">
      </div>
      <div class="d-flex align-items-center justify-content-between mb-2 ">
          <button class="btn btn-dark shadow-none" name="login">Login</button>
          <a href="javascript:void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
      </div>
      </div>   
        </form>

    </div>
  </div>
</div>
    <!--Register Modal -->
    <div class="modal fade" id="RegisterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form method="post">
               <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-lines-fill fs-3 me-2"></i> User Registration</h5>
        <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
          Note: Your detail must be match with your ID (Aadhar Card , Passport , driving Licence etc.) that will be required Check-In
      </span>
      <div class="container-fluid">
          <div class="row ">
              <div class="col-sm-6 ps-0 mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control shadow-none">  
              </div>
              <div class="col-sm-6 p-0 mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control shadow-none">  
              </div>
          </div>
          <div class="row">
              <div class="col-sm-6 ps-0 mb-3">
                <label class="form-label">Mobile No.</label>
                <input type="number" name="mobno" class="form-control shadow-none">  
              </div>
              <div class="col-sm-6 p-0 mb-3">
                <label class="form-label">Picture</label>
                <input type="file" name="picture" class="form-control shadow-none">  
              </div>
          </div>
          <div class="row">
              <div class="col-sm-12 ps-0 mb-3">
                <label class="form-label">Address</label>
                <textarea class="form-control shadow-none" name="address" rows="1"></textarea>
              </div>
          </div>
          <div class="row">
              <div class="col-sm-6 ps-0 mb-3">
                <label class="form-label">Pincode</label>
                <input type="number" name="pincode" class="form-control shadow-none">  
              </div>
              <div class="col-sm-6 p-0 mb-3">
                <label class="form-label">Date of Birth</label>
                <input type="date" name="dob" class="form-control shadow-none">  
              </div>
          </div>
          <div class="row">
              <div class="col-sm-6 ps-0 mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="pass" class="form-control shadow-none">  
              </div>
              <div class="col-sm-6 p-0 mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" name="cpass" class="form-control shadow-none">  
              </div>
          </div>
          <div class="d-flex align-items-center justify-content-between mb-2 ">
          <button class="btn btn-dark shadow-none" name="register">Register</button>
          <a href="javascript:void(0)" class="text-secondary text-decoration-none">Already Register -> Login Now</a>
      </div> 
      </div>

      </div>   
        </form>

    </div>
  </div>
</div>
<!-- Crousel -->
<div class="container-fluid">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images\carousel\slider1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>HOTEL SHANTI INN</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images\carousel\slider2.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <div class="carousel-item">
      <img src="images\carousel\slider3.jpg" class="d-block w-100" alt="...">

    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<!-- Check Avability Form -->
<div class="container av-form">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded">
      <h5 class="mb-4">Check Booking Availability</h5>
      <form>
        <div class="row align-items-end">
          <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight:500;">Check-In</label>
                <input type="date" class="form-control shadow-none">  
          </div>
          <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight:500;">Check-Out</label>
                <input type="date" class="form-control shadow-none">  
          </div>
          <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight:500;">Adult</label>
          <select class="form-select shadow-none">

            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          </div>
          <div class="col-lg-2 mb-3">
            <label class="form-label" style="font-weight:500;">Children</label>
            <select class="form-select shadow-none">
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            </div>
            <div class="col-lg-1 mb-lg-3 mt-2">
              <div class="btn btn-info text-white shadow-none ">Submit</div>
            </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Our Rooms -->
<h5 class="mt-5 pt-4 mb-4 text-center fw-bold h-font fs-3">OUR ROOMS</h5>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px ; margin: auto;">
        <img src="images/rooms/r1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Deluxe Room</h5>
          <h6 class="card-title mb-4">1650/- per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1"> Features</h6>
              <span class="badge rounded-pill bg-light mb-1 text-dark text-wrap ">
               1Room
              </span>
              <span class="badge rounded-pill bg-light mb-1 text-dark text-wrap ">
                1Bathroom
               </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap mb-1">
                2Chairs
               </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap mb-1">
                1Balcony
               </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap mb-1">
                1Bed
               </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1"> Facilities</h6>
               <span class="badge rounded-pill bg-light text-dark text-wrap mb-1">
                TV
               </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap mb-1">
                AC
               </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap mb-1">
                Room-Heeter
               </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap mb-1">
                Wi-Fi
               </span>
            
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1"> Rating</h6>
               <span class="badge rounded-pill bg-light text-dark text-wrap mb-1">
                <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i>
               </span> 
          </div>
          <div class="d-flex justify-content-evenly">
          <a href="#" class="btn btn-info ">Book Now </a>
          <a href="#" class="btn btn-outline-dark ">More Details </a>
        </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px ; margin: auto;">
        <img src="images/rooms/r2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Sweet Room</h5>
          <h6 class="card-title mb-4">3000/- per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1"> Features</h6>
              <span class="badge rounded-pill bg-light mb-1 text-dark text-wrap ">
               2Room
              </span>
              <span class="badge rounded-pill bg-light mb-1 text-dark text-wrap ">
                2Bathroom
               </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap mb-1">
                5Chairs
               </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap mb-1">
                2Balcony
               </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap mb-1">
                1Bed
               </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1"> Facilities</h6>
               <span class="badge rounded-pill bg-light text-dark text-wrap mb-1">
                TV
               </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap mb-1">
                AC
               </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap mb-1">
                Room-Heeter
               </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap mb-1">
                Wi-Fi
               </span>
            
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1"> Rating</h6>
               <span class="badge rounded-pill bg-light text-dark text-wrap mb-1">
                <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i>
               </span> 
          </div>
          <div class="d-flex justify-content-evenly">
          <a href="#" class="btn btn-info ">Book Now </a>
          <a href="#" class="btn btn-outline-dark ">More Details </a>
        </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px ; margin: auto;">
        <img src="images/rooms/r3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Lobby Room</h5>
          <h6 class="card-title mb-4">4500/- per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1"> Features</h6>
              <span class="badge rounded-pill bg-light mb-1 text-dark text-wrap ">
               1Room
              </span>
              <span class="badge rounded-pill bg-light mb-1 text-dark text-wrap ">
                1Bathroom
               </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap mb-1">
                8Chairs
               </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap mb-1">
                4Sofa
               </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap mb-1">
                2Balcony
               </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1"> Facilities</h6>
               <span class="badge rounded-pill bg-light text-dark text-wrap mb-1">
                TV
               </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap mb-1">
                AC
               </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap mb-1">
                Room-Heeter
               </span>
               <span class="badge rounded-pill bg-light text-dark text-wrap mb-1">
                Wi-Fi
               </span>
            
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1"> Rating</h6>
               <span class="badge rounded-pill bg-light text-dark text-wrap mb-1">
                <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i>
               </span> 
          </div>
          <div class="d-flex justify-content-evenly">
          <a href="#" class="btn btn-info ">Book Now </a>
          <a href="#" class="btn btn-outline-dark ">More Details </a>
        </div>
        </div>
      </div>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a></div>
  </div>
</div>

<!-- Our Facilities -->
<h5 class="mt-5 pt-4 mb-4 text-center fw-bold h-font fs-3">OUR FACILITIES</h5>
<div class="container">
  <div class="row justify-content-evenly px-lg-0">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facility/wifi.png" style="width: 80px;">
      <h5 class="mt-3">Wi-Fi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facility/television.png" style="width: 80px;">
      <h5 class="mt-3">TV</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facility/ac.png" style="width: 80px;">
      <h5 class="mt-3">AC</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facility/food-service.png" style="width: 80px;">
      <h5 class="mt-3">Food Service</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facility/parked-car.png" style="width: 80px;">
      <h5 class="mt-3">Car Parking</h5>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a></div>
  </div>
    
</div>

<!-- Testimoianls -->
<h5 class="mt-5 pt-4 mb-4 text-center fw-bold h-font mb-5 fs-3">TESTIMONIALS</h5>
<div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
  <div class="carousel-inner ">
    <div class="carousel-item active">
      <div class="col-sm-8 me-auto mx-auto">
        <div class="testimonial bg-white shadow">
          <img src="images/rooms/r4.jpg"   alt="">
          <div class="name ">Full Name1</div>
          <div class="stars">
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
          </div>
          <p>OZ-TECH is founded by some young engineers who have mastered the IT sector,</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-sm-8 mx-auto me-auto">
        <div class="testimonial bg-white shadow">
          <img src="images/rooms/r4.jpg" alt="">
          <div class="name">Full Name2</div>
          <div class="stars">
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
          </div>
          <p>OZ-TECH is founded by some young engineers who have mastered the IT sector,</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-sm-8 mx-auto me-auto px-auto">
        <div class="testimonial bg-white shadow">
          <img src="images/rooms/r4.jpg" alt="">
          <div class="name">Full Name3</div>
          <div class="stars">
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
            <i class="bi bi-star"></i>
          </div>
          <p>OZ-TECH is founded by some young engineers who have mastered the IT sector,</p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Reach Us -->
<h5 class="mt-5 pt-4 mb-4 text-center fw-bold h-font fs-3">Raech Us</h5>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-4 bg-white rounded ">
      <iframe class="w-100  rounded" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3579.033510383337!2d81.23869716503062!3d26.22810068342724!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399ba148a9263af7%3A0x12aa6b4105029088!2sPOP%2082975%20Shanti%20Inn!5e0!3m2!1sen!2sin!4v1640485198554!5m2!1sen!2sin" height="320px" loading="lazy"></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4">
        <h5>Call Us</h5>
        <a href="tel: +919807369107" class="d-inline-block text-decoration-none mb-2 text-dark"><i class="bi bi-telephone-fill"></i>+919807369107</a>
        <br/>
        <a href="tel: +919807369107" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+918601672286</a>
      </div>
      <div class="bg-white p-4 rounded mb-4">
        <h5>Follow Us</h5>
        <a href="#" class="d-inline-block text-decoration-none mb-3 ">
          <span class="budge rounded fs-6 p- bg-light mb-3 text-dark">
            <i class="bi bi-twitter me-1"></i> Twitter
          </span>
      </a> 
        <br/>
        <a href="#" class="d-inline-block text-decoration-none mb-3 ">
           <span class="budge rounded fs-6 p- bg-light mb-3 text-dark">
             <i class="bi bi-youtube me-1"></i> Youtube
           </span>
       </a> 
       <br/>
       <a href="#" class="d-inline-block text-decoration-none ">
          <span class="budge fs-6 rounded p- bg-light mb-3 text-dark">
            <i class="bi bi-facebook me-1"></i> Facebook
          </span>
      </a> 
      </div>
    </div>
  </div>
  <div class="col-lg-12 text-center mt-5">
    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 mb-5 fw-bold shadow-none">Know More >>></a></div>
</div>
</div>
<!-- U Footer -->

<div class="container-fluid ms-3 me-3 bfooter bg-light text-dark">
  <div class="row">
  <div class="col-sm-2 bfoot mx-auto m-4">
  <span class="fw-bold fs-5">Pages</span>
  <li>About Us</li>
  <li>Terms & Condition</li>
  <li>FAQ</li>
  <li>Contact Us</li>
  <li>Feedback</li>
  <hr>
  <span class="fw-bold fs-5">User Section</span>
  <li>Login <i class="bi bi-key"></i></li>
  <li>Register <i class="bi bi-key"></i></li>
  </div>
  <div class="col-sm-2 m-4 bfoot  mx-auto">
    <span class="fw-bold fs-5">Menu</span>
  <li>Home</li>
  <li>About Us</li>
  <li>Features</li>
  <li>Facilities</li><hr>
  <span class="fw-bold fs-5">Gallery</span>
  <li>Picture Gallery</li>
  <li>Video Gallery</li>
  </div>
  <div class="col-sm-2 m-4 mx-auto">
  <span class="fw-bold fs-5">Where To Find Us</span><br/>
  <span class="fw-bold fs-6">Hotel Shanti Inn</span><br>
  190 , Prabhu Town<br>Beside BaBa Marriage Lawn<br>Raebareli<br>229001<hr>
  <a style="text-decoration: none; color:#4bc1a7 ;" href="#">Go To Contact Page</a>
  </div>
  <div class="col-sm-3 m-4 mx-auto">
  <span class="fw-bold fs-5">GET THE NEWS</span><br/>
  OZ-TECH is founded by some young engineers who have mastered the IT sector, whose objective is to achieve the highest position in the IT sector across the country.
<hr>
  <span class="fw-bold fs-6">STAY IN TOUCH</span><br/>
  <span><i class="bi bi-facebook fnttf"></i> &nbsp; <i class="bi bi-twitter fnttt"></i> &nbsp; <i class="bi bi-instagram  fntty"></i> &nbsp; <i class="fab fa-google fnttw"></i> &nbsp; <i class="fab fa-linkedin-in fnttl"></i></i></span>
  </div>
  </div>
  </div>
  <!-- Bfooter -->
  <div class="container ufooter bg-dark text-light">
    <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6 text-center fw-bold ">Copyright &copy; 2021 Mayank Agrahari | All Rights Reserved </div>
    <div class="col-sm-3"></div>
    </div>
    </div>
    </div>
<style>
  .testimonial img
  {
height: 100px;
width: 100px;
border-radius: 50%;
text-align: center;
  }
  .ufooter{
  line-height: 50px;
min-height: 50px;
background: linear-gradient(45deg,rgba(0,0,0,.5));
color: #4bc1a7;
}
.bfoot li
{
list-style: none;
}
.bfooter
{
min-height: 300px;
}
.contact
{
min-height: 500px;

}
.con1
{

min-height: 500px;
background: #4bc1a7;
border: 5px solid black;
}
</style>

</body>
</html>