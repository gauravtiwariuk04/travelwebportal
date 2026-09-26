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

  <style>
    :root {
      --primary-color: #c80052;
      --secondary-color: #8e0038;
      --text-light: #ffffff;
      --text-dark: #333333;
      --bg-light: #ffffff;
      --border-radius: 50px;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
    }

    /* Top Header Section */
    .top-header {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      padding: 15px 5%;
      background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
      color: var(--text-light);
      box-shadow: 0 2px 15px rgba(0,0,0,0.1);
    }

    .top-header .logo img {
      height: 20px;
      filter: brightness(0) invert(1);
      transition: transform 0.3s ease;
    }

    .top-header .logo img:hover {
      transform: scale(1.05);
    }

    /* Search Form */
    .search-form {
      flex-grow: 1;
      display: flex;
      gap: 15px;
      align-items: center;
      max-width: 900px;
      margin-left: 30px;
    }

    .search-form .input-group {
      flex: 1;
      border-radius: var(--border-radius);
      border: 1px solid rgba(255,255,255,0.3);
      overflow: hidden;
      background: rgba(255,255,255,0.95);
      transition: all 0.3s ease;
    }

    .search-form .input-group:hover {
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .search-form .input-group-text {
      background: transparent;
      border: none;
      color: var(--primary-color);
      padding: 0 15px;
    }

    .search-form input,
    .search-form select {
      border: none;
      padding: 12px 15px;
      width: 100%;
      outline: none;
      background: transparent;
      color: var(--text-dark);
      font-size: 15px;
    }

    .search-form input::placeholder {
      color: #666;
      opacity: 0.8;
    }

    .search-btn {
      background: var(--bg-light);
      color: var(--primary-color);
      border-radius: var(--border-radius);
      border: none;
      width: 50px;
      height: 50px;
      font-size: 18px;
      transition: all 0.3s ease;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .search-btn:hover {
      background: #f0f0f0;
      transform: scale(1.05);
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    /* Navigation Menu */
    .main-nav {
      background-color: var(--bg-light);
      padding: 0 5%;
      box-shadow: 0 2px 15px rgba(0,0,0,0.1);
      position: relative;
      z-index: 1000;
    }

    .main-nav .navbar-nav {
      gap: 5px;
    }

    .main-nav .nav-link {
      color: var(--text-dark);
      font-weight: 600;
      padding: 15px 20px;
      border-radius: 8px;
      transition: all 0.3s ease;
      font-size: 16px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .main-nav .nav-link:hover,
    .main-nav .nav-link:focus,
    .main-nav .nav-link.active {
      color: var(--primary-color);
      background: rgba(200,0,82,0.08);
    }

    .main-nav .dropdown-toggle::after {
      margin-left: 8px;
      vertical-align: middle;
    }

    .main-nav .dropdown-menu {
      border: none;
      box-shadow: 0 5px 20px rgba(0,0,0,0.15);
      border-radius: 8px;
      padding: 10px 0;
      margin-top: 5px;
    }

    .main-nav .dropdown-item {
      padding: 10px 25px;
      color: var(--text-dark);
      transition: all 0.2s ease;
    }

    .main-nav .dropdown-item:hover {
      background: rgba(200,0,82,0.1);
      color: var(--primary-color);
      padding-left: 30px;
    }

    .navbar-toggler {
      border: none;
      padding: 10px;
      color: var(--primary-color);
    }

    .navbar-toggler:focus {
      box-shadow: none;
      outline: none;
    }

    /* Mobile Search Toggle Button */
    .mobile-search-toggle {
      display: none;
      background: transparent;
      border: none;
      color: white;
      font-size: 20px;
      cursor: pointer;
    }

    /* Responsive Adjustments */
    @media (max-width: 991.98px) {
      .search-form {
        display: none;
        width: 100%;
        margin: 15px 0 0 0;
        flex-direction: column;
        gap: 10px;
      }

      .search-form.active {
        display: flex;
      }

      .search-form .input-group {
        width: 100%;
      }

      .search-btn {
        width: 100%;
        border-radius: 8px;
        height: 45px;
      }

      .mobile-search-toggle {
        display: block;
        margin-left: auto;
      }

      .top-header {
        padding: 15px;
      }

      .main-nav {
        padding: 0 15px;
      }

      .main-nav .navbar-nav {
        padding: 15px 0;
      }

      .main-nav .nav-link {
        padding: 12px 15px;
      }
    }

    @media (min-width: 992px) {
      .mobile-search-toggle {
        display: none;
      }
    }
  </style>
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