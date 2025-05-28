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

<!--include css file-->

<link href="{{ asset('assets/styles.css') }}" rel="stylesheet">

<style>
  .ultrapromax-header {
    background: linear-gradient(45deg, #ffcc00, #ff9900);
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    color: white;
    font-weight: bold;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    position: relative;
  }

  .ultrapromax-header i {
    font-size: 24px;
    margin-right: 10px;
  }

  .ultrapromax-card {
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    border: none;
    border-radius: 12px;
    overflow: hidden;
  }

  .ultrapromax-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }

  .package-title {
    font-size: 18px;
    font-weight: 600;
    text-align: center;
    padding: 10px;
  }
  
  .gallery-img {
  position: relative;
  overflow: hidden;
  transition: transform 0.3s ease;
  cursor: pointer;
}

.gallery-img img {
  transition: transform 0.4s ease;
}

.gallery-img:hover img {
  transform: scale(1.05);
}

.gallery-overlay {
  position: absolute;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #fff;
  width: 100%;
  text-align: center;
  padding: 10px;
  font-weight: bold;
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
}

.gallery-img:hover .gallery-overlay {
  opacity: 1;
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

<!-- carousel ending -->

<!-- grid starting  -->
<center>
    <h3 class="pt-5"></h3>
   <div class="ultrapromax-header mb-4">
    <i class="fas fa-suitcase-rolling"></i> PACKAGE LIST
  </div>
  
</div>
</center>


<!-- Ultrapromax Travel Gallery -->
<div class="container pt-5">
  <h2 class="text-center mb-4"> Travel Gallery</h2>
  <div class="row">

    <div class="col-lg-4 col-md-6 mb-4">
      <a href="{{ route('honeymoon.honeymoon') }}">
        <div class="gallery-img">
          <img src="{{ asset('honeymoon.jpg') }}" class="w-100 rounded shadow" alt="Luxury Honeymoon" />
          <div class="gallery-overlay"><i class="fas fa-heart"></i> Honeymoon Escapes</div>
        </div>
      </a>
      <a href="{{ route('package.packindia') }}">
        <div class="gallery-img mt-3">
          <img src="{{ asset('honeymoonindia.jpg') }}" class="w-100 rounded shadow" alt="India Premium Tours" />
          <div class="gallery-overlay"><i class="fas fa-spa"></i> Discover India</div>
        </div>
      </a>
    </div>

    <div class="col-lg-4 col-md-6 mb-4">
      <a href="{{ route('package.packafrica') }}">
        <div class="gallery-img">
          <img src="{{ asset('honeymoonafrica.jpg') }}" class="w-100 rounded shadow" alt="African Safari" />
          <div class="gallery-overlay"><i class="fas fa-binoculars"></i> African Adventures</div>
        </div>
      </a>
      <a href="{{ route('package.packamerica') }}">
        <div class="gallery-img mt-3">
          <img src="{{ asset('honeymmonamerica.jpg') }}" class="w-100 rounded shadow" alt="American Journey" />
          <div class="gallery-overlay"><i class="fas fa-globe-americas"></i> Explore America</div>
        </div>
      </a>
    </div>

    <div class="col-lg-4 col-md-6 mb-4">
      <a href="{{ route('package.packasia') }}">
        <div class="gallery-img">
          <img src="{{ asset('honeymoonasia.jpg') }}" class="w-100 rounded shadow" alt="Asia Luxury Tours" />
          <div class="gallery-overlay"><i class="fas fa-mountain"></i> Majestic Asia</div>
        </div>
      </a>
      <a href="{{ route('package.packeurope') }}">
        <div class="gallery-img mt-3">
          <img src="{{ asset('honeymoonengland.jpg') }}" class="w-100 rounded shadow" alt="Europe Elite Tours" />
          <div class="gallery-overlay"><i class="fas fa-landmark"></i> Classic Europe</div>
        </div>
      </a>
    </div>

  </div>
</div>

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


<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script> -->

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
