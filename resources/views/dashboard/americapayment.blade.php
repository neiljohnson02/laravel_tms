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
       <i class="bi bi-clipboard-data text-dark me-2"></i> </i><span class="text-dark">GT HOLIDAYS</span> <i class="fas fa-globe-americas text-primary me-2"></i>
  <i class="fas fa-credit-card text-success me-2"></i>
  AMERICA-PACKAGE PAYMENTS
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
                <th><i class="bi bi-people-fill"></i> Travel Group</th>
                <th><i class="bi bi-person-fill"></i> First Name</th>
                <th><i class="bi bi-envelope-fill"></i> Email</th>
                <th><i class="bi bi-telephone-fill"></i> Phone</th>
                <th><i class="bi bi-geo-alt-fill"></i> Address Line 1</th>
                <th><i class="bi bi-building"></i> City</th>
                <th><i class="bi bi-geo-alt"></i> State</th>
                <th><i class="bi bi-postage-heart"></i> ZIP</th>
                <th><i class="bi bi-currency-dollar"></i> Amount</th>
                <th><i class="bi bi-card-text"></i> Description</th>
                <th><i class="bi bi-person-badge"></i> Card First Name</th>
                <th><i class="bi bi-person-badge-fill"></i> Card Last Name</th>
                <th><i class="bi bi-calendar-check"></i> Date</th>
                <th><i class="bi bi-file-earmark-image"></i> Signature</th>
                <th><i class="bi bi-gear-fill"></i> Action</th>
                <th><i class="bi bi-graph-up-arrow"></i> Profit</th>


                </tr>
            </thead>
             <tbody>
               @foreach($payment as $tours)
                    <tr>
                <td><i class="bi bi-hash"></i> {{ $tours->id }}</td>
                <td><i class="bi bi-people-fill"></i> {{ $tours->travel_group }}</td>
                <td><i class="bi bi-person-fill"></i> {{ $tours->first_name }}</td>
                <td><i class="bi bi-envelope-fill"></i> {{ $tours->email }}</td>
                <td><i class="bi bi-telephone-fill"></i> {{ $tours->phone }}</td>
                <td><i class="bi bi-geo-alt-fill"></i> {{ $tours->address_line1 }}</td>
                <td><i class="bi bi-building"></i> {{ $tours->city }}</td>
                <td><i class="bi bi-geo"></i> {{ $tours->state }}</td>
                <td><i class="bi bi-mailbox"></i> {{ $tours->zip }}</td>
                <td><i class="bi bi-currency-dollar"></i> {{ number_format($tours->amount, 2) }}</td>
                <td><i class="bi bi-card-text"></i> {{ $tours->description }}</td>
                <td><i class="bi bi-person-badge"></i> {{ $tours->card_first_name }}</td>
                <td><i class="bi bi-person-badge-fill"></i> {{ $tours->card_last_name }}</td>
                <td><i class="bi bi-calendar-check"></i> {{ \Carbon\Carbon::parse($tours->date)->format('M d, Y') }}</td>
                <td>
                    <i class="bi bi-file-earmark-image"></i>
                    @if($tours->signature)
                        <img src="{{ asset('storage/' . $tours->signature) }}" alt="Signature" style="height:100px;">
                    @else
                        <span class="text-muted">N/A</span>
                    @endif
                </td>

                <td>
                  <!-- Delete -->
                 <form action="{{ route('packamericapayment.destroy', $tours->id) }}" method="POST" style="display:inline;" class="delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-sm btn-danger mb-1 delete-btn">
                      <i class="bi bi-trash"></i>
                    </button>
                  </form>

                  
                  <!-- Email -->
                  <form action="{{ route('packamericapayment.email', $tours->id) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-success mb-1">
                      <i class="bi bi-envelope-paper-fill"></i>
                    </button>
                  </form>
                </td>

                  <td class="profit-cell" data-amount="{{ (float) $tours->amount }}">
                    Calculating...
                  </td>
            </tr>

            @endforeach

                </tbody>

            
          </table>
        </div>
      </div>
    </div>
  </div>

  <!--graphical chart -->

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="container mt-5">
  <div class="row">
    <!-- Left Side: Amount Report -->
    <div class="col-md-6 mb-4">
      <h4 class="text-center">
        <i class="fas fa-chart-line text-success me-2"></i> Amount Report
      </h4>
      <div class="chart-container" style="position: relative; width: 100%; max-width: 100%; margin: 0 auto;">
        <canvas id="amountchart" style="width: 100%; height: 420px;"></canvas>
      </div>
    </div>

    <!-- Right Side: Profit Report -->
    <div class="col-md-6 mb-4">
      <h4 class="text-center">
        <i class="fas fa-chart-pie text-primary me-2"></i> Profit Report
      </h4>
      <div class="chart-container" style="position: relative; width: 100%; max-width: 100%; margin: 0 auto;">
        <canvas id="profitChart" style="width: 100%; height: 420px;"></canvas>
      </div>
    </div>
  </div>
</div>



