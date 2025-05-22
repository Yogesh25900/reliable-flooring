<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">


    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
/>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    @include('partials.navbar')

 <div class="product-image-wrapper" id="home">
    <img src="{{ asset('images/products/' . $product['image']) }}" alt="{{ $product['name'] }}">
    <div class="product-item-text-overlay">
        <h1 class="poppins-black">{{ $product['name'] }}</h1>
        <p class="poppins-regular">
            Homogeneous vinyl flooring, with flexible and diverse design choices, with high wear resistance, clean antibacterial, anti-pollution, health and environmental protection, easy to clean and maintain many excellent performance, it is widely used in high-traffic commercial and industrial fields, including medical institutions, old-age institutions, educational institutions, transportation places, office buildings, shopping malls, factories and so on.
        </p>
    </div>
</div>




<section id="product-specifications" class="product-specifications">
  <div class="specification-container">
  
    <div class="specification">
      <h3 class="spec-title">
        <i class="fas fa-shield-alt"></i> Durability
      </h3>
      <p class="spec-detail">Long-lasting with a warranty of 5 years for all flooring types.</p>
    </div>

    <div class="specification">
      <h3 class="spec-title">
        <i class="fas fa-tools"></i> Maintenance
      </h3>
      <p class="spec-detail">Easy to clean and maintain, resistant to stains and scratches.</p>
    </div>

    <div class="specification">
      <h3 class="spec-title">
        <i class="fas fa-hand-paper"></i> Slip Resistance
      </h3>
      <p class="spec-detail">Designed to provide excellent grip reducing slip hazards.</p>
    </div>

    <div class="specification">
      <h3 class="spec-title">
        <i class="fas fa-flask"></i> Chemical Resistance
      </h3>
      <p class="spec-detail">Resistant to common household chemicals and solvents.</p>
    </div>

    <div class="specification">
      <h3 class="spec-title">
        <i class="fas fa-fire-alt"></i> Fire Safety
      </h3>
      <p class="spec-detail">Meets international fire safety standards for flooring materials.</p>
    </div>

    <div class="specification">
      <h3 class="spec-title">
        <i class="fas fa-toilet-paper"></i> Hygienic
      </h3>
      <p class="spec-detail">Antibacterial surface helps maintain a clean and healthy environment.</p>
    </div>

    <div class="specification">
      <h3 class="spec-title">
        <i class="fas fa-tools"></i> Easy Installation
      </h3>
      <p class="spec-detail">Quick and straightforward installation process saving time and labor.</p>
    </div>

    <div class="specification">
      <h3 class="spec-title">
        <i class="fas fa-leaf"></i> Healthy & Eco-Friendly
      </h3>
      <p class="spec-detail">Made from environmentally friendly materials with low VOC emissions.</p>
    </div>

    <div class="specification">
      <h3 class="spec-title">
        <i class="fas fa-palette"></i> Modern Design Selection
      </h3>
      <p class="spec-detail">Wide range of contemporary styles and colors to suit any decor.</p>
    </div>
    
  </div>
</section>





<style>
  .palette-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 1rem;
  }

  .swatch-box {
    flex: 1 1 calc(25% - 1rem);
    min-width: 200px;
    text-align: center;
  }

  @media (max-width: 768px) {
    .swatch-box {
      flex: 1 1 calc(50% - 1rem); /* 2 columns on smaller screens */
    }
  }
</style>

