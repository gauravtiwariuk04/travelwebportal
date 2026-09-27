<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Balaji Tours & Travels</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">


</head>
<body>

<!-- Header -->
<div class="top-header">
  <div class="logo">
    <img src="https://i.imgur.com/klcUmpz.png" alt="Balaji Tours & Travels Logo">
  </div>

  <button class="mobile-search-toggle" id="searchToggle">
    <i class="fas fa-search"></i>
  </button>

  <form class="search-form" id="searchForm">
    <!-- Search -->
    <div class="input-group">
      <span class="input-group-text"></i></span>
      <input type="text" placeholder="Search for a place or package"style="height:40px;">
    </div>

    <!-- Days -->
    <div class="input-group">
      <span class="input-group-text"></i></span>
      <input type="text" placeholder="Number of days" style="height:40px;">
    </div>

    <!-- Month -->
    <div class="input-group">
      <span  style="height:0px;"></i></span>
      <select>
        <option>Select Month</option>
        <option>January</option>
        <option>February</option>
        <option>March</option>
        <option>April</option>
        <option>May</option>
        <option>June</option>
        <option>July</option>
        <option>August</option>
        <option>September</option>
        <option>October</option>
        <option>November</option>
        <option>December</option>
      </select>
    </div>

    <!-- Search Button -->
    <button class="search-btn" type="submit" aria-label="Search">
      <i class="fas fa-search"></i>
    </button>
  </form>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg main-nav">
  <div class="container-fluid">
    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">About Us</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Who We Are</a></li>
            <li><a class="dropdown-item" href="#">Our Team</a></li>
            <li><a class="dropdown-item" href="#">Testimonials</a></li>
            <li><a class="dropdown-item" href="#">Contact</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Domestic Tour</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Delhi Tour Packages</a></li>
            <li><a class="dropdown-item" href="#">Rajasthan Tours</a></li>
            <li><a class="dropdown-item" href="#">Himalayan Treks</a></li>
            <li><a class="dropdown-item" href="#">South India Tours</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Varanasi Tour</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Standard Packages</a></li>
            <li><a class="dropdown-item" href="#">Premium Packages</a></li>
            <li><a class="dropdown-item" href="#">Custom Tours</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Religious Tour</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Char Dham Yatra</a></li>
            <li><a class="dropdown-item" href="#">Amarnath Yatra</a></li>
            <li><a class="dropdown-item" href="#">South Temple Tours</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Nepal Tour</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Kathmandu Tour</a></li>
            <li><a class="dropdown-item" href="#">Pokhara Packages</a></li>
            <li><a class="dropdown-item" href="#">Trekking Tours</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Kumbh</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Kumbh Mela Packages</a></li>
            <li><a class="dropdown-item" href="#">Dates & Information</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Pind Daan</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Gaya Pind Daan</a></li>
            <li><a class="dropdown-item" href="#">Varanasi Pind Daan</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Transport</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Car Rental</a></li>
            <li><a class="dropdown-item" href="#">Bus Services</a></li>
            <li><a class="dropdown-item" href="#">Airport Transfers</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  // Toggle search form on mobile
  document.getElementById('searchToggle').addEventListener('click', function() {
    document.getElementById('searchForm').classList.toggle('active');
  });

  // Add active class to current page link
  document.addEventListener('DOMContentLoaded', function() {
    const currentPage = window.location.pathname.split('/').pop() || 'index.html';
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
      if (link.getAttribute('href') === currentPage) {
        link.classList.add('active');
      }
    });
  });
</script>

</body>
</html>