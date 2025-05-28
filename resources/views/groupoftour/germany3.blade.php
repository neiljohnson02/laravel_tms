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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<link  href="../Jquery/style.css" rel="stylesheet" />
<link  href="../Jquery/prettify.css" rel="stylesheet" />

<meta name="csrf-token" content="{{ csrf_token() }}">


<!--include css file-->

<link href="{{ asset('assets/styles.css') }}" rel="stylesheet">

<!-- Luxurious Style Tour Section -->
<style>
.luxury-card {
    background: #ffe868;
    border-radius: 15px;
    transition: all 0.3s ease-in-out;
}

.luxury-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
}

.luxury-card .icon {
    font-size: 2rem;
}

.card-title {
    color: #ff2121;
}

.card-text {
    color: #000000;
}

.modal-content {
    border-radius: 16px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
}

.modal-body h5 {
    font-weight: 600;
    color: #2c3e50;
}

input.form-control {
    border-radius: 8px;
}

</style>


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
<!-- carousel starting -->
{{-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active c-item">
      <img src="carousel1.jpeg" class="d-block" style="width: 100%;" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="carousel12.jpg" class="d-block " style="width: 100%;" alt="...">
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
</button> --}}
{{-- </div> --}}
<!-- carousel ending -->
<div class="container py-5">
    <center>
        <h2 class="text-dark fw-bold mb-3">🌟 GERMANY MUNICH TOUR 🌟</h2>
        <p class="text-muted mb-5"><i class="bi bi-geo-alt-fill"></i> GERMANY, The Beauty OF Munich</p>
    </center>

    <div class="row g-4 justify-content-center">
        <!-- Card 1 -->
        <div class="col-md-3">
            <div class="card shadow-lg border-0 h-100 text-center luxury-card">
                <div class="card-body">
                    <div class="icon mb-3 text-warning fs-1">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <h5 class="card-title fw-semibold">Duration</h5>
                    <p class="card-text">3 Nights and 4 Days of pure luxury experience</p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-3">
            <div class="card shadow-lg border-0 h-100 text-center luxury-card">
                <div class="card-body">
                    <div class="icon mb-3 text-primary fs-1">
                        <i class="bi bi-calendar-event-fill"></i>
                    </div>
                    <h5 class="card-title fw-semibold">Tour Type</h5>
                    <p class="card-text">Exclusive Daily Tours with VIP entry access</p>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-3">
            <div class="card shadow-lg border-0 h-100 text-center luxury-card">
                <div class="card-body">
                    <div class="icon mb-3 text-success fs-1">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h5 class="card-title fw-semibold">Group Size</h5>
                    <p class="card-text">Private or Group (Unlimited)</p>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-3">
            <div class="card shadow-lg border-0 h-100 text-center luxury-card">
                <div class="card-body">
                    <div class="icon mb-3 text-danger fs-1">
                        <i class="bi bi-translate"></i>
                    </div>
                    <h5 class="card-title fw-semibold">Language</h5>
                    <p class="card-text">Guided tour in English with multilingual options</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- premium tour details -->
<div class="container mt-3" style="borer: 1px solid black">
  <div class="row">
    <div class="col-sm-6 ">
    <div class="carousel mb-3">
  <img src="{{asset('groupoftourmunich.jpg')}}" class="card-img-top" alt="...">
</div>
<div class="carousel mb-3">
  
</div>
</div>

<!--form-->
<div class="col-sm-6">
  <div class="carousel">
  <center>
   <div class="col-md-6 bg-light text-center p-4 rounded shadow">
  <p class="text-muted">
    <i class="fas fa-tags text-warning me-2"></i>
    SUPER DEAL PRICE STARTS FROM
  </p>
  <h3 class="fw-bold" style="color: #dddd7f;">
    <i class="fas fa-coins me-2"></i>
    $ 79,999
  </h3>
  <p class="text-secondary">
    <i class="fas fa-user-friends text-success me-2"></i>
    per person on twin sharing
  </p>
</div></center>
<center><div class="container">
<div class="card ms-5 my-5 shadow-lg border-light">
  <div class="card-header bg-warning text-white text-center py-3">
    <h4>Premium Group Tour From South India No. 1 Travel Brand</h4>
  </div>
  <div class="card-body my-3">
    <blockquote class="blockquote mb-0">
      <p class="text-dark fs-5">
        <i class="fas fa-smile-beam text-warning me-2"></i>
        <strong>3,00,000+</strong> Happy guests
        <br>

        <i class="fas fa-route text-primary me-2"></i>
        <strong>41,000+</strong> Number of successful tours
        <br>

        <i class="fas fa-award text-success me-2"></i>
        <strong>15+</strong> Years of experience
        <br>

        <i class="fas fa-users-cog text-danger me-2"></i>
        <strong>300+</strong> Our team ensures your best holiday experience.
      </p>
    </blockquote>
  </div>
  <div class="card-footer bg-light text-center">
    <p class="text-muted">Join our premium group tour and experience the best of South India!</p>
  </div>