<section id="rejuvenation-palette" style="padding: 2rem; background: #ffffff; width: 100%;">
  <h2 style="font-family: sans-serif; font-size: 2rem; font-weight: bold; margin-bottom: 2rem; text-align: center;">Rejuvenation Collection</h2>

  <div class="palette-container">
    
    <div class="swatch-box">
      <div style="width: 100%; height: 120px; background: #f4f4f2;"></div>
      <small>CN-2301</small><br>
      <strong>High Reflective White</strong><br>
      <small>Interior</small>
    </div>

    <div class="swatch-box">
      <div style="width: 100%; height: 120px; background: #f5f3ec;"></div>
      <small>25024</small><br>
      <strong>Greek Villa</strong><br>
      <small>Interior / Exterior</small>
    </div>

    <div class="swatch-box">
      <div style="width: 100%; height: 120px; background: #eae3db;"></div>
      <small>YB22A-101</small><br>
      <strong>Light Coir</strong><br>
      <small>Interior / Exterior</small>
    </div>

    <div class="swatch-box">
      <div style="width: 100%; height: 120px; background: #dcc4b4;"></div>
      <small>CN-2306</small><br>
      <strong>Townhouse Tan</strong><br>
      <small>Interior / Exterior</small>
    </div>

    

    <!-- Add more swatches here as needed -->

  </div>

  <!-- <p style="margin-top: 1rem; font-size: 0.9rem; color: #555;">
  *We have many more color options available. Contact us or visit our showroom to explore the full range.
</p> -->

</section>



<section id="homogeneous-product-info">


    <div class="homogeneous-related">

    <h2 class="blue-background-bar">FEWER VOC’S BETTER INDOOR AIR QUALITY</h2>



    
    <section class="card-grid">
 <div class="info-card">
  <img src="{{ asset('images/reachlogo.png') }}" alt="Composition Icon">
  <div class="text-content">
    <h3>COMPOSITION</h3>
    <ul>
      <li>100% REACH compliant</li>
      <li>FREE of formaldehyde</li>
      <li>FREE of heavy metals</li>
      <li>FREE of solvent</li>
    </ul>
  </div>
</div>

<div class="info-card">
  <img src="{{ asset('images/Recycle logo.png') }}" alt="Composition Icon">
  <div class="text-content">
    <h3>RECYCLED CONTENT</h3>
    <ul>
      <li>100% REACH compliant recycle content</li>
  
    </ul>
  </div>
</div>


<div class="info-card">
  <img src="{{ asset('images/Indoor_Air_Quality_-_Emphasis_on_Freshness.png') }}" alt="Composition Icon">
  <div class="text-content">
    <h3>INDOOR AIR QUALITY</h3>
    <ul>
    <li>TVOC emissions 100 times lower than norm requirements(TVOC<10 µg/m³ after 28 days)</li>
      <li>No formaldehyde emission</li>
    </ul>
  </div>
</div>


 <div class="info-card">
  <img src="{{ asset('images/Ecofrindly recycle logo.png') }}" alt="Composition Icon">
  <div class="text-content">
    <h3>RECYCLABLE</h3>
    <ul>
      <li>100% recyclable product</li>
     
    </ul>
  </div>
</div>


 <div class="info-card">
  <img src="{{ asset('images/Adhering logo.png') }}" alt="Composition Icon">
  <div class="text-content">
    <h3>Adhering</h3>
    <ul>
      <li>DOP free, heavy metal, VOC content is very low.</li>
    
    </ul>
  </div>
</div>


 <div class="info-card">
  <img src="{{ asset('images/Wellness logo.png') }}" alt="Composition Icon">
  <div class="text-content">
    <h3>WELLNESS</h3>
    <ul>
      <li>Antibacterial activity
(inhibits growth>99%)</li>
    
    </ul>
  </div>
</div>

</section>


        <img src="{{ asset('images/products/homogeneous-detail.png') }}"  >
       
    </div>
</section>



