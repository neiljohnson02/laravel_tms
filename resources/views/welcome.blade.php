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

<meta name="csrf-token" content="{{ csrf_token() }}">
<!--include css file-->

<link href="assets/styles.css" rel="stylesheet">
</head>
<body>
<!-- navbar starting -->
<section class="header">
<nav class="navbar navbar-expand-sm navbar-light">
  <div class="container-fluid"> 
    <a class="navbar-brand">
  <img  class="logo ms-4"  src="gt holidays logo.jpg" alt="logo"  width="200" height="70"></a>
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
<!-- carousel starting -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active c-item">
      <img src="{{asset('welcomecarousel1.jpg')}}" class="d-block" style="width: 100%;" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="{{asset('welcomecarousel2.jpg')}}" class="d-block " style="width: 100%;" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h2 class="contianer  text-light">
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="{{asset('welcomecarousel3.jpg')}}" class="d-block" style="width: 100%;" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
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
<!-- carousel ending -->
<!-- card starting -->
<center><h3 class="container-fluid pt-4 text-dark">TRENDING TOURS</h3></center>
<center><div class="container cards-wrapper  my-4">
  <div class="row gy-3">
  <div class="col-md-4"> 
  <div class="card" style="width:330px">
    <a href="{{route('home.dubai1')}}" role="button"><img class="card-img-top" src="duabi tourism pic.jpg" alt="Card image" style="width:100%"></a>
    <div class="card-body">
   <p class="text-center"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>Dubai, United Arab Emirates
    </p>
      <h5 class="card-title text-center">Dubai City Of Packages</h5>
      <p class="card-text text-center" ><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z"/></svg>3 Nights and 4 Days</p>
    </div>
    </div>
    </div>
  <div class="col-md-4"> 
  <div class="card" style="width:330px">
    <a href="{{route('home.singapore1')}}"><img class="card-img-top" src="singapore card 1.jpg" alt="Card image" style="width:100%"></a>
    <div class="card-body">
   <p class="text-center"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>Singapore ,Waterfront Merlion Park.
    </p>
      <h5 class="card-title text-center">Amazing Singpore Packages</h5>
      <p class="card-text text-center" ><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z"/></svg>3 Nights and 4 Days</p>
      
     </div>
    </div>
   </div>
   <div class="col-md-4"> 
  <div class="card" style="width:330px">
    <a href="{{route('home.france1')}}"><img class="card-img-top" src="france card 3.jpg" alt="Card image" style="width:100%"></a>
    <div class="card-body">
   <p class="text-center"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>France ,Tower in Paris
    </p>
      <h5 class="card-title text-center">Amazing France Packages</h5>
      <p class="card-text text-center" ><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z"/></svg>3 Nights and 4 Days</p>
      
     </div>
    </div>
   </div>
  </div><br>
  <div class="row">
  <div class="col-md-4"> 
  <div class="card" style="width:330px">
    <a href="{{route('home.china1')}}"><img class="card-img-top" src="china card.jpg" alt="Card image" style="width:100%"></a>
    <div class="card-body">
   <p class="text-center"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>China, Great Wall Of China
    </p>
      <h5 class="card-title text-center">Amazing China Packages</h5>
      <p class="card-text text-center" ><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z"/></svg>3 Nights and 4 Days</p>
    </div>
    </div>
    </div>
  <div class="col-md-4"> 
  <div class="card" style="width:320px">
    <a href="{{route('home.usa1')}}"><img class="card-img-top" src="usa card.jpg" alt="Card image" style="width:100%"></a>
    <div class="card-body">
   <p class="text-center"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>USA ,State Of Liberty.
    </p>
      <h5 class="card-title text-center">Amazing USA Packages</h5>
      <p class="card-text text-center" ><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z"/></svg>3 Nights and 4 Days</p>
      
     </div>
    </div>
   </div>
   <div class="col-md-4"> 
  <div class="card" style="width:330px">
    <a href="{{route('home.germany1')}}"><img class="card-img-top" src="italy card 2 (2).jpg" alt="Card image" style="width:100%"></a>
    <div class="card-body">
   <p class="text-center"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>Germany ,Neuschwanstein Castle
    </p>
      <h5 class="card-title text-center">Amazing Germany Packages</h5>
      <p class="card-text text-center" ><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z"/></svg>3 Nights and 4 Days</p> 
     </div>
    </div>
   </div>
</div>
</div>
</div>
</div></center>
<!-- card ending -->
  <!-- premium package start -->
