<?php include ('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Varanasi Ghat Experience</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Explore the beautiful ghats of Varanasi with our stunning image slider">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome for Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    /* Carousel Styles */
    .carousel-item {
      height: 100vh;
      min-height: 500px;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      position: relative;
    }
    
    .carousel-caption {
      bottom: 20%;
      padding: 20px;
      border-radius: 10px;
      background-color: , 0, 0, 0.5);
    }
    
    .carousel-caption h3 {
      font-size: 2.5rem;
      font-weight: 700;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    
    .carousel-caption p {
      font-size: 1.2rem;
    }

    .fixed-icons {
      position: fixed;
      bottom: 20px;
      z-index: 999;
      display: flex;
      gap: 10px;
      left: 20px;
    }

    .fixed-icons.right {
      right: 20px;
      left: auto;
    }

    .fixed-icons a {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 55px;
      height: 55px;
      border-radius: 50%;
      color: #fff;
      font-size: 22px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      transition: all 0.3s ease;
      text-decoration: none;
    }

    .fixed-icons a:hover {
      transform: scale(1.1);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
    }

    .call-icon {
      background-color: #e91e63;
    }

    .whatsapp-icon {
      background-color: #25D366;
    }

    .whatsapp-icon span {
      margin-left: 8px;
      font-size: 14px;
      color: white;
      display: none;
    }

    .carousel-indicators button {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      margin: 0 5px;
    }

    /* Counter Section Styles */
    .counter-section {
      padding: 60px 0;
      background-color: #f8f9fa;
    }
    
    .counter-box {
      text-align: center;
      padding: 30px 20px;
      border-radius: 10px;
      background: white;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
    }
    
    .counter-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    
    .counter-icon {
      font-size: 50px;
      margin-bottom: 15px;
      color: #c80052;
    }
    
    .counter {
      font-size: 40px;
      font-weight: 700;
      color: #333;
      margin-bottom: 10px;
    }
    
    .counter-title {
      font-size: 18px;
      color: #666;
    }

    /* Tour Packages Slider Styles */
    .tour-slider {
      padding: 40px 20px;
      position: relative;
      background-color: #f8f9fa;
    }

    .tour-title {
      font-size: 24px;
      font-weight: 700;
      margin-bottom: 20px;
      color: #333;
    }

    .slider-controls {
      display: flex;
      justify-content: flex-end;
      gap: 10px;
      align-items: center;
    }

    .slider-controls button {
      border: none;
      background: #f3f3f3;
      width: 35px;
      height: 35px;
      border-radius: 50%;
      font-size: 18px;
      transition: 0.3s;
    }

    .slider-controls button:hover {
      background: #e0e0e0;
    }

    .slider-controls button:disabled {
      opacity: 0.5;
      cursor: not-allowed;
    }

    .view-all-btn {
      background-color: #c80052;
      color: white;
      border-radius: 30px;
      padding: 8px 20px;
      font-weight: 600;
      border: none;
      transition: background-color 0.3s;
    }

    .view-all-btn:hover {
      background-color: #a00042;
    }

    .card-tour {
      border-radius: 20px;
      overflow: hidden;
      background: #000;
      color: #fff;
      position: relative;
      height: 100%;
      transition: transform 0.3s;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-tour:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .card-tour img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      opacity: 0.8;
      transition: opacity 0.3s;
    }

    .card-tour:hover img {
      opacity: 0.6;
    }

    .card-tour .card-text {
      position: absolute;
      bottom: 10px;
      left: 15px;
      z-index: 2;
      padding-right: 15px;
    }

    .slider-track {
      display: flex;
      overflow-x: auto;
      scroll-snap-type: x mandatory;
      gap: 20px;
      scroll-behavior: smooth;
      padding-bottom: 10px;
    }

    .slider-track::-webkit-scrollbar {
      display: none;
    }

    .slider-item {
      flex: 0 0 auto;
      scroll-snap-align: start;
      width: 250px;
      height: 100%;
    }

    .autoplay-control {
      position: absolute;
      right: 20px;
      top: 20px;
      background: rgba(0,0,0,0.1);
      border-radius: 20px;
      padding: 2px 10px;
      font-size: 12px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .autoplay-control:hover {
      background: rgba(0,0,0,0.2);
    }

    /* Responsive Styles */
    @media (min-width: 576px) {
      .whatsapp-icon {
        border-radius: 30px;
        padding: 0 15px;
        width: auto;
        height: 50px;
      }

      .whatsapp-icon i {
        margin-right: 5px;
      }

      .whatsapp-icon span {
        display: inline;
      }
      
      .carousel-caption {
        bottom: 25%;
        padding: 30px;
      }
      
      .carousel-caption h3 {
        font-size: 3rem;
      }
    }
    
    @media (max-width: 767.98px) {
      .carousel-item {
        height: 70vh;
      }
      
      .carousel-caption {
        bottom: 10%;
        padding: 15px;
      }
      
      .carousel-caption h3 {
        font-size: 1.8rem;
      }
      
      .carousel-caption p {
        font-size: 1rem;
      }
      
      .counter-box {
        margin-bottom: 20px;
      }
      
      .slider-item {
        width: 80%;
      }
      
      .slider-controls {
        justify-content: center;
        margin-top: 20px;
      }
      
      .d-flex {
        flex-direction: column;
      }
      
      .autoplay-control {
        position: static;
        margin-top: 10px;
        display: inline-block;
      }
      .tour-title {
      font-size: 2rem;
      font-weight: 700;
    }

    .tour-card {
      position: relative;
      height: 280px;
      border-radius: 20px;
      background-size: cover;
      background-position: center;
      overflow: hidden;
      display: flex;
      align-items: flex-end;
      color: #fff;
      padding: 15px;
    }

    .tour-card::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
      z-index: 1;
    }

    .tour-text {
      position: relative;
      z-index: 2;
      font-weight: 500;
      font-size: 1rem;
    }

    .view-all-btn {
      background-color: #d42d69;
      color: #fff;
      border: none;
      padding: 6px 20px;
      border-radius: 20px;
      font-weight: 500;
    }

    .swiper-button-next,
    .swiper-button-prev {
      color: #000;
    }

    .icon-box i {
      font-size: 30px;
      color: #d42d69;
      margin-bottom: 10px;
    }

    .icon-box h5 {
      font-weight: 600;
      margin-bottom: 10px;
    }

    .tour-section {
      padding: 50px 15px;
    }

    .swiper-slide {
      width: 250px !important;
    }

    @media (max-width: 768px) {
      .swiper-slide {
        width: 80% !important;
      }
    }
    }
  </style>
</head>
<body>

<!-- Carousel -->
<div id="ghatSlider" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#ghatSlider" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#ghatSlider" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#ghatSlider" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#ghatSlider" data-bs-slide-to="3"></button>
  </div>

  <div class="carousel-inner">
    <!-- Slide 1 -->
    <div class="carousel-item active" style="background-image: url('images/download.jpg');">
      <div class="carousel-caption">
        <h3>Dashashwamedh Ghat</h3>
        <p>The main ghat where the famous Ganga Aarti takes place every evening</p>
      </div>
    </div>
    
    <!-- Slide 2 -->
    <div class="carousel-item" style="background-image: url('https://www.tourmyindia.com/blog//wp-content/uploads/2021/04/Best-Places-to-Visit-in-Varanasi.jpg');">
      <div class="carousel-caption">
        <h3>Assi Ghat</h3>
        <p>The southernmost ghat where pilgrims bath before worshiping Lord Shiva</p>
      </div>
    </div>
    
    <!-- Slide 3 -->
    <div class="carousel-item" style="background-image: url('https://www.tourmyindia.com/blog//wp-content/uploads/2021/04/Ganga-Aarti-in-Varanasi.jpg');">
      <div class="carousel-caption">
        <h3>Ganga Aarti</h3>
        <p>The mesmerizing evening prayer ceremony on the banks of the Ganges</p>
      </div>
    </div>
    
    <!-- Slide 4 -->
    <div class="carousel-item" style="background-image: url('https://www.tourmyindia.com/blog//wp-content/uploads/2021/04/Best-Time-to-Visit-Varanasi.jpg');">
      <div class="carousel-caption">
        <h3>Morning Boat Ride</h3>
        <p>Experience the magical sunrise over the sacred river</p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#ghatSlider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#ghatSlider" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Fixed Icons -->
<div class="fixed-icons">
  <a href="tel:+1234567890" class="call-icon">
    <i class="fas fa-phone"></i>
  </a>
</div>

<div class="fixed-icons right">
  <a href="https://wa.me/1234567890" class="whatsapp-icon">
    <i class="fab fa-whatsapp"></i>
    <span>Chat with us</span>
  </a>
</div>

<!-- Counter Section -->
<section class="counter-section">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="counter-box">
          <div class="counter-icon">
            <i class="fas fa-users"></i>
          </div>
          <div class="counter" data-target="5000">0</div>
          <div class="counter-title">Happy Customers</div>
        </div>
      </div>
      
      <div class="col-md-3 col-sm-6">
        <div class="counter-box">
          <div class="counter-icon">
            <i class="fas fa-map-marked-alt"></i>
          </div>
          <div class="counter" data-target="150">0</div>
          <div class="counter-title">Tour Packages</div>
        </div>
      </div>
      
      <div class="col-md-3 col-sm-6">
        <div class="counter-box">
          <div class="counter-icon">
            <i class="fas fa-globe-asia"></i>
          </div>
          <div class="counter" data-target="25">0</div>
          <div class="counter-title">Destinations</div>
        </div>
      </div>
      
      <div class="col-md-3 col-sm-6">
        <div class="counter-box">
          <div class="counter-icon">
            <i class="fas fa-calendar-check"></i>
          </div>
          <div class="counter" data-target="365">0</div>
          <div class="counter-title">Days Open</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Popular Tour Packages Section -->
<div class="container-fluid tour-slider">
  <div class="autoplay-control" id="autoplayToggle">Pause Autoplay</div>
  
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="tour-title">Popular Tour Packages</h2>
    <div class="slider-controls">
      <button id="prevBtn" disabled>❮</button>
      <button class="view-all-btn">View All Packages</button>
      <button id="nextBtn">❯</button>
    </div>
  </div>

  <div class="slider-track" id="sliderTrack">
    <div class="slider-item">
      <div class="card-tour">
        <img src="https://i.imgur.com/7wj1jS8.jpg" alt="Varanasi">
        <div class="card-text">
          <div><strong>7 Days/6 Nights</strong></div>
          <div>Prayagraj, Ayodhya, Varanasi & Bodhgaya Tour</div>
        </div>
      </div>
    </div>

    <div class="slider-item">
      <div class="card-tour">
        <img src="https://i.imgur.com/XNvl28l.jpg" alt="Agra 1">
        <div class="card-text">
          <div><strong>2 Days/1 Nights</strong></div>
          <div>Agra Tour</div>
        </div>
      </div>
    </div>

    <div class="slider-item">
      <div class="card-tour">
        <img src="https://i.imgur.com/Afb6JwN.jpg" alt="Agra 2">
        <div class="card-text">
          <div><strong>6 Days/5 Nights</strong></div>
          <div>Agra, Mathura and Barsana Tour</div>
        </div>
      </div>
    </div>

    <div class="slider-item">
      <div class="card-tour">
        <img src="https://i.imgur.com/UsFGvUj.jpg" alt="Agra Fort">
        <div class="card-text">
          <div><strong>4 Days/3 Nights</strong></div>
          <div>Agra with Mathura Tour</div>
        </div>
      </div>
    </div>
    
    <!-- Additional items for testing -->
    <div class="slider-item">
      <div class="card-tour">
        <img src="https://i.imgur.com/J5Z2QYj.jpg" alt="Jaipur">
        <div class="card-text">
          <div><strong>3 Days/2 Nights</strong></div>
          <div>Jaipur City Tour</div>
        </div>
      </div>
    </div>
    
    <div class="slider-item">
      <div class="card-tour">
        <img src="https://i.imgur.com/K9QZQYj.jpg" alt="Delhi">
        <div class="card-text">
          <div><strong>5 Days/4 Nights</strong></div>
          <div>Delhi Heritage Tour</div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid tour-slider">
  <div class="autoplay-control" id="autoplayToggle">Pause Autoplay</div>
  
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="tour-title">Popular Tour Packages</h2>
    <div class="slider-controls">
      <button id="prevBtn" disabled>❮</button>
      <button class="view-all-btn">View All Packages</button>
      <button id="nextBtn">❯</button>
    </div>
  </div>

  <div class="slider-track" id="sliderTrack">
    <div class="slider-item">
      <div class="card-tour">
        <img src="https://i.imgur.com/7wj1jS8.jpg" alt="Varanasi">
        <div class="card-text">
          <div><strong>7 Days/6 Nights</strong></div>
          <div>Prayagraj, Ayodhya, Varanasi & Bodhgaya Tour</div>
        </div>
      </div>
    </div>

    <div class="slider-item">
      <div class="card-tour">
        <img src="https://i.imgur.com/XNvl28l.jpg" alt="Agra 1">
        <div class="card-text">
          <div><strong>2 Days/1 Nights</strong></div>
          <div>Agra Tour</div>
        </div>
      </div>
    </div>

    <div class="slider-item">
      <div class="card-tour">
        <img src="https://i.imgur.com/Afb6JwN.jpg" alt="Agra 2">
        <div class="card-text">
          <div><strong>6 Days/5 Nights</strong></div>
          <div>Agra, Mathura and Barsana Tour</div>
        </div>
      </div>
    </div>

    <div class="slider-item">
      <div class="card-tour">
        <img src="https://i.imgur.com/UsFGvUj.jpg" alt="Agra Fort">
        <div class="card-text">
          <div><strong>4 Days/3 Nights</strong></div>
          <div>Agra with Mathura Tour</div>
        </div>
      </div>
    </div>
    
    <!-- Additional items for testing -->
    <div class="slider-item">
      <div class="card-tour">
        <img src="https://i.imgur.com/J5Z2QYj.jpg" alt="Jaipur">
        <div class="card-text">
          <div><strong>3 Days/2 Nights</strong></div>
          <div>Jaipur City Tour</div>
        </div>
      </div>
    </div>
    
    <div class="slider-item">
      <div class="card-tour">
        <img src="https://i.imgur.com/K9QZQYj.jpg" alt="Delhi">
        <div class="card-text">
          <div><strong>5 Days/4 Nights</strong></div>
          <div>Delhi Heritage Tour</div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container py-5">
  <div class="row g-4">
    <!-- Destination Feature -->
    <div class="col-md-4">
      <div class="text-center">
        <div class="mb-3">
          <i class="fas fa-globe-asia fa-3x text-primary"></i>
        </div>
        <h3 class="h4">700+ Destinations</h3>
        <p class="text-muted">Our expert team handpicked all destinations in this site</p>
      </div>
    </div>
    
    <!-- Price Guarantee Feature -->
    <div class="col-md-4">
      <div class="text-center">
        <div class="mb-3">
          <i class="fas fa-tag fa-3x text-primary"></i>
        </div>
        <h3 class="h4">Best Price Guarantee</h3>
        <p class="text-muted">Price match within 48 hours of order confirmation</p>
      </div>
    </div>
    
    <!-- Support Feature -->
    <div class="col-md-4">
      <div class="text-center">
        <div class="mb-3">
          <i class="fas fa-headset fa-3x text-primary"></i>
        </div>
        <h3 class="h4">Top Notch Support</h3>
        <p class="text-muted">We are here to help, before, during, and even after your trip.</p>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-lg-12 col-md-12">
      <div class="card border-0 text-white" style="
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
        url('https://source.unsplash.com/random/800x600/?travel,tour') no-repeat center center;
        background-size: cover;
        min-height: 300px;
      ">
        <div class="card-body d-flex flex-column justify-content-center align-items-center p-4 p-md-5 text-center">
          <h2 class="fw-bold mb-3 display-5">Single Traveller Partner <br>Guaranteed Tours</h2>
          <p class="lead mb-4 fs-4">
            Pay twin sharing price even if you join in solo. We guarantee you a room partner
          </p>
          <a href="#" class="btn btn-warning btn-lg px-4 py-3 fw-bold text-white">
            BOOK NOW
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container py-5">
  <div class="row g-4">
    <!-- Varanasi -->
    <div class="col-md-4 col-sm-6">
      <div class="destination-card">
        <img src="images\download.jpg" 
             class="img-fluid rounded-3" alt="Varanasi">
        <h3 class="destination-title mt-3">Varanasi</h3>
      </div>
    </div>

    <!-- Rishikesh -->
    <div class="col-md-4 col-sm-6">
      <div class="destination-card">
        <img src="images\download.jpg" 
             class="img-fluid rounded-3" alt="Rishikesh">
        <h3 class="destination-title mt-3">Rishikesh</h3>
      </div>
    </div>

    <!-- Haridwar -->
    <div class="col-md-4 col-sm-6">
      <div class="destination-card">
        <img src="images\download.jpg" 
             class="img-fluid rounded-3" alt="Haridwar">
        <h3 class="destination-title mt-3">Haridwar</h3>
      </div>
    </div>

    <!-- Rajasthan -->
    <div class="col-md-4 col-sm-6">
      <div class="destination-card">
        <img src="images\download.jpg" 
             class="img-fluid rounded-3" alt="Rajasthan">
        <h3 class="destination-title mt-3">Rajasthan</h3>
      </div>
    </div>

    <!-- Uttarakhand -->
    <div class="col-md-4 col-sm-6">
      <div class="destination-card">
        <img src="images\download.jpg" 
             class="img-fluid rounded-3" alt="Uttarakhand">
        <h3 class="destination-title mt-3">Uttarakhand</h3>
      </div>
    </div>

    <!-- Madhya Pradesh -->
    <div class="col-md-4 col-sm-6">
      <div class="destination-card">
        <img src="images\download.jpg" 
             class="img-fluid rounded-3" alt="Madhya Pradesh">
        <h3 class="destination-title mt-3">Madhya Pradesh</h3>
      </div>
    </div>
  </div>

  <!-- Chat Button -->
  <div class="text-center mt-5">
    <button class="btn btn-primary btn-lg px-4 py-2 fw-bold">
      <i class="fas fa-comment-dots me-2"></i> Chat with us
    </button>
  </div>
</div>

<style>
  .destination-card {
    transition: transform 0.3s ease;
  }
  .destination-card:hover {
    transform: translateY(-5px);
  }
  .destination-title {
    font-weight: 600;
    color: #333;
    text-align: center;
  }
  .img-fluid {
    height: 250px;
    width: 100%;
    object-fit: cover;
  }
</style>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Initialize carousel
    const carousel = new bootstrap.Carousel(document.getElementById('ghatSlider'), {
      interval: 5000, // Change slide every 5 seconds
      ride: 'carousel'
    });

    // Initialize counter animation
    const counters = document.querySelectorAll('.counter');
    const speed = 200; // The lower the faster
    
    counters.forEach(counter => {
      const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;
        
        // Lower inc to slow and higher to speed up
        const inc = target / speed;
        
        // Check if target is reached
        if (count < target) {
          // Add inc to count and output in counter
          counter.innerText = Math.ceil(count + inc);
          // Call function every ms
          setTimeout(updateCount, 1);
        } else {
          counter.innerText = target;
        }
      };
      
      // Start counting when counter is in viewport
      const observer = new IntersectionObserver((entries) => {
        if (entries[0].isIntersecting) {
          updateCount();
          observer.unobserve(counter);
        }
      });
      
      observer.observe(counter);
    });

    // Initialize tour packages slider
    const sliderTrack = document.getElementById('sliderTrack');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const autoplayToggle = document.getElementById('autoplayToggle');
    const sliderItems = document.querySelectorAll('.slider-item');
    const itemWidth = sliderItems[0].offsetWidth + 20; // width + gap
    
    let currentPosition = 0;
    let maxScroll = sliderTrack.scrollWidth - sliderTrack.clientWidth;
    let autoplayInterval;
    let isAutoplayActive = true;
    
    // Initialize autoplay
    startAutoplay();
    
    // Update button states
    function updateButtons() {
      prevBtn.disabled = sliderTrack.scrollLeft <= 10;
      nextBtn.disabled = sliderTrack.scrollLeft >= maxScroll - 10;
    }
    
    // Scroll to position
    function scrollTo(position) {
      sliderTrack.scrollTo({
        left: position,
        behavior: 'smooth'
      });
    }
    
    // Next button click
    nextBtn.addEventListener('click', function() {
      const scrollAmount = Math.min(itemWidth, maxScroll - sliderTrack.scrollLeft);
      currentPosition = Math.min(sliderTrack.scrollLeft + scrollAmount, maxScroll);
      scrollTo(currentPosition);
      resetAutoplay();
    });
    
    // Previous button click
    prevBtn.addEventListener('click', function() {
      const scrollAmount = Math.min(itemWidth, sliderTrack.scrollLeft);
      currentPosition = Math.max(sliderTrack.scrollLeft - scrollAmount, 0);
      scrollTo(currentPosition);
      resetAutoplay();
    });
    
    // Autoplay functions
    function startAutoplay() {
      if (autoplayInterval) clearInterval(autoplayInterval);
      autoplayInterval = setInterval(() => {
        if (isAutoplayActive) {
          if (sliderTrack.scrollLeft >= maxScroll - 10) {
            // If at end, scroll back to start
            scrollTo(0);
          } else {
            // Scroll to next position (1 item)
            const scrollAmount = Math.min(itemWidth, maxScroll - sliderTrack.scrollLeft);
            currentPosition = Math.min(sliderTrack.scrollLeft + scrollAmount, maxScroll);
            scrollTo(currentPosition);
          }
        }
      }, 3000); // Change slide every 3 seconds
    }
    
    function resetAutoplay() {
      if (autoplayInterval) clearInterval(autoplayInterval);
      startAutoplay();
    }
    
    // Toggle autoplay
    autoplayToggle.addEventListener('click', function() {
      isAutoplayActive = !isAutoplayActive;
      if (isAutoplayActive) {
        autoplayToggle.textContent = 'Pause Autoplay';
        startAutoplay();
      } else {
        autoplayToggle.textContent = 'Play Autoplay';
        clearInterval(autoplayInterval);
      }
    });
    
    // Update buttons on scroll
    sliderTrack.addEventListener('scroll', function() {
      updateButtons();
      maxScroll = sliderTrack.scrollWidth - sliderTrack.clientWidth; // Recalculate in case of resize
    });
    
    // Initial button state
    updateButtons();
    
    // Auto-scroll on arrow keys
    document.addEventListener('keydown', function(e) {
      if (e.key === 'ArrowRight') {
        nextBtn.click();
      } else if (e.key === 'ArrowLeft') {
        prevBtn.click();
      }
    });
    
    // Pause autoplay on hover
    sliderTrack.addEventListener('mouseenter', function() {
      if (isAutoplayActive) {
        clearInterval(autoplayInterval);
      }
    });
    
    sliderTrack.addEventListener('mouseleave', function() {
      if (isAutoplayActive) {
        startAutoplay();
      }
    });
    
    // Handle window resize
    window.addEventListener('resize', function() {
      maxScroll = sliderTrack.scrollWidth - sliderTrack.clientWidth;
      updateButtons();
    });
  });
</script>

</body>
</html>