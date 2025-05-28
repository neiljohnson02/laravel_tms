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
<div id="dubaiCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">

<!--include css file-->
<style>
.ultrapromax-slide {
  position: relative;
  overflow: hidden;
  border-radius: 10px;
}

.carousel-caption {
  position: absolute;
  bottom: 20px;
  left: 20px;
  z-index: 2;
  background: rgba(0, 0, 0, 0.6);
  padding: 15px 20px;
  border-radius: 8px;
  max-width: 80%;
  transition: background 0.4s ease-in-out;
}

.carousel-overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: linear-gradient(to bottom right, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.6));
  z-index: 1;
  transition: background 0.4s ease-in-out;
}

.card-slider-track {
  transition: transform 1s ease-in-out;
  display: flex;
}

.card {
  position: relative;
  overflow: hidden;
  height: 100%;  /* Ensure card takes up full height */
  border: none;
}

.card img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* Makes sure the image covers the entire card */
}

.card-body {
  display: none; /* Hide text if you want it behind the image */
}

/* Ensure vertical form fields are stacked */
.form-group {
  margin-bottom: 15px; /* Space between form elements */
}

/* Horizontal layout for form fields */
.form-row {
  display: flex;
  justify-content: space-between;
  gap: 15px; /* Adds space between horizontal form fields */
}

/* Input fields for both horizontal and vertical forms */
.form-control {
  border-radius: 8px; /* Rounded corners */
  border: 2px solid #ffc107; /* Vibrant yellow border */
  background-color: #ffffff; /* Dark background for input fields */
  color: #fff; /* White text */
  padding: 10px; /* Padding inside fields */
}

/* Label styling for horizontal fields */
label {
  color: #fff; /* White label text */
  font-weight: bold;
  margin-bottom: 5px; /* Space between label and input */
}

/* Styling for the Submit Button */
.btn-warning {
  background-color: #ffc107; /* Vibrant yellow */
  color: rgb(255, 255, 255); /* Black text */
  border-radius: 8px; /* Rounded button */
  font-weight: bold; /* Bold text */
  text-transform: uppercase; /* Uppercase text */
}

.btn-warning:hover {
  background-color: #ff9900; /* Darker yellow on hover */
}

/* Mobile Responsiveness for Horizontal Form Fields */
@media (max-width: 768px) {
  .form-row {
    flex-direction: column; /* Stack horizontal fields vertically on small screens */
  }

  .col-md-6 {
    width: 100%; /* Make each form field take full width on small screens */
  }
}


</style>

<link href="{{ asset('assets/styles.css') }}" rel="stylesheet">

</head>
<body>
<!-- navbar starting -->
<section class="header">
<nav class="navbar navbar-expand-sm navbar-light">
  <div class="container-fluid"> 
    <a class="navbar-brand">
  <img  class="logo ms-4"  src="{{route('gt holidays logo.jpg')}}" alt="logo"  width="200" height="70"></a>
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
 </ul>
    </div>
  </div>
