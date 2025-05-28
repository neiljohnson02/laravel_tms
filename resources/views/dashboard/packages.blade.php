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

<style>

</style>
<!--include css file-->
<div class="container">
<div class="bg-light py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-11 col-lg-8  col-xxl-6">
        <div class="bg-white p-4 p-md-5 rounded shadow-sm">
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
                <center><h2 class="h3">Group Of Tour Packages</h2></center>
              </div>
            </div>
          </div>
          <form action="#!">
            <div class="row gy-3 gy-md-4 overflow-hidden">
            <div class="col-12">
            <select class="form-select" aria-label="Default select example">
              <option selected>Type Of Tours</option>
              <option value="1">Ultimate group of tour</option>
              <option value="2">fully reserved Expensive Tour</option>
            </select>
            </div>
              <div class="col-12">
                <label for="tourname" class="form-label">Tour Name <span class="text-success">*</span></label>
                <input type="text" class="form-control" name="tourname" id="tourname" placeholder="Enter Tour Name" required>
              </div>
              <div class="col-12">
                <label for="prizingdetails" class="form-label">Prizing Details<span class="text-danger">*</span></label>
                <input type="number" class="form-control" name="amount" id="amount" placeholder="enter amount" required>
              </div>
              <div class="col-12">
                <label for="day1" class="form-label">Day1<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="day1" id="day1" placeholder="enter day1 Itinerary" required>
              </div>
              <div class="col-12">
                <label for="day2" class="form-label">Day2<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="day2" id="day1" placeholder="enter day2 Itinerary" required>
              </div>
              <div class="col-12">
                <label for="day3" class="form-label">Day3<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="day3" id="day3" placeholder="enter day3 Itinerary" required>
              </div>
              <div class="col-12">
                <label for="day4" class="form-label">Day4<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="day4" id="day4" placeholder="enter day4 Itinerary" required>
              </div>
              <div class="col-12">
                <label for="image" class="form-label">Image<span class="text-danger">*</span></label>
                <input type="file" class="form-control" name="image" id="image" value="file uploaded" required>
              </div>
              <div class="col-12">
              <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
              <textarea class="form-control" id="description" rows="3"></textarea>
               </div>
              
            </div>
          </form>
          <div class="row">
            <div class="col-12">
              <hr class="mt-5 mb-4 border-secondary-subtle">
              <div class="col-12">
                <h2 class="m-0 text-secondary text-center">2.Company Side</h2>

                <div class="row gy-3 gy-md-4 pt-4 overflow-hidden">
              <div class="col-12">
                <label for="prize" class="form-label">Actual Package Prize <span class="text-success">*</span></label>
                <input type="text" class="form-control" name="prize" id="prize" placeholder=" Enter Actual Package Prize" required>
              </div>
              <div class="col-12">
                <label for="gst" class="form-label">Gst<span class="text-danger">*</span></label>
                <input type="number" class="form-control" name="gst" id="gst" placeholder="Enter Gst " required>
              </div>
              <div class="col-12">
                <label for="profit" class="form-label">Profit <span class="text-danger">*</span></label>
                <input type="number" class="form-control" name="profit" id="profit" placeholder="enter profit" required>
              </div>
              <div class="col-12">
                <label for="netamount" class="form-label">NetAmount<span class="text-danger">*</span></label>
                <input type="number" class="form-control" name="netamount" id="netamount"
                 placeholder="enter NetAmount" required>
              </div>
              <div class="col-12">
                <div class="d-grid">
                  <button class="btn btn-lg btn-primary" id="submit" type="submit">Upload</button>
                </div>
              </div>
            </div>
              </div>
            </div>
</div>    
    </div>
  </div>
</div>
</div>
<script>
    $(document).ready(function(){
        $("#submit").click(function(){
            var

        });
    });






</script>
