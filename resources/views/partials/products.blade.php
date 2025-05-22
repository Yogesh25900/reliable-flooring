<section id="products" class="product-section">
  <h2 class="section-title">Our Flooring Products</h2>
  <div class="product-scroll-container">
    @foreach ($products as $product)
      <a href="{{ url('/products/' . $product['slug']) }}" class="product-card">
        <img src="{{ asset('images/products/' . $product['image']) }}" alt="{{ $product['name'] }}">
        <div class="overlay">
          <h3 class="product-name">{{ $product['name'] }}</h3>
        </div>
      </a>
    @endforeach
  </div>
</section>
