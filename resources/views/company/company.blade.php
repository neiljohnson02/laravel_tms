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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap Icons --> <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<!--include css file-->
<style>
  <style>
  /* Custom styles */
  #our-story, #our-mission, #our-vision, #ceo-note, #about-us, #achievements, #media {
    padding: 60px 0;
  }

  .card-img-top {
    height: 200px;
    object-fit: cover;
  }

  
</style>

</style>
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



<!-- carousel starting -->
<section id="our-story" class="py-5" style="background-color: #fff8e1;"> <div class="container"> <div class="text-center mb-5"> <h2 class="fw-bold" style="color: #ffc107;"><i class="bi bi-globe-americas me-2"></i>Our Story</h2> <p class="lead text-secondary">From Humble Beginnings to Global Journeys</p> </div> <div class="row"> <div class="col-md-4 text-center mb-4"> <div class="p-4 shadow-sm rounded" style="background-color: #ffffff;"> <i class="bi bi-lightbulb-fill display-4 text-warning mb-3"></i> <h5 class="fw-semibold">The Dream</h5> <p class="text-muted">UltraProMax Travels was founded in 2010 with a simple vision: to make travel effortless, memorable, and inspiring for everyone.</p> </div> </div> <div class="col-md-4 text-center mb-4"> <div class="p-4 shadow-sm rounded" style="background-color: #ffffff;"> <i class="bi bi-person-lines-fill display-4 text-warning mb-3"></i> <h5 class="fw-semibold">The Journey</h5> <p class="text-muted">From a single desk to serving over 500,000 happy explorers in 40+ countries, our journey is built on trust, service, and passion.</p> </div> </div> <div class="col-md-4 text-center mb-4"> <div class="p-4 shadow-sm rounded" style="background-color: #ffffff;"> <i class="bi bi-stars display-4 text-warning mb-3"></i> <h5 class="fw-semibold">The Promise</h5> <p class="text-muted">We deliver more than trips—we craft soul-touching adventures that connect cultures, hearts, and unforgettable destinations.</p> </div> </div> </div> </div> </section>

<section id="our-mission" class="py-5" style="background-color: #fffef3;"> <div class="container"> <div class="text-center mb-5"> <h2 class="fw-bold" style="color: #ffc107;"> <i class="bi bi-compass-fill me-2"></i>Our Mission </h2> <p class="lead text-secondary">Empowering Exploration Through Trust, Technology & Culture</p> </div> <div class="row align-items-center"> <div class="col-md-6 mb-4"> <img src="{{asset('company1.jpg')}}" style="height: auto;" alt="Mission Image" class="img-fluid rounded shadow"> </div> <div class="col-md-6"> <ul class="list-unstyled fs-5 text-dark"> <li class="mb-3"> <i class="bi bi-check2-circle text-warning me-2"></i> To make travel accessible, safe, and enriching for everyone. </li> <li class="mb-3"> <i class="bi bi-check2-circle text-warning me-2"></i> To design journeys that spark joy, foster connections, and create lifelong memories. </li> <li class="mb-3"> <i class="bi bi-check2-circle text-warning me-2"></i> To use innovative tools and local partnerships to deliver seamless travel experiences. </li> <li class="mb-3"> <i class="bi bi-check2-circle text-warning me-2"></i> To build a global travel community guided by empathy, diversity, and integrity. </li> </ul> </div> </div> </div> </section>


<!--our vision -->

 <section id="our-vision" class="py-5" style="background-color: #fffdf0;"> <div class="container"> <div class="text-center mb-5"> <h2 class="fw-bold" style="color: #ffc107;"> <i class="bi bi-eye-fill me-2"></i>Our Vision </h2> <p class="lead text-secondary">Inspiring the World to Explore With Heart & Purpose</p> </div> <div class="row align-items-center"> <div class="col-md-6 order-md-2 mb-4"> <img src="{{asset('company2.jpg')}}" alt="Vision Image" class="img-fluid rounded shadow"> </div> <div class="col-md-6 order-md-1"> <ul class="list-unstyled fs-5 text-dark"> <li class="mb-3"> <i class="bi bi-arrow-up-right-circle-fill text-warning me-2"></i> To become a global benchmark in ethical, immersive, and sustainable travel experiences. </li> <li class="mb-3"> <i class="bi bi-arrow-up-right-circle-fill text-warning me-2"></i> To ignite wanderlust in every soul, turning dreams into unforgettable journeys. </li> <li class="mb-3"> <i class="bi bi-arrow-up-right-circle-fill text-warning me-2"></i> To lead with innovation and empathy in redefining the way the world travels. </li> <li class="mb-3"> <i class="bi bi-arrow-up-right-circle-fill text-warning me-2"></i> To cultivate a community of explorers united by curiosity, respect, and joy. </li> </ul> </div> </div> </div> </section>

