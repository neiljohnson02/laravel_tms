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

<link href="assets/styles.css" rel="stylesheet">
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
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
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
</button>
</div>
<!-- carousel ending -->
<div class="container-fluid pt-5">
<center><h4 class="text-dark">DUBAI BURJ KHALIFA PREMIUM TOUR</h4></center>
<p class="text-center"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>  Dubai, United Arab Emirates
    </p><br>
  <div class="row  ms-3 gy-4">
  <div class="col-md-3">
    <center><p>Duration<br> 
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z"/></svg>  3 Nights and 4 Days</p>
</div>
        <div class="col-md-3">
        <center><p >Tour Type<br>
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z"/></svg>  Daily Tour</p>
</div>
         <div class="col-md-3">
       <center><p>Group Size<br>
       <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M500-482q29-32 44.5-73t15.5-85q0-44-15.5-85T500-798q60 8 100 53t40 105q0 60-40 105t-100 53Zm220 322v-120q0-36-16-68.5T662-406q51 18 94.5 46.5T800-280v120h-80Zm80-280v-80h-80v-80h80v-80h80v80h80v80h-80v80h-80Zm-480-40q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM0-160v-112q0-34 17.5-62.5T64-378q62-31 126-46.5T320-440q66 0 130 15.5T576-378q29 15 46.5 43.5T640-272v112H0Zm320-400q33 0 56.5-23.5T400-640q0-33-23.5-56.5T320-720q-33 0-56.5 23.5T240-640q0 33 23.5 56.5T320-560ZM80-240h480v-32q0-11-5.5-20T540-306q-54-27-109-40.5T320-360q-56 0-111 13.5T100-306q-9 5-14.5 14T80-272v32Zm240-400Zm0 400Z"/></svg>   unlimited</p>
</div>
        <div class="col-md-3">
        <center><p> Language<br>
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M820-300q-25 0-42.5-17.5T760-360v-100q0-25 17.5-42.5T820-520q25 0 42.5 17.5T880-460v100q0 25-17.5 42.5T820-300Zm-20 140v-62q-51-8-85.5-46.5T680-360h40q0 42 29 71t71 29q42 0 71-29t29-71h40q0 53-34.5 91.5T840-222v62h-40ZM360-480q-66 0-113-47t-47-113q0-66 47-113t113-47q14 0 27.5 2t26.5 7q-26 31-40 69.5T360-640q0 43 14 81.5t40 69.5q-13 5-26.5 7t-27.5 2ZM40-160v-111q0-34 17-63t47-44q38-20 82.5-34.5T284-435q-40 28-62 71t-22 93v111H40Zm560-320q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm0-80q33 0 56.5-23.5T680-640q0-33-23.5-56.5T600-720q-33 0-56.5 23.5T520-640q0 33 23.5 56.5T600-560ZM280-160v-111q0-34 17-63t47-44q51-26 115.5-44T600-440q12 0 23.5.5T646-438q-10 18-165 37.5T621-360h-21q-72 0-127.5 18T381-306q-10 5-15.5 14.5T360-271v31h287q15 26 37 46t49 34H280Zm320-480Zm0 400Z"/></svg> English</p>
</div>
</div>
<!-- premium tour details -->
<div class="container mt-3" style="borer: 1px solid black">
  <div class="row">
    <div class="col-sm-6 ">
    <div class="carousel mb-3">
  <img src="dubai1 carousel.jpeg" class="card-img-top" alt="...">
</div>
<div class="carousel mb-3">
  <img src="dubai 2 burjkhalifa.jpeg" class="card-img-top" alt="...">
</div>
</div>

<!--form-->
<div class="col-sm-6">
  <div class="carousel">
  <center>
    <div class="col-md-6 bg-light">
        <p>SUPER DEAL PRICE STARTS FORM</p>
        <h3>$ 79,999</h3>
        <p>per person on twin sharing</p>
</div></center>
<center><div class="container">
<div class="card ms-5 my-5">
  <div class="card-header">Premium Group Tour From South India No. 1 Travel Brand
  </div>
  <div class="card-body  my-3">
    <blockquote class="blockquote mb-0">
      <p>3,00,000+ Happy guests

  41,000+
 Number of successful tours
<br>
15+
Years of experience

300+
Our team ensures your best holiday experience.
</p>
</blockquote>
  </div>