</div>

</center>
<div class="container pt-4 text-center">
  <h5 class="text-primary fw-bold mb-4">SPECIAL OF THIS TRIP</h5>
</div>

<div class="row ms-3 gy-4">
  <!-- Sightseeing -->
  <div class="col-md-3">
    <center>
      <p class="text-info fw-semibold">Sightseeing</p>
      <svg xmlns="http://www.w3.org/2000/svg" height="70px" width="70px" viewBox="0 -960 960 960" fill="#FFFF55" class="mb-3 transition-transform hover:scale-110">
        <path d="M456-600h320q-27-69-82.5-118.5T566-788L456-600Zm-92 80 160-276q-11-2-22-3t-22-1q-66 0-123 25t-101 67l108 188ZM170-400h218L228-676q-32 41-50 90.5T160-480q0 21 2.5 40.5T170-400Zm224 228 108-188H184q27 69 82.5 118.5T394-172Zm86 12q66 0 123-25t101-67L596-440 436-164q11 2 21.5 3t22.5 1Zm252-124q32-41 50-90.5T800-480q0-21-2.5-40.5T790-560H572l160 276ZM480-480Zm0 400q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-155.5t86-127Q252-817 325-848.5T480-880q83 0 155.5 31.5t127 86q54.5 54.5 86 127T880-480q0 82-31.5 155t-86 127.5q-54.5 54.5-127 86T480-80Z"/>
      </svg>
    </center>
  </div>

  <!-- Meals -->
  <div class="col-md-3">
    <center>
      <p class="text-danger fw-semibold">Meals</p>
      <svg xmlns="http://www.w3.org/2000/svg" height="74px" viewBox="0 -960 960 960" width="70px" fill="#FFFF55" class="mb-3 transition-transform hover:scale-110">
        <path d="m819-28-59-59v7h-80v-87L27-820l57-57L876-85l-57 57Zm-59-287-83-83-117-117v-165q0-83 58.5-141.5T760-880v565ZM480-588l-80-87v-205h80v292ZM360-715l-80-80v-85h80v165ZM240-835l-45-45h45v45Zm40 755v-366q-51-14-85.5-56T160-600v-201l80 80v121h40v-81l81 80 90 91q-16 23-39.5 39.5T360-446v366h-80Z"/>
      </svg>
    </center>
  </div>

  <!-- Transport -->
  <div class="col-md-3">
    <center>
      <p class="text-success fw-semibold">Transport</p>
      <svg xmlns="http://www.w3.org/2000/svg" height="74px" width="70px" viewBox="0 -960 960 960" fill="#FFFF55" class="mb-3 transition-transform hover:scale-110">
        <path d="M240-200v40q0 17-11.5 28.5T200-120h-40q-17 0-28.5-11.5T120-160v-320l84-240q6-18 21.5-29t34.5-11h100v-80h240v80h100q19 0 34.5 11t21.5 29l84 240v320q0 17-11.5 28.5T800-120h-40q-17 0-28.5-11.5T720-160v-40H240Zm-8-360h496l-42-120H274l-42 120Zm-32 80v200-200Zm100 160q25 0 42.5-17.5T360-380q0-25-17.5-42.5T300-440q-25 0-42.5 17.5T240-380q0 25 17.5 42.5T300-320Zm360 0q25 0 42.5-17.5T720-380q0-25-17.5-42.5T660-440q-25 0-42.5 17.5T600-380q0 25 17.5 42.5T660-320Zm-460 40h560v-200H200v200Z"/>
      </svg>
    </center>
  </div>

  <!-- Hotel and Flights -->
  <div class="col-md-3">
    <center>
      <p class="text-warning fw-semibold">Hotel and Flights</p>
      <svg xmlns="http://www.w3.org/2000/svg" height="70px" width="70px" viewBox="0 -960 960 960" fill="#FFFF55" class="mb-3 transition-transform hover:scale-110">
        <path d="M280-320q0-33 23.5-56.5T360-400q33 0 56.5 23.5T440-320q0 33-23.5 56.5T360-240q-33 0-56.5-23.5T280-320Zm200-80h240q33 0 56.5 23.5T800-320v280h-80v-80H240v80h-80v-400h80v240h240v-200Zm150-40L512-654 406-548l10 68-30 30-47-88-88-48 30-30 68 9 106-106-215-117 38-38 264 68 108-108q12-12 29-12t29 12q12 12 12 29t-12 29L600-742l68 264-38 38Zm90 240v-120H560v120h160Zm-160 0v-120 120Z"/>
      </svg>
    </center>
  </div>
