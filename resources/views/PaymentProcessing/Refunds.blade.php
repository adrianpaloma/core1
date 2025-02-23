<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="home/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="home/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="home/assets/libs/css/style.css">
    <link rel="stylesheet" href="home/assets/vendor/font-awesome/fontawesome.css">
    <link rel="stylesheet" href="home/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <title>Refunds</title>
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

        .refund-table {
            margin-bottom: 0;
            border-collapse: collapse;
            width: 100%;
        }

        .refund-table th, .refund-table td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #ddd;
            vertical-align: middle;
        }

        .refund-table th {
            background-color: #f7f7f7;
            font-weight: 600;
        }

        .badge {
            font-size: 0.85rem;
            padding: 0.5rem 1rem;
            border-radius: 30px;
        }

        .refund-amount {
            font-weight: 600;
            font-size: 1.1rem;
        }

        .action-btn {
            font-size: 0.85rem;
            padding: 0.5rem 1rem;
            border-radius: 30px;
            transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
            font-weight: 600;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }

        .table-responsive {
            overflow-x: auto;
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
                
                <!-- Start Vendor Refunds Section -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0" style="color: white;">Refunds</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover refund-table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Refund ID</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Vendor</th>
                                                <th scope="col">Request Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Refund Amount</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#VF12345</td>
                                                <td>John Doe</td>
                                                <td>Vendor A</td>
                                                <td>2024-11-12</td>
                                                <td><span class="badge badge-success">Approved</span></td>
                                                <td class="refund-amount">₱250</td>
                                                <td>
                                                    <a href="#" class="btn btn-outline-primary btn-sm action-btn">View</a>
                                                    <a href="#" class="btn btn-outline-secondary btn-sm action-btn">Process</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#VF12346</td>
                                                <td>Jane Smith</td>
                                                <td>Vendor B</td>
                                                <td>2024-11-13</td>
                                                <td><span class="badge badge-warning">Processing</span></td>
                                                <td class="refund-amount">₱150</td>
                                                <td>
                                                    <a href="#" class="btn btn-outline-primary btn-sm action-btn">View</a>
                                                    <a href="#" class="btn btn-outline-secondary btn-sm action-btn">Process</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Vendor Refunds Section -->

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