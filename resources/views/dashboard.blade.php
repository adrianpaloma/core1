<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="home/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="home/assets/libs/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css">
    <title>Vendor Dashboard</title>
    <style>
        body {
            background-color: #f7f8fa;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .dashboard-metrics {
            display: flex;
            justify-content: space-between;
        }
        .sales-analytics {
            height: 250px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="dashboard-main-wrapper">
        @include('home.header')
        @include('home.sidenav')

        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row mb-4 dashboard-metrics">
                    <div class="col-md-4">
                        <div class="card text-center text-white bg-primary">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-box"></i> Total Products</h5>
                                <p class="card-text">150</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center text-white bg-success">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-shopping-cart"></i> Total Orders</h5>
                                <p class="card-text">21,375</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center text-white bg-warning">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-hand-holding-usd"></i> Total Revenue</h5>
                                <p class="card-text">₱24,254</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Sales Analytics</h5>
                                <canvas id="sales-analytics-chart" class="sales-analytics"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Top Selling Products</h5>
                                <ul>
                                    <li>Coffee Beans - 500 Sales</li>
                                    <li>Espresso Pods - 300 Sales</li>
                                    <li>Ground Coffee - 200 Sales</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Recent Orders</h5>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Customer</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#1023</td>
                                            <td>John Doe</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td>₱2,500</td>
                                        </tr>
                                        <tr>
                                            <td>#1024</td>
                                            <td>Jane Smith</td>
                                            <td><span class="badge bg-warning">Pending</span></td>
                                            <td>₱1,200</td>
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

    <script src="home/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="home/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script>
        var ctx = document.getElementById('sales-analytics-chart').getContext('2d');
        var salesAnalyticsChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Sales (₱)',
                    data: [2000, 2500, 2300, 2800, 3000, 3500, 4000],
                    borderColor: '#007bff',
                    backgroundColor: 'rgba(0, 123, 255, 0.2)',
                    borderWidth: 2,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: { title: { display: true, text: 'Month' } },
                    y: { title: { display: true, text: 'Sales (₱)' } }
                }
            }
        });
    </script>
</body>

</html>