</div>
<br><br>
  </div>
<!-- premium tour ending-->
<!-- BOOKING YOUR TOUR NOW -->
<div class="container mt-3">
  <div class="row" style="margin-left: -111%;">
    <!-- Left Form Section -->
    <div class="col-sm-6">
  <div class="carusel bg-light p-4 rounded shadow" style="resize: both; overflow: auto;">
    <div class="form">
      <form id="groupform" method="POST">
        {{csrf_field()}}
      <center><h3 class="my-4 text-primary"><i class="bi bi-star-fill text-warning"></i> PREMIUM TOUR BOOKING</h3></center>

      <!-- Departure -->
      <div class="form-group">
        <div class="col-md-4 my-4 ms-5">
          <label for="departure" class="form-label">
            <i class="bi bi-calendar-check-fill"></i> DEPARTURE
          </label>
          <input type="date" class="form-control" name="departure" placeholder="Enter your departure">
        </div>
      </div>

      <!-- Email -->
      <div class="form-group">
        <div class="col-md-4 my-4 ms-5">
          <label for="email" class="form-label">
            <i class="bi bi-envelope-fill"></i> EMAIL
          </label>
          <input type="email" class="form-control" name="email" placeholder="Enter The Email Address">
        </div>
      </div>

      <!-- Adult -->
      <div class="form-group">
        <div class="col-md-4 my-4 ms-5">
          <label for="adult" class="form-label">
            <i class="bi bi-person-fill"></i> ADULT
          </label>
          <input type="number" class="form-control" name="adult" placeholder="Enter adult count">
        </div>
      </div>

      <!-- Children -->
      <div class="form-group">
        <div class="col-md-4 my-4 ms-5">
          <label for="children" class="form-label">
            <i class="bi bi-emoji-smile-fill"></i> CHILDREN
          </label>
          <input type="number" class="form-control" name="children" placeholder="Enter children count">
        </div>
      </div>

      <!-- Infant -->
      <div class="form-group">
        <div class="col-md-4 my-4 ms-5">
          <label for="infant" class="form-label">
            <i class="bi bi-baby"></i> INFANT
          </label>
          <input type="number" class="form-control" name="infant" placeholder="Enter infant count">
        </div>
      </div>

      <!-- Premium Package -->
<div class="form-group mb-3 col-md-8 ms-5">
  <label for="package" class="form-label">
    <i class="bi bi-gem"></i> Ultimate Group Of Tour
  </label>
  <select class="form-select" name="package">
    <option selected disabled>Select a Premium Destination</option>
    <option value="dubai_uae_25k">Dubai, United Arab Emirates - 25k</option>
    <option value="australia_sydney_50k">Australia, Sydney - 50k</option>
    <option value="india_tajmahal_15k">India, Tajmahal - 15k</option>
    <option value="india_goa_18k">India, Beach Of Goa - 18k</option>
    <option value="france_paris_40k">France, Paris - Eiffel Tower - 40k</option>
    <option value="france_louvre_30k">France, Louvre Museum - 30k</option>
    <option value="usa_statueofliberty_35k">USA, Statue Of Liberty - 35k</option>
    <option value="usa_mountrushmore_28k">USA, Mount Rushmore National Memorial - 28k</option>
    <option value="germany_munich_32k">Germany, Munich - 32k</option>
    <option value="germany_berlin_33k">Germany, City Of Berlin - 33k</option>
    <option value="italy_venice_38k">Italy, Venice - 38k</option>
    <option value="italy_rome_36k">Italy, Rome - 36k</option>
  </select>
</div>




      <!-- Add-ons -->
      <div class="form-group mb-3 col-md-8 ms-5">
        <label for="addons" class="form-label">
          <i class="bi bi-plus-circle-fill"></i> ADD-ONS
        </label>
        <select class="form-select" name="addons[]" multiple>
          <option value="spa">Spa Access</option>
          <option value="meals">Gourmet Meals</option>
          <option value="pickup">Airport Pickup</option>
          <option value="photographer">Personal Photographer</option>
        </select>
        <small class="text-muted">Hold Ctrl (Windows) or Command (Mac) to select multiple.</small>
      </div>

      <!-- Special Requests -->
      <div class="form-group mb-3 col-md-8 ms-5">
        <label for="requests" class="form-label">
          <i class="bi bi-chat-left-dots-fill"></i> SPECIAL REQUESTS
        </label>
        <textarea class="form-control" name="requests" rows="3" placeholder="Any special preferences?"></textarea>
      </div>

      <!-- Submit Button -->