<div class="spec-table-wrapper">
    <h2>Product Specifications</h2>
    <table class="spec-table">
        <thead>
            <tr>
                <th>Description</th>
                <th>Standard</th>
                <th>Unit</th>
                <th>Result</th>
            </tr>
        </thead>
        <tbody>
            <!-- Product Specifications -->
            <tr><td>Type of flooring</td><td>EN649</td><td></td><td>Homogeneous sheet</td></tr>
            <tr><td>Total Thickness</td><td>EN428</td><td>mm</td><td>2.0</td></tr>
            <tr><td>Width</td><td>EN426</td><td>m</td><td>2</td></tr>
            <tr><td>Length Sheet</td><td>EN426</td><td>m</td><td>20</td></tr>
            <tr><td>Weight</td><td>EN430</td><td>g/m²</td><td>2650–3400</td></tr>

            <!-- Classification -->
            <tr class="section-header"><td colspan="4">Classification</td></tr>
            <tr><td>Fire rating</td><td>GB 8624–2012</td><td></td><td>GB 8624 B₁ (B₁ = s1)</td></tr>
            <tr><td>Toxic testing</td><td>GB 18586–2001</td><td></td><td>Good</td></tr>
            <tr><td>Electrical resistance</td><td>EN1081</td><td></td><td>> 10¹⁰</td></tr>
            <tr><td>Slip resistance dry</td><td>EN13893</td><td></td><td>≥ 0.3</td></tr>
            <tr><td>Slip resistance wet</td><td>EN 51 130</td><td></td><td>R9</td></tr>

            <!-- Performance -->
            <tr class="section-header"><td colspan="4">Performance</td></tr>
            <tr><td>Abrasion group</td><td>EN660–2</td><td></td><td>P–T</td></tr>
            <tr><td>Castor wheel test</td><td>EN425</td><td></td><td>Suitable</td></tr>
            <tr><td>Color fastness</td><td>EN 20 105–B02</td><td></td><td>6</td></tr>
            <tr><td>Chemical products resistance</td><td>EN423</td><td></td><td>Good</td></tr>
            <tr><td>Dimensional stability</td><td>EN434</td><td>%</td><td>≤ 0.40</td></tr>
            <tr><td>Flexibility</td><td>EN435</td><td></td><td>Excellent</td></tr>
            <tr><td>Hygiene treatment</td><td>MRSA</td><td></td><td>Very Good</td></tr>
            <tr><td>Impact sound reduction</td><td>ENISO717/2</td><td></td><td>Approx. +4dB</td></tr>
            <tr><td>Indentation</td><td>EN433</td><td>mm</td><td>≈ 0.05</td></tr>
            <tr><td>Residual indentation</td><td>EN433</td><td>mm</td><td>Approx. 0.04</td></tr>
            <tr><td>Surface treatment</td><td></td><td></td><td>PUR</td></tr>
        </tbody>
    </table>
</div>



<section id="advantages" style="width: 100vw; padding: 3rem 2rem; box-sizing: border-box; background: #ffffff; overflow-x: auto;">
    <!-- Header Section -->
    <div style="background: linear-gradient(135deg, #001f4d, #003366); color: white; padding: 1.2rem 2rem; border-radius: 0 80px 80px 0; max-width: fit-content; font-weight: 700; font-size: 1.8rem; margin-bottom: 2rem; box-shadow: 0 4px 12px rgba(0,0,0,0.3);">
        Advantages
    </div>

    <!-- Cards Container -->
    <div style="display: flex; gap: 1.5rem; border: 2px solid #003366; border-radius: 12px; padding: 2rem; background: #f1f6fa; justify-content: space-evenly; flex-wrap: nowrap; overflow-x: auto;">
        
        <!-- Card 1 -->
        <div style="flex: 0 0 auto; width: 180px; background: #e6f0ff; border-radius: 10px; padding: 1.5rem; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
            <i class="fas fa-leaf" style="font-size: 2rem; color: #27ae60;"></i>
            <p style="margin-top: 0.75rem; font-weight: 600;">Eco Friendly</p>
        </div>

        <!-- Card 2 -->
        <div style="flex: 0 0 auto; width: 180px; background: #e6f0ff; border-radius: 10px; padding: 1.5rem; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
            <i class="fas fa-tools" style="font-size: 2rem; color: #2980b9;"></i>
            <p style="margin-top: 0.75rem; font-weight: 600;">Easy Maintenance</p>
        </div>

        <!-- Card 3 -->
        <div style="flex: 0 0 auto; width: 180px; background: #e6f0ff; border-radius: 10px; padding: 1.5rem; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
            <i class="fas fa-shield-alt" style="font-size: 2rem; color: #c0392b;"></i>
            <p style="margin-top: 0.75rem; font-weight: 600;">Super Wear-Resistant</p>
        </div>

        <!-- Card 4 -->
        <div style="flex: 0 0 auto; width: 180px; background: #e6f0ff; border-radius: 10px; padding: 1.5rem; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
            <i class="fas fa-shoe-prints" style="font-size: 2rem; color: #8e44ad;"></i>
            <p style="margin-top: 0.75rem; font-weight: 600;">Anti Slip</p>
        </div>

        <!-- Card 5 -->
        <div style="flex: 0 0 auto; width: 180px; background: #e6f0ff; border-radius: 10px; padding: 1.5rem; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
            <i class="fas fa-volume-up" style="font-size: 2rem; color: #d35400;"></i>
            <p style="margin-top: 0.75rem; font-weight: 600;">Sound Absorbing</p>
        </div>

        <!-- Card 6 -->
        <div style="flex: 0 0 auto; width: 180px; background: #e6f0ff; border-radius: 10px; padding: 1.5rem; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
            <i class="fas fa-bug-slash" style="font-size: 2rem; color: #16a085;"></i>
            <p style="margin-top: 0.75rem; font-weight: 600;">Anti Bacterial</p>
        </div>
    </div>
