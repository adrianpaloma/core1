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
        /* Button Styling */
        .btn {
            border-radius: 25px;
            padding: 10px 15px;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn-warning { background-color: #f39c12; border-color: #f39c12; color: white; }
        .btn-warning:hover { background-color: #e67e22; border-color: #e67e22; transform: translateY(-2px); }
        .btn-danger { background-color: #e74c3c; border-color: #e74c3c; color: white; }
        .btn-danger:hover { background-color: #c0392b; border-color: #c0392b; transform: translateY(-2px); }
        .btn-info { background-color: #3498db; border-color: #3498db; color: white; }
        .btn-info:hover { background-color: #2980b9; border-color: #2980b9; transform: translateY(-2px); }
        .btn i { margin-right: 5px; }
        .table td .btn { margin-right: 5px; }
    </style>
</head>
<body>

<div class="dashboard-main-wrapper">
    @include('home.header')
    @include('home.sidenav')

    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content">
                <!-- Card -->
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
                                            <td>{{ $product->name }}</td>
                                            <td>{{ number_format($price->unit_amount / 100, 2) }} {{ strtoupper($price->currency) }}</td>
                                            <td>{{ $product->metadata->stock }}</td>
                                            <td>{{ $product->metadata->status }}</td>
                                            <td>
                                                <!-- View Button -->
                                                <a href="" class="btn btn-info btn-sm">
                                                    <i class="fas fa-eye"></i> View
                                                </a>

                                                <!-- Edit Button (Opens Modal) -->
                                                <button class="btn btn-warning btn-sm" onclick="openEditModal('{{ $product->id }}', '{{ $product->name }}', '{{ $product->metadata->category }}')">
                                                    <i class="fas fa-edit"></i> Edit
                                                </button>

                                                <!-- Delete Button (Confirmation) -->
                                                <button class="btn btn-danger btn-sm" onclick="confirmDelete('')">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
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

<!-- Edit Product Modal -->
<div class="modal fade" id="editProductModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="editProductForm" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="editProductId" name="product_id">
                    
                    <div class="mb-3">
                        <label>Product Name</label>
                        <input type="text" id="editProductName" name="name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Category</label>
                        <select id="editProductCategory" name="category" class="form-control">
                            <option value="coffee">Coffee</option>
                            <option value="tea">Tea</option>
                            <option value="equipment">Equipment</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="home/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="home/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>

<script>
    function openEditModal(id, name, category) {
        document.getElementById('editProductId').value = id;
        document.getElementById('editProductName').value = name;
        document.getElementById('editProductCategory').value = category;
        new bootstrap.Modal(document.getElementById('editProductModal')).show();
    }

    function confirmDelete(url) {
        if (confirm("Are you sure you want to delete this product?")) {
            window.location.href = url;
        }
    }
</script>

</body>
</html>