<div class="container pt-5">
    <div class="text-center">
        <!-- Heading with Logo/Icon -->
        <h2 class="text-uppercase fw-bold mb-4 gradient-heading text-warning d-flex justify-content-center align-items-center">
            <img src="premium.png" alt="Premium Tour Logo" style="width: 100px; height: auto; margin-right: 15px;"> 
            Exclusive Premium Tours
        </h2>
        <h3 class="text-muted mb-5">Experience the World’s Most Luxurious Destinations</h3>
    </div>

    <!-- Card Grid -->
    <div class="row justify-content-center g-4">
        <!-- Dubai -->
        <div class="col-lg-4 col-md-6">
            <div class="card shadow-lg border-0" style="border-radius: 15px;">
                <a href="{{ route('premium.dubai2') }}">
                    <img src="dubai.jpg" class="card-img-top" style="height: 500px; border-radius: 15px;" alt="Dubai">
                    <div class="card-body">
                        <h5 class="card-title text-center text-uppercase font-weight-bold text-warning">Dubai</h5>
                        <p class="card-text text-center text-muted">Experience the luxurious lifestyle of Dubai, full of grandeur and opulence.</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- France -->
        <div class="col-lg-4 col-md-6">
            <div class="card shadow-lg border-0" style="border-radius: 15px;">
                <a href="{{ route('premium.france2') }}">
                    <img src="france.jpg" class="card-img-top" style="height: 500px; border-radius: 15px;" alt="France">
                    <div class="card-body">
                        <h5 class="card-title text-center text-uppercase font-weight-bold text-warning">France</h5>
                        <p class="card-text text-center text-muted">Indulge in a romantic and luxurious experience in the heart of France.</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Maldives -->
        <div class="col-lg-4 col-md-6">
            <div class="card shadow-lg border-0" style="border-radius: 15px;">
                <a href="{{ route('premium.maldivs2') }}">
                    <img src="maldivs.jpg" class="card-img-top" style="height: 500px; border-radius: 15px;" alt="Maldives">
                    <div class="card-body">
                        <h5 class="card-title text-center text-uppercase font-weight-bold text-warning">Maldives</h5>
                        <p class="card-text text-center text-muted">Revel in the serene luxury of private villas and pristine beaches.</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Germany -->
        <div class="col-lg-4 col-md-6">
            <div class="card shadow-lg border-0" style="border-radius: 15px;">
                <a href="{{ route('premium.germany2') }}">
                    <img src="germany.jpg" class="card-img-top" style="height: 500px; border-radius: 15px;" alt="Germany">
                    <div class="card-body">
                        <h5 class="card-title text-center text-uppercase font-weight-bold text-warning">Germany</h5>
                        <p class="card-text text-center text-muted">Tour the iconic cities of Germany in luxury, from castles to modern wonders.</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Taj Mahal -->
        <div class="col-lg-4 col-md-6">
            <div class="card shadow-lg border-0" style="border-radius: 15px;">
                <a href="{{ route('premium.tajmahal2') }}">
                    <img src="tajmahal.jpg" class="card-img-top" style="height: 500px; border-radius: 15px;" alt="Taj Mahal">
                    <div class="card-body">
                        <h5 class="card-title text-center text-uppercase font-weight-bold text-warning">Taj Mahal</h5>
                        <p class="card-text text-center text-muted">Marvel at the grandeur of India’s most iconic and luxurious monument.</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- South Africa -->
        <div class="col-lg-4 col-md-6">
            <div class="card shadow-lg border-0" style="border-radius: 15px;">
                <a href="{{ route('premium.southafrica') }}">
                    <img src="southafrica.jpg" class="card-img-top" style="height: 500px; border-radius: 15px;" alt="South Africa">
                    <div class="card-body">
                        <h5 class="card-title text-center text-uppercase font-weight-bold text-warning">South Africa</h5>
                        <p class="card-text text-center text-muted">Embark on a premium safari experience in the stunning landscapes of South Africa.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


  <!-- premium package end -->
<!-- Ultra ProMax Welcome Section -->
<!-- paragraphp starting -->
<div class="container py-5">
    <div class="text-center mb-4">
        <h2 class="display-5 fw-bold text-uppercase text-warning">Welcome to GT Holidays</h2>
        <hr class="w-25 mx-auto border-success border-3">
    </div>
    <div class="bg-light p-4 p-md-5 rounded-4 shadow-lg">
        <p class="lead fs-5 text-dark lh-lg">
            <span class="fw-bold text-success">GT Holidays Pvt. Ltd</span> is a proud subsidiary of <span class="text-primary fw-bold">Sangam Group of Hotels</span> – one of South Tamil Nadu’s largest and most reputable hotel chains. Established in <span class="fw-bold text-decoration-underline">1968</span>, the Sangam Group has upheld a legacy of impeccable service and exceptional hospitality for over four decades, with <span class="text-danger fw-bold">19 luxury assets</span> across South India.
        </p>
        <p class="lead fs-5 text-dark lh-lg">
            Built on this legacy, GT Holidays is committed to delivering <span class="text-warning fw-semibold">unforgettable travel experiences</span> and personalized service. Whether you're planning a once-in-a-lifetime holiday, a corporate retreat, or an educational tour, GT Holidays offers a seamless and rewarding journey tailored to your needs.
        </p>
        <p class="lead fs-5 text-dark lh-lg">
            As one of the most trusted <span class="text-primary fw-semibold">Destination Management Companies</span> in South India, we specialize in everything from <span class="fw-bold text-info">luxury travel</span> and <span class="text-info fw-bold">incentive trips</span> to <span class="text-info fw-bold">business travel</span>, <span class="text-info fw-bold">school/college excursions</span>, and <span class="text-info fw-bold">custom bookings</span> for hotels, rail, and transport.
        </p>
        <p class="lead fs-5 text-dark lh-lg">
            Explore why GT Holidays stands out in the travel industry — blending excellence, experience, and efficiency to craft journeys that are as unique as you are.
        </p>
    </div>
