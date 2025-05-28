<!DOCTYPE html>
<html lang="en">
<head>
  <title>GT HOLIDAYS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--font awesome link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--boostrap cdn link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link  href="../Jquery/jquery.multiselect.css" rel="stylesheet"/>
<link  href="../Jquery/style.css" rel="stylesheet" />
<link  href="../Jquery/prettify.css" rel="stylesheet" />
<!--include css file-->

<link href="{{asset('assets/styles.css')}}" rel="stylesheet">
</head>
<body>
<!-- navbar starting -->
<section class="header">
<nav class="navbar navbar-expand-sm navbar-light">
  <div class="container-fluid"> 
    <a class="navbar-brand">
  <img  class="logo ms-4"  src="{{ asset('gt holidays logo.jpg') }}" alt="logo"  width="200" height="70"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <br><br><br>
    <div class="collapse navbar-collapse"  id="collapsibleNavbar">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-dark ms-4"  href="{{route('welcome')}}" role="button">HOME</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link  text-dark ms-4 "  href="{{route('company.company')}}" role="button" >COMPANY</a>
          
        </li>

        <li class="nav-item">
          <a class="nav-link  ms-4 text-dark" href="{{route('groupoftour.groupoftour')}}" role="button">GROUP OF TOURS</a>
        </li>

        <li class="nav-item">
          <a class="nav-link  ms-4 text-dark" href="{{route('package.package')}}" role="button">PACKAGES</a>
        </li> 

        <li class="nav-item">
          <a class="nav-link  ms-4 text-dark" href="{{route('honeymoon.honeymoon')}}">HONEYMOON</a>
        </li>  

        <li class="nav-item">
          <a class="nav-link  ms-4 text-dark" href="{{route('wedding.wedding')}}">WEDDING</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link  ms-4  text-dark" href="{{route('contact.contact')}}">CONTACT</a>
        </li>
      <li class="nav-item ms-4">
      <form id="logout-form" method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn  text-dark" style="cursor:pointer;">
              <i class="fas fa-sign-out-alt"></i>
          </button>

      </form>
      </li>

   
    </ul>
    </div>
  </div>