<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const rows = document.querySelectorAll('table tbody tr');
    const groupAmounts = {};

    rows.forEach(row => {
      const travelGroup = row.cells[1].innerText.trim();
      let amountText = row.cells[9].innerText.trim();
      let amount = parseFloat(amountText.replace(/[^0-9.-]+/g, ""));

      if (!groupAmounts[travelGroup]) {
        groupAmounts[travelGroup] = 0;
      }
      groupAmounts[travelGroup] += amount;
    });

    const tourGroups = Object.keys(groupAmounts);
    const profits = Object.values(groupAmounts);

    const colors = [
      '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0',
      '#9966FF', '#FF9F40', '#C9CBCF', '#66CC99',
      '#FF6666', '#3399FF'
    ];

    const ctx = document.getElementById('amountchart').getContext('2d');

    new Chart(ctx, {
      type: 'pie',
      data: {
        labels: tourGroups,
        datasets: [{
          label: 'Total Profit (USD)',
          data: profits,
          backgroundColor: colors.slice(0, tourGroups.length),
          borderColor: '#ffffff',
          borderWidth: 2
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false, // Allows height control via CSS
        plugins: {
          legend: {
            position: 'bottom',
            labels: {
              font: {
                size: 14,
                weight: 'bold'
              }
            }
          },
          tooltip: {
            callbacks: {
              label: context => {
                let label = context.label || '';
                let value = context.raw || 0;
                return `${label}: $${value.toFixed(2)}`;
              }
            }
          },
          title: {
            display: true,
            text: 'Profit by Travel Group (Pie Chart)',
            font: {
              size: 18
            }
          }
        }
      }
    });
  });
</script>

<style>
  /* Optional: control canvas height */
  #amountchart {
    height: 400px !important;
  }
</style>



<!--graphical chart end -->




<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.2.0/dist/chartjs-plugin-datalabels.min.js"></script>

<script>
  Chart.register(ChartDataLabels);

  document.addEventListener('DOMContentLoaded', () => {
    const baseCost = 50000;

    const rows = document.querySelectorAll('table tbody tr');
    const profitByGroup = {};

    rows.forEach(row => {
      const travelGroup = row.cells[1].innerText.trim();
      const profitCell = row.querySelector('.profit-cell');
      const amount = parseFloat(profitCell.getAttribute('data-amount')) || 0;

      const profit = amount - baseCost;

      // Table styling with icons
      profitCell.textContent = (profit >= 0 ? '📈 +$' : '📉 -$') + Math.abs(profit).toLocaleString(undefined, {
        minimumFractionDigits: 2,
        maximumFractionDigits: 2
      });
      profitCell.style.color = profit >= 0 ? '#00ff99' : '#ff4d4d';

      if (!profitByGroup[travelGroup]) profitByGroup[travelGroup] = 0;
      profitByGroup[travelGroup] += profit;
    });

    const labels = Object.entries(profitByGroup).map(([key, val]) =>
      val >= 0 ? `${key} (Profit)` : `${key} (Loss)`
    );

    const data = Object.values(profitByGroup);

    const ctx = document.getElementById('profitChart').getContext('2d');

    new Chart(ctx, {
      type: 'line',
      data: {
        labels: labels,
        datasets: [{
          label: 'Stock-Like Profit / Loss (USD)',
          data: data,
          fill: true,
          borderColor: '#00ff99',
          backgroundColor: (ctx) => {
            const gradient = ctx.chart.ctx.createLinearGradient(0, 0, 0, 300);
            gradient.addColorStop(0, 'rgba(0, 255, 153, 0.6)');
            gradient.addColorStop(1, 'rgba(0, 204, 102, 0.1)');
            return gradient;
          },
          pointBackgroundColor: data.map(v => v >= 0 ? '#00ff99' : '#ff4d4d'),
          pointBorderColor: data.map(v => v >= 0 ? '#00ff99' : '#ff4d4d'),
          pointRadius: 6,
          pointHoverRadius: 8,
          tension: 0.4
        }]
      },
      options: {
        responsive: true,
        animation: {
          duration: 1000,
          easing: 'easeOutElastic'
        },
        plugins: {
          legend: { display: false },
          tooltip: {
            backgroundColor: '#1e1e2f',
            titleColor: '#fff',
            bodyColor: '#eee',
            callbacks: {
              label: ctx => {
                const val = ctx.raw;
                const arrow = val >= 0 ? '📈 Gained' : '📉 Lost';
                return `${arrow}: $${Math.abs(val).toFixed(2)}`;
              }
            }
          },
          datalabels: {
            anchor: 'end',
            align: 'top',
            color: ctx => ctx.dataset.data[ctx.dataIndex] >= 0 ? '#00ff99' : '#ff4d4d',
            font: {
              weight: 'bold',
              size: 13
            },
            formatter: val => {
              const sign = val >= 0 ? '+' : '-';
              const icon = val >= 0 ? '📈' : '📉';
              return `${icon} ${sign}$${Math.abs(val).toFixed(2)}`;
            }
          }
        },
        scales: {
          y: {
            beginAtZero: true,
            grid: {
              color: '#444'
            },
            title: {
              display: true,
              text: 'Profit / Loss (USD)',
              color: '#aaa'
            },
            ticks: {
              color: '#ccc',
              callback: value => '$' + value
            }
          },
          x: {
            grid: {
              display: false
            },
            ticks: {
              color: '#ddd'
            },
            title: {
              display: true,
              text: 'Travel Groups',
              color: '#aaa'
            }
          }
        }
      },
      plugins: [ChartDataLabels]
    });
  });
</script>



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
