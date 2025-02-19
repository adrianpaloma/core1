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
    <title>Payment Settings</title>
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
        .settings-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        .switch {
            position: relative;
            display: inline-block;
            width: 40px;
            height: 20px;
        }
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: 0.4s;
            border-radius: 15px;
        }
        .slider:before {
            position: absolute;
            content: "";
            height: 14px;
            width: 14px;
            left: 3px;
            bottom: 3px;
            background-color: white;
            transition: 0.4s;
            border-radius: 50%;
        }
        input:checked + .slider {
            background-color: #28a745;
        }
        input:checked + .slider:before {
            transform: translateX(20px);
        }
        .payment-method-label {
            font-size: 1.1rem;
            font-weight: 500;
            margin-left: 10px;
            display: inline-block;
            vertical-align: middle;
        }
        .description {
            font-size: 0.9rem;
            color: #6c757d;
            margin-left: 20px;
            display: block;
        }
        .payment-method-row {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 1px 5px rgba(0,0,0,0.1);
            margin-bottom: 15px;
            transition: all 0.3s ease-in-out;
        }
        .payment-method-row:hover {
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            background-color: #e9ecef;
        }
        .btn-primary {
            padding: 12px 25px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 30px;
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #6e4b3d, #9e5d3b);
            color: #fff;
            border: none;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #9e5d3b, #6e4b3d);
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.2);
            transform: translateY(-2px);
        }
        .payment-method-row i {
            font-size: 1.3rem;
            margin-right: 10px;
            transition: color 0.3s ease;
        }
        .payment-method-row i:hover {
            color: #28a745;
        }
        .save-button-container {
            text-align: right;
            margin-top: 30px;
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
                
                <!-- Start Payment Settings Section -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0" style="color: white;">Payment Settings</h5>
                            </div>
                            <div class="card-body">
                                <div class="settings-title">Manage Payment Methods</div>

                                <!-- Payment Method: Credit Card -->
                                <div class="payment-method-row">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <label class="payment-method-label">
                                                <i class="fas fa-credit-card"></i> Credit Card
                                            </label>
                                            <p class="description">Allow customers to pay with credit cards (Visa, MasterCard, etc.)</p>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Payment Method: PayPal -->
                                <div class="payment-method-row">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <label class="payment-method-label">
                                                <i class="fab fa-paypal"></i> PayPal
                                            </label>
                                            <p class="description">Allow customers to pay via PayPal account.</p>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Payment Method: Bank Transfer -->
                                <div class="payment-method-row">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <label class="payment-method-label">
                                                <i class="fas fa-university"></i> Bank Transfer
                                            </label>
                                            <p class="description">Enable direct bank transfers as a payment option.</p>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Payment Method: Cash on Delivery -->
                                <div class="payment-method-row">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <label class="payment-method-label">
                                                <i class="fas fa-money-bill-alt"></i> Cash on Delivery
                                            </label>
                                            <p class="description">Allow customers to pay with cash upon delivery.</p>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="save-button-container">
                                    <button type="button" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Payment Settings Section -->

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