</center>
<div class="container pt-4 "><center><h5>SPECIAL OF THIS TRIP</h5></center></div><br>
<div class="row  ms-3 gy-4">
  <div class="col-md-3">
    <center><p>sightseeing<br> 
    <svg xmlns="http://www.w3.org/2000/svg" height="70px"  width="70px"viewBox="0 -960 960 960" width="24px" fill="#FFFF55"><path d="M456-600h320q-27-69-82.5-118.5T566-788L456-600Zm-92 80 160-276q-11-2-22-3t-22-1q-66 0-123 25t-101 67l108 188ZM170-400h218L228-676q-32 41-50 90.5T160-480q0 21 2.5 40.5T170-400Zm224 228 108-188H184q27 69 82.5 118.5T394-172Zm86 12q66 0 123-25t101-67L596-440 436-164q11 2 21.5 3t22.5 1Zm252-124q32-41 50-90.5T800-480q0-21-2.5-40.5T790-560H572l160 276ZM480-480Zm0 400q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-155.5t86-127Q252-817 325-848.5T480-880q83 0 155.5 31.5t127 86q54.5 54.5 86 127T880-480q0 82-31.5 155t-86 127.5q-54.5 54.5-127 86T480-80Z"/></svg>
</div>
        <div class="col-md-3">
        <center><p >meals<br>
        <svg xmlns="http://www.w3.org/2000/svg" height="74px" viewBox="0 -960 960 960" width="70px" fill="#FFFF55"><path d="m819-28-59-59v7h-80v-87L27-820l57-57L876-85l-57 57Zm-59-287-83-83-117-117v-165q0-83 58.5-141.5T760-880v565ZM480-588l-80-87v-205h80v292ZM360-715l-80-80v-85h80v165ZM240-835l-45-45h45v45Zm40 755v-366q-51-14-85.5-56T160-600v-201l80 80v121h40v-81l81 80 90 91q-16 23-39.5 39.5T360-446v366h-80Z"/></svg>
</div>
         <div class="col-md-3 ">
       <center><p>transport<br>
       <svg xmlns="http://www.w3.org/2000/svg" height="74px" width="70px pt-3" viewBox="0 -960 960 960" width="24px" fill="#FFFF55"><path d="M240-200v40q0 17-11.5 28.5T200-120h-40q-17 0-28.5-11.5T120-160v-320l84-240q6-18 21.5-29t34.5-11h100v-80h240v80h100q19 0 34.5 11t21.5 29l84 240v320q0 17-11.5 28.5T800-120h-40q-17 0-28.5-11.5T720-160v-40H240Zm-8-360h496l-42-120H274l-42 120Zm-32 80v200-200Zm100 160q25 0 42.5-17.5T360-380q0-25-17.5-42.5T300-440q-25 0-42.5 17.5T240-380q0 25 17.5 42.5T300-320Zm360 0q25 0 42.5-17.5T720-380q0-25-17.5-42.5T660-440q-25 0-42.5 17.5T600-380q0 25 17.5 42.5T660-320Zm-460 40h560v-200H200v200Z"/></svg>
</div>
        <div class="col-md-3">
        <center><p>hotel and flights<br>
        <svg xmlns="http://www.w3.org/2000/svg" height="70px" width="70px pt-3"  viewBox="0 -960 960 960" width="24px" fill="#FFFF55"><path d="M280-320q0-33 23.5-56.5T360-400q33 0 56.5 23.5T440-320q0 33-23.5 56.5T360-240q-33 0-56.5-23.5T280-320Zm200-80h240q33 0 56.5 23.5T800-320v280h-80v-80H240v80h-80v-400h80v240h240v-200Zm150-40L512-654 406-548l10 68-30 30-47-88-88-48 30-30 68 9 106-106-215-117 38-38 264 68 108-108q12-12 29-12t29 12q12 12 12 29t-12 29L600-742l68 264-38 38Zm90 240v-120H560v120h160Zm-160 0v-120 120Z"/></svg></p>
</div>

