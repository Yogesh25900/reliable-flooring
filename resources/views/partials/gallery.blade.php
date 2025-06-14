<style>
  #flooring-gallery {
    background: #e6dfdf;
    padding: 40px 20px;
    text-align: center;
  }

  #gallery-title {
    font-size: 30px;
    font-weight:1000;
    margin-bottom: 30px;
  }

  #category-options {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
    margin-bottom: 30px;
  }

  #category-options p {
    padding: 10px 15px;
    cursor: pointer;
    font-size:18px;
    border-bottom: 2px solid transparent;
    font-weight: 500;
  }

  #category-options p.active {
    border-color: #007cc2;
    color: #007cc2;
  }
#gallery-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  justify-content: center;
  gap: 20px;
  max-width: 1000px;
  margin: 0 auto;
  padding: 0 20px;
}

.gallery-img-box {
  width: 100%;
  position: relative;
  margin: 0 auto;
  overflow: hidden;
  border-radius: 10px;
}


.gallery-img-box img {
  width: 100%;
  display: block;
  border-radius: 10px;
  transition: transform 0.3s ease;
}

.gallery-btn-box {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: none;
  z-index: 2; /* Make sure it appears above the image */
}

.gallery-img-box:hover .gallery-btn-box {
  display: block;
}

.gallery-view-btn {
  background-color: #007cc2;
  color: #fff;
  padding: 8px 16px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

 
  .popup-overlay {
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 0; left: 0;
    width: 100vw; height: 100vh;
    background-color: rgba(0, 0, 0, 0.85);
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.3s ease;
    z-index: 9999;
  }

  .popup-overlay.active {
    opacity: 1;
    pointer-events: all;
  }

  .popup-inner {
    background: #fff;
    padding: 20px;
    border-radius: 12px;
    max-width: 500px;
    width: 90%;
    text-align: center;
    position: relative;
    transform: translateY(-30px);
    opacity: 0;
    transition: all 0.3s ease;
  }

  .popup-overlay.active .popup-inner {
    transform: translateY(0);
    opacity: 1;
  }

  .popup-inner img {
    width: 100%;
    border-radius: 10px;
  }

  .popup-close-btn {
    position: absolute;
    top: 10px;
    right: 15px;
    background: none;
    border: none;
    font-size: 18px;
    cursor: pointer;
    color: #333;
  }

  .popup-desc {
    margin-top: 15px;
    font-size: 16px;
    color: #555;
  }
  @media (min-width: 1200px) {
  #gallery-grid {
    grid-template-columns: repeat(4, 1fr);
  }

  @media (max-width: 1024px) {
  #gallery-grid {
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    max-width: 100%;
  }
}

@media (max-width: 768px) {
  #gallery-title {
    font-size: 24px;
  }

  #category-options p {
    font-size: 16px;
    padding: 8px 12px;
  }

  .gallery-view-btn {
    padding: 6px 12px;
    font-size: 14px;
  }

  .popup-inner {
    max-width: 90%;
    padding: 15px;
  }

  .popup-close-btn {
    font-size: 16px;
    top: 8px;
    right: 10px;
  }

  .popup-desc {
    font-size: 14px;
  }
}

@media (max-width: 480px) {
  #gallery-title {
    font-size: 20px;
  }

  #category-options {
    flex-direction: column;
    gap: 10px;
  }

  #category-options p {
    text-align: center;
  }

  .gallery-img-box {
    max-width: 100%;
  }

  .popup-inner img {
    max-height: 300px;
    object-fit: cover;
  }
}


}




#category-dropdown {
  display: none; /* Hidden by default */
}

/* ✅ Only show and style on small screens */
@media (max-width: 620px) {
  #category-options {
    display: none;
  }

  #category-dropdown {
    display: block;
    width: 80%;                  /* Responsive width */
    max-width: 300px;            /* Don’t let it get too big */
    padding: 10px 12px;
    font-size: 15px;
    border: 2px solid #007cc2;
    border-radius: 6px;
    margin: 0 auto 30px;
    font-family: 'Montserrat', sans-serif;
    background-color: #fff;
    color: #333;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
  }
}

#category-dropdown option {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
  


</style>

<section id="flooring-gallery">
  <h2 id="gallery-title">Recent Flooring Installations</h2>

