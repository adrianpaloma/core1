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
    <title>Manage Returns</title>
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
        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }
        .status-badge {
            font-size: 0.9rem;
            font-weight: bold;
        }
        .btn {
            border-radius: 25px;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.3s ease-in-out;
        }
        .btn i {
            margin-right: 5px;
        }
        .table td .btn {
            margin-right: 5px;
        }
        .table th, .table td {
            vertical-align: middle;
            text-align: center;
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
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="mb-0" style="color: white;">Manage Returns</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Return ID</th>
                                            <th>Customer Name</th>
                                            <th>Product</th>
                                            <th>Return Date</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#R005</td>
                                            <td>David Brown</td>
                                            <td>Organic Coffee Beans</td>
                                            <td>2024-11-18</td>
                                            <td><span class="badge badge-warning status-badge">Pending</span></td>
                                            <td>
                                                <a href="#" class="btn btn-outline-success btn-sm" onclick="confirmApprove(event, '#R005')">Approve</a>
                                                <a href="#" class="btn btn-outline-danger btn-sm" onclick="confirmReject(event, '#R005')">Reject</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#R006</td>
                                            <td>Emma Wilson</td>
                                            <td>Barista Toolkit</td>
                                            <td>2024-11-19</td>
                                            <td><span class="badge badge-success status-badge">Approved</span></td>
                                            <td>
                                                <a href="#" class="btn btn-outline-primary btn-sm">Details</a>
                                            </td>
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
<script src="home/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<script src="home/assets/libs/js/main-js.js"></script>
<script>
    function confirmReject(event, returnId) {
        event.preventDefault();
        if (confirm("Are you sure you want to reject " + returnId + "?")) {
            alert(returnId + " has been rejected.");
            // You can add logic to handle the rejection action here.
        }
    }
    
    function confirmApprove(event, returnId) {
        event.preventDefault();
        if (confirm("Are you sure you want to approve " + returnId + "?")) {
            alert(returnId + " has been approved.");
            // You can add logic to handle the approval action here.
        }
    }
</script>
</body>
</html>