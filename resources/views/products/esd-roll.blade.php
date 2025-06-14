<!DOCTYPE html>
<html lang="en">
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6PF501SHT6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6PF501SHT6');
</script>
     <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <title>Conductive Flooring in Nepal | Reliable Flooring Nepal</title>
  
  <!-- Meta Description -->
  <meta name="description" content="Homogeneous vinyl flooring for hospitals, schools, and commercial buildings in Kathmandu. Easy to clean, durable, and antibacterial." />
  <meta name="keywords" content="homogeneous vinyl flooring, homogeneous flooring Kathmandu, vinyl flooring Nepal, hospital flooring Kathmandu" />

  <!-- Open Graph (for social sharing) -->
  <meta property="og:title" content="Homogeneous Vinyl Flooring in Kathmandu" />
  <meta property="og:description" content="Durable, antibacterial homogeneous flooring for institutional and commercial spaces." />
  <meta property="og:image" content="{{ asset('images/products/homogeneous-mainpagebg.png') }}" />
  <meta property="og:url" content="{{ url()->current() }}" />
  <meta name="twitter:card" content="summary_large_image" />

  <!-- Local Business Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Reliable Flooring and Fixing Services",
    "image": "{{ asset('images/reliable-logo-white.png') }}",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Kathmandu",
      "addressCountry": "NP"
    },
    "email": "flooringreliable@gmail.com",
    "telephone": "+9779818303751",
    "url": "https://reliableflooring.com.np"
  }
  </script>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
/>

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

</head>
<body>
    @include('partials.navbar')






      <section id="productGridWrapper">
      <section id="paletteHeading">
    <h2>Rolls Color Palette</h2>
  <p>Crafted to match timeless flooring aesthetics</p>
  </section>

<section id="topRow">
  <!-- Left: Large reference image -->
  <div class="referenceImage">
    <img src="{{ asset('images/products/rolls/Rollreferenceimage.png') }}" alt="Reference Room">
  </div>

  <!-- Right: 2 vertical swatches -->
  <div class="verticalSwatches">
    <div class="swatchCard">
      <img src="{{ asset('images/products/rolls/YD-1518.png') }}" alt="YD-1518">
      <p>YD-1518</p>
    </div>
    <div class="swatchCard">
      <img src="{{ asset('images/products/rolls/YD-1521.png') }}" alt="YD-1521">
      <p>YD-1521</p>
    </div>

      <div class="swatchCard">
    <img src="{{ asset('images/products/rolls/YD-1520.png') }}" alt="YD-1520">
    <p>YD-1520</p>
  </div>

 
  </div>
</section>




</section>




 <div class="mobile-floating-icons">
    <a href="https://www.facebook.com/share/17va5tGZ8f/?mibextid=wwXIfr" class="social-icon" target="_blank" aria-label="Facebook">
        <i class="fab fa-facebook-f" aria-hidden="true"></i>
      </a>
      <a href="https://instagram.com/reliable.flooring/" class="social-icon" target="_blank" aria-label="Instagram">
        <i class="fab fa-instagram" aria-hidden="true"></i>
      </a>
    <a href="https://wa.me/9779818303751" target="_blank" class="social-icon" aria-label="WhatsApp">
  <i class="fab fa-whatsapp" aria-hidden="true"></i>
</a>
</div>
    @include('partials.footer')




</body>


</html>
