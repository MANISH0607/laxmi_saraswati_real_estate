<!-- ======= Header ======= -->
<header id="header">


  <!-- ======= Top Bar ======= -->

  <section id="topbar" class="d-flex align-items-center d-none d-md-block bg-dark text-white py-1">
    <div class="container-fluid">
      <div class="row align-items-center">

        <!-- Address -->
        <div class="col-lg-8 col-md-8">
          <div class="scroll-text">
            <span>
              <strong>Patna Office Address:</strong> Pillar No. 93, Post Office Police Station NH-83,
              Railway Crossing, Opposite Rahimpur, Parsa Bazar, Patna, Bihar 804453
            </span>
          </div>
        </div>

        <!-- Contact Numbers -->
        <div class="col-lg-4 col-md-4 col-12 text-lg-end text-md-end text-center mt-2 mt-md-0">
          <div class="topbar-contact">
            <a href="tel:8340703433" class="text-decoration-none me-2"><i class="fa fa-phone" aria-hidden="true"></i>8340703433</a>
            <a href="tel:08340703433" class="text-decoration-none"><i class="fa fa-phone" aria-hidden="true"></i>08340703433</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ======= Logo + Navbar ======= -->
  <div class="container">
    <div class="row align-items-center">

      <!-- Logo -->
      <div class="col-lg-4 col-4 col-md-4">
        <div class="logo">
          <a href="index.php">
            <img src="assets/img/uploads/logo.jpg" alt="commercial property in patna" class="img-fluid">
          </a>
        </div>
      </div>

      <!-- Navigation -->

      <div class="col-lg-8 col-8 col-md-8">
        <div class=" align-items-center">
          <nav id="navbar" class="navbar navbar-mobile">
            <ul>
              <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>

              <li class="dropdown">
                <a href="#"><span>Company</span> <i class="bi bi-chevron-down"></i></a>
                <ul class="sub-menu">
                  <li><a href="about-us.php">About Us</a></li>
                  <li><a href="Management-Team.php">Management Team</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#"><span>Properties</span> <i class="bi bi-chevron-down"></i></a>
                <ul class="sub-menu">
                  <li><a href="properties.php">Commercial / Retail</a></li>
                  <li><a href="residential-properties.php">Residential</a></li>
                  <li><a href="Land.php">Land</a></li>
                  <li><a href="warehouse-properties.php">Warehouse</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#"><span>Media</span> <i class="bi bi-chevron-down"></i></a>
                <ul class="sub-menu">
                  <li><a href="media.php">News Image</a></li>
                  <li><a href="media.php">Videos</a></li>
                </ul>
              </li>

          <li><a href="contact.php">Contact Us</a></li>

          
        </ul>
        

            <!-- Social Icons in Navbar -->
            <div class="social-links d-lg-none d-md-none d-sm-none">
              <a href="https://www.facebook.com/laxmisaraswatirealestate" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.youtube.com/@laxmiSarswati_realestate" target="_blank" class="twitter"><i class="fa fa-youtube"></i></a>
              <a href="https://www.instagram.com/laxmisaraswati_realestate/" target="_blank" class="pinterest"><i class="fa fa-instagram"></i></a>
              <a href="https://www.linkedin.com/in/rajesh-kumar-24b865397/" target="_blank" class="google-plus"><i class="fa fa-linkedin"></i></a>
            </div>

            <!-- Mobile Nav Toggle -->
            <i class="bi bi-list mobile-nav-toggle d-lg-none" id="mobile-toggle"></i>
            <!-- </nav>
          <div class="logo d-lg-none">
            <a href="index.php">
              <img src="assets/img/uploads/logo.jpg" alt="Company Logo" class="img-fluid">
            </a>
          </div> -->
        </div>
      </div>




      <!-- ======= Mobile Menu ======= -->

      <div class="d-lg-none mobile-header" id="mobile-navmenu">

        <ul>
          <li><a href="index.php">Home</a></li>

          <li class="dropdownMenu">
            <div class="d-flex justify-content-between align-items-center submenu-toggle">
              <a href="javascript:void(0);">Company</a>
              <i class="fa fa-angle-down text-white"></i>
            </div>
            <ul class="subMenuItem">
              <li><a href="about-us.php">About Us</a></li>
              <li><a href="Management-Team.php">Management Team</a></li>
            </ul>
          </li>

          <li class="dropdownMenu">
            <div class="d-flex justify-content-between align-items-center submenu-toggle">
              <a href="javascript:void(0);">Properties</a>
              <i class="fa fa-angle-down text-white"></i>
            </div>
            <ul class="subMenuItem">
              <li><a href="properties.php">Commercial / Retail</a></li>
              <li><a href="residential-properties.php">Residential</a></li>
              <li><a href="Land.php">Land</a></li>
              <li><a href="warehouse-properties.php">Warehouse</a></li>
            </ul>
          </li>

          <li><a href="career.php">Career</a></li>

          <li class="dropdownMenu">
            <div class="d-flex justify-content-between align-items-center submenu-toggle">
              <a href="javascript:void(0);">Media</a>
              <i class="fa fa-angle-down text-white"></i>
            </div>
            <ul class="subMenuItem">
              <li><a href="media.php">Gallery</a></li>
              <li><a href="media.php">Videos</a></li>
            </ul>
          </li>

          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>