</div>
</div><br><br>
<div class="container my-3 ms-5"><h5>WHY CHOOSE GT HOLIDAYS</h5></div>
<div class="row  ms-4">
  <div class="col d-flex flex-row">
  <svg xmlns="http://www.w3.org/2000/svg" height="70px" width="70px" viewBox="0 -960 960 960" width="24px" fill="#FFFF55"><path d="M160-160v-280 280Zm640 0v-280 280Zm-40-480q17 0 28.5-11.5T800-680q0-17-11.5-28.5T760-720q-17 0-28.5 11.5T720-680q0 17 11.5 28.5T760-640Zm0 80q-51 0-85.5-34.5T640-680q0-50 34.5-85t85.5-35q50 0 85 35t35 85q0 51-35 85.5T760-560ZM480-680q25 0 42.5-17t17.5-43q0-25-17.5-42.5T480-800q-26 0-43 17.5T420-740q0 26 17 43t43 17Zm0 80q-59 0-99.5-40.5T340-740q0-58 40.5-99t99.5-41q58 0 99 41t41 99q0 59-41 99.5T480-600ZM320-425q0 30 32 70t128 127q94-85 127-125t33-72q0-23-15-39t-37-16q-14 0-26.5 6T541-457l-48 57h-27l-48-57q-8-11-20.5-17t-25.5-6q-23 0-37.5 16T320-425Zm-80 0q0-53 36-94t96-41q31 0 59.5 14t48.5 38q20-24 48-38t60-14q60 0 96 41.5t36 93.5q0 53-38.5 104.5T524-160l-44 40-44-40Q315-270 277.5-321T240-425Zm-40-215q17 0 28.5-11.5T240-680q0-17-11.5-28.5T200-720q-17 0-28.5 11.5T160-680q0 17 11.5 28.5T200-640ZM483-80v-80h317v-280H682v-80h118q33 0 56.5 23.5T880-440v360H483Zm-323-80h323v80H80v-360q0-33 23-56.5t57-23.5h118v80H160v280Zm40-400q-51 0-85.5-34.5T80-680q0-50 34.5-85t85.5-35q50 0 85 35t35 85q0 51-35 85.5T200-560Zm280-180Zm-280 60Zm560 0Z"/></svg>
  <p class="pt-4 ms-4">Super Friendly Tour Manager Througth The Trip</p>
</div>  
</div>
<div class="row  ms-4">
  <div class="col d-flex flex-row">
  <svg xmlns="http://www.w3.org/2000/svg" height="70px" width="70px" viewBox="0 -960 960 960" width="48px" fill="#FFFF55"><path d="M285-80v-368q-52-11-88.5-52.5T160-600v-280h60v280h65v-280h60v280h65v-280h60v280q0 58-36.5 99.5T345-448v368h-60Zm415 0v-320H585v-305q0-79 48-127t127-48v800h-60Z"/></svg>
  <p class="pt-4 ms-4">Mouth Watering Indian Food included in the Trip.</p>
</div>  
</div>
</div>
</div>
<div>
</div>
</div>
</center>
<br><br>
<!-- premium tour ending-->
<!-- BOOKING YOUR TOUR NOW -->
<div class="container mt-3">
  <div class="row">
    <div class="col-sm-6 ">
    <div class="carusel bg-light"style=" resize: both;  overflow: auto;">
        <div class="form">
       <center> <h3 class="my-4">BOOKING YOUR TOUR NOW</h3></center>
        <div class="form-group">
        <div class="col-md-3 my-4 ms-5">
       <label for="" class="form-label">DEPARTURE</label>
       <input type="date" class="form-control" name="departure" placeholder="enter your departure">
      </div>
      </div>
      <div class="form-group">
      <div class="col-md-3 my-4 ms-5">
      <label for="" class="form-label">ADULT</label>
      <input type="number" class="form-control" name="adult" placeholder="enter yout adult count">
      </div>
      </div>
      <div class="form-group">
      <div class="col-md-3 my-4 ms-5">
      <label for="" class="form-label">CHILDREN</label>
      <input type="number" class="form-control" name="children" placeholder="enter yout children count">
      </div>
      </div>
      <div class="form-group">
      <div class="col-md-3 my-4 ms-5">
      <label for="" class="form-label">INFANT</label>
      <input type="number" class="form-control" name="infant" placeholder="enter yout infant count">
      </div>
      </div>
      <div class="d-grid gap-2">
      <button class="btn btn-warning" class="form-control" type="button">BOOKING NOW</button>
      </div>
      </div>
    </div>
    <div class="col-sm-6 pt-5">
    <div class=" mb-3" style="max-width: 600px;">
  <div class="row g-0">
    <div class="col-md-0">
    </div>
    <div class="col-md-8">
      <div class="">
      <table class="table  table-light  table-bodered  border-warning table-responsive table-striped">
    <thead>
      <tr>
        <th class="ms-5 pt-4">ADULT </th>
        <th class="ms-5 pt-4">CHILDREN </th>
        <th class="ms-5 pt-4">INFANT</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="ms-5 pt-4"><h5>$ 58933</h5></td>
        <td class="ms-5 pt-4"><h5>$ 64837</h5></td>
        <td class="ms-5 pt-4"><h5>$ 74873</h5></td>
      </tr>
