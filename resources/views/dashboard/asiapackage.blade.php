<!DOCTYPE html>
<html lang="en">
<head>
  <title>GT HOLIDAYS - Form Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <!-- Style -->
  <style>
    body {
      background-color: #fffef6;
      font-family: 'Segoe UI', sans-serif;
    }

  #searchInput:focus {
    box-shadow: 0 0 12px rgba(255, 193, 7, 0.5);
  }

  #clearSearch {
    display: none;
    cursor: pointer;
  }

  #searchInput:not(:placeholder-shown) ~ #clearSearch {
    display: flex !important;
  }

    .table-container {
      padding: 40px 20px;
    }

    .card-table {
      background: #ffffff;
      border: 1px solid #f1c40f;
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(255, 223, 0, 0.2);
      overflow-x: auto;
    }

    .table th {
      background-color: #ffeaa7;
      color: #2d3436;
      font-weight: bold;
    }

    .table td, .table th {
      vertical-align: middle;
      white-space: nowrap;
    }

    h5 {
      color: #f39c12;
      font-weight: bold;
      letter-spacing: 1px;
    }

    .badge {
      font-size: 0.8rem;
      padding: 0.45em 0.75em;
      border-radius: 10px;
    }

    .btn-sm {
      padding: 4px 10px;
      font-size: 0.8rem;
      border-radius: 6px;
    }

    .btn-success {
      background-color: #27ae60;
      border-color: #27ae60;
    }

    .btn-success:hover {
      background-color: #219150;
    }

    .btn-primary {
      background-color: #2980b9;
      border-color: #2980b9;
    }

    .btn-danger {
      background-color: #c0392b;
      border-color: #c0392b;
    }

    @media (max-width: 768px) {
      .table-responsive {
        font-size: 0.875rem;
      }
    }
  </style>
</head>
<body>

  <center>
    <h5 class="pt-4">
      <i class="bi bi-stars text-warning me-2"></i> Welcome to <span class="text-dark">GT HOLIDAYS</span>PACKAGE - AFRICA Form Submissions
    </h5>
  </center>
  <!-- search box -->
  
  <div class="container-fluid table-container">
    <div class="row justify-content-center">
      <!--search box -->


      <!-- UltraProMax Search Box -->
      <!-- UltraProMax Yellow Centered Search Box -->
<div class="mb-4 d-flex justify-content-center">
  <div class="input-group w-50 position-relative shadow-sm rounded-pill overflow-hidden bg-white border border-warning">
    
    <!-- Search Icon -->
    <span class="input-group-text bg-white border-0 rounded-start-pill">
      <i class="bi bi-search text-warning fs-5"></i>
    </span>
    
    <!-- Input -->
    <input type="text" id="searchInput" class="form-control border-0 shadow-none ps-2 text-dark"
           placeholder="Search names, cities, emails..." style="background-color: #fff;">

    <!-- Clear Icon Button -->
    <button class="btn position-absolute end-0 top-0 bottom-0 d-flex align-items-center pe-3 border-0 bg-transparent" id="clearSearch">
      <i class="bi bi-x-circle-fill text-warning fs-5"></i>
    </button>
  </div>
</div>

@if (session('success'))
  <div id="successAlert" class="alert alert-success alert-dismissible fade show w-50 mx-auto text-center" role="alert">
    <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
    
  </div>

  <script>
    setTimeout(() => {
      // Use Bootstrap's alert dispose method to close
      var alertElement = document.getElementById('successAlert');
      if(alertElement){
        var alert = bootstrap.Alert.getOrCreateInstance(alertElement);
        alert.close();
      }
    }, 2000);  // 2000ms = 2 seconds
  </script>
@endif



      <div class="col-lg-11 col-md-12 col-sm-12">
        <div class="card-table p-3">
          <table class="table table-hover table-striped align-middle text-center">
            <thead>
             <tr>
                    <th><i class="bi bi-hash"></i> ID</th>
                    <th><i class="bi bi-calendar-check-fill"></i> Departure</th>
                    <th><i class="bi bi-envelope-fill"></i> Email</th>
                    <th><i class="bi bi-person-plus-fill"></i> Adults</th>
                    <th><i class="bi bi-emoji-smile-fill"></i> Children</th>
                    <th><i class="bi bi-baby"></i> Infants</th>
                    <th><i class="bi bi-gem"></i> Package</th>
                    <th><i class="bi bi-plus-circle-fill"></i> Add-ons</th>
                    <th><i class="bi bi-chat-left-dots-fill"></i> Requests</th>
                    <th><i class="bi bi-gear-fill"></i> Action</th>
                </tr>

            </thead>
                <tbody>
        <tr>
            <tbody>
                @forelse($tour as $tours)
                    <tr>
                     <td><i class="bi bi-hash text-secondary"></i> <span class="fw-bold text-muted">{{ $tours->id }}</span></td>
                    <td><i class="bi bi-calendar-check-fill text-primary"></i> {{ $tours->departure }}</td>
                    <td><i class="bi bi-envelope-fill text-info"></i> {{ $tours->email }}</td>
                    <td><i class="bi bi-person-plus-fill text-dark"></i> {{ $tours->adult }}</td>
                    <td><i class="bi bi-emoji-smile-fill text-warning"></i> {{ $tours->children }}</td>
                    <td><i class="bi bi-baby text-danger"></i> {{ $tours->infant }}</td>
                    <td><i class="bi bi-gem text-success"></i> {{ ucfirst($tours->package) }}</td>
                    <td><i class="bi bi-plus-circle-fill text-primary"></i> 
                        @if(!empty($tours->addons) && is_array($tours->addons))
                            {{ implode(', ', $tours->addons) }}
                        @else
                            N/A
                        @endif

                    </td>

                    <td><i class="bi bi-chat-left-dots-fill text-secondary"></i> 
                        {{ $tours->requests ?? 'N/A' }}
                    </td>


                        <td>
                  <!-- Edit -->
                
                  
                  <!-- Delete -->
                 <form action="{{ route('packasia.destroy', $tours->id) }}" method="POST" style="display:inline;" class="delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-sm btn-danger mb-1 delete-btn">
                      <i class="bi bi-trash"></i>
                    </button>
                  </form>

                  
                  <!-- Email -->
                  <form action="{{ route('packasia.email', $tours->id) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-success mb-1">
                      <i class="bi bi-envelope-paper-fill"></i>
                    </button>
                  </form>
                </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center">No data available.</td>
                    </tr>
                @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<script>
  const searchInput = document.getElementById('searchInput');
  const clearBtn = document.getElementById('clearSearch');

  searchInput.addEventListener('input', () => {
    const value = searchInput.value.toLowerCase();
    document.querySelectorAll('table tbody tr').forEach(row => {
      row.style.display = row.textContent.toLowerCase().includes(value) ? '' : 'none';
    });
    clearBtn.style.display = value ? 'flex' : 'none';
  });

  clearBtn.addEventListener('click', () => {
    searchInput.value = '';
    searchInput.dispatchEvent(new Event('input'));
  });
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.delete-btn').forEach(button => {
    button.addEventListener('click', function(event) {
      event.preventDefault();
      const form = this.closest('form');

      Swal.fire({
        title: 'Are you sure?',
        text: "This action cannot be undone!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',    // Red color
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          form.submit();
        }
      })
    });
  });
});
</script>


<!-- inline edit button working -->


</body>
</html>
