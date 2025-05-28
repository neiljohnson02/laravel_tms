<!DOCTYPE html>
<html lang="en">
<head>
  <title>GT HOLIDAYS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--font awesome link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--boostrap cdn link-->
  <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons (optional) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link  href="../Jquery/jquery.multiselect.css" rel="stylesheet"/>
<link  href="../Jquery/style.css" rel="stylesheet" />
<link  href="../Jquery/prettify.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<!--include css file-->
<style>
body {
  background-color: #f4f4f4;
  margin: 0;
}

/* Sidebar - responsive */
/* Base sidebar style */
.sidebar {
  background-color: #0a84ff;
  color: #fff;
  padding: 20px 15px;
  width: 100%;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  transition: all 0.3s ease;
  box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
}

/* Sidebar list styling */
.sidebar ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.sidebar ul li {
  margin-bottom: 15px;
}

.sidebar ul li a {
  color: #fff;
  text-decoration: none;
  font-weight: 500;
  display: flex;
  align-items: center;
  padding: 10px 15px;
  border-radius: 8px;
  transition: background 0.3s ease;
}

.sidebar ul li a:hover {
  background-color: rgba(255, 255, 255, 0.1);
  text-decoration: none;
}

.sidebar ul li a i {
  margin-right: 10px;
  font-size: 1.1rem;
}

/* Sidebar fixed on medium and up */
@media (min-width: 768px) {
  .sidebar {
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    width: 250px;
    padding-top: 30px;
  }

  .content {
    margin-left: 250px;
    padding: 30px;
    background-color: #f9f9f9;
    min-height: 100vh;
  }
}

/* Sidebar responsive on small devices */
@media (max-width: 767.98px) {
  .sidebar {
    position: relative;
    width: 100%;
    height: auto;
    padding-top: 10px;
  }

  .content {
    margin-left: 0;
    padding: 20px;
  }
}


.sidebar a {
  color: #fff;
  padding: 15px;
  display: block;
  text-decoration: none;
}

.sidebar a:hover {
  background-color: #495057;
}

.container-d {
  padding: 20px;
  border-radius: 15px;
  color: white;
}

.container-box {
  padding: 20px;
  border-radius: 20px;
  min-height: 150px;
}

#box3 {
  background-color: blue;
}

#box4 {
  background-color: orangered;
}

.bg-info-card {
  background-color: rgba(23, 162, 184, 0.7);
}

.bg-success-card {
  background-color: rgba(253, 255, 253, 0.7);
}

.bg-warning-card {
  background-color: rgba(255, 193, 7, 0.7);
}

.bg-danger-card {
  background-color: rgba(220, 53, 69, 0.7);
}

/* Make dropdown menu background dark */
.dropdown-menu {
  background-color: #343a40;
}

/* Make dropdown items text white */
.dropdown-menu .dropdown-item {
  color: white;
}

/* Hover/focus styles */
.dropdown-menu .dropdown-item:hover,
.dropdown-menu .dropdown-item:focus {
  background-color: #495057;
  color: white;
}

.custom-dropdown-spacing .dropdown-item {
    padding-top: 0.3rem;
    padding-bottom: 0.3rem;
    margin-bottom: 0; /* remove default margin if any */
    line-height: 1.2; /* tighter line height */
}

<style>
    .ultrapromax-card {
        color: #fff;
        border-radius: 18px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .ultrapromax-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
    }

    .ultrapromax-icon {
        font-size: 2.5rem;
        margin-bottom: 15px;
    }


     .heading-with-icons {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem; /* space between icons and text */
      font-weight: 600;
    }
</style>


</style>
</head>
<body>
<div class="sidebar bg-info text-white vh-100 p-3">
    <h2 class="text-center mb-4"> <i class="fas fa-user-shield"></i> MY ADMIN</h2>



    
 <div class="dropdown ms-3 mb-2">
    <a class="dropdown-toggle d-block text-white text-decoration-none" href="#" role="button" id="groupTourDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-solid fa-people-group me-2"></i> Package
    </a>
    <ul class="dropdown-menu  custom-dropdown-spacing" aria-labelledby="groupTourDropdown">
        <li>
    <a class="dropdown-item" href="{{ route('honeymoon.tours') }}">
        <i class="fa-solid fa-heart me-2 text-danger"></i> Indian Honeymoon Package
    </a>
</li>
<li>
    <a class="dropdown-item" href="{{ route('honeymoon.honeymoons') }}">
        <i class="fa-solid fa-wallet me-2 text-success"></i> Indian Honeymoon Package Payment
    </a>
</li>

