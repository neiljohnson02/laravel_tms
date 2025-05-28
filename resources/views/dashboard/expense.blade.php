<!DOCTYPE html>
<html lang="en">
<head>
  <title>Expesnive Analytics with Sidebar</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <style>
    body {
      background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
      color: #fff;
      font-family: 'Segoe UI', sans-serif;
      min-height: 100vh;
      margin: 0;
      display: flex;
    }

    /* Sidebar styles */
    #sidebar {
      width: 250px;
      background: #1b2a38;
      padding: 20px;
      min-height: 100vh;
      box-shadow: 3px 0 5px rgba(0,0,0,0.3);
      position: fixed;
      top: 0;
      left: 0;
      overflow-y: auto;
    }
    #sidebar h4 {
      color: #f9d342;
      margin-bottom: 30px;
      font-weight: 700;
      text-align: center;
      text-shadow: 1px 1px 3px #000;
    }
    #sidebar ul {
      list-style: none;
      padding-left: 0;
    }
    #sidebar ul li {
      padding: 10px 0;
      border-bottom: 1px solid #334a61;
    }
    #sidebar ul li a {
      color: #fff;
      text-decoration: none;
      font-size: 1.1rem;
      display: block;
    }
    #sidebar ul li a:hover {
      color: #f9d342;
    }

    /* Main content to the right of sidebar */
    #main-content {
      margin-left: 250px; /* same as sidebar width */
      padding: 40px 30px;
      flex-grow: 1;
    }

    h3 {
      color: #f9d342;
      font-weight: 700;
      text-shadow: 1px 1px 5px #000;
      margin-bottom: 30px;
      text-align: center;
    }

    .chart-container {
      background: rgba(255, 255, 255, 0.05);
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0,0,0,0.3);
      margin-bottom: 20px;
      height: 350px;
    }

    canvas {
      background: #ffffff11;
      border-radius: 10px;
      padding: 10px;
      max-height: 100%;
      width: 100% !important;
    }
  </style>
</head>

<body>

  <nav id="sidebar">
    <h4>Menu</h4>
    <ul>
      <li><a href="#"><i class="fas fa-home me-2"></i>Dashboard</a></li>
      <li><a href="#"><i class="fas fa-chart-bar me-2"></i>Analytics</a></li>
      <li><a href="#"><i class="fas fa-calendar-alt me-2"></i>Calendar</a></li>
      <li><a href="#"><i class="fas fa-cogs me-2"></i>Settings</a></li>
      <li><a href="#"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
    </ul>
  </nav>



 

  <main id="main-content" class="container-fluid">
  <h3><i class="fas fa-chart-line me-2"></i>Expense and Profit Analytics</h3>

  <!-- First row: Profit Chart + Doughnut -->
  <div class="row mb-4 align-items-center">
    <div class="col-md-6">
      <div class="chart-container">
        <canvas id="profitBarChart"></canvas>
      </div>
    </div>
    <div class="col-md-6">
      <div class="chart-container" style="max-width: 300px; margin: auto;">
        <canvas id="profitDoughnutChart"></canvas>
      </div>
    </div>
  </div>

  <!-- Second row: Expense Chart + Doughnut -->
  <div class="row align-items-center">
    <div class="col-md-6">
      <div class="chart-container">
        <canvas id="expenseBarChart"></canvas>
      </div>
    </div>
    <div class="col-md-6">
      <div class="chart-container" style="max-width: 300px; margin: auto;">
        <canvas id="expenseDoughnutChart"></canvas>
      </div>
    </div>
  </div>
</main>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script> <!-- for data labels -->

