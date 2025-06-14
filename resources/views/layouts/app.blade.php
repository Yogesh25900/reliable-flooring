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


  
@push('head')
<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
@endpush

</head>

<body>
  @include('partials.navbar')

  @yield('content')


  <section class="faq-section">
  <h2 class="faq-title">We Have <span class="faq-gradient">Answers</span></h2>

  <div class="faq-container">

  <div class="faq-item">
  <button class="faq-question">What types of flooring materials do you offer?</button>
  <div class="faq-answer">
    We offer a wide range of flooring options including vinyl, SPC, laminate, homogeneous, conductive, anti-static, and sports flooring.
  </div>
</div>

<div class="faq-item">
  <button class="faq-question">Do you provide both supply and installation services?</button>
  <div class="faq-answer">
    Yes, we handle everything from product supply to expert installation for both residential and commercial projects.
  </div>
</div>

<div class="faq-item">
  <button class="faq-question">Are your flooring products suitable for hospitals and cleanrooms?</button>
  <div class="faq-answer">
    Absolutely. We offer specialized conductive and anti-static flooring ideal for medical environments, labs, and ESD-sensitive areas.
  </div>
</div>

<div class="faq-item">
  <button class="faq-question">How do I get a quotation for my flooring project?</button>
  <div class="faq-answer">
    You can contact us via phone or email with your floor area and project details. Our team will prepare a customized estimate for you.
  </div>
</div>

<div class="faq-item">
  <button class="faq-question">Do you offer on-site consultation or measurement?</button>
  <div class="faq-answer">
    Yes, we offer free site visits in Nepal and provide accurate measurements and material suggestions.
  </div>
</div>


    <!-- Add more faq-item blocks below -->
    
  </div>
</section>


  @include('partials.footer')

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
</body>
</html>