<li>
    <a class="dropdown-item" href="{{ route('honeymooninternational.tours') }}">
        <i class="fa-solid fa-plane-departure me-2 text-info"></i> Honeymoon International Package
    </a>
</li>
<li>
    <a class="dropdown-item" href="{{ route('honeymooninternational.payment') }}">
        <i class="fa-solid fa-money-check-dollar me-2 text-warning"></i> Honeymoon International Package Payment
    </a>
</li>

<li>
    <a class="dropdown-item" href="{{ route('packafrica.tours') }}">
        <i class="fa-solid fa-tree me-2 text-primary"></i> Africa Package
    </a>
</li>
<li>
    <a class="dropdown-item" href="{{ route('packafrica.packafricas') }}">
        <i class="fa-solid fa-credit-card me-2 text-success"></i> Africa Package Payment
    </a>
</li>

<li>
    <a class="dropdown-item" href="{{ route('packasia.tours') }}">
        <i class="fa-solid fa-mountain-sun me-2 text-primary"></i> Asia Package
    </a>
</li>
<li>
    <a class="dropdown-item" href="{{ route('packasia.packasias') }}">
        <i class="fa-solid fa-credit-card me-2 text-success"></i> Asia Package Payment
    </a>
</li>

<li>
    <a class="dropdown-item" href="{{ route('packindia.tours') }}">
        <i class="fa-solid fa-monument me-2 text-primary"></i> India Package
    </a>
</li>
<li>
    <a class="dropdown-item" href="{{ route('packindia.packindias') }}">
        <i class="fa-solid fa-credit-card me-2 text-success"></i> India Package Payment
    </a>
</li>

<li>
    <a class="dropdown-item" href="{{ route('packeurope.tours') }}">
        <i class="fa-solid fa-landmark-dome me-2 text-primary"></i> Europe Package
    </a>
</li>
<li>
    <a class="dropdown-item" href="{{ route('packeurope.packeuropes') }}">
        <i class="fa-solid fa-credit-card me-2 text-success"></i> Europe Package Payment
    </a>
</li>

<li>
    <a class="dropdown-item" href="{{ route('packamerica.tours') }}">
        <i class="fa-solid fa-city me-2 text-primary"></i> America Package
    </a>
</li>
<li>
    <a class="dropdown-item" href="{{ route('packamerica.packamericas') }}">
        <i class="fa-solid fa-credit-card me-2 text-success"></i> America Package Payment
    </a>
</li>



    </ul>
</div>



    {{-- Dashboard Section --}}
    <div class="dropdown mb-3 ms-3">
  <button class="btn btn-dark dropdown-toggle text-white w-100 text-start" type="button" id="homeDropdown" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa-solid fa-house me-2"></i> Home
  </button>


  
  <ul class="dropdown-menu w-100" aria-labelledby="homeDropdown">
     <li>
      <a class="dropdown-item" href="{{route('dashboard.welcome')}}">
        <i class="bi bi-geo-alt me-2"></i> Welcome
      </a>
    </li>

    <li>
      <a class="dropdown-item" href="{{route('fetch.tours')}}">
        <i class="bi bi-geo-alt me-2"></i> Trending Tour
      </a>
    </li>
    <li>
      <a class="dropdown-item" href="{{route('premium.tours')}}">
        <i class="bi bi-star-fill me-2"></i> Premium Tour
      </a>
    </li>

     <li>
      <a class="dropdown-item" href="{{route('payment.premiumtour')}}">
        <i class="bi bi-star-fill me-2"></i> Premium  Payment
      </a>
    </li>


  </ul>
</div>


    {{-- Company Section --}}
    <div class="mb-3">
        <a href="{{route('company.company')}}" class="d-block text-white mb-2 ms-3">
            <i class="fas fa-table me-2"></i> Company
        </a>
    </div>


    

    <div class="dropdown ms-3 mb-2">
    <a class="dropdown-toggle d-block text-white text-decoration-none" href="#" role="button" id="groupTourDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-solid fa-people-group me-2"></i> Group Of Tour
    </a>
    <ul class="dropdown-menu" aria-labelledby="groupTourDropdown">
        <li>
            <a class="dropdown-item" href="{{ route('group.tours') }}">
                <i class="fa-solid fa-people-group me-2"></i> Group Of Tours
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('groupoftour.groupoftours') }}">
                <i class="fa-solid fa-credit-card me-2"></i> Group Of Tour Payment
            </a>
        </li>
    </ul>
</div>



<!--package-->



<!--honeymoon-->