<div class="d-grid gap-2 col-md-6 my-4 ms-5">
    <div class="d-flex gap-3">
       <button class="btn btn-warning flex-fill" type="submit">
          <i class="bi bi-check2-circle me-1"></i> BookNow
      </button>


       <button type="button" class="btn btn-success flex-fill" data-bs-toggle="modal" data-bs-target="#travelPaymentModal">
    <i class="bi bi-credit-card-fill me-1"></i> Payment
</button>

    </div>
</div>


      
    </form>

  

    </div>
  </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
$(document).ready(function(){
  premiumTours(); // Load data on page load

  $('#groupform').submit(function(e){
    e.preventDefault();
    $.ajax({
      url: "{{ route('group.tour') }}",
      type: "POST",
      data: $(this).serialize(),
      success: function(response){
        if(response.success){
          alert("Tour submitted successfully!");
          $('#premiumform')[0].reset();
          premiumTours();
        }
      },
      error: function(xhr){
        let errors = xhr.responseJSON.errors;
        let errorMsg = "";
        for(let field in errors){
          errorMsg += errors[field][0] + "\n";
        }
        alert(errorMsg);
      }
    });
  });

  function premiumTours(){
    $.get("{{ route('group.tours') }}", function(data){
      $('#tourTableContainer').html(data);
    });
  }
});
</script>







<!--script code end -->


    <!-- Right Section with Pricing and Information -->
    <div class="col-sm-6">
  <div class="bg-light p-3 rounded">
    <h3 class="my-4">Why Choose GTHolidays</h3>
    <p>We provide the best tour packages with a focus on customer satisfaction, safety, and a memorable experience.</p>

    <!-- Price Table Section -->
   <h4 class="my-4">
  <i class="bi bi-currency-dollar me-2 text-success"></i>
  Price Details
</h4>

    <table class="table table-light table-bordered border-warning table-responsive table-striped">
      <thead>
        <tr>
          <th>ADULT</th>
          <th>CHILDREN</th>
          <th>INFANT</th>
          <th>GRAND PARENTS</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>$58933</td>
          <td>$64837</td>
          <td>$74873</td>
          <td>$48930</td>
        </tr>
      </tbody>
    </table>

    <!-- Traveler Categories and Pricing -->
 <h4 class="my-4">Traveler Categories</h4>
<ul class="list-unstyled">
  <li class="mb-2">
    <i class="bi bi-person-fill me-2 text-primary"></i>
    <strong>Adult:</strong> Aged 18 and above.
  </li>
  <li class="mb-2">
    <i class="bi bi-people-fill me-2 text-success"></i>
    <strong>Children:</strong> Aged 2 to 12 years.
  </li>
  <li class="mb-2">
    <i class="bi bi-baby me-2 text-warning"></i>
    <strong>Infant:</strong> Aged below 2 years (Free or discounted).
  </li>
  <li class="mb-2">
    <i class="bi bi-person-badge-fill me-2 text-info"></i>
    <strong>Grand Parents:</strong> Special discount for senior citizens.
  </li>
</ul>


    <!-- Additional Services -->
    <h4 class="my-4">Additional Services Included</h4>
<ul class="list-unstyled">
  <li class="mb-3">
    <i class="bi bi-cup-straw me-3 text-danger fs-4"></i>
    <strong>Food:</strong> 
    <span class="text-muted">Delicious meals included in your package, with options for special dietary needs.</span>
  </li>
  <li class="mb-3">
    <i class="bi bi-truck-front-fill me-3 text-success fs-4"></i>
    <strong>Travel Source:</strong> 
    <span class="text-muted">Comfortable taxis and private accommodation transfers provided for stress-free travel.</span>
  </li>
  <li class="mb-3">
    <i class="bi bi-building me-3 text-primary fs-4"></i>
    <strong>Hotels Stay:</strong> 
    <span class="text-muted">Stay at premium hotels featuring top-notch amenities and exceptional service.</span>
  </li>
  <li class="mb-3">
    <i class="bi bi-person-bounding-box me-3 text-warning fs-4"></i>
    <strong>Tour Guidance:</strong> 
    <span class="text-muted">Experienced and friendly tour guides accompany you to enhance your travel experience.</span>
  </li>

  <li class="mb-3">
  <i class="bi bi-headset me-3 text-info fs-4"></i>
  <strong>24/7 Support:</strong> 
  <span class="text-muted">Round-the-clock customer service to assist you before, during, and after your tour.</span>