<!--CEO NOTE -->
<section id="ceo-note" class="py-5" style="background-color: #fffdea;"> <div class="container"> <div class="text-center mb-5"> <h2 class="fw-bold" style="color: #ffc107;"> <i class="bi bi-person-badge-fill me-2"></i>CEO's Note </h2> <p class="lead text-secondary">A message from the heart of UltraProMax Travels</p> </div> <div class="row justify-content-center align-items-center"> <div class="col-md-4 text-center mb-4 mb-md-0"> <img src="{{asset('company4.png')}}" alt="CEO Image" class="img-fluid rounded-circle shadow" style="border: 4px solid #ffc107;"> <h5 class="mt-3 mb-0 fw-bold text-dark">Mr.Johnson</h5> <p class="text-muted mb-0">Founder & CEO, GT Holidays</p> </div> <div class="col-md-7"> <div class="p-4 bg-white rounded shadow-sm"> <p class="text-dark fs-5"> "Travel isn’t just about destinations; it’s about discovery—of the world and oneself. When I founded UltraProMax Travels in 2010, I wanted to do more than just plan trips. I wanted to create moments that mattered—moments that would last a lifetime. </p> <p class="text-dark fs-5"> Today, I’m proud to say that every itinerary we design, every traveler we meet, and every story we help create reflects our passion and purpose. Whether it’s a spiritual retreat in the Himalayas or a cultural tour through Europe, our promise is the same: travel with heart, travel" </p> <p class="text-end text-muted mb-0">– Mr.Johnson</p> </div> </div> </div> </div> </section>

<!-- Team Section --> 

<section id="team" class="py-5" style="background-color: #fffef3;">
   <div class="container"> 
    <h2 class="text-center fw-bold mb-5" style="color: #ffc107;"> <i class="bi bi-people-fill me-2"></i>The Team Behind Your Happiness </h2> 
    <div class="row"> <!-- Team Member 1 --> 
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4"> 
        <div class="card border-0 shadow-sm"> 
          <img src="{{asset('company7.jpg')}}" class="card-img-top rounded-top" alt="Member1">
          <div class="card-body text-center">
            <h5 class="card-title mb-1 text-dark">Member1</h5> 
            <p class="card-text text-muted small">Head of Travel Design – Expert in creating custom travel journeys that amaze.</p>
          </div> 
        </div> 
      </div>
      
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4"> 
        <div class="card border-0 shadow-sm"> 
          <img src="{{asset('company6.jpg')}}" class="card-img-top rounded-top" alt="Member2">
          <div class="card-body text-center">
            <h5 class="card-title mb-1 text-dark">Member2</h5> 
            <p class="card-text text-muted small">Head of Travel Design – Expert in creating custom travel journeys that amaze.</p>
          </div> 
        </div> 
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 mb-4"> 
        <div class="card border-0 shadow-sm"> 
         <img src="{{asset('company6.jpg')}}" class="card-img-top rounded-top" alt="Member3">
          <div class="card-body text-center">
            <h5 class="card-title mb-1 text-dark">Member3</h5> 
            <p class="card-text text-muted small">Head of Travel Design – Expert in creating custom travel journeys that amaze.</p>
          </div> 
        </div> 
      </div>


      <div class="col-lg-3 col-md-4 col-sm-6 mb-4"> 
        <div class="card border-0 shadow-sm"> 
           <img src="{{asset('company7.jpg')}}" class="card-img-top rounded-top" alt="Member4">
          <div class="card-body text-center">
            <h5 class="card-title mb-1 text-dark">Member4</h5> 
            <p class="card-text text-muted small">Head of Travel Design – Expert in creating custom travel journeys that amaze.</p>
          </div> 
        </div> 
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 mb-4"> 
        <div class="card border-0 shadow-sm"> 
          <img src="{{asset('company7.jpg')}}" class="card-img-top rounded-top" alt="Member5">
          <div class="card-body text-center">
            <h5 class="card-title mb-1 text-dark">Member5</h5> 
            <p class="card-text text-muted small">Head of Travel Design – Expert in creating custom travel journeys that amaze.</p>
          </div> 
        </div> 
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 mb-4"> 
        <div class="card border-0 shadow-sm"> 
           <img src="{{asset('company7.jpg')}}" class="card-img-top rounded-top" alt="Member6">
          <div class="card-body text-center">
            <h5 class="card-title mb-1 text-dark">Member6</h5> 
            <p class="card-text text-muted small">Head of Travel Design – Expert in creating custom travel journeys that amaze.</p>
          </div> 
        </div> 
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 mb-4"> 
        <div class="card border-0 shadow-sm"> 
         <img src="{{asset('company6.jpg')}}" class="card-img-top rounded-top" alt="Member7">
          <div class="card-body text-center">
            <h5 class="card-title mb-1 text-dark">Member7</h5> 
            <p class="card-text text-muted small">Head of Travel Design – Expert in creating custom travel journeys that amaze.</p>
          </div> 
        </div> 
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6 mb-4"> 
        <div class="card border-0 shadow-sm"> 
          <img src="{{asset('company6.jpg')}}" class="card-img-top rounded-top" alt="Member8">
          <div class="card-body text-center">
            <h5 class="card-title mb-1 text-dark">Member8</h5> 
            <p class="card-text text-muted small">Head of Travel Design – Expert in creating custom travel journeys that amaze.</p>
          </div> 
        </div> 
      </div>

    </div>
  </div>