<div class="dropdown ms-3 mb-2">
    <a class="dropdown-toggle d-block text-white text-decoration-none" href="#" role="button" id="groupTourDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-solid fa-heart me-2"></i> Honeymoon
    </a>
    <ul class="dropdown-menu" aria-labelledby="groupTourDropdown">
        <li>
            <a class="dropdown-item" href="{{ route('honeymoon.tours') }}">
                <i class="fa-solid fa-map-location-dot me-2 text-primary"></i> Indian Package
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('honeymoon.honeymoons') }}">
                <i class="fa-solid fa-credit-card me-2 text-success"></i> Indian Package Payment
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('honeymooninternational.tours') }}">
                <i class="fa-solid fa-earth-asia me-2 text-info"></i> International Package
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('honeymooninternational.payment') }}">
                <i class="fa-solid fa-money-check-dollar me-2 text-warning"></i> International Package Payment
            </a>
        </li>
    </ul>
</div>


    {{-- Tour Sections --}}
 <div class="dropdown mb-3 ms-3">
    <a class="d-block text-white dropdown-toggle" href="#" role="button" id="weddingDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-solid fa-ring me-2"></i> Wedding
    </a>
    <ul class="dropdown-menu" aria-labelledby="weddingDropdown">
        <li>
            <a class="dropdown-item" href="{{ route('honeymoon.tours') }}">
                <i class="fa-solid fa-church me-2 text-primary"></i> Indian Wedding Package
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('honeymoon.honeymoons') }}">
                <i class="fa-solid fa-wallet me-2 text-success"></i> Indian Wedding Package Payment
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('honeymooninternational.tours') }}">
                <i class="fa-solid fa-plane me-2 text-info"></i> International Wedding Package
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('honeymooninternational.payment') }}">
                <i class="fa-solid fa-money-check-dollar me-2 text-warning"></i> International Wedding Package Payment
            </a>
        </li>
    </ul>
</div>


    {{-- Business Section --}}
    <div class="mb-3">
        <a href="{{ route('contact.contact') }}" class="d-block text-white mb-2 ms-3">
            <i class="fas fa-folder me-2"></i> Contact
        </a>
      
        {{-- <a href="{{ route('dashboard/expense') }}" class="d-block text-white mb-2 ms-3">
            <i class="fa-solid fa-money-bill-trend-up me-2"></i> Expense
        </a> --}}
    </div>