</tbody>
</table>  
      </div>
    </div>
  </div>
</div>
    </div>
</div>
<!--form-->
<div class="col-sm-6 pt-4">
  <div class="carousel bg-light">
  <div class="row  ms-5 gy-4">
  <div class="col-md-3">
    <center><p class="text-dark">TRIP <BR>  FROM  <BR>  CHENNAI</p>
    <svg xmlns="http://www.w3.org/2000/svg" height="74px" width="70px" viewBox="0 -960 960 960" width="24px" fill="#FFFF55"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>
</div>
        <div class="col-md-3">
        <center><p class="text-dark">DURATION <BR>3 DAYS & 4 NIGHTS</p>
        <svg xmlns="http://www.w3.org/2000/svg" height="74px" width="70px" viewBox="0 -960 960 960" width="24px" fill="#FFFF55"><path d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z"/></svg>
</div>

         <div class="col-md-3 ">
       <center><p class="text-dark" >ACCOMPATION BILL <BR>OR NOTE<BR><br>
       <svg xmlns="http://www.w3.org/2000/svg" height="74px" width="70px" viewBox="0 -960 960 960" width="24px" fill="#FFFF55"><path d="M516-120 402-402 120-516v-56l720-268-268 720h-56Zm26-148 162-436-436 162 196 78 78 196Zm-78-196Z"/></svg>
</div>
</div>
<div class="row  ms-5 gy-4">
  <div class="col-md-3 ">
    <center><p class="text-dark pt-2">TRIP TO <br> DUBAI<br> 
    <svg xmlns="http://www.w3.org/2000/svg" height="74px" width="70px"  viewBox="0 -960 960 960" width="24px" fill="#FFFF55"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>
</div>
        <div class="col-md-3">
        <center><p class="text-dark pt-2"> NO OF PEOPLE  45 ADULTS<br>
        <svg xmlns="http://www.w3.org/2000/svg" height="74px" width="70px" viewBox="0 -960 960 960" width="24px" fill="#FFFF55"><path d="M720-400v-120H600v-80h120v-120h80v120h120v80H800v120h-80Zm-360-80q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm80-80h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0-80Zm0 400Z"/></svg>
</div>
         <div class="col-md-3 ">
       <center><p class="text-dark pt-2">TRANSPORTATION PBT AC/COACH<br>
       <svg xmlns="http://www.w3.org/2000/svg" height="74px" width="70px pt-3" viewBox="0 -960 960 960" width="24px" fill="#FFFF55"><path d="M240-200v40q0 17-11.5 28.5T200-120h-40q-17 0-28.5-11.5T120-160v-320l84-240q6-18 21.5-29t34.5-11h100v-80h240v80h100q19 0 34.5 11t21.5 29l84 240v320q0 17-11.5 28.5T800-120h-40q-17 0-28.5-11.5T720-160v-40H240Zm-8-360h496l-42-120H274l-42 120Zm-32 80v200-200Zm100 160q25 0 42.5-17.5T360-380q0-25-17.5-42.5T300-440q-25 0-42.5 17.5T240-380q0 25 17.5 42.5T300-320Zm360 0q25 0 42.5-17.5T720-380q0-25-17.5-42.5T660-440q-25 0-42.5 17.5T600-380q0 25 17.5 42.5T660-320Zm-460 40h560v-200H200v200Z"/></svg>
</div>
</div><!--row end-->
</div><!--carousel end -->
<div class="col-sm-6 pt-4">
    <div class=" mb-3">
  <div class="row g-2">
  <div class="card">
  <div class="card-body bg-warning">
    <center><h2 class="ms-4 pt-3">PRICE DETAILS </h2>
    <h1>$ 64,999</h1>
    <BR>
    <H3>+5% GST & 5% TCS</H3>
