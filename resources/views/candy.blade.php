<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candy Products</title>
    <style>
        .product {
            border: 1px solid #ccc;
            padding: 16px;
            margin: 16px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .product h2 {
            margin-top: 0;
        }
        .product p {
            margin: 8px 0;
        }
    </style>
</head>
<body>
    <h1>Candy Products</h1>
    @foreach ($products as $product)
        <div class="product">
            <h2>{{ $product['name'] }}</h2>
            <p>{{ $product['description'] }}</p>
            <p><strong>Price:</strong> {{ $product['price'] }}</p>
        </div>
    @endforeach
</body>
</html>
