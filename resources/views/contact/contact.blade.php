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
<!-- card starting -->
  <center>
    <h3 class="fw-bold mb-4 pt-4">
      <i class="fas fa-address-book me-2 text-success"></i> CONTACT DETAILS
    </h3>
  </center>
<center><div class="container  bg-light cards-wrapper pt-3 my-4">
  <div class="row gy-3">
  <div class="col-md-4"> 
  <div class="card" style="width:330px">
    <a href="{{route('contact.contact1')}}" style="text-decoration: none; color: inherit;">
    <div class="card-header"><h5>Thoothukudi</h5></div>
    <div class="card-body">
   <p class="text-center"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>Tamilnadu, india
    </p>
      <h5 class="card-title text-center">1st street Millerpuram , Thoothukudi</h5>
      <p class="card-text text-center" ></p>
  </a></div>
    </div>
    </div>
 <div class="col-md-4"> 
  <div class="card" style="width:330px">
    <a href="{{route('contact.contact2')}}" style="text-decoration: none; color: inherit;">
      <div class="card-header">
        <h5>Tirunelveli</h5>
      </div>
      <div class="card-body">
        <p class="text-center">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
            <path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/>
          </svg>
          Tamilnadu, India.
        </p>
        <h5 class="card-title text-center">2nd  street Vannarapettai , Tirunelveli</h5>
        <p class="card-text text-center">
          
        </p>
      </div>
    </a>
  </div>
</div>

   <div class="col-md-4"> 
  <div class="card" style="width:330px">
    <a href="{{route('contact.contact3')}}"style="text-decoration: none; color: inherit;">
    <div class="card-header"><h5>Erode</h5></div>
    <div class="card-body">
   <p class="text-center"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>Tamilnadu ,India
    </p>
      <h5 class="card-title text-center">3rd street Anna Nagar , Erode</h5>
      <p class="card-text text-center" ></p>
  </a>
     </div>
    </div>
   </div>
  </div><br>
  <div class="row row-cols-1 row-cols-md-3 g-4">
  <!-- Card 1 -->
  <div class="col">
    <div class="card"  style="width:330px">
      <a href="{{ route('contact.contact4') }}" class="text-decoration-none text-dark">
        <div class="card-header text-center"><h5 class="mb-0">Madurai</h5></div>
        <div class="card-body">
          <p class="text-center">
               <p class="text-center"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>
           Tamilnadu , India
          </p>
          <h5 class="card-title text-center">7th street Azhanganallur , Madurai</h5>
          <p class="text-center">
           
          </p>
        </div>
      </a>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="col">
    <div class="card" style="width:330px">
      <a href="{{ route('contact.contact5') }}" class="text-decoration-none text-dark">
        <div class="card-header text-center"><h5 class="mb-0">Coimbatore</h5></div>
        <div class="card-body">
          <p class="text-center">
               <p class="text-center"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>
            Tamilnadu, India
          </p>
          <h5 class="card-title text-center">5th street Coldwel Colony , Coimbatore</h5>
          <p class="text-center">
           
          </p>
        </div>
      </a>
    </div>
  </div>

  <!-- Card 3 -->
  <div class="col">
    <div class="card" style="width:330px">
      <a href="{{ route('contact.contact6') }}" class="text-decoration-none text-dark">
        <div class="card-header text-center"><h5 class="mb-0">Chennai</h5></div>
        <div class="card-body">
          <p class="text-center">
              <p class="text-center"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>
            Tamilnadu, India
          </p>
          <h5 class="card-title text-center">11th street Anna Nagar , Chennai</h5>
          
        </div>
      </a>
    </div>
  </div>
</div>
<br>
  <div class="row gy-3">
  <div class="col-md-4"> 
  <div class="card" style="width:330px">
    <a href="{{route('contact.contact7')}}" style="text-decoration: none; color: inherit;">
    <div class="card-header"><h5>Trichy</h5></div>
    <div class="card-body">
   <p class="text-center"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>Trichy,India
    </p>
      <h5 class="card-title text-center">5th street Chidhambaranagar , Trichy</h5>
      
    </a></div>
    </div>
    </div>
  <div class="col-md-4"> 
  <div class="card" style="width:330px">
    <a href="{{route('contact.contact8')}}" style="text-decoration: none; color: inherit;">
    <div class="card-header"><h5>Theni</h5></div>
    <div class="card-body">
   <p class="text-center"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>Tamilnadu,India
    </p>
      <h5 class="card-title text-center">6th street StateBank Colony , Theni</h5>
     </a> 
     </div>
    </div>
   </div>
   <div class="col-md-4"> 
  <div class="card" style="width:330px">
    <a href="{{route('contact.contact9')}}" style="text-decoration: none; color: inherit;">
    <div class="card-header"><h5>Mumbai</h5></div>
    <div class="card-body">
   <p class="text-center"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>Tamilnadu,India
    </p>
      <h5 class="card-title text-center">1st street Mohammad Ali Road , SouthMumbai</h5>
     
      </a>
     </div>
    </div>
   </div>
  </div><br>
  <div class="row">
  <div class="col-md-4"> 
  <div class="card" style="width:330px">
  <div class="card-header"><h5>Bengaluru</h5></div>
    <a href="{{route('contact.contact10')}}" style="text-decoration: none; color: inherit;">
    <div class="card-body">
   <p class="text-center"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>Tamilnadu,India
    </p>
      <h5 class="card-title text-center">2nd strret Brigade Road , Bengaluru</h5>
    </a></div>
    </div>
    </div>
  <div class="col-md-4"> 
  <div class="card" style="width:320px">
    <a href="{{route('contact.contact11')}}" style="text-decoration: none; color: inherit;">
    <div class="card-header"><h5>Kolkata</h5></div>
    <div class="card-body">
   <p class="text-center"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>Tamilnadu,India
    </p>
      <h5 class="card-title text-center">8th street Ballygunge,Kolkata</h5>
     
      
    </a> </div>
    </div>
   </div>
   <div class="col-md-4"> 
  <div class="card" style="width:330px">
    <a href="{{route('contact.contact12')}}" style="text-decoration: none; color: inherit;">
    <div class="card-header"><h5>Hydrabad</h5></div>
    <div class="card-body">
   <p class="text-center"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>Tamilnadu,India
    </p>
      <h5 class="card-title text-center">9th street laad bazaar , Hydrabad</h5>
    </a> </div>
    </div>
    
   </div><br>
</div>
</div></center>

<!-- card ending -->

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