</nav>
</section>
</div>
<!-- navbar ending -->
<!-- carousel starting -->
{{-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active c-item">
      <img src="{{ asset('carousel1.jpeg') }}" class="d-block" style="width: 100%;" alt="...">


      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="{{carousel12.jpg" class="d-block " style="width: 100%;" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h2 class="contianer  text-light">
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="carousel 10.jpg" class="d-block" style="width: 100%;" alt="...">
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
<!-- carousel ending --> --}}
<!--tour details starting-->
<div class="container-fluid pt-5">
  <center><h4 class="text-dark">Dubai City Tour Package</h4></center>
  <p class="text-center">
    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
      <path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/>
    </svg>  
    Dubai, United Arab Emirates
  </p><br>

  <div class="row ms-3 gy-4">
    <div class="col-md-3">
      <center>
        <p>Duration<br> 
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
            <path d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z"/>
          </svg>  
          3 Nights and 4 Days
        </p>
      </center>
    </div>
    <div class="col-md-3">
      <center>
        <p>Tour Type<br>
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
            <path d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z"/>
          </svg>  
          Daily Tour
        </p>
      </center>
    </div>
    <div class="col-md-3">
      <center>
        <p>Group Size<br>
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
            <path d="M500-482q29-32 44.5-73t15.5-85q0-44-15.5-85T500-798q60 8 100 53t40 105q0 60-40 105t-100 53Zm220 322v-120q0-36-16-68.5T662-406q51 18 94.5 46.5T800-280v120h-80Zm80-280v-80h-80v-80h80v-80h80v80h80v80h-80v80h-80Zm-480-40q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM0-160v-112q0-34 17.5-62.5T64-378q62-31 126-46.5T320-440q66 0 130 15.5T576-378q29 15 46.5 43.5T640-272v112H0Zm320-400q33 0 56.5-23.5T400-640q0-33-23.5-56.5T320-720q-33 0-56.5 23.5T240-640q0 33 23.5 56.5T320-560ZM80-240h480v-32q0-11-5.5-20T540-306q-54-27-109-40.5T320-360q-56 0-111 13.5T100-306q-9 5-14.5 14T80-272v32Zm240-400Zm0 400Z"/>
          </svg>  
          unlimited
        </p>
      </center>
    </div>
    <div class="col-md-3">
  <center>
    <p>Language<br>
      <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
        <path d="M820-300q-25 0-42.5-17.5T760-360v-100q0-25 17.5-42.5T820-520q25 0 42.5 17.5T880-460v100q0 25-17.5 42.5T820-300Zm-20 140v-62q-51-8-85.5-46.5T680-360h40q0 42 29 71t71 29q42 0 71-29t29-71h40q0 53-34.5 91.5T840-222v62h-40ZM360-480q-66 0-113-47t-47-113q0-66 47-113t113-47q14 0 27.5 2t26.5 7q-26 31-40 69.5T360-640q0 43 14 81.5t40 69.5q-13 5-26.5 7t-27.5 2ZM40-160v-111q0-34 17-63t47-44q38-20 82.5-34.5T284-435q-40 28-62 71t-22 93v111H40Zm560-320q-66 0-113-47t-47-113q0-66 47-113t113-47q14 0 27.5 2t26.5 7q-26 31-40 69.5T600-640q0 43 14 81.5t40 69.5q-13 5-26.5 7t-27.5 2Z"/>
      </svg>  
      Arabic, English
    </p>
  </center>
</div>


<!-- Container -->
<!-- Auto Card Slide Section -->
<!-- Auto Horizontal Card Slide Section -->
<div class="container mt-5">
  <div class="card shadow-lg p-4 bg-light">
   <h2 class="text-center fw-bold mb-4 text-uppercase" style="color: rgb(0, 0, 0);"><i class="fas fa-plane"></i>Explore Dubai</i>
</h2>


    </h2>


    <div class="overflow-hidden position-relative" style="width: 100%;">
      <div class="d-flex align-items-center card-slider-track transition" id="horizontalCardSlider" style="width: max-content;">
        @php
        $cards = [
          ['dubaicard1.jpg', 'Unleash Dubai', 'Golden deserts. Dream within reach.'],
          ['dubaicard2.jpg', 'Live the Luxe', 'Curated 7-star experiences.'],
          ['dubaicard3.jpg', 'Luxury Desert Safari', 'Ride into the dunes.'],
          ['dubaicard4.jpg', 'Sky Views', 'From the top of Burj Khalifa.'],
          ['dubaicard5.jpg', 'Water Parks', 'Fun-filled splash days.'],
          ['dubaicard6.jpg', 'Shopping Festival', 'Retail paradise awaits.'],
          ['dubaicard7.jpg', 'Dhow Cruise', 'Sail the Marina by night.'],
          ['dubaicard8.jpg', 'Global Village', 'Cultures of the world in one place.']
        ];
        @endphp

     @foreach($cards as $card)
        <div class="card m-2 shadow-sm overflow-hidden" style="min-width: 350px; max-width: 350px; height: 1500px;">
        <img src="{{ asset($card[0]) }}" alt="{{ $card[1] }}" class="card-img-top">
        <div class="carousel-caption">
            <h5 class="card-title">{{ $card[1] }}</h5>
            <p class="card-text">{{ $card[2] }}</p>
        </div>
        </div>
        @endforeach

      </div>
    </div>

  </div>
</div>


