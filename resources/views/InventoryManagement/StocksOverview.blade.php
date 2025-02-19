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
    <title>Stocks Overview</title>
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
        .stock-item {
            background-color: #f7f9fc;
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            margin-bottom: 15px;
            padding: 15px;
            position: relative;
        }
        .stock-item:hover {
            background-color: #f0f5ff;
        }
        .item-name {
            font-size: 1.1rem;
            color: #333;
            font-weight: 600;
        }
        .item-stock {
            font-size: 0.9rem;
            color: #666;
        }
        .status-icon {
            font-size: 1.2rem;
            color: #fff;
            padding: 5px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .low-stock {
            background-color: #ffc107;
        }
        .out-of-stock {
            background-color: #dc3545;
        }
        .in-stock {
            background-color: #28a745;
        }
        .progress-bar {
            height: 8px;
            border-radius: 5px;
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

                    <!-- Stocks Overview Section -->
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0" style="color: white;">Stocks Overview</h5>
                                </div>
                                <div class="card-body">
                                    <!-- Stock Item 1 -->
                                    <div class="stock-item d-flex align-items-center">
                                        <span class="status-icon low-stock" title="Low Stock">&#x26A0;</span>
                                        <div class="flex-grow-1">
                                            <div class="item-name">Coffee Beans</div>
                                            <div class="item-stock">30 items in stock</div>
                                            <div class="progress mt-2">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Stock Item 2 -->
                                    <div class="stock-item d-flex align-items-center">
                                        <span class="status-icon out-of-stock" title="Out of Stock">&#x2716;</span>
                                        <div class="flex-grow-1">
                                            <div class="item-name">Espresso Machines</div>
                                            <div class="item-stock">0 items in stock</div>
                                            <div class="progress mt-2">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Stock Item 3 -->
                                    <div class="stock-item d-flex align-items-center">
                                        <span class="status-icon in-stock" title="In Stock">&#x2714;</span>
                                        <div class="flex-grow-1">
                                            <div class="item-name">Milk Frother</div>
                                            <div class="item-stock">50 items in stock</div>
                                            <div class="progress mt-2">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Stock Item 4 -->
                                    <div class="stock-item d-flex align-items-center">
                                        <span class="status-icon in-stock" title="In Stock">&#x2714;</span>
                                        <div class="flex-grow-1">
                                            <div class="item-name">Coffee Cups</div>
                                            <div class="item-stock">200 items in stock</div>
                                            <div class="progress mt-2">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Stock Item 5 -->
                                    <div class="stock-item d-flex align-items-center">
                                        <span class="status-icon low-stock" title="Low Stock">&#x26A0;</span>
                                        <div class="flex-grow-1">
                                            <div class="item-name">Sugar Packets</div>
                                            <div class="item-stock">25 items in stock</div>
                                            <div class="progress mt-2">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Stock Item 6 -->
                                    <div class="stock-item d-flex align-items-center">
                                        <span class="status-icon in-stock" title="In Stock">&#x2714;</span>
                                        <div class="flex-grow-1">
                                            <div class="item-name">Coffee Machines</div>
                                            <div class="item-stock">120 items in stock</div>
                                            <div class="progress mt-2">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Stock Item 7 -->
                                    <div class="stock-item d-flex align-items-center">
                                        <span class="status-icon out-of-stock" title="Out of Stock">&#x2716;</span>
                                        <div class="flex-grow-1">
                                            <div class="item-name">Barista Aprons</div>
                                            <div class="item-stock">0 items in stock</div>
                                            <div class="progress mt-2">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Stock Item 8 -->
                                    <div class="stock-item d-flex align-items-center">
                                        <span class="status-icon low-stock" title="Low Stock">&#x26A0;</span>
                                        <div class="flex-grow-1">
                                            <div class="item-name">Coffee Filters</div>
                                            <div class="item-stock">10 items in stock</div>
                                            <div class="progress mt-2">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Stocks Overview Section -->

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