</center>    
</div>
  </div>
</div>
  
</div>
</div>
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
<h2>INTERNITY(DAY WISE)</h2>
<div class="internity">
<button class="accordion"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>DAY - 1  ARRIVE AT DUBAI</button>
<div class="panel">
  <p>*Arrival at Dubai / Abu Dhabi Airport.<br>
Welcome to Abu-Dhabi Airport, the gateway to the UAE’s cultural capital. Explore our duty-free shops and grab a quick bite before heading out to your destination. Enjoy your stay.
</p>
<p>* Our tour representative meet & greets you.<br>
Our tour representative will warmly welcome and assist you upon arrival. You’ll feel at ease knowing that you have a dedicated team member to answer any questions and ensure a smooth start to your journey.
</p>
<P>* Breakfast.<br>
Options include continental and cooked items, served with beverages in a relaxed dining area.
</p>
<p>* Transfer to hotel for check in (Standard Check in time 15.00 Hrs).<br>
Book your transfer to your hotel with ease! Enjoy a hassle-free start to your trip and arrive at your destination in comfort with our reliable and affordable transfer services.
</p>
<p>* Evening proceed to Dhow cruise buffet dinner.<br>
Enjoy a dhow cruise with a buffet dinner, scenic views, music, and a delightful ambiance on board.
</p>
<p>* Overnight stay at hotel.<br>
Experience a comfortable and luxurious stay at our hotel. Our spacious rooms, friendly staff, and convenient location make us the perfect choice for an overnight stay.
</p>
</div>
<button class="accordion"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>DAY - 02  DUBAI ABU DHABI</button>
<div class="panel">
  <p>* Morning breakfast at hotel.<br>
Enjoy a delicious and energizing breakfast at our hotel. Savor freshly-baked pastries, seasonal fruits, and a selection of hot dishes, accompanied by a hot cup of coffee or tea. Start your day right with us.

<p>* Proceed for Abu Dhabi.<br>
Discover Abu Dhabi’s iconic landmarks and attractions on a comprehensive city tour. Visit Sheikh Zayed Grand Mosque, Emirates Palace, and more.

<p>City tour.<br>
Discover Dubai’s landmarks, culture, modern architecture, and vibrant neighborhoods on a guided city tour.

<p>Lunch at Indian Restaurant.<br>
Join our delicious lunch tour and taste the best local cuisine. Discover hidden gems and savor authentic flavors while exploring the city’s history and culture.

<p>Grand Masque visit.<br>
Experience the grandeur of a masquerade, adorned in exquisite masks, amid an enchanting atmosphere of mystery and elegance.

<p>Dinner.<br>
Enjoy a delectable dinner on our exclusive tour. Savor mouth-watering dishes, carefully crafted by our chefs using locally-sourced ingredients. Indulge in a culinary journey that will tantalize your taste buds and leave you fully satisfied.

<p>Overnight stay at hotel.<br>
Experience a comfortable overnight stay at our hotel. Our well-appointed rooms and top-notch amenities provide the perfect retreat after a long day.</p>
</div>
<button class="accordion"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>DAY - 04  DUBAI FRAME-DESERT SAFARI</button>
<div class="panel">
  <p>* Morning breakfast at hotel.<BR>
Start your day with a delicious breakfast at our hotel. Enjoy freshly baked pastries, eggs cooked to your liking, and a variety of hot and cold beverages.

<p>* Proceed to Dubai Frame.<br>
The Dubai Frame is a stunning architectural landmark that offers panoramic views of the city. Enjoy a unique cultural experience that takes you through Dubai’s past, present, and future.

<p>* Lunch.<br>
Indulge in a delicious lunch while exploring the city! Discover local cuisine and hidden gems with our expert guides.

<p>* Proceed for Desert safari with BBQ Dinner.<br>
Embark on a thrilling desert safari and indulge in a delicious BBQ dinner. Experience sandboarding, camel rides, and a mesmerizing sunset in the Arabian Desert.

<p>* Overnight stay at hotel.<br>
Experience comfort and luxury with our overnight stay package. Enjoy cozy accommodations, exceptional amenities, and friendly service.</p>
</div>
<button class="accordion"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>DAY - 04  DUBAI CITY TOUR BURJKHALIFA -YACHT</button>
<div class="panel">
  <p>* Morning breakfast at hotel.<br>
