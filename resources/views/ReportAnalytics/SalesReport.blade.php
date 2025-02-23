<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="home/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="home/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="home/assets/libs/css/style.css">
    <link rel="stylesheet" href="home/assets/vendor/font-awesome/fontawesome.css">
    <link rel="stylesheet" href="home/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <title>Sales Report</title>
    <style>
        .card {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-top: 20px;
        }
        .card-header {
            background-color: #744c24;
            color: white;
            font-weight: bold;
            font-size: 1.2rem;
            padding: 15px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .filter-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }
        .chart-container {
            width: 100%;
            height: 300px;
        }
    </style>
</head>
<body>

<div class="dashboard-main-wrapper">
    @include('home.header')
    @include('home.sidenav')

    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0" style="color: white;">Sales Report</h5>
                            </div>
                            <div class="card-body">
                                <div class="filter-section">
                                    <div>
                                        <label for="vendor">Vendor:</label>
                                        <select id="vendor" class="form-control">
                                            <option value="all">All Vendors</option>
                                            <option value="vendor1">Vendor 1</option>
                                            <option value="vendor2">Vendor 2</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="date-range">Date Range:</label>
                                        <input type="date" id="start-date"> to <input type="date" id="end-date">
                                    </div>
                                    <button class="btn btn-primary">Filter</button>
                                </div>
                                
                                <!-- Sales Chart -->
                                <div class="chart-container">
                                    <canvas id="salesChart"></canvas>
                                </div>
                                
                                <table class="table table-hover mt-3">
                                    <thead>
                                        <tr>
                                            <th scope="col">Vendor</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Order ID</th>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Vendor 1</td>
                                            <td>2024-11-10</td>
                                            <td>#00123</td>
                                            <td>John Doe</td>
                                            <td>₱120</td>
                                            <td><span class="badge badge-success">Completed</span></td>
                                        </tr>
                                        <tr>
                                            <td>Vendor 2</td>
                                            <td>2024-11-11</td>
                                            <td>#00124</td>
                                            <td>Jane Smith</td>
                                            <td>₱240</td>
                                            <td><span class="badge badge-success">Completed</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('home.footer')
</div>

<script src="home/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="home/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('salesChart').getContext('2d');
    const salesChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Nov 1', 'Nov 5', 'Nov 10', 'Nov 15', 'Nov 20'],
            datasets: [{
                label: 'Sales (₱)',
                data: [200, 400, 300, 500, 700],
                borderColor: '#007bff',
                fill: false
            }]
        },
        options: {
            responsive: true,
            scales: {
                x: { beginAtZero: true },
                y: { beginAtZero: true }
            }
        }
    });
</script>
</body>
</html>