</div>
<!--dashboard-->
<div class="content">
    <h3 class="mb-4 text-center"><i class="bi bi-speedometer2 text-dark me-2"></i> DASHBOARD</h3>

    <div class="row mb-4">
    <div class="col-md-3">
        <div class="card ultrapromax-card mb-4 h-100" style="background: linear-gradient(135deg, #FF7E5F, #FEB47B);">
            <div class="card-body text-center">
                <i class="fa fa-users ultrapromax-icon"></i>
                <h5 class="card-title">Group of Tours</h5>
                <h3 class="card-text">{{ $groupTourCount }}</h3>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card ultrapromax-card mb-4 h-100" style="background: linear-gradient(135deg, #FFD700, #FFA500);">
            <div class="card-body text-center">
                <i class="fa fa-star ultrapromax-icon"></i>
                <h5 class="card-title">Premium Tours</h5>
                <h3 class="card-text">{{ $premiumTourCount ?? 1 }}</h3>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card ultrapromax-card mb-4 h-100" style="background: linear-gradient(135deg, #43CEA2, #185A9D);">
            <div class="card-body text-center">
                	<i class="fa fa-heart  ultrapromax-icon"></i>
                <h5 class="card-title">HoneyMoon Tours</h5>
                <h3 class="card-text">{{ $honeymoonTourCount }}</h3>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card ultrapromax-card mb-4 h-100" style="background: linear-gradient(135deg, #FF512F, #DD2476);">
            <div class="card-body text-center">
                <i class="fa fa-fire ultrapromax-icon"></i>
                <h5 class="card-title">Trending Tours</h5>
                <h3 class="card-text">{{ $trendingTourCount }}</h3>
            </div>
        </div>
    </div>
</div>

   

<div class="container my-4">
<h3 class="heading-with-icons mx-auto">
  <i class="bi bi-box-seam"></i> 
  Package & Payment
  <i class="bi bi-tags"></i> 
</h3>

</div>

<style>
/* Container grid layout */
.grid-wrapper {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 24px;
  padding: 40px;
  max-width: 1200px;
  margin: auto;
}

/* Base card styling */
.card {
  padding: 20px;
  color: white;
  border-radius: 20px;
  font-family: 'Segoe UI', sans-serif;
  height: 180px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  animation: floatCard 6s ease-in-out infinite;
  background-size: 200% 200%;
  box-shadow: 0 12px 24px rgba(0, 0, 0, 0.25);
  transition: transform 0.4s ease;
}

.card:hover {
  transform: scale(1.05);
}

/* Unique gradients per card */
.card1 { background: linear-gradient(135deg, #fc466b, #3f5efb); }
.card2 { background: linear-gradient(135deg, #00f260, #0575e6); }
.card3 { background: linear-gradient(135deg, #f7971e, #ffd200); }
.card4 { background: linear-gradient(135deg, #ee0979, #ff6a00); }
.card5 { background: linear-gradient(135deg, #43cea2, #185a9d); }
.card6 { background: linear-gradient(135deg, #30cfd0, #330867);  }
.card7 { background: linear-gradient(135deg, #74ebd5, #ACB6E5); }
.card8 { background: linear-gradient(135deg, #f953c6, #b91d73); }
.card9 { background: linear-gradient(135deg, #1d976c, #93f9b9); }
.card10 { background: linear-gradient(135deg, #e96443, #904e95); }
.card11 { background: linear-gradient(135deg, #ff6e7f, #bfe9ff); }
.card12 { background: linear-gradient(135deg, #4facfe, #00f2fe); }
.card13 { background: linear-gradient(135deg, #dacdff, #ecfeff); }
.card14 { background: linear-gradient(135deg, #6affeb, #ff3b3b); }

/* Animation */
@keyframes floatCard {
  0%   { transform: translateY(0px) scale(1); box-shadow: 0 12px 24px rgba(0,0,0,0.25); }
  50%  { transform: translateY(-10px) scale(1.03); box-shadow: 0 18px 32px rgba(0,0,0,0.3); }
  100% { transform: translateY(0px) scale(1); box-shadow: 0 12px 24px rgba(0,0,0,0.25); }
}



</style>
</head>
<body>
<div class="grid-wrapper">
  <!-- 12 Cards in total -->
  <div class="card card1" style="text-align: center;">
  <h4><i class="fas fa-globe-asia"></i> Asia package</h4>
  <h3 class="card-text">{{ $asiaTourCount }}</h3>
</div>

<div class="card card2" style="text-align: center;">
  <h4><i class="fas fa-flag"></i> India package</h4>
  <h3 class="card-text">{{ $indiaTourCount }}</h3>
</div>

<div class="card card3" style="text-align: center;">
  <h4><i class="fas fa-tree"></i> Africa package</h4>
  <h3 class="card-text">{{ $africaTourCount }}</h3>
</div>

<div class="card card4" style="text-align: center;">
  <h4><i class="fas fa-archway"></i> Europe package</h4>
  <h3 class="card-text">{{ $europeTourCount }}</h3>
</div>

<div class="card card5" style="text-align: center;">
  <h4><i class="fas fa-map-marked-alt"></i> America package</h4>
  <h3 class="card-text">{{ $americaTourCount }}</h3>
</div>

<div class="card card6" style="text-align: center;">
  <h4><i class="fas fa-heart"></i> Honeymoon package</h4>
  <h3 class="card-text">{{ $honeymoonTourCount }}</h3>
</div>

<div class="card card7" style="text-align: center;">
  <h4><i class="fas fa-credit-card"></i> Asia package payment</h4>
  <h3 class="card-text">{{ $asiapaymentTourCount }}</h3>
</div>

<div class="card card8" style="text-align: center;">
  <h4><i class="fas fa-credit-card"></i> India package payment</h4>
  <h3 class="card-text">{{ $indiapaymentTourCount }}</h3>
</div>

<div class="card card9" style="text-align: center;">
  <h4><i class="fas fa-credit-card"></i> Africa package payment</h4>
  <h3 class="card-text">{{ $africapaymentTourCount }}</h3>
</div>

<div class="card card10" style="text-align: center;">
  <h4><i class="fas fa-credit-card"></i> Europe package payment</h4>
  <h3 class="card-text">{{ $africapaymentTourCount }}</h3>
</div>

<div class="card card11" style="text-align: center;">
  <h4><i class="fas fa-credit-card"></i> America package payment</h4>
  <h3 class="card-text">{{ $americapaymentTourCount }}</h3>
</div>

<div class="card card12" style="text-align: center;">
  <h4><i class="fas fa-star"></i> Premium package payment</h4>
  <h3 class="card-text">{{ $premiumpaymentTourCount }}</h3>
</div>

<div class="card card13" style="text-align: center;">
  <h4><i class="fas fa-heart"></i> Honeymoon package payment</h4>
  <h3 class="card-text">{{ $honeymoonpaymentTourCount }}</h3>
</div>

<div class="card card14" style="text-align: center;">
  <h4><i class="fas fa-users"></i> Group Tour package payment</h4>
  <h3 class="card-text">{{ $groupoftourpaymentTourCount }}</h3>
</div>


</div>





</body>