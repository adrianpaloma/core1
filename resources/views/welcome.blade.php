<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Platform | Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }
        .hero-section {
            height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://www.ceo-review.com/wp-content/uploads/2022/01/Vendor-Management.jpg') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }
        .feature-icon {
            font-size: 3rem;
            color: #007bff;
        }
        .cta-section {
            background: #007bff;
            color: white;
            padding: 50px 0;
            text-align: center;
        }
        .cta-section .btn {
            font-size: 1.2rem;
            padding: 12px 30px;
        }
        .footer {
            background: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .footer a {
            color: white;
            margin: 0 10px;
            font-size: 1.2rem;
            transition: 0.3s;
        }
        .footer a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Vendor Platform</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    <li class="nav-item"><a class="btn btn-primary" href="{{ route('login') }}">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="fw-bold display-4">Empower Your Business with Vendor Platform</h1>
            <p class="lead">Manage products, track sales, and grow your business seamlessly.</p>
            <a href="{{ route('register') }}" class="btn btn-lg btn-primary mt-3">Get Started</a>
        </div>
    </section>

    <!-- Features Section -->
    <main class="mt-6 container my-5">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="p-4 border rounded shadow-sm bg-white">
                    <i class="fas fa-box feature-icon"></i>
                    <h4 class="fw-bold mt-3">Product Management</h4>
                    <p>Easily manage and update your products with an intuitive dashboard.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 border rounded shadow-sm bg-white">
                    <i class="fas fa-truck feature-icon"></i>
                    <h4 class="fw-bold mt-3">Order Tracking</h4>
                    <p>Monitor your orders in real-time and ensure smooth deliveries.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 border rounded shadow-sm bg-white">
                    <i class="fas fa-chart-line feature-icon"></i>
                    <h4 class="fw-bold mt-3">Performance Analytics</h4>
                    <p>Gain insights on product performance and sales trends.</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Call to Action -->
    <section class="cta-section">
        <h2 class="fw-bold">Join Our Platform Today</h2>
        <p class="lead">Start managing your business more efficiently with our advanced tools.</p>
        <a href="{{ route('register') }}" class="btn btn-light me-3">Sign Up</a>
        <a href="{{ route('login') }}" class="btn btn-dark">Login</a>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p class="mb-2">&copy; {{ date('Y') }} Vendor Platform. All rights reserved.</p>
        <div>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