</section>

    
<!--About Us -->

<section id="about-us" class="py-5" style="background-color: #fff9e6;"> <div class="container"> <div class="text-center mb-4"> <h2 class="fw-bold" style="color: #ffc107;"> <i class="bi bi-compass-fill me-2"></i>About Us </h2> <p class="lead text-secondary"> <i class="bi bi-heart-fill text-warning me-1"></i>Creating journeys that leave footprints on hearts, not just maps. </p> </div>
<div class="row justify-content-center">
  <div class="col-md-10">
    <p class="fs-5 text-dark mb-4">
      <i class="bi bi-calendar-check-fill text-warning me-2"></i>
      At <strong>UltraProMax Travels</strong>, we believe travel is not just about destinations—it’s about discovery, connection, and transformation. Founded in 2010, we’ve grown from a boutique travel consultancy into one of the most trusted tourism management firms in the region, serving over <strong>500,000 travelers</strong> across <strong>40+ countries</strong>.
    </p>
    <p class="fs-5 text-dark mb-4">
      <i class="bi bi-geo-alt-fill text-warning me-2"></i>
      Whether you dream of sun-kissed beaches, spiritual escapes, mountain trails, or immersive cultural experiences, our dedicated team designs personalized journeys that go beyond sightseeing. With a network of global partners, curated local experiences, and a passion for people, we ensure every trip becomes a story worth telling.
    </p>
    <p class="fs-5 text-dark">
      <i class="bi bi-stars text-warning me-2"></i>
      From solo travelers to corporate delegations, from luxury honeymoons to student exchange programs—every detail matters. Our mission is simple: to deliver travel that inspires and empowers. With innovation, integrity, and heartfelt hospitality, we proudly say—<strong>your happiness is our destination.</strong>
    </p>
  </div>
</div>
</div>


<!-- Achievements Section -->
<!-- Achievements Section with Images -->
<!-- Achievements Section with Yellow Background -->
<section id="achievements" class="py-5" style="background-color: #fff9db;">
  <div class="container">
    <h2 class="text-center mb-5 fw-bold text-uppercase text-warning">Our Achievements</h2>
    <div class="row g-4">

      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="{{ asset('company8.jpg') }}" class="card-img-top" alt="100K+ Travelers">
          <div class="card-body">
            <h5 class="card-title text-warning">100,000+ Happy Travelers</h5>
            <p class="card-text">We’ve helped over 100,000 explorers create unforgettable memories around the world.</p>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="{{ asset('company9.jpg') }}" class="card-img-top" alt="Global Presence">
          <div class="card-body">
            <h5 class="card-title text-warning">Presence in 25+ Countries</h5>
            <p class="card-text">From Europe to Asia, we serve travelers across 25+ amazing destinations.</p>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="{{ asset('company10.jpg') }}" class="card-img-top" alt="Custom Packages">
          <div class="card-body">
            <h5 class="card-title text-warning">1000+ Custom Packages</h5>
            <p class="card-text">Tailored travel plans crafted for families, couples, and adventure seekers.</p>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="{{ asset('company11.jpg') }}" class="card-img-top" alt="Best Travel Agency Award">
          <div class="card-body">
            <h5 class="card-title text-warning">Best Travel Agency 2024</h5>
            <p class="card-text">Awarded for excellence and innovation in the Asia-Pacific travel industry.</p>
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="{{ asset('company12.jpg') }}" class="card-img-top" alt="Top Rated">
          <div class="card-body">
            <h5 class="card-title text-warning">5-Star Reviews</h5>
            <p class="card-text">Consistently rated 5 stars on Google, TripAdvisor, and other platforms.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Media Section -->
<section id="media" class="py-5" style="background-color: #fff9db;">
  <div class="container">
    <h2 class="text-center mb-5 fw-bold text-warning text-uppercase">Media Highlights</h2>
    <div class="row g-4">

      <!-- Media Item 1 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="{{ asset('company15.jpg') }}" class="card-img-top" alt="Media Coverage 1">
          <div class="card-body">
            <h5 class="card-title text-warning">Times Travel Feature</h5>
            <p class="card-text">We were featured in Times Travel for our outstanding custom tour packages.</p>
          </div>
        </div>
      </div>

      <!-- Media Item 2 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="{{ asset('company16.jpeg') }}" class="card-img-top" alt="Media Coverage 2">
          <div class="card-body">
            <h5 class="card-title text-warning">Interview with Our Founder</h5>
            <p class="card-text">An exclusive interview on leadership and innovation in the travel industry.</p>
          </div>
        </div>
      </div>

      <!-- Media Item 3 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="{{ asset('company17.jpeg') }}" class="card-img-top" alt="Media Coverage 3">
          <div class="card-body">
            <h5 class="card-title text-warning">Travel Channel Showcase</h5>
            <p class="card-text">Our adventure tours were featured on international travel television.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

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


