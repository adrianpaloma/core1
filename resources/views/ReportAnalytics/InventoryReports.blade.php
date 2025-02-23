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
    <title>Inventory Report</title>
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
        .inventory-metrics {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
        }
        .metrics-card {
            background-color: #f1f3f5;
            padding: 1rem;
            border-radius: 8px;
            width: 18%;
            text-align: center;
        }
        .chart-container {
            width: 100%;
            height: 350px;
        }
        .filter-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
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
                                <h5 class="mb-0" style="color: white;">Inventory Reports</h5>
                            </div>
                            <div class="card-body">
                                <div class="filter-section">
                                    <div>
                                        <label for="vendor">Select Vendor:</label>
                                        <select id="vendor" class="form-control" style="width: 200px;">
                                            <option value="all">All Vendors</option>
                                            <option value="vendor1">Vendor 1</option>
                                            <option value="vendor2">Vendor 2</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-primary">Filter</button>
                                </div>

                                <div class="inventory-metrics">
                                    <div class="metrics-card">
                                        <h6>Total Products</h6>
                                        <p class="font-weight-bold">320</p>
                                    </div>
                                    <div class="metrics-card">
                                        <h6>In Stock</h6>
                                        <p class="font-weight-bold">250</p>
                                    </div>
                                    <div class="metrics-card">
                                        <h6>Out of Stock</h6>
                                        <p class="font-weight-bold">45</p>
                                    </div>
                                    <div class="metrics-card">
                                        <h6>Low Stock</h6>
                                        <p class="font-weight-bold">25</p>
                                    </div>
                                    <div class="metrics-card">
                                        <h6>Value of Stock</h6>
                                        <p class="font-weight-bold">₱120,000</p>
                                    </div>
                                </div>

                                <div class="chart-container">
                                    <canvas id="vendorChart"></canvas>
                                </div>

                                <table class="table table-hover mt-3">
                                    <thead>
                                        <tr>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Vendor</th>
                                            <th scope="col">Stock Level</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Arabica Beans</td>
                                            <td>Vendor 1</td>
                                            <td>150</td>
                                            <td>₱500</td>
                                            <td><span class="badge badge-success">In Stock</span></td>
                                        </tr>
                                        <tr>
                                            <td>Robusta Ground</td>
                                            <td>Vendor 2</td>
                                            <td>20</td>
                                            <td>₱120</td>
                                            <td><span class="badge badge-warning">Low Stock</span></td>
                                        </tr>
                                        <tr>
                                            <td>Instant Coffee Pack</td>
                                            <td>Vendor 1</td>
                                            <td>0</td>
                                            <td>₱25</td>
                                            <td><span class="badge badge-danger">Out of Stock</span></td>
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
<script src="home/assets/libs/js/main-js.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('vendorChart').getContext('2d');
    const vendorChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Vendor 1', 'Vendor 2'],
            datasets: [{
                label: 'Stock Level',
                data: [170, 30],
                backgroundColor: '#28a745',
                borderColor: '#28a745',
                borderWidth: 1
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