Start your day off right with our delicious breakfast options at our hotel. We offer a variety of fresh and tasty dishes to fuel you for the day ahead. Join us in the morning and indulge in our breakfast buffet.

<p>* Dubai City tour.<br>
Dubai is a modern and luxurious city known for its towering skyscrapers, man-made islands, shopping, and entertainment. Visit the Burj Khalifa, Dubai Mall, Palm Jumeirah, and more on a city tour.

<p>* Lunch at Indian restaurant.<br>
Enjoy a delicious lunch on your tour! Choose from a variety of cuisines and flavors to satisfy your appetite. Our expert guides will take you to the best lunch spots in town.

<p>* Proceed to Burj Khalifa at the top entry non-peak hours.<br>
Experience the thrill of reaching new heights at Burj Khalifa’s 124th floor during non-peak hours. Enjoy stunning views of Dubai from the world’s tallest building.

<p>* Private Yacht.<br>
Experience luxury and exclusivity on board our private yacht. With personalized service and stunning views, indulge in a unique sailing adventure tailored to your desires.

<p>* Dinner at Indian restaurant.<br>
Indulge in a delicious dinner on our evening tour. Savor local cuisine while taking in stunning views. A perfect way to end your day of adventure.

<P>*Overnight stay at hotel.<BR>
Enjoy a comfortable overnight stay in one of our spacious rooms with modern amenities. Our friendly staff is here to ensure your stay is memorable.</p>
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
<!-- INTERNITY ENDING -->
<!-- TOUR DETAILS STARTING -->
<div class="container bg-light">
    <h2 class="ms-2 pt-4">Tour Details</h2>
    <h5 class="ms-2">Best facilities with no added cost.</h5>
    <div class="row">
    <div class="col pt-3">
    <button type="button" class="btn btn-warning" data-bs-toggle="collapse" data-bs-target="#demo1"><h5>Departure & Arrival</h5></button>
  <div id="demo1" class="collapse"><br>
  <table class="table table-bordered" style="height: 200px">
    <thead>
      <tr>
        <th>Departure</th>
        <th>Arrival</th>
        <th>Air Lines</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>MAA </td>
        <td>KUL</td>
        <td></td>
      </tr>
      <tr>
        <td>KUL</td>
        <td>DPS</td>
        <td></td>
      </tr>
      <tr>
        <td>DPS</td>
        <td>KUL</td>
        <td></td>
      </tr>
      <tr>
        <td>KUL</td>
        <td>DPS</td>
        <td></td>
      </tr>
    </tbody>
  </table>
  </div>
</div>
<div class="col pt-3">
    <button type="button" class="btn btn-warning" data-bs-toggle="collapse" data-bs-target="#demo2"><h5>Accommodation Details</h5></button>
  <div id="demo2" class="collapse"><br>
    <p>Processing The Best For You</p>
    <p>We Are In The Process Of Booking The Accomodation for this tour. we will update it here as we are done</p>
    <p>post Booking You Will Be Notified Through Your Contact Details About all Tour Related Update</p>
  </div>
</div>  
<div class="col  pt-3">
    <button type="button" class="btn btn-warning" data-bs-toggle="collapse" data-bs-target="#demo3"><h5>Reporting & Dropping</h5></button>
  <div id="demo3" class="collapse"><br>
  <table class="table table-bordered" style="height: 200px">
    <thead>
      <tr>
        <th>Departure</th>
        <th>Arrival</th>
        <th>Air Lines</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>MAA </td>
        <td>KUL</td>
        <td></td>
      </tr>
      <tr>
        <td>KUL</td>
        <td>DPS</td>
        <td></td>
      </tr>
      <tr>
        <td>DPS</td>
        <td>KUL</td>
        <td></td>
      </tr>
      <tr>
        <td>KUL</td>
        <td>DPS</td>
        <td></td>
      </tr>
    </tbody>
  </table>
  </div>
</div>
</div>
        
</div>
</div>
<!-- TOUR DETAILS ENDING -->
<!-- Tour Information Starting -->
<div class="container pt-5">
    <h4 class="ms-2 pt-4">Tour Information </h4>
    <h5 class="ms-2">Read this to prepare for your tour in the best way!</h5>
    <p>
    <div class="row">
    <div class="col-md-3">
  <button class="btn btn-warning" class="ms-5" type="button" class="ms-5" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">INCLUSION</button>