</header>



<!-- ======= CSS ======= -->
<style>
  /* ===== Scroll Text Animation ===== */
  .scroll-text {
    white-space: nowrap;
    overflow: hidden;
  }

  .scroll-text span {
    display: inline-block;
    padding-left: 100%;
    animation: scroll-left 25s linear infinite;
  }

  @keyframes scroll-left {
    0% {
      transform: translateX(0);
    }

    100% {
      transform: translateX(-100%);
    }
  }

  /* ===== Header & Topbar ===== */
  #topbar {
    font-size: 14px;
  }

  #topbar .scroll-text {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }

  .topbar a {
    color: #ffffff;
    margin-right: 15px;
    transition: color 0.3s ease;
  }

  #topbar a:hover {
    color: #000000ff;
  }


  #topbar.hide-topbar {
    top: -50px;
    opacity: 0;
  }

  /* ===== Header Fixed ===== */
  #header {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 997;
    background: #fff;
    border-bottom: 2px solid #7a7a7a;
  }



  /* ===== Logo ===== */
  .logo img {
    max-height: 80px;
    width: auto;
    transition: transform 0.3s ease;
  }

  .logo img:hover {
    transform: scale(1.05);
  }

  /* ===== Navbar ===== */
  .navbar ul {
    display: flex;
    align-items: center;
    list-style: none;
    margin: 0;
    padding: 0;
    gap: 5px;
  }

  .navbar ul li {
    position: relative;
  }

  .navbar ul li a {
    color: #000;
    font-weight: 550;
    text-transform: uppercase;
    padding: 8px 12px;
    font-size: 16px;
    display: inline-block;
    transition: color 0.3s ease;
  }

  .navbar ul li a:hover,
  .navbar .dropdown:hover>a {
    color: #FE9C2E;
  }

  /* ===== Dropdown Menu ===== */
  .navbar .dropdown ul {
    position: absolute;
    left: 0;
    top: 100%;
    display: none;
    background: #fff;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    padding: 10px 0;
    border-radius: 6px;
    min-width: 200px;
    z-index: 1000;
  }

  .navbar .dropdown:hover ul {
    display: block;
  }

  .navbar .dropdown ul li {
    margin: 0;
  }

  .navbar .dropdown ul li a {
    padding: 10px 20px;
    color: #000;
    display: block;
  }

  .navbar .dropdown ul li a:hover {
    background: #f8f9fa;
  }

  .navbar .social-links a {
    font-size: 18px;
    display: inline-block;
    background: #545454;
    color: #fff;
    line-height: 1;
    padding: 8px 0;
    margin-right: 4px;
    margin-left: 20px;
    border-radius: 50%;
    text-align: center;
    width: 36px;
    height: 36px;
    transition: 0.3s;
  }

  .navbar .social-links a:hover {
    color: #007bff;
  }


  /* ===== Mobile Nav Toggle ===== */
  .mobile-nav-toggle {
    font-size: 28px;
    cursor: pointer;
    color: #000;
    transition: 0.3s;
    margin-left: 15px;
    display: none;
  }

  /* ===== Mobile Header ===== */
  .mobile-header {
    position: fixed;
    top: 0;
    right: -100%;
    width: 80%;
    height: 100%;
    background: #111;
    z-index: 999;
    padding: 20px;
    transition: right 0.3s ease;
    overflow-y: auto;
  }

  .mobile-header.open {
    right: 0;
  }

  .mobile-header ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .mobile-header li {
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    margin-bottom: 10px;
  }

  .mobile-header a {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    text-transform: uppercase;
    font-size: 16px;
  }

  .mobile-header .submenu-toggle {
    cursor: pointer;
  }

  .subMenuItem {
    display: none;
    margin-top: 8px;
    margin-left: 15px;
  }

  .subMenuItem.Toggleopen {
    display: block;
  }

  .subMenuItem li a {
    color: #ccc;
    font-size: 15px;
  }

  /* ===== Responsive Adjustments ===== */

  /* Large Tablets */
  @media (max-width: 1300px) {
    .navbar ul li a {
      font-size: 12px;
      padding: 6px 10px;
    }

    .logo img {
      max-height: 70px;
    }

    .topbar-contact a {
      font-size: 13px;
    }
  }

  /* Tablets */
  @media (max-width: 991px) {
    .navbar ul {
      display: none;
    }

    .mobile-nav-toggle {
      display: block;
    }

    .logo img {
      max-height: 65px;
    }

    .topbar-contact a {
      font-size: 10px;
    }

    body {
      padding-top: 90px;
    }

    .navbar {
      justify-content: end;
    }
  }

  /* Mobile Landscape */
  @media (max-width: 768px) {
    .logo {
      text-align: start;
      margin-bottom: 5px;
    }

    .logo img {
      max-height: 80px;
    }

    .navbar {
      justify-content: end;
    }


  }

  /* Mobile Portrait */
  @media (max-width: 576px) {

    .logo {
      text-align: start;
      margin-bottom: 5px;
    }

    .logo img {
      max-height: 80px;
    }

    .navbar {
      justify-content: end;
    }

    .social-links {
      display: none;
    }
  }
</style>


<!-- ======= JS ======= -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const topbar = document.getElementById("topbar");
    const navBtn = document.getElementById("mobile-toggle");
    const navMenu = document.getElementById("mobile-navmenu");
    const subMenus = document.querySelectorAll(".submenu-toggle");

    let lastScroll = 0;

    // ===== Hide Topbar on Scroll Down =====
    window.addEventListener("scroll", () => {
      const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
      if (currentScroll > lastScroll && currentScroll > 100) {
        topbar.classList.add("hide-topbar");
      } else {
        topbar.classList.remove("hide-topbar");
      }
      lastScroll = currentScroll <= 0 ? 0 : currentScroll;
    });

    // ===== Mobile Menu Toggle =====
    navBtn.addEventListener("click", () => {
      navMenu.classList.toggle("open");
      document.body.classList.toggle("no-scroll");
    });

    // ===== Submenu Toggle (Mobile) =====
    subMenus.forEach(toggle => {
      toggle.addEventListener("click", () => {
        const submenuList = toggle.nextElementSibling;
        document.querySelectorAll(".subMenuItem").forEach(list => {
          if (list !== submenuList) list.classList.remove("Toggleopen");
        });
        submenuList.classList.toggle("Toggleopen");
      });
    });
  });
</script>