</section>



<section id="applications" style="width: 100vw; padding: 3rem 2rem; box-sizing: border-box; background: #ffffff; overflow-x: auto;">
    <!-- Header Section -->
    <div style="background: linear-gradient(135deg, #001f4d, #003366); color: white; padding: 1.2rem 2rem; border-radius: 0 80px 80px 0; max-width: fit-content; font-weight: 700; font-size: 1.8rem; margin-bottom: 2rem; box-shadow: 0 4px 12px rgba(0,0,0,0.3);">
        Applications
    </div>

    <!-- Cards Container -->
    <div style="display: flex; gap: 1.5rem; border: 2px solid #003366; border-radius: 12px; padding: 2rem; background: #f1f6fa; justify-content: space-evenly; flex-wrap: nowrap; overflow-x: auto;">
        
        <!-- Card 1: Healthcare -->
        <div style="flex: 0 0 auto; width: 180px; background: #e6f0ff; border-radius: 10px; padding: 1.5rem; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
            <i class="fas fa-heartbeat" style="font-size: 2rem; color: #27ae60;"></i>
            <p style="margin-top: 0.75rem; font-weight: 600;">Healthcare</p>
        </div>

        <!-- Card 2: Education -->
        <div style="flex: 0 0 auto; width: 180px; background: #e6f0ff; border-radius: 10px; padding: 1.5rem; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
            <i class="fas fa-graduation-cap" style="font-size: 2rem; color: #2980b9;"></i>
            <p style="margin-top: 0.75rem; font-weight: 600;">Education</p>
        </div>

        <!-- Card 3: Office -->
        <div style="flex: 0 0 auto; width: 180px; background: #e6f0ff; border-radius: 10px; padding: 1.5rem; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
            <i class="fas fa-briefcase" style="font-size: 2rem; color: #c0392b;"></i>
            <p style="margin-top: 0.75rem; font-weight: 600;">Office</p>
        </div>

        <!-- Card 4: Shopping Mall -->
        <div style="flex: 0 0 auto; width: 180px; background: #e6f0ff; border-radius: 10px; padding: 1.5rem; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
            <i class="fas fa-shopping-cart" style="font-size: 2rem; color: #8e44ad;"></i>
            <p style="margin-top: 0.75rem; font-weight: 600;">Shopping Mall</p>
        </div>

        <!-- Card 5: Transportation -->
        <div style="flex: 0 0 auto; width: 180px; background: #e6f0ff; border-radius: 10px; padding: 1.5rem; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
            <i class="fas fa-bus" style="font-size: 2rem; color: #d35400;"></i>
            <p style="margin-top: 0.75rem; font-weight: 600;">Transportation</p>
        </div>

        <!-- Card 6: Factories -->
        <div style="flex: 0 0 auto; width: 180px; background: #e6f0ff; border-radius: 10px; padding: 1.5rem; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
            <i class="fas fa-industry" style="font-size: 2rem; color: #16a085;"></i>
            <p style="margin-top: 0.75rem; font-weight: 600;">Factories</p>
        </div>
    </div>
</section>




    @include('partials.footer')

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