</div>
</nav>
</section>
<!-- navbar ending -->
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #fffbea;
      color: #333;
    }

    .contact-section {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      padding: 40px;
      background-color: #fff9db;
    }

    .contact-left,
    .contact-right {
      flex: 1 1 48%;
      margin: 10px;
    }

    .contact-left img {
      width: 100%;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .contact-heading {
      text-align: center;
      color: #f0b400;
      font-size: 36px;
      font-weight: bold;
      margin-bottom: 30px;
    }

    .contact-details {
      background-color: #fff6cc;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      line-height: 1.6;
    }

    .contact-details h3 {
      color: #d4a200;
    }

    iframe {
      width: 100%;
      height: 350px;
      border: none;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 768px) {
      .contact-section {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>

  <h1 class="contact-heading pt-4">Travel Agency - Erode</h1>

  <div class="contact-section">
    <div class="contact-left">
      <img src="{{ asset('contact3.jpg') }}" style="height: 600px" alt="Company Building">
    <div class="contact-details mt-4 p-4 bg-light rounded shadow">
    <h3 class="text-theme"><i class="fas fa-address-card me-2"></i>Contact Information</h3>
    <p><i class="fas fa-map-marker-alt me-2 text-warning"></i><strong>Address:</strong> 11s/72b ColdwellColony 1st Street, Erode, Tamilnadu, India</p>
    <p><i class="fas fa-envelope me-2 text-warning"></i><strong>Email:</strong> gtholidays@gmail.com</p>
    <p><i class="fas fa-phone me-2 text-warning"></i><strong>Phone:</strong> +0461 73823822</p>
    <p><i class="fas fa-clock me-2 text-warning"></i><strong>Hours:</strong> Monday - Saturday, 9AM - 6PM</p>
    <p>
        <i class="fas fa-share-alt me-2 text-warning"></i><strong>Follow Us:</strong>
        <a href="#" class="text-decoration-none text-dark me-2"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="text-decoration-none text-dark me-2"><i class="fab fa-instagram"></i></a>
        <a href="#" class="text-decoration-none text-dark"><i class="fab fa-twitter"></i></a>
    </p>
</div>

    </div>

    <div class="contact-right">
        <iframe id="map-canvas" class="map_part" width="425"  height="500"  frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=thoothukudi&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://embedgooglemaps.com">how to embed google maps generator</a> and <a href="https://casinomga.se/" style="height: 820px">mga casino</a></iframe>
    </div>
  </div>


  <div class="container pt-4">
   <div class="row">
      <div class="col-12">
         <h2 class="fw-bold text-warning">Why Choose GT Holidays as Your Travel Agent in Erode?</h2>
         <p class="mt-3 text-secondary">
            GT Holidays is South India's most trusted travel brand, known for delivering flawless experiences and unmatched customer satisfaction. With deep roots in the hospitality industry and offices across South India, we specialize in crafting personalized, stress-free travel experiences. Our experienced travel agents in Erode are ready to plan every detail of your journey—from budget to luxury—ensuring you enjoy the getaway you deserve.
         </p>
         <p class="text-secondary">
            Great vacations start with great planning. Our Erode tour experts assist with bookings, local experiences, entry tickets, and culinary choices—so you don’t have to worry about a thing. These "small" details can make or break a trip. That’s why our hands-on team ensures every aspect is handled with precision. When you choose GT Holidays, you choose comfort, convenience, and confidence—only a premium agency like ours can deliver that.
         </p>
      </div>
   </div>
</div>

<!-- Expectations Section -->
<div class="container pt-4">
   <div class="row">
      <div class="col-12">
         <h2 class="fw-bold text-warning">What Should You Expect from a Travel Agency in Erode?</h2>
         <p class="mt-3 text-secondary">
            A travel agency earns its reputation through real customer experiences. Whether you’re planning a quick weekend escape or a long, relaxing getaway—you should always feel in control. GT Holidays is a name customers trust, and for good reason. With our “Customer Delight” approach, we consistently exceed expectations and deliver trips that are both seamless and memorable. Our travel packages span every budget, ensuring luxury doesn't come with a hefty price tag.
         </p>
         <p class="text-secondary">
            From customized itineraries and visa processing to ticketing and guided tours, GT Holidays manages it all under one roof. Our professional team is committed to providing honest, practical travel advice and personalized support from day one. You’ll never feel lost with GT Holidays—we make it our mission to turn your travel dreams into reality.
         </p>
         <p class="text-secondary">
            Looking for a truly hassle-free travel experience? Visit GT Holidays, the best-rated travel agency in Erode. Sit back, relax, and leave the details to us. Your dream vacation is just a call away.
         </p>
         <p class="text-secondary">
            Don’t forget to follow our <a href="#" class="text-warning fw-semibold text-decoration-none">Instagram</a> for the hottest travel deals and flash discounts!
         </p>
      </div>
   </div>
</div>

   </div>
</div>


<!-- form page starting -->
<div class="container body ">
  <div class="contact-form pt-3" >
  <div class="row pt-5">
    <div class="col-md-6 pt-5">
      <center><h3 class="pt-5 text-warning">STAY CONNECTED</h3></center>
      <center><h3 class="pt-4 text-warning">email: -gtholidays@gmail.com</h3><center>
      <center><h3 class="pt-4 text-warning">mobile: - 939749398</h3></center>
      <hr>
</div>

<div class="col-md-6 pt-2"  style="float: right">
<center><h4 class="text-light">Book Your Dream Packages</h4>
<div class="form-group pt-3">
    <input type="text" name="name" placeholder=" NAME *"class="form-control" id="name">
  </div>

  <div class="form-group pt-4" >
    <input type="text" name="name" placeholder="  CITY   OF RESITENCE  *" class="form-control" id="name">
  </div>

  <div class="form-group pt-4" >
    <input type="text" name="name" placeholder="  EMAIL  *" class="form-control" id="name">
  </div>

  <div class="form-group pt-4" >
    <input type="text" name="name" placeholder="  PHONE NUMBER  *" class="form-control" id="name">
  </div>

  <div class="form-group pt-4" >
    <input type="text" name="name" placeholder="  WHATSAPP  *" class="form-control" id="name">
  </div>
  
  <div class="form-group pt-4" >
    <input type="text" name="name" placeholder=" TRAVEL DESTINATION *" class="form-control" id="name">
  </div>

  <div class="form-group pt-4" >
    <input type="text" name="name" placeholder=" DATE OF TRAVEL *" class="form-control" id="name">
  </div>
 
  <div class="form-group pt-4" >
    <input type="text" name="name" placeholder=" TRAVEL DESTINATION *" class="form-control" id="name">
  </div>

  <div class="form-group pt-4" >
    <input type="text" name="name" placeholder=" NUMBER OF TRAVEL *" class="form-control" id="name">
  </div>

  <div class="form-group pt-4" >
    <input type="text" name="name" placeholder=" VOCATION TYPE *" class="form-control" id="name">
  </div>

  <div class="form-group  pt-4">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-warning">SUBMIT</button>
    </div>
  </div>
</center>  
</div>
  </div>
</div>
</div> 
<!-- form page ending -->
<!-- enquiry form -->
<div class="container pt-5">
  <div class="enquiry-form">
  <a href="#" class="btn btn-warning text-dark"  role="button">ENQUIRY FORM</a>
</div>
</div>
<br><br><br>
<!-- enquiry form ending -->
<!-- footer starting -->
<footer class="footer text-center bg-dark  text-lg-start">
    <div class="container-fluid  ">
      <div class="row">
        <!-- Have You Questions Section -->
        
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <div class="row md-4">
          <h5 class="text-uppercase text-secondary ">Corporate Office</h5>
          <p class="text-secondary">
          GT Holidays Pvt LTD,<br>
          Novel Tech Park,<br>
          Opposite to 1 MG Mall,<br>
          MG Road, Bangalore – 560042<br>
          Karnataka, India.
          </p>
</div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase text-secondary">Head Office</h5>
          <p class="text-secondary">
          GT Holidays Pvt LTD,
          No.1, Gemini Parsn,
          Kodambakkam High Road,
          Nungambakkam, Chennai – 600006
          Tamilnadu, India.
          </p>
</div>

        <!-- Links Section -->

        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase text-secondary">LINKS</h5>
          <ul class="list-unstyled">
            <li><a href="" class="text-secondary">HOME</a></li>
            <li><a href="" class="text-secondary">COMPANY</a></li>
            <li><a href="" class="text-secondary">GROUP OF TOURS</a></li>
            <li><a href="" class="text-secondary">HONEYMOON</a></li>
            <li><a href="" class="text-secondary">WEDDING</a></li>
            <li><a href="" class="text-secondary">CONTACT</a></li>
          </ul>
        </div>

        <!-- Follow Us Section -->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <p class="text-uppercase text-secondary">follow us</p>
          <p class="text-uppercase text-secondary">91+438873477</p>
          <a href="#!" class="btn btn-light btn-floating m-1" role="button"><i class="fab fa-facebook"></i></a>
          <a href="#!" class="btn btn-light btn-floating m-1" role="button"><i class="fab fa-twitter"></i></a>
          <a href="#!" class="btn btn-light btn-floating m-1" role="button"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </footer>



</body>
</html>
