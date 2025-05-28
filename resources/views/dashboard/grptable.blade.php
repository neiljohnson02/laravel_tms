 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>grp table page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
      body {
        background-color: #fff3cd; /* Light yellow background */
      }

      h1 {
        color: #856404; /* Darker yellow for the header */
      }

      .btn-warning {
        background-color: #ffc107; /* Yellow background for buttons */
        border-color: #ffc107;
      }

      .btn-warning:hover {
        background-color: #e0a800; /* Darker yellow on hover */
        border-color: #e0a800;
      }

      table, td, th {
        border: 1px solid #dee2e6;
      }

      table {
        width: 100%;
        border-collapse: collapse;
        text-align: center;
      }

      td, th {
        padding: 10px;
      }

      th {
        background-color: #ffc107; /* Yellow background for table headers */
        color: #212529; /* Dark text for contrast */
      }

      img {
        max-width: 100px;
        height: auto;
      }

      .table-responsive {
        margin-top: 20px;
      }

      .btn-dark {
        background-color: #6c757d;
        border-color: #6c757d;
      }

      .btn-dark:hover {
        background-color: #5a6368;
        border-color: #5a6368;
      }

      .btn-danger {
        background-color: #dc3545; /* Red for delete button */
        border-color: #dc3545;
      }

      .btn-danger:hover {
        background-color: #c82333;
        border-color: #c82333;
      }
    </style>
  </head>
  <body class="container py-4">
    <div class="d-flex justify-content-between mb-3">
      <h1>Group Of Tour Table</h1>
      <a href="{{route('add')}}" class="btn btn-warning">Adding Group Tours</a>
    </div>

    <div class="table-responsive">
      <table class="table table-striped" id="table">
        <thead>
          <tr>
            <th>id</th>
            <th>tourtype</th>
            <th>tourname</th>
            <th>prizedetails</th>
            <th>day1</th>
            <th>day2</th>
            <th>day3</th>
            <th>day4</th>
            <th>image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </body>

  <script>
    $(document).ready(function(){
      $.ajax({
        type: "GET",
        url: "{{ route('gettourist') }}", 
        success: function(data) {
          console.log(data);

          if (data.tourist.length > 0) {
            for (let i = 0; i < data.tourist.length; i++) {
              let image = data.tourist[i]['image'];

              $("#table tbody").append(`
                <tr>
                  <td>${i + 1}</td>
                  <td>${data.tourist[i]['tourtype']}</td>
                  <td>${data.tourist[i]['tourname']}</td>
                  <td>${data.tourist[i]['prizedetails']}</td>
                  <td>${data.tourist[i]['day1']}</td>
                  <td>${data.tourist[i]['day2']}</td>
                  <td>${data.tourist[i]['day3']}</td>
                  <td>${data.tourist[i]['day4']}</td>
                  <td>
                    <img src="{{ asset('uploads') }}/${image}" alt="${image}">
                  </td>
                  <td>
                    <a href="editUser/${data.tourist[i]['id']}" class="btn btn-dark btn-sm">Edit</a>
                    <a href="#" data-id="${data.tourist[i]['id']}" class="btn btn-danger btn-sm" id="deletedata">Delete</a>
                  </td>
                </tr>
              `);
            }
          } else {
            $("#table tbody").append('<tr><td colspan="10">Data Not Found</td></tr>');
          }
        },
        error: function(err) {
          console.log(err.responseText);
        }
      });

      $("#table").on("click", "#deletedata", function() {
        var id = $(this).attr("data-id");
        var tourist = $(this); 

        $.ajax({
          type: "GET", 
          url: "delete-data/" + id,
          success: function(data) {
            tourist.closest('tr').remove(); 
            $("#output").text(data.result);
          },
          error: function(err) {
            console.log(err.responseText);
          }
        });
      }); 
    });
  </script>
</html>

