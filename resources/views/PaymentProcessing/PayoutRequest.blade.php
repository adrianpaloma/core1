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
    <title>Payout Request</title>
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
        .form-label {
            font-weight: 600;
        }
        .btn-primary {
            background: linear-gradient(135deg, #6e4b3d, #9e5d3b);
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 1.1rem;
            border-radius: 30px;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #9e5d3b, #6e4b3d);
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
                                <div class="card-header">Payout Request</div>
                                <div class="card-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="payoutAmount" class="form-label">Payout Amount</label>
                                            <input type="number" class="form-control" id="payoutAmount" placeholder="Enter amount" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="paymentMethod" class="form-label">Payment Method</label>
                                            <select class="form-control" id="paymentMethod" required>
                                                <option value="">Select a method</option>
                                                <option value="Bank Transfer">Bank Transfer</option>
                                                <option value="PayPal">PayPal</option>
                                                <option value="Crypto Wallet">Crypto Wallet</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="accountDetails" class="form-label">Account Details</label>
                                            <textarea class="form-control" id="accountDetails" placeholder="Enter your account details" rows="3" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit Request</button>
                                    </form>
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
</body>
</html>
