<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .card {
            width: 18rem;
            border-radius: 8px;
            overflow: hidden;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-content {
            padding: 15px;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            margin: 0;
            color: #333;
        }

        .card-description {
            font-size: 0.9rem;
            color: #777;
            margin: 10px 0;
            text-align: justify;
        }

        .card-button {
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .card-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center">
        @foreach ($plans as $product)
            @php
                $product_price = null;
                foreach ($prices as $price) {
                    if ($price->product == $product->id && $price->active) {
                        $product_price = $price;
                        break;
                    }
                }
            @endphp

            @if ($product_price)
                <div class="card">
                    <div class="card-content">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-description">
                            {{ number_format($product_price->unit_amount / 100, 2) }} {{ strtoupper($product_price->currency) }} / {{ $product_price->recurring['interval'] }}
                        </p>
                        <p class="card-description">{{ \Illuminate\Support\Str::words($product->description, 30) }}</p>

                        <form action="{{ route('subscribe') }}" method="POST">
                            @csrf()
                            @method('POST')

                            <input type="hidden" value="{{ $product_price->id }}" name="price_id">
                            <button type="submit" class="card-button">Subscribe</button>
                        </form>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