<!-- card moment script-->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const slider = document.getElementById("horizontalCardSlider");
    const cards = slider.children;
    const cardWidth = cards[0].offsetWidth + 16; // card width + margin
    let position = 0;

    setInterval(() => {
      position += cardWidth;

      if (position >= slider.scrollWidth - slider.parentElement.offsetWidth) {
        position = 0;
      }

      slider.style.transform = `translateX(-${position}px)`;
    }, 3000); // slide every 3 seconds
  });
</script>


<!--card ending --> 

  <!-- Form Row -->
 <!-- Form Row -->
<!-- Form Row -->
<div class="row align-items-start pt-5">
  <div class="col-lg-8 offset-lg-2 mb-4">
    <div class="card shadow-lg p-4">
      <h2 class="text-center text-uppercase fw-bold mb-3">Stay Connected</h2>
        <h4 class="text-center text-dark mb-1">
        <i class="fas fa-envelope text-warning me-2"></i>
        <strong>Email:</strong> gtholidays@gmail.com
        </h4>

        <h4 class="text-center text-dark mb-3">
        <i class="fas fa-phone text-success me-2"></i>
        <strong>Mobile:</strong> 939749398
        </h4>

      <form>
        <!-- Row 1: Name & City -->
        <div class="form-row pt-5">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="name" class="form-control form-control-lg" id="name" placeholder="Your Full Name *">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="city" class="form-control form-control-lg" id="city" placeholder="City of Residence *">
            </div>
          </div>
        </div>

        <!-- Row 2: Email & Phone -->
        <div class="form-row pt-3">
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Email Address *">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="phone" class="form-control form-control-lg" id="phone" placeholder="Mobile Number *">
            </div>
          </div>
        </div>

        <!-- Row 3: WhatsApp & Destination -->
        <div class="form-row pt-3">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="whatsapp" class="form-control form-control-lg" id="whatsapp" placeholder="WhatsApp Number *">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="destination" class="form-control form-control-lg" id="destination" placeholder="Preferred Destination *">
            </div>
          </div>
        </div>

        <!-- Row 4: Vacation Type & Travel Date -->
        <div class="form-row pt-3">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="vacation_type" class="form-control form-control-lg" id="vacation_type" placeholder="Vacation Type (Family, Honeymoon, etc.) *">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="date" name="travel_date" class="form-control form-control-lg" id="travel_date" placeholder="Date of Travel *">
            </div>
          </div>
        </div>

        <!-- Submit Button -->
        <div class="form-group text-center pt-4">
          <button type="submit" class="btn btn-warning w-100 fw-bold text-uppercase">
            Submit
          </button>
        </div>
      </form>

    </div>
  </div>
</div>




<!-- paragraph starting -->
<div class="container pt-5">
<h2 class="text-center text-uppercase fw-bold mb-4 gradient-heading">
  <span class="heading-icon">🌍✈️🧳</span>Itinerary
</h2>
  <div class="text-center mb-4">
  <h3 class="section-heading">
    <span class="section-icon">🌴✈️🏖️</span>
    Explore Dubai with Us
    <span class="section-icon">🕌🛍️🌇</span>
  </h3>
  <p class="text-dark mt-2">
    Are you a tourist looking for efficient Dubai holiday packages to help you explore all the beautiful places in the city? We have curated an itinerary to meet all your requirements.
  </p>
