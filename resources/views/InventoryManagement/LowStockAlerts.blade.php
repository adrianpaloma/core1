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
    <title>Low Stock Alerts</title>
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
        .low-stock-card {
            transition: box-shadow 0.3s ease;
        }
        .low-stock-card:hover {
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }
        .low-stock-title {
            font-size: 1.2rem;
            color: #d9534f;
        }
        .low-stock-badge {
            font-size: 0.9rem;
            padding: 0.5rem 0.7rem;
        }
        .table {
            margin-bottom: 0;
        }
        .table td, .table th {
            vertical-align: middle;
        }
        .restock-btn {
        font-size: 0.9rem;
        padding: 0.6rem 1rem;
        border-radius: 30px;
        font-weight: 600;
        border: 2px solid #d9534f;
        background-color: transparent;
        color: #d9534f;
        transition: all 0.3s ease;
    }

    .restock-btn:hover {
        background-color: #d9534f;
        color: white;
        border-color: #d9534f;
    }

    .restock-btn:focus {
        box-shadow: 0 0 0 0.2rem rgba(217, 83, 79, 0.25);
    }

    .restock-btn:active {
        transform: translateY(2px);
    }

    .restock-btn .fa {
        margin-right: 0.5rem;
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
                
                <!-- Start Low Stock Alerts Section -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0" style="color: white;">Low Stock Alerts</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <!-- Example Low Stock Cards -->
                                    <div class="col-md-4">
                                        <div class="card low-stock-card mb-4">
                                            <div class="card-body">
                                                <h6 class="card-title">Espresso Beans</h6>
                                                <p><strong>Stock Left:</strong> 15 units</p>
                                                <p><strong>Supplier:</strong> Global Coffee Traders</p>
                                                <p><span class="badge badge-danger low-stock-badge">Low Stock</span></p>
                                                <a href="#" class="btn btn-outline-danger restock-btn">Restock</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card low-stock-card mb-4">
                                            <div class="card-body">
                                                <h6 class="card-title">Milk Frother</h6>
                                                <p><strong>Stock Left:</strong> 8 units</p>
                                                <p><strong>Supplier:</strong> CoffeeGear Co.</p>
                                                <p><span class="badge badge-warning low-stock-badge">Critically Low</span></p>
                                                <a href="#" class="btn btn-outline-danger restock-btn">Restock</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card low-stock-card mb-4">
                                            <div class="card-body">
                                                <h6 class="card-title">Paper Cups</h6>
                                                <p><strong>Stock Left:</strong> 22 units</p>
                                                <p><strong>Supplier:</strong> Acme Coffee Supplies</p>
                                                <p><span class="badge badge-danger low-stock-badge">Low Stock</span></p>
                                                <a href="#" class="btn btn-outline-danger restock-btn">Restock</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add more low stock products -->
                                    <div class="col-md-4">
                                        <div class="card low-stock-card mb-4">
                                            <div class="card-body">
                                                <h6 class="card-title">Coffee Beans</h6>
                                                <p><strong>Stock Left:</strong> 10 units</p>
                                                <p><strong>Supplier:</strong> CoffeeWorld Inc.</p>
                                                <p><span class="badge badge-danger low-stock-badge">Low Stock</span></p>
                                                <a href="#" class="btn btn-outline-danger restock-btn">Restock</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card low-stock-card mb-4">
                                            <div class="card-body">
                                                <h6 class="card-title">Sugar Packets</h6>
                                                <p><strong>Stock Left:</strong> 12 units</p>
                                                <p><strong>Supplier:</strong> SweetGoods Co.</p>
                                                <p><span class="badge badge-danger low-stock-badge">Low Stock</span></p>
                                                <a href="#" class="btn btn-outline-danger restock-btn">Restock</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card low-stock-card mb-4">
                                            <div class="card-body">
                                                <h6 class="card-title">Coffee Machines</h6>
                                                <p><strong>Stock Left:</strong> 5 units</p>
                                                <p><strong>Supplier:</strong> TechBrew</p>
                                                <p><span class="badge badge-danger low-stock-badge">Low Stock</span></p>
                                                <a href="#" class="btn btn-outline-danger restock-btn">Restock</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card low-stock-card mb-4">
                                            <div class="card-body">
                                                <h6 class="card-title">Coffee Filters</h6>
                                                <p><strong>Stock Left:</strong> 10 units</p>
                                                <p><strong>Supplier:</strong> FilterCo.</p>
                                                <p><span class="badge badge-danger low-stock-badge">Low Stock</span></p>
                                                <a href="#" class="btn btn-outline-danger restock-btn">Restock</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card low-stock-card mb-4">
                                            <div class="card-body">
                                                <h6 class="card-title">Barista Aprons</h6>
                                                <p><strong>Stock Left:</strong> 4 units</p>
                                                <p><strong>Supplier:</strong> Stylish Aprons</p>
                                                <p><span class="badge badge-warning low-stock-badge">Critically Low</span></p>
                                                <a href="#" class="btn btn-outline-danger restock-btn">Restock</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Additional low stock products can be added here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Low Stock Alerts Section -->

            </div>
        </div>
    </div>

    @include('home.footer')
</div>

<script src="home/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="home/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="home/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<script src="home/assets/libs/js/main-js.js"></script>
</body>
</html>