</li>


</ul>

  </div>
</div>

  </div>
</div>

    <!-- Price Table Section -->
    
  </div>
</div>

</div>
<!--form-->

</div><!--carousel end -->

</div>
</div><!--container end-->
<center>  
</div>
</div>
<div>
</div>
</div><br><br>
<!-- BOOKING YOUR TOUR END -->
<!-- INTERNITY starting -->
<div class="container my-3">
  <h2>INTERNITY (DAY WISE)</h2>
  <div class="internity">
    <button class="accordion"><i class="fas fa-plane-arrival"></i> DAY - 1 ARRIVE IN MUNICH</button>
    <div class="panel">
      <p>* Arrival at Munich International Airport.</p>
      <p>* Meet & greet by our tour representative.</p>
      <p>* Breakfast: Continental style with Bavarian touches.</p>
      <p>* Transfer to hotel for check-in (Standard Check-in time: 15.00 Hrs).</p>
      <p>* Evening: Leisure walk around Marienplatz – enjoy the Glockenspiel Show.</p>
      <p>* Dinner at traditional German restaurant.</p>
      <p>* Overnight stay at hotel in Munich.</p>
    </div>

    <button class="accordion"><i class="fas fa-city"></i> DAY - 2 MUNICH CITY TOUR</button>
    <div class="panel">
      <p>* Breakfast at hotel.</p>
      <p>* Guided Munich city tour: Visit BMW Museum, Nymphenburg Palace, Olympic Park.</p>
      <p>* Explore Viktualienmarkt for local foods and crafts.</p>
      <p>* Lunch at Hofbräuhaus – Munich’s iconic beer hall.</p>
      <p>* Evening: Visit to English Garden or optional River Surfing experience.</p>
      <p>* Dinner and overnight stay at hotel.</p>
    </div>

    <button class="accordion"><i class="fas fa-landmark"></i> DAY - 3 NEUSCHWANSTEIN CASTLE EXCURSION</button>
    <div class="panel">
      <p>* Early breakfast at hotel.</p>
      <p>* Full-day excursion to Neuschwanstein Castle (2-hour scenic drive).</p>
      <p>* Visit the fairy-tale castle that inspired Disney’s logo.</p>
      <p>* Lunch at nearby Füssen village.</p>
      <p>* Return to Munich in the evening.</p>
      <p>* Dinner and overnight stay at hotel.</p>
    </div>

    <button class="accordion"><i class="fas fa-mug-hot"></i> DAY - 4 DACHAU MEMORIAL - DEPARTURE</button>
    <div class="panel">
      <p>* Breakfast at hotel and check-out.</p>
      <p>* Morning visit to Dachau Concentration Camp Memorial Site.</p>
      <p>* Reflective educational experience of WWII history.</p>
      <p>* Lunch en route to airport or Munich city (based on flight time).</p>
      <p>* Transfer to Munich Airport for departure.</p>
    </div>
  </div>
</div>

<script>
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      } 
    });
  }
</script>