</div>
<!--paragraph ending-->

<!-- form page starting -->
<div class="container body ">
  <div class="contact-form pt-3" >
  <div class="row pt-5">
    <div class="col-md-6 pt-5">
      <center><h3 class="pt-5 text-light">STAY CONNECTED</h3></center>
      <center><h3 class="pt-4 text-light">email: -gtholidays@gmail.com</h3><center>
      <center><h3 class="pt-4 text-light">mobile: - 939749398</h3></center>
      <hr>
</div>

<div class="col-md-6 pt-2" style="float: right">
    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif
    <form action="" id="emailform" method="POST">
        {{csrf_field()}}
        <center>
          <div id="message"></div> 

           <div id="responseMessage" style="color: green;"></div>
            <h4 class="text-light">Book Your Dream Packages</h4>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group pt-3">
                <input type="text" name="name" placeholder="NAME *" value="{{ old('name') }}" class="form-control" id="name">
            </div>

            <div class="form-group pt-4">
                <input type="text" name="cityofresitense" value="{{ old('cityofresitense') }}" placeholder="CITY OF RESITENCE *" class="form-control" id="cityofresitence">
            </div>

            <div class="form-group pt-4">
                <input type="text" name="email" placeholder="EMAIL *" value="{{ old('email') }}" class="form-control" id="email">
            </div>

            <div class="form-group pt-4">
                <input type="text" name="phonenumber" placeholder="PHONE NUMBER *" value="{{ old('phonenumber') }}" class="form-control" id="phonenumber">
            </div>

            <div class="form-group pt-4">
              <select name="tourtype" id="tourtype" class="form-control" required>
                  <option value="">-- Select Your Tour --</option>
                  <option value="Trending Tour" {{ old('tourtype') == 'Trending Tour' ? 'selected' : '' }}>Trending Tour</option>
                  <option value="Premium Tour" {{ old('tourtype') == 'Premium Tour' ? 'selected' : '' }}>Premium Tour</option>
                  <option value="Ultimate Group of Tours" {{ old('tourtype') == 'Ultimate Group of Tours' ? 'selected' : '' }}>Ultimate Group of Tours</option>
                  <option value="Fully Reserved Group of Tour" {{ old('tourtype') == 'Fully Reserved Group of Tour' ? 'selected' : '' }}>Fully Reserved Group of Tour</option>
                  <option value="Package of India" {{ old('tourtype') == 'Package of India' ? 'selected' : '' }}>Package of India</option>
                  <option value="Package of International" {{ old('tourtype') == 'Package of International' ? 'selected' : '' }}>Package of International</option>
                  <option value="Honeymoon Package of India" {{ old('tourtype') == 'Honeymoon Package of India' ? 'selected' : '' }}>Honeymoon Package of India</option>
                  <option value="Honeymoon Package of International" {{ old('tourtype') == 'Honeymoon Package of International' ? 'selected' : '' }}>Honeymoon Package of International</option>
              </select>
          </div>


            <div class="form-group pt-4">
                <input type="text" name="whatsapp" placeholder="WHATSAPP *" value="{{ old('whatsapp') }}" class="form-control" id="whatsapp">
            </div>

            <div class="form-group pt-4">
                <input type="text" name="traveldestination" placeholder="TRAVEL DESTINATION *" value="{{ old('traveldestination') }}" class="form-control" id="traveldestination">
            </div>

            <div class="form-group pt-4">
                <input type="text" name="dateoftravel" placeholder="DATE OF TRAVEL *" value="{{ old('dateoftravel') }}" class="form-control" id="dateoftravel">
            </div>

            <div class="form-group pt-4">
                <input type="text" name="numberoftravelers" placeholder="NUMBER OF TRAVELERS *" value="{{ old('numberoftravelers') }}" class="form-control" id="numberoftravel">
            </div>

            <div class="form-group pt-4">
                <input type="text" name="vocationtype" placeholder="VOCATION TYPE *" value="{{ old('vocationtype') }}" class="form-control" id="vocationtype">
            </div>

            <div class="form-group pt-4">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-warning" id="submit">SUBMIT</button>
                </div>
            </div>
        </center>
    </form>
   