<script>
  // Common chart options to reuse
  const commonOptions = {
    responsive: true,
    maintainAspectRatio: false, // Let container control height
    plugins: {
      legend: {
        position: 'bottom',
        labels: { color: '#000', font: { size: 14, weight: 'bold' } },
        onClick: (e, legendItem, legend) => {
          const index = legendItem.datasetIndex;
          const chart = legend.chart;
          const meta = chart.getDatasetMeta(index);
          // Toggle dataset visibility on legend click
          meta.hidden = meta.hidden === null ? !chart.data.datasets[index].hidden : null;
          chart.update();
        }
      },
      tooltip: {
        enabled: true,
        backgroundColor: 'rgba(0,0,0,0.75)',
        titleFont: { size: 16, weight: 'bold' },
        bodyFont: { size: 14 },
        cornerRadius: 4,
        padding: 10,
        callbacks: {
          label: context => {
            let label = context.dataset.label || '';
            if (label) label += ': ';
            label += context.parsed.y !== undefined ? context.parsed.y : context.parsed;
            return label;
          }
        }
      },
      datalabels: {
        color: '#222',
        font: { weight: 'bold', size: 12 },
        formatter: (value) => value,
        anchor: 'end',
        align: 'top',
        offset: -5,
        display: true
      }
    },
    animation: {
      duration: 1000,
      easing: 'easeOutQuart'
    },
    scales: {
      y: {
        beginAtZero: true,
        ticks: { color: '#000', font: { size: 13 } },
        title: { display: true, text: 'Amount ($)', color: '#000', font: { size: 14, weight: 'bold' } }
      },
      x: {
        ticks: { color: '#000', font: { size: 13 } },
        title: { display: true, text: 'Months / Categories', color: '#000', font: { size: 14, weight: 'bold' } }
      }
    }
  };
  

  
  // Gradient helper
  function createGradient(ctx, area, colors) {
    const gradient = ctx.createLinearGradient(0, area.bottom, 0, area.top);
    colors.forEach((stop) => gradient.addColorStop(stop.pos, stop.color));
    return gradient;
  }

  // Profit Bar Chart with Gradient fill
  const ctxProfit = document.getElementById('profitBarChart').getContext('2d');
  let profitBarChart;
  function drawProfitChart() {
    const gradient = createGradient(ctxProfit, ctxProfit.canvas.getBoundingClientRect(), [
      { pos: 0, color: 'rgba(40, 167, 69, 0.9)' },
      { pos: 1, color: 'rgba(40, 167, 69, 0.3)' }
    ]);
    profitBarChart = new Chart(ctxProfit, {
      type: 'bar',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
          label: 'Monthly Profit ($)',
          data: [4000, 6000, 8000, 10000, 6000, 12000],
          backgroundColor: gradient,
          borderColor: '#28a745',
          borderWidth: 2,
          hoverBackgroundColor: 'rgba(72, 180, 97, 0.9)',
          hoverBorderColor: '#1e7e34'
        }]
      },
      options: {
        ...commonOptions,
        plugins: { ...commonOptions.plugins, datalabels: { ...commonOptions.plugins.datalabels, color: '#28a745' } }
      },
      plugins: [ChartDataLabels]
    });
  }
  drawProfitChart();

  // Profit Doughnut Chart with hover scale effect
  const ctxProfitDoughnut = document.getElementById('profitDoughnutChart').getContext('2d');
  new Chart(ctxProfitDoughnut, {
    type: 'doughnut',
    data: {
      labels: ['Product A', 'Product B', 'Product C'],
      datasets: [{
        label: 'Profit Distribution',
        data: [55, 30, 15],
        backgroundColor: ['#FFEB3B', '#4CAF50', '#2196F3'],
        borderColor: '#fff',
        borderWidth: 2,
        hoverOffset: 40
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: { position: 'bottom', labels: { color: '#000', font: { size: 14, weight: 'bold' } } },
        tooltip: {
          callbacks: {
            label: context => {
              const label = context.label || '';
              const value = context.parsed;
              return `${label}: ${value}%`;
            }
          }
        },
        datalabels: {
          color: '#000',
          font: { weight: 'bold', size: 14 },
          formatter: (value, context) => context.chart.data.labels[context.dataIndex],
          anchor: 'center',
          align: 'center'
        }
      },
      animation: { duration: 1200, easing: 'easeInOutQuad' }
    },
    plugins: [ChartDataLabels]
  });

  // Expense Bar Chart with gradient fill and hover
  const ctxExpense = document.getElementById('expenseBarChart').getContext('2d');
  let expenseBarChart;
  function drawExpenseChart() {
    const gradient = createGradient(ctxExpense, ctxExpense.canvas.getBoundingClientRect(), [
      { pos: 0, color: 'rgba(220, 53, 69, 0.9)' },
      { pos: 1, color: 'rgba(220, 53, 69, 0.3)' }
    ]);
    expenseBarChart = new Chart(ctxExpense, {
      type: 'bar',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
          label: 'Monthly Expense ($)',
          data: [8000, 9000, 10000, 12000, 11000, 13000],
          backgroundColor: gradient,
          borderColor: '#dc3545',
          borderWidth: 2,
          hoverBackgroundColor: 'rgba(220, 53, 69, 1)',
          hoverBorderColor: '#b02a37'
        }]
      },
      options: {
        ...commonOptions,
        plugins: { ...commonOptions.plugins, datalabels: { ...commonOptions.plugins.datalabels, color: '#dc3545' } }
      },
      plugins: [ChartDataLabels]
    });
  }
  drawExpenseChart();

  // Expense Doughnut Chart with labels inside slices
  const ctxExpenseDoughnut = document.getElementById('expenseDoughnutChart').getContext('2d');
  new Chart(ctxExpenseDoughnut, {
    type: 'doughnut',
    data: {
      labels: ['Marketing', 'Operations', 'R&D'],
      datasets: [{
        label: 'Expense Distribution',
        data: [40, 35, 25],
        backgroundColor: ['#FFEB3B', '#4CAF50', '#2196F3'],
        borderColor: '#fff',
        borderWidth: 2,
        hoverOffset: 40
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: { position: 'bottom', labels: { color: '#000', font: { size: 14, weight: 'bold' } } },
        tooltip: {
          callbacks: {
            label: context => {
              const label = context.label || '';
              const value = context.parsed;
              return `${label}: ${value}%`;
            }
          }
        },
        datalabels: {
          color: '#000',
          font: { weight: 'bold', size: 14 },
          formatter: (value, context) => context.chart.data.labels[context.dataIndex],
          anchor: 'center',
          align: 'center'
        }
      },
      animation: { duration: 1200, easing: 'easeInOutQuad' }
    },
    plugins: [ChartDataLabels]
  });
</script>


{{-- <div class="container pt-5">
  <div class="row pt-4">
<table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th>Table Name</th>
            <th>Total Profit</th>
            <th>Total Expenses</th>
        </tr>
    </thead>
    <tbody>
        @if(isset($summaries) && count($summaries))
            @foreach ($summaries as $summary)
                <tr>
                    <td>{{ ucfirst(str_replace('payments', '', $summary->table_name)) }}</td>
                    <td>{{ number_format($summary->profit, 2) }}</td>
                    <td>{{ number_format($summary->expenses, 2) }}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="3" style="text-align: center;">No data available.</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div> --}}

</body>
</html>
