<section class="get-in-touch-footer" id="footer">
  <div class="footer-top">
    <!-- Map -->
    <div class="map-container">
      <iframe 
 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13433.558578928007!2d85.32102048397066!3d27.679905890830327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190005580711%3A0x278be37f818bb3f9!2sReliable%20Flooring%20and%20Fixing%20services!5e1!3m2!1sen!2snp!4v1748237847366!5m2!1sen!2snp" 
  width=100% height= 100%
   style="border:0;" 
        allowfullscreen="" loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>


    @if(session('success'))
  <div style="color: green;">
    {{ session('success') }}
  </div>
@endif
    <!-- Contact Form -->
    <div class="contact-form">
      <h2>Contact Us</h2>
<form action="{{ route('contact.send') }}" method="POST">
    @csrf

         <input type="text" name="name" placeholder="Your Name" required>
  <input type="email" name="email" placeholder="Your Email" required>
  <input type="number" name="phone" placeholder="Your Phone Number" required>

  <textarea name="message" placeholder="Your Message" required></textarea>
  <button type="submit">Send Message</button>
      </form>
    </div>
  </div>

  <!-- Footer Section -->
  <footer class="footer-section">
    <div class="footer-container">
      <!-- Logo & Description -->
      <div class="footer-column">
       
<img src="{{ asset('images/reliable-logo-white.png') }}" alt="Reliable Flooring and Fixing Services Logo" class="footer-logo">
        <p>We specialize in importing premium interior and exterior flooring products and decorative finishes.</p>
      </div>

      <!-- Contact Info -->
    <div class="footer-column">
<h2 class="footer-section-heading">Get in Touch</h2>
<address>
  <p><i class="fas fa-map-marker-alt"></i> Kathmandu, Nepal</p>
  <p><i class="fas fa-envelope"></i> <a href="mailto:flooringreliable@gmail.com">flooringreliable@gmail.com</a></p>
  <p><i class="fas fa-phone"></i> <a href="tel:+9779818303751">+977 9818303751</a></p>
  <p><i class="fas fa-phone"></i> <a href="tel:+977015922449">+977 01-5922449</a></p>
</address>


</div>
    <img src="https://www.animatedimages.org/data/media/839/animated-nepal-flag-image-0007.gif" 
         alt="Nepal Flag" 
         class="flag-icon" />

    </div>

    <div class="footer-bottom">
      <p>&copy; Designed by Shantosh Oli & Yogesh Chaudhary</p>
    </div>
  </footer>
</section>