<!-- TOUR DETAILS STARTING -->
<div class="container bg-light pt-5">
  <h2 class="ms-2">Tour Details</h2>
  <h5 class="ms-2 text-muted">Premium facilities at zero hidden cost.</h5>

  <div class="row">
    <!-- Departure & Arrival -->
    <div class="col pt-3">
      <button type="button" class="btn btn-warning w-100" data-bs-toggle="collapse" data-bs-target="#demo1">
        <h5><i class="fas fa-plane-departure me-2"></i>Departure & Arrival</h5>
      </button>
      <div id="demo1" class="collapse mt-3">
        <table class="table table-bordered text-center">
          <thead class="table-dark">
            <tr>
              <th>Departure</th>
              <th>Arrival</th>
              <th>Airlines</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>MAA</td>
              <td>KUL</td>
              <td><i class="fas fa-plane-departure text-primary"></i></td>
            </tr>
            <tr>
              <td>KUL</td>
              <td>DPS</td>
              <td><i class="fas fa-plane-departure text-success"></i></td>
            </tr>
            <tr>
              <td>DPS</td>
              <td>KUL</td>
              <td><i class="fas fa-plane-departure text-warning"></i></td>
            </tr>
            <tr>
              <td>KUL</td>
              <td>MAA</td>
              <td><i class="fas fa-plane-departure text-danger"></i></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Accommodation -->
    <div class="col pt-3">
      <button type="button" class="btn btn-warning w-100" data-bs-toggle="collapse" data-bs-target="#demo2">
        <h5><i class="fas fa-hotel me-2"></i>Accommodation Details</h5>
      </button>
      <div id="demo2" class="collapse mt-3">
        <div class="p-2">
          <p>✨ We are currently finalizing the best-in-class accommodations tailored for your comfort.</p>
          <p>🛎️ Hotel details will be shared post-booking and communicated via your provided contact details.</p>
          <p>✅ Stay tuned for updates — we ensure top-notch quality and prime locations!</p>
        </div>
      </div>
    </div>

    <!-- Reporting & Dropping -->
    <div class="col pt-3">
      <button type="button" class="btn btn-warning w-100" data-bs-toggle="collapse" data-bs-target="#demo3">
        <h5><i class="fas fa-plane-arrival me-2"></i>Reporting & Dropping</h5>
      </button>
      <div id="demo3" class="collapse mt-3">
        <table class="table table-bordered text-center">
          <thead class="table-dark">
            <tr>
              <th>Departure</th>
              <th>Arrival</th>
              <th>Airlines</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>MAA</td>
              <td>KUL</td>
              <td><i class="fas fa-plane-arrival text-primary"></i></td>
            </tr>
            <tr>
              <td>KUL</td>
              <td>DPS</td>
              <td><i class="fas fa-plane-arrival text-success"></i></td>
            </tr>
            <tr>
              <td>DPS</td>
              <td>KUL</td>
              <td><i class="fas fa-plane-arrival text-warning"></i></td>
            </tr>
            <tr>
              <td>KUL</td>
              <td>MAA</td>
              <td><i class="fas fa-plane-arrival text-danger"></i></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- TOUR DETAILS ENDING -->
<!-- Tour Information Starting -->
<div class="container pt-5">
  <h4 class="ms-2 pt-4">Tour Information</h4>
  <h5 class="ms-2 text-muted">Read this to prepare for your tour in the best way!</h5>

  <div class="row mt-4">
    <!-- Inclusion Table -->
    <div class="col-md-6">
      <div class="card border-warning shadow-sm">
        <div class="card-header bg-warning text-white fw-bold">
          INCLUSION
        </div>
        <div class="card-body p-0">
          <table class="table table-striped mb-0">
            <tbody>
              <tr><td>✈️ Flight tickets from Chennai to Bali (via Malaysia) with 20kg baggage</td></tr>
              <tr><td>🏨 4 nights accommodation in mentioned hotels</td></tr>
              <tr><td>🍽️ 4 Breakfasts</td></tr>
              <tr><td>🍛 Lunch</td></tr>
              <tr><td>🍴 4 Dinners</td></tr>
              <tr><td>💧 Daily bottled water</td></tr>
              <tr><td>🎯 GT Holidays tour management services</td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Exclusion Table -->
    <div class="col-md-6 mt-4 mt-md-0">
      <div class="card border-warning shadow-sm">
        <div class="card-header bg-warning text-white fw-bold">
          EXCLUSION
        </div>
        <div class="card-body p-0">
          <table class="table table-striped mb-0">
            <tbody>
              <tr><td>❌ Meals not mentioned in inclusions</td></tr>
              <tr><td>💸 Hotel supplement charges on Christmas and New Year Eve</td></tr>
              <tr><td>🧾 GST @ 5%</td></tr>
              <tr><td>💳 TCS @ 5%</td></tr>
              <tr><td>📷 Camera/video permits at sightseeing locations</td></tr>
              <tr><td>💼 Personal expenses – tips, beverages, laundry, etc.</td></tr>
              <tr><td>📌 Any items not listed in the package</td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Notes Section -->
  
</div>

