<!-- layouts/app.blade.php -->
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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>@yield('title')</title>
  <meta name="description" content="@yield('meta_description')">

  <!-- Open Graph -->
  <meta property="og:title" content="@yield('og_title')">
  <meta property="og:description" content="@yield('og_description')">
  <meta property="og:image" content="@yield('og_image')">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta name="twitter:card" content="summary_large_image">

  <!-- Schema Markup -->
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

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
  @include('partials.navbar')

  @yield('content')

  @include('partials.footer')
</body>
</html>
