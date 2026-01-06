<h1>Products</h1>

<ul>
    @foreach ($products as $product)
        <li>
            {{ $product['name'] }} - ${{ $product['price'] }}

            <a href="/products/{{ $product['name'] }}">
                View Details
            </a>
        </li>
    @endforeach
</ul>