</div>
</div>
</div>
</div><br><br>

 <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
  
$(document).ready(function () {
    $('#emailform').on('submit', function (e) {
        e.preventDefault();

        let formData = $(this).serialize();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{ route('welcomeinsert') }}",
            type: "POST",
            data: formData,
            success: function (res) {
                if (res.success) {
                    $('#message')
                        .html('<div class="alert alert-success">' + res.message + '</div>')
                        .hide()
                        .fadeIn(500);

                    // Remove or comment out the redirection
                    setTimeout(function () {
                        $('#message').fadeOut(500); // Simply fade out without redirecting
                    }, 3000);
                    $('#emailform')[0].reset();
                }
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    let errorHtml = '<div class="alert alert-danger"><ul>';
                    $.each(errors, function (key, value) {
                        errorHtml += '<li>' + value[0] + '</li>';
                    });
                    errorHtml += '</ul></div>';
                    $('#message').html(errorHtml);
                }
            }
        });
    });
});

</script>



<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script> -->

<!-- form page ending -->
<!-- enquiry form -->
<div class="container" >
  <div class="enquiry-form">
  <a href="#" class="btn btn-warning text-dark"  role="button">ENQUIRY FORM</a>
</div>
</div>
<br><br><br>
<!-- enquiry form ending -->
<!-- footer starting -->
<footer class="footer text-center text-lg-start bg-dark text-white pt-5 pb-4">
  <div class="container">
    <div class="row text-start">
      
      <!-- Corporate Office -->
      <div class="col-lg-3 col-md-6 mb-4">
        <h5 class="text-uppercase fw-bold text-warning mb-3">Corporate Office</h5>
        <p class="text-light small">
          GT Holidays Pvt. Ltd,<br>
          Novel Tech Park,<br>
          Opposite to 1 MG Mall,<br>
          MG Road, Bangalore – 560042,<br>
          Karnataka, India.
        </p>
      </div>

      <!-- Head Office -->
      <div class="col-lg-3 col-md-6 mb-4">
        <h5 class="text-uppercase fw-bold text-warning mb-3">Head Office</h5>
        <p class="text-light small">
          GT Holidays Pvt. Ltd,<br>
          No.1, Gemini Parsn,<br>
          Kodambakkam High Road,<br>
          Nungambakkam, Chennai – 600006,<br>
          Tamil Nadu, India.
        </p>
      </div>

      <!-- Links -->
      <div class="col-lg-3 col-md-6 mb-4">
        <h5 class="text-uppercase fw-bold text-warning mb-3">Quick Links</h5>
        <ul class="list-unstyled text-light small">
          <li class="mb-2"><a href="#" class="text-decoration-none text-light">Home</a></li>
          <li class="mb-2"><a href="#" class="text-decoration-none text-light">Company</a></li>
          <li class="mb-2"><a href="#" class="text-decoration-none text-light">Group of Tours</a></li>
          <li class="mb-2"><a href="#" class="text-decoration-none text-light">Honeymoon</a></li>
          <li class="mb-2"><a href="#" class="text-decoration-none text-light">Wedding</a></li>
          <li class="mb-2"><a href="#" class="text-decoration-none text-light">Contact</a></li>
        </ul>
      </div>

      <!-- Follow Us -->
      <div class="col-lg-3 col-md-6 mb-4">
        <h5 class="text-uppercase fw-bold text-warning mb-3">Follow Us</h5>
        <p class="text-light small mb-1">Phone: +91 43887 3477</p>
        <div class="d-flex justify-content-start">
         <!-- Facebook - Blue -->
        <a href="#" class="btn btn-primary btn-sm rounded-circle me-3" role="button">
          <i class="fab fa-facebook-f"></i>
        </a>

        <!-- Twitter - Sky Blue -->
        <a href="#" class="btn btn-info btn-sm rounded-circle me-3" role="button">
          <i class="fab fa-twitter"></i>
        </a>

        <!-- Instagram - Pink -->
        <a href="#" class="btn btn-danger btn-sm rounded-circle" role="button">
          <i class="fab fa-instagram"></i>
        </a>

        </div>
      </div>

    </div>
    <hr class="border-light">
    <div class="text-center text-light small">
      © 2025 GT Holidays Pvt. Ltd. All rights reserved.
    </div>
  </div>
</footer>

  
</body>


</html>