<!-- Tour Information Ending -->
<!--payment and terms starting-->
<div class="container">
  <h4 class="ms-2 pt-4 fw-bold text-uppercase text-dark">💳 Payment & Terms</h4>
  <h5 class="ms-2 text-muted">Reservation & Booking Policy</h5>

  <div class="card border-warning shadow-sm mt-3">
    <div class="card-body">
      <ul class="ms-3">
        <li><strong>Confirmation:</strong> Booking is confirmed upon receipt of <strong>60% payment</strong>. Remaining balance must be cleared <strong>3 weeks</strong> before departure.</li>
        <li><strong>Hotel Availability:</strong> Hotels are subject to availability. In case of unavailability, an equivalent or higher category property will be offered.</li>
      </ul>
    </div>
  </div>

  <h5 class="pt-4 ms-2 fw-bold text-uppercase text-dark">❌ Cancellation Policy</h5>

  <div class="card border-danger shadow-sm mt-3">
    <div class="card-body">
      <table class="table table-bordered table-striped mb-0">
        <thead class="table-warning text-dark">
          <tr>
            <th>Days Prior to Departure</th>
            <th>Cancellation Fee</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>0 – 25 Days</td><td>💯 100% Cancellation</td></tr>
          <tr><td>25 – 45 Days</td><td>❌ 85% Cancellation</td></tr>
          <tr><td>46 – 90 Days</td><td>🛑 75% Cancellation</td></tr>
          <tr><td>90 – 120 Days</td><td>⚠️ 50% Cancellation</td></tr>
          <tr><td>120 – 300 Days</td><td>🕓 20% Cancellation</td></tr>
        </tbody>
      </table>
    </div>
  </div>

  <h5 class="ms-2 pt-4 fw-bold text-uppercase text-dark">📌 Important Notes</h5>
  <div class="card border-secondary shadow-sm mt-3 mb-4">
    <div class="card-body">
      <ul class="ms-3">
        <li>No reservations have been made; the above is a proposal subject to availability at the time of booking.</li>
        <li>The itinerary serves as a general guide; sightseeing days and timings may vary.</li>
        <li>Standard category rooms will be provided at all listed hotels.</li>
        <li>Airfares are dynamic and may vary at the time of final confirmation.</li>
        <li>Early check-in and late check-out are at the discretion of the hotel and cannot be guaranteed.</li>
      </ul>
    </div>
  </div>
</div>

<!-- payment terms ending -->
<!-- upgrades available starting -->
<div class="container bg-light pt-5 pb-4">
    <h4 class="ms-2 fw-bold text-uppercase text-dark">🚀 Upgrades Available</h4>
    <h5 class="ms-2 text-muted">Want luxury? Add premium upgrades at minimal cost.</h5>

    <div class="row pt-4" style="justify-content: center">
        <!-- Prize Upgrade -->
        <div class="col-md-5 mb-4">
            <div class="card border-warning shadow-sm">
                <div class="card-header bg-warning text-dark fw-semibold" data-bs-toggle="collapse" data-bs-target="#prizeUpgrade" style="cursor: pointer;">
                    🎁 Prize Upgrade <small class="float-end">Click to expand</small>
                </div>
                <div id="prizeUpgrade" class="collapse">
                    <div class="card-body">
                        <p class="mb-0">Looking to upgrade to <strong>Business or First Class</strong> for extra comfort and style? Contact our premium team at <a href="tel:+919940882200">+91 99408 82200</a> for exclusive upgrade options and assistance.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Prime Seats -->
        <div class="col-md-5 mb-4">
            <div class="card border-warning shadow-sm">
                <div class="card-header bg-warning text-dark fw-semibold" data-bs-toggle="collapse" data-bs-target="#primeSeats" style="cursor: pointer;">
                    🪑 Prime Seat(s) <small class="float-end">Click to expand</small>
                </div>
                <div id="primeSeats" class="collapse">
                    <div class="card-body">
                        <p class="mb-0">Want to reserve <strong>prime seats</strong> in your coach for added comfort? Enjoy preferred positioning with minimal upgrade charges. Call us at <a href="tel:+919940882200">+91 99408 82200</a> for more information.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  
<!-- upgrades available ending -->

<!-- form page starting -->
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

<!-- form page ending -->

<!-- Travel Payment Form Modal -->
<!-- Trigger Button -->

