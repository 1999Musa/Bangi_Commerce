<!-- resources/views/products/index.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Bangi - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">
    <h1  class="mb-4" >Bangi Commerce</h1>

    <h2 class="mb-4">Available Products</h2>
    @if($products->count())
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                        @else
                            <img src="{{ asset('images/default.png') }}" class="card-img-top" alt="Default Image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text"><strong>Price:</strong> Tk: {{ $product->price }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>No products available.</p>
    @endif
</body>

</html>