<!DOCTYPE html>
<html lang="en">
<head>
  <title>GT HOLIDAYS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Font Awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" /> 
  <!-- Bootstrap CDN link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head> 
<body>

<div class="container">
  <div class="bg-light py-3 py-md-5">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-12 col-md-11 col-lg-8 col-xxl-6">
          <div class="bg-white p-4 p-md-5 rounded shadow-sm">
            <center><h2 class="h3">Group Of Tour Editing Page</h2></center>
            <form id="updateform"  enctype="multipart/form-data">
            <img src="{{ asset('uploads/') }}/{{ $tourist[0]->image }}" alt="Student Image" style="width: 100px; height: 100px;">
              @csrf
              <input type="hidden" id="id" name="id" value="{{ $tourist->id }}">

              <div class="mb-3">
                <label for="tourname" class="form-label">Tour Name <span class="text-success">*</span></label>
                <input type="text" class="form-control" name="tourname" id="tourname" placeholder="Enter Tour Name" required>
              </div>

              <div class="mb-3">
                <label for="prizedetails" class="form-label">Prizing Details <span class="text-danger">*</span></label>
                <input type="number" class="form-control" name="prizedetails" id="prizedetails" placeholder="Enter amount" required>
              </div>

              <div class="mb-3">
                <label for="day1" class="form-label">Day 1 <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="day1" id="day1" placeholder="Enter day 1 details" required>
              </div>

              <div class="mb-3">
                <label for="day2" class="form-label">Day 2 <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="day2" id="day2" placeholder="Enter day 2 details" required>
              </div>

              <div class="mb-3">
                <label for="day3" class="form-label">Day 3 <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="day3" id="day3" placeholder="Enter day 3 details" required>
              </div>

              <div class="mb-3">
                <label for="day4" class="form-label">Day 4 <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="day4" id="day4" placeholder="Enter day 4 details" required>
              </div>

              <div class="mb-3">
                <label for="file" class="form-label">Image <span class="text-danger">*</span></label>
                <input type="file" class="form-control" name="file" id="file" required>
              </div>

              <div class="d-grid">
                <button class="btn btn-lg btn-success" id="submit" type="submit">Upload</button>
              </div>
            </form>    
          </div>    
        </div>
      </div>
    </div>
  </div>
</div>

</body> 
<span id="output"></span>

<script>
   $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function() {
            $("#updateform").submit(function(event) {
                event.preventDefault();

                var form = $("#updateform")[0];
                var data = new FormData(form);

                $.ajax({
                    type: "POST",
                    url: "{{route('updatetourist')}} ",
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        $("#output").text(data.result);
                        setTimeout(function() {
                            window.open("get-toursit", "_self");
                        }, 2000); 
                    },
                    error: function(err) {
                        $("#output").text("Error: " + err.responseJSON.message || "An error occurred");
                    }
                });
            });
        });
</script>

</html>