<!-- Travel Payment Form Modal -->
<!-- Travel Payment Modal -->
<div class="modal fade" id="travelPaymentModal" tabindex="-1" aria-labelledby="travelPaymentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="travelPaymentModalLabel" style="text-align: center"><i class="bi bi-cash-coin me-2"></i>Travel Payment Form</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form method="POST" action="" id="paymentform">
                    @csrf

                    <!-- Travel Details -->
                    <h5 class="mb-3"><i class="bi bi-airplane-engines-fill me-2 text-primary"></i>Travel Details</h5>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label><i class="bi bi-people-fill me-1"></i>Name of the Travel Group</label>
                            <select name="travel_group" class="form-control" required>
                                 <option value="dubai_uae_25k">Dubai, United Arab Emirates - 25k</option>
                                  <option value="australia_sydney_50k">Australia, Sydney - 50k</option>
                                  <option value="india_tajmahal_15k">India, Tajmahal - 15k</option>
                                  <option value="india_goa_18k">India, Beach Of Goa - 18k</option>
                                  <option value="france_paris_40k">France, Paris - Eiffel Tower - 40k</option>
                                  <option value="france_louvre_30k">France, Louvre Museum - 30k</option>
                                  <option value="usa_statueofliberty_35k">USA, Statue Of Liberty - 35k</option>
                                  <option value="usa_mountrushmore_28k">USA, Mount Rushmore National Memorial - 28k</option>
                                  <option value="germany_munich_32k">Germany, Munich - 32k</option>
                                  <option value="germany_berlin_33k">Germany, City Of Berlin - 33k</option>
                                  <option value="italy_venice_38k">Italy, Venice - 38k</option>
                                  <option value="italy_rome_36k">Italy, Rome - 36k</option>
                            </select>
                        </div>


                        <div class="col-md-6 mb-3">
                            <label><i class="bi bi-person-lines-fill me-1"></i>Traveler's Name</label>
                            <div class="input-group">
                                <input type="text" name="first_name" class="form-control me-2" placeholder="First Name" required>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label><i class="bi bi-envelope-fill me-1"></i>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="example@example.com" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label><i class="bi bi-telephone-fill me-1"></i>Phone Number</label>
                            <input type="tel" name="phone" class="form-control" placeholder="(000) 000-0000"
                                required>
                            <small class="text-muted">Please enter a valid phone number.</small>
                        </div>
                    </div>

                    <!-- Billing Address -->
                    <h5 class="mb-3"><i class="bi bi-geo-alt-fill me-2 text-primary"></i>Billing Address</h5>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Street Address</label>
                            <input type="text" name="address_line1" class="form-control" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Street Address Line 2</label>
                            <input type="text" name="address_line2" class="form-control">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>City</label>
                            <input type="text" name="city" class="form-control" required>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>State / Province</label>
                            <input type="text" name="state" class="form-control" required>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>Postal / Zip Code</label>
                            <input type="text" name="zip" class="form-control" required>
                        </div>
                    </div>

                    <!-- Payment Options -->
                    <h5 class="mb-3"><i class="bi bi-credit-card-2-back-fill me-2 text-primary"></i>Payment Options</h5>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label><i class="bi bi-currency-dollar me-1"></i>Enter Payment Amount (USD)</label>
                            <input type="number" name="amount" step="0.01" class="form-control" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label><i class="bi bi-card-text me-1"></i>Description</label>
                            <input type="text" name="description" class="form-control" placeholder="e.g., Bali Tour 2025" required>
                        </div>
                    </div>

                    <!-- Credit Card Info -->
                    <h5 class="mb-3"><i class="bi bi-credit-card-fill me-2 text-primary"></i>Credit Card Info</h5>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>First Name on Card</label>
                            <input type="text" name="card_first_name" class="form-control" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Last Name on Card</label>
                            <input type="text" name="card_last_name" class="form-control" required>
                        </div>
                    </div>

                    <!-- Date and Signature -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label><i class="bi bi-calendar-date me-1"></i>Date</label>
                            <input type="date" name="date" class="form-control" value="" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label><i class="bi bi-pencil-fill me-1"></i>Signature</label>
                            <input type="file" name="signature" class="form-control" accept="image/*" required>
                        </div>

                    </div>

                    <!-- Footer Buttons -->
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle me-1"></i>Cancel</button>
                        <button type="submit" class="btn btn-success"><i class="bi bi-send-check-fill me-1"></i>Submit Payment</button>
                    </div>
                </form>
            </div>

            <div class="text-center text-muted mb-3">
                <small><i class="bi bi-globe-americas"></i> GT Holidays</small>
            </div>
        </div>
    </div>
</div>


</div>
<br><br><br>

<!--script code -->


<script>
$('#paymentform').on('submit', function(e) {
    e.preventDefault();

    let formData = new FormData(this);

    $.ajax({
        type: 'POST',
        url: "{{ route('groupoftour-payment.store') }}",
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
            alert(response.message);
            $('#travelPaymentModal').modal('hide');
            $('#paymentform')[0].reset();
            loadPremiumPayments();  // Optionally reload the payment table after success
        },
        error: function(xhr) {
            let errors = xhr.responseJSON.errors;
            let msg = 'Errors:\n';
            $.each(errors, function(key, value) {
                msg += `${key}: ${value[0]}\n`;
            });
            alert(msg);
        }
    });
});

// Define the function outside the AJAX call
function loadPremiumPayments() {
    $.get("{{ route('groupoftour.groupoftour') }}", function (data) {
        $('#tourTableContainer').html(data);
    });
}
</script>




<!-- code ending -->
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