</div>
<div class="col-md-2">
<button class="btn btn-warning" class="ms-5" type="button" class="ms-5" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">EXCLUSION</button>
</div>
</div>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="carousel card-body">
      <p>* Flight Tickets From Chennai To Build And Retrun By Malysia With 20kg Baggage.</p>
      <p>* A Night Accomodations In Above Mentioned Hotels.</p>
      <p>* 4 Breakfast.</p>
      <p>* Lunch.</p>
      <p>* 4 Dinner.</p>
      <p>* Daily Water Bottle.</p>
      <p>* GT Holidays Tour Managment.</p>

      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="carousel card-body">
      <p>* Other Food</p>
      <p>* Supplement Charges at Hotel on christmas and newyear exe.</p>
      <p>* Gst 5%</p>
      <p>* Tcs 5%</p>
      <p>* Permits For Camera And Videos At Sights</p>
      <p>* Tips Beregers Mineral Water,Laundary and any personal expends etc..</p>
      <p>* Any Items NotShow In The Package</p>
      </div>
    </div>
  </div>
</div>
<h5 class="ms-2 pt-3">Note</h5>
<p class="ms-2">
<p> * Rate of Exchange quoted 1 USD =81 INR & any change in the above ROE will result in the change of package cost</p>
<p>* Rate applicable for 41 pax, in case any changes in pax count will result in change of package cost</p>
<p>*GST 5%</p>
<p>*TCS 5%</p>
</p>
  

</div>

<!-- Tour Information Ending -->
<!--payment and terms starting-->
<div class="container">
    <h4 class="ms-2 pt-4">PAYMENT AND TERMS</h4>
    <h5 class="ms-2">Reservation and  Policy</h5>

    <p class="pt-3 ms-5">1.Package confirmation is subject to receipt of 60% payment & the balance, 3 weeks from initial fee.</p>
    <p class="ms-5">2.Hotels are subjected to availability, if not available similar category will be provided.</p>

<h5 class="pt-4 ms-2">CANCELLATION  POLICY: </h5>
   <p class="ms-4 pt-3">*  0 – 25 Days Prior of departure : 100% Cancellation</p>
   <p class="ms-4 ">* 25 – 45 Days Prior of departure : 85% Cancellation</p>
   <p class="ms-4">* 46 – 90 Days Prior of departure : 75% Cancellation</p>
   <p class="ms-4">* 90 – 120 Days Prior of departure : 50% Cancellation</p>
   <p class="ms-4">* 120 – 300 Days Prior of departure : 20% Cancellation</p>

   <h5 class="ms-2 pt-3">Note</h5>
<p class="ms-2">
<p class="pt-2">* No bookings have been done; the above is only a proposal & subject to availability of services</p>
<p>* The above itinerary acts as a guideline of the tour, hence the days & timing of the sightseeing tours are subject to change</p>
<p>* Standard type rooms will be offered in all category hotels</p>
<p>* The Airfare is subject to change at the time of confirmation</p>
<p>* Early check-in & late check-out is not allowed under hotel’s discretion</p>
</p>
</div>
<br>

<!-- payment terms ending -->
<!-- upgrades available starting -->
<div class="container bg-light  pt-5">
    <h4 class="ms-2 ">UPGRADES AVAILABLE</h4>
    <h5 class="ms-2">Want luxury? Add luxury at minimum cost!</h5>
    <p>
    <div class="row">
    <div class="col-md-3">
    <button type="button" class="btn btn-warning" data-bs-toggle="collapse" data-bs-target="#demo2"><h5>Prize Upgrade</h5></button>
  <div id="demo2" class="collapse"><br>
    <p>Need to upgrade to business or first class? Please get in touch with our team on +91 9940882200 for more details.</p>
   
  </div>
</div>    
   <div class="col-md-3">
    <button type="button" class="btn btn-warning" data-bs-toggle="collapse" data-bs-target="#demo3"><h5>Prime seat(s)</h5></button>
    <div id="demo3" class="collapse"><br>
    <p>You can select the prime seat(s) in your coach at an additional cost. Please get in touch with our team on +91 9940882200 for more details.</p>

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
