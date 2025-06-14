<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>404 Not Found</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.9.6/lottie.min.js"></script>
  <style>
    body, html {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
    }

    .error-container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-color: #f8f9fa;
      padding: 20px;
    }

    .lottie-animation {
      max-width: 400px;
      max-height:300px;
      margin-bottom: .2rem;
    }

    .error-content {
      text-align: center;
    }

    .error-content h1 {
      font-size: 6rem;
      font-weight: bold;
      margin-bottom: 1rem;
      color: #007cc2;
    }

    .error-content p {
      font-size: 1.5rem;
      margin-bottom: 2rem;
      color: #555;
    }

    .error-content a {
      text-decoration: none;
      color: white;
      background-color: #007cc2;
      padding: 12px 24px;
      border-radius: 4px;
      font-weight: 500;
      transition: 0.3s;
    }

    .error-content a:hover {
      background-color: #005a9c;
    }
  </style>
</head>
<body>

  <div class="error-container">
    <div class="lottie-animation"></div>
    <div class="error-content">
      <h1>404</h1>
<p>We're building something great here! This page is coming soon — please check back later.</p>
      <a href="{{ url('/') }}">Back to Home</a>
    </div>
  </div>

  <script>
    lottie.loadAnimation({
      container: document.querySelector('.lottie-animation'),
      renderer: 'svg',
      loop: true,
      autoplay: true,
      path: 'https://lottie.host/a35f19b1-1235-4f72-8b99-e022dfcdb526/DGOFPM3BPa.json'
    });
  </script>

</body>
</html>
