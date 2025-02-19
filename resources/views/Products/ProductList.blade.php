<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="home/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="home/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="home/assets/libs/css/style.css">
    <link rel="stylesheet" href="home/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="css/txt.css">
    <title>Product List</title>
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
        .table img {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
        /* General Button Styling */
.btn {
    border-radius: 25px;
    padding: 10px 20px;
    font-size: 14px;
    font-weight: 600;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Edit Button Styling */
.btn-warning {
    background-color: #f39c12;
    border-color: #f39c12;
    color: white;
}

.btn-warning:hover {
    background-color: #e67e22;
    border-color: #e67e22;
    transform: translateY(-2px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
}

/* Delete Button Styling */
.btn-danger {
    background-color: #e74c3c;
    border-color: #e74c3c;
    color: white;
}

.btn-danger:hover {
    background-color: #c0392b;
    border-color: #c0392b;
    transform: translateY(-2px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
}

/* Button icon spacing */
.btn i {
    margin-right: 5px;
}

/* Table Button Spacing */
.table td .btn {
    margin-right: 10px;
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
                <!-- Card with header -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0" style="color: white;">Product List</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover mt-4">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($products as $product)
                                        @php
                                            $price = null;
                                            foreach ($prices as $item) {
                                                if($item->product == $product->id){
                                                    $price = $item;
                                                    break;
                                                }
                                            }
                                        @endphp
                                        <tr>
                                            <td><img src="https://www.coffeehit.co.uk/cdn/shop/articles/coffee-beans-101-the-4-most-popular-beans-explained.jpg?v=1708448895&width=1500" alt="Coffee Beans"></td>
                                            <td>
                                                {{ $product->name }}
                                            </td>
                                            <td>
                                               {{ number_format($price->unit_amount / 100, 2) }} {{ strtoupper($price->currency) }}
                                            </td>
                                            <td>
                                                {{ $product->metadata->stock }}
                                            </td>
                                            <td>
                                                {{ $product->metadata->status }}
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End of Card -->
            </div>
        </div>
    </div>
</div>

<script src="home/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="home/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="home/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<script src="home/assets/libs/js/main-js.js"></script>
</body>
</html>