</div>

  <div class="accordion" id="itineraryAccordion">

    <!-- Day 1 -->
    <div class="accordion-item shadow-sm">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
          <a class="text-primary text-decoration-none" data-bs-toggle="collapse" href="#day1" role="button" aria-expanded="true" aria-controls="day1">
            <i class="fas fa-plane-arrival"></i>
            <i class="fas fa-building"></i>
            <i class="fas fa-ship"></i>
            <h5>Day 1: Arrive at Dubai – Burj Khalifa – Dhow Cruise</h5>
            </a>
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#itineraryAccordion">
        <div class="accordion-body">
          Once you land in Dubai, you will be greeted by our tour representatives, who will take you to your hotel. After you check in and freshen up, you can begin your trip to the Middle East.<br><br>
          How about some retail therapy to commence this journey? Browse through the numerous luxury brands and shop your heart out at the iconic Dubai Mall.<br><br>
          In the evening, dress up for the Dhow Cruise – a perfect blend of natural beauty and adventure as you sail around the city and enjoy breathtaking views.
        </div>
      </div>
    </div>

    <!-- Day 2 -->
    <div class="accordion-item shadow-sm">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
        <a class="text-primary text-decoration-none" data-bs-toggle="collapse" href="#day2" role="button" aria-expanded="false" aria-controls="day2">
            <i class="fas fa-mountain-sun"></i>
            <i class="fas fa-camel"></i>
            <i class="fas fa-fire"></i>
            <h5>Day 2: Desert Safari Adventure</h5>
            </a>

        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
        <div class="accordion-body">
          Get ready for an exciting desert safari experience! Enjoy dune bashing, camel rides, and stunning sunset views. The evening will be filled with traditional entertainment and a delicious BBQ dinner under the stars.
        </div>
      </div>
    </div>

    <!-- Day 3 -->
    <div class="accordion-item shadow-sm">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
        <a class="text-primary text-decoration-none" data-bs-toggle="collapse" href="#day3" role="button" aria-expanded="false" aria-controls="day3">
  <i class="fas fa-city"></i>
  <i class="fas fa-bus-alt"></i>
  <i class="fas fa-water"></i>
 <h5> Day 3: Dubai City Tour & Marina Walk</h5>
</a>

        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
        <div class="accordion-body">
          Discover Dubai’s architectural marvels and cultural heritage through a guided city tour. In the evening, enjoy a relaxing walk at the stunning Dubai Marina.
        </div>
      </div>
    </div>

    <!-- Day 4 -->
    <div class="accordion-item shadow-sm">
      <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
         <a class="text-primary text-decoration-none" data-bs-toggle="collapse" href="#day4" role="button" aria-expanded="false" aria-controls="day4">
  <i class="fas fa-suitcase-rolling"></i>
  <i class="fas fa-plane-departure"></i>
  <i class="fas fa-hand-peace"></i>
  <h5>Day 4: Departure</h5>
</a>

        </button>
      </h2>
      <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#itineraryAccordion">
        <div class="accordion-body">
          After breakfast and some leisure time, you will be transferred to the airport for your return journey. Take home unforgettable memories of your Dubai holiday.
        </div>
      </div>
    </div>

  </div>
</div>


<!-- paragraph ending -->
<!-- your might tour  starting-->
<div class="container">
  <center><h5 class="pt-5">YOUR MIGHT TOURS</h5></center>
<center><div class="container cards-wrapper  my-4">
  <div class="row gy-3">
  <div class="col-md-4"> 
  <div class="card" style="width:330px">
    <a href="{{route('dubai1desert')}}" role="button"><img class="card-img-top" src="{{asset('dubai 1.1 desert.jpeg')}}" alt="Card image" style="width:100%"></a>
    <div class="card-body">
   <p class="text-center"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>Dubai,Safari Desert
    </p>
      <h5 class="card-title text-center">Dubai City Of Packages</h5>
      <p class="card-text text-center" ><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z"/></svg>3 Nights and 4 Days</p>
    </div>
    </div>
    </div>
  <div class="col-md-4"> 
  <div class="card" style="width:330px">
    <a href="{{route('dubai1waterpark')}}"><img class="card-img-top" src="{{asset('dubai1 legoland water park.jpeg')}}" alt="Card image" style="width:100%"></a>
    <div class="card-body">
   <p class="text-center"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>DUBAI ,LegoLand Waterpark
    </p>
      <h5 class="card-title text-center">Amazing Dubai Packages</h5>
      <p class="card-text text-center" ><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z"/></svg>3 Nights and 4 Days</p>
      
     </div>
    </div>
   </div>
   <div class="col-md-4"> 
  <div class="card" style="width:330px">
    <a href="{{route('dubai1musium')}}"><img class="card-img-top" src="{{asset('dubai1musium.jpg')}}" alt="Card image" style="width:100%"></a>
    <div class="card-body">
   <p class="text-center"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>Dubai ,dubai Musium
    </p>
      <h5 class="card-title text-center">Amazing Dubai Packages</h5>
      <p class="card-text text-center" ><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z"/></svg>3 Nights and 4 Days</p>
      
     </div>
    </div>
   </div>
  </div><br>
  
</div>
</div></center>
<!-- your might tour ending -->

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

<div class="col-md-6 pt-2"  style="float: right">
<center><h4 class="text-light ">Book Your Dream Packages</h4>
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