<div id="category-options">
  <p class="active" data-filter="all">All</p>
  <p data-filter="one">Homogeneous</p>
  <p data-filter="two">Heterogeneous</p>
  <p data-filter="three">Sports Flooring</p>
  <p data-filter="four">Luxury Vinyl Tile (LVT)</p>
</div>

<select id="category-dropdown">
  <option value="all">All</option>
  <option value="one">Homogeneous</option>
  <option value="two">Heterogeneous</option>
  <option value="three">Sports Flooring</option>
  <option value="four">Luxury Vinyl Tile (LVT)</option>
</select>


  <div id="gallery-grid">
    <div class="gallery-img-box" data-category="one">
      <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d71.png" alt="">
      <div class="gallery-btn-box">
        <button class="gallery-view-btn" onclick="showGalleryPopup(1)">View</button>
      </div>
    </div>

    <div class="gallery-img-box" data-category="two">
      <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d72.png" alt="">
      <div class="gallery-btn-box">
        <button class="gallery-view-btn" onclick="showGalleryPopup(2)">View</button>
      </div>
    </div>

    <div class="gallery-img-box" data-category="three">
      <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d73.png" alt="">
      <div class="gallery-btn-box">
        <button class="gallery-view-btn" onclick="showGalleryPopup(3)">View</button>
      </div>
    </div>

    <div class="gallery-img-box" data-category="four">
      <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d74.png" alt="">
      <div class="gallery-btn-box">
        <button class="gallery-view-btn" onclick="showGalleryPopup(4)">View</button>
      </div>
    </div>
  </div>
</section>

<!-- Popup Overlays -->
<div id="popup-1" class="popup-overlay">
  <div class="popup-inner">
    <button class="popup-close-btn" onclick="closeGalleryPopup(1)">Close X</button>
    <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d71.png" alt="">
    <p class="popup-desc">Homogeneous Vinyl Flooring – seamless and durable.</p>
  </div>
</div>

<div id="popup-2" class="popup-overlay">
  <div class="popup-inner">
    <button class="popup-close-btn" onclick="closeGalleryPopup(2)">Close X</button>
    <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d72.png" alt="">
    <p class="popup-desc">Heterogeneous Flooring – layered comfort and style.</p>
  </div>
</div>

<div id="popup-3" class="popup-overlay">
  <div class="popup-inner">
    <button class="popup-close-btn" onclick="closeGalleryPopup(3)">Close X</button>
    <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d73.png" alt="">
    <p class="popup-desc">Sports Flooring – grip & shock absorption for athletes.</p>
  </div>
</div>

<div id="popup-4" class="popup-overlay">
  <div class="popup-inner">
    <button class="popup-close-btn" onclick="closeGalleryPopup(4)">Close X</button>
    <img src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d74.png" alt="">
    <p class="popup-desc">Luxury Vinyl Tile – premium finish with easy maintenance.</p>
  </div>
</div>

<script>
  // Category filter logic
  const galleryFilters = document.querySelectorAll('#category-options p');
  const galleryItems = document.querySelectorAll('.gallery-img-box');

  galleryFilters.forEach(filter => {
    filter.addEventListener('click', () => {
      galleryFilters.forEach(f => f.classList.remove('active'));
      filter.classList.add('active');

      const value = filter.getAttribute('data-filter');
      galleryItems.forEach(item => {
        const category = item.getAttribute('data-category');
        item.style.display = (value === 'all' || value === category) ? 'block' : 'none';
      });
    });
  });

  // Popup show/hide
  function showGalleryPopup(id) {
    const popup = document.getElementById(`popup-${id}`);
    popup.classList.add('active');
  }

  function closeGalleryPopup(id) {
    const popup = document.getElementById(`popup-${id}`);
    popup.classList.remove('active');
  }

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      document.querySelectorAll('.popup-overlay.active').forEach(popup => {
        popup.classList.remove('active');
      });
    }
  });


  const dropdown = document.getElementById('category-dropdown');

dropdown.addEventListener('change', function () {
  const value = this.value;

  galleryFilters.forEach(f => f.classList.remove('active'));
  // Optional: you can highlight matching <p> as active
  document.querySelector(`#category-options p[data-filter="${value}"]`)?.classList.add('active');

  galleryItems.forEach(item => {
    const category = item.getAttribute('data-category');
    item.style.display = (value === 'all' || value === category) ? 'block' : 'none';
  });
});

</script>
