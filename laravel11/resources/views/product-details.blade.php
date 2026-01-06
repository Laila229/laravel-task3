<h1>Product Details</h1>

@if ($selectedProduct)
    <p>Name: {{ $selectedProduct['name'] }}</p>
    <p>Price: ${{ $selectedProduct['price'] }}</p>
@else
    <p>Product not found</p>
@endif

<a href="/products">Back to products</a>
