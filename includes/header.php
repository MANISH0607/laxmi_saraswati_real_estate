<!-- ======= Header ======= -->
<header id="header">

  <!-- ======= Navigation ======= -->
  <div class="head-bt bg-light border-bottom">
    <div class="container d-flex justify-content-between align-items-center">
      <nav id="navbar" class="navbar navbar-moblie">
        <ul>
          <li><a class="active" href="index.php">Home</a></li>

          <li class="dropdown">
            <a href="#"><span>Company</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="sub-menu">
              <li><a href="about-us.php">About Us</a></li>
              <li><a href="Management-team.php">Management Team</a></li>
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

          <li><a href="career.php">Career</a></li>

          <li class="dropdown">
            <a href="#"><span>Media</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="sub-menu">
              <li><a href="media.php">News Image</a></li>
              <li><a href="media.php">Videos</a></li>
            </ul>
          </li>

          <li><a href="contact.php">Contact Us</a></li>

          
        </ul>
        

        <!-- Mobile Nav Toggle Icon -->
        <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
       
      </nav><!-- .navbar -->
    </div>
  </div>

  <!-- ======= Logo + Contact Info ======= -->
  <div class="container-fluid">
    <div class="row align-items-center">
      <!-- Logo -->
      <div class="col-lg-4 col-md-4">
        <div class="logo">
          <a href="index.php">
            <img src="assets/img/uploads/logo.jpg" alt="Company Logo" class="img-fluid">
          </a>
        </div>
      </div>

      <!-- Contact Info -->
      <div class="col-lg-8 col-md-8 d-none d-md-block text-end">
        <h5><i class="fa fa-map-marker" aria-hidden="true"></i> PATNA OFFICE</h5>
        <p>
          <a href="tel:+918340703433">+91 83407 03433</a> / 
          <a href="tel:+918340703433">+91 83407 03433</a><br>
          <a href="mailto:blank@01gmail.com">Mail - blank@01gmail.com</a>
        </p>
      </div>
    </div>
  </div>

  <!-- ======= Bottom Bar ======= -->
  <section id="topbar" class="d-flex align-items-center d-none d-md-block bg-dark text-white py-1">
    <div class="container-fluid">
      <div class="align-items-center justify-content-center">
        <div class="scroll-text">
          <span>
            <strong>Patna Office Address:</strong> Pillar No. 93, Post Office Police Station NH-83, 
            Railway Crossing, Opposite Rahimpur, Parsa Bazar, Patna, Bihar 804453
          </span>
        </div>
      </div>
    </div>
  </section>

</header>

<!-- ======= CSS ======= -->
<style>
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
  0% { transform: translate(0, 0); }
  100% { transform: translate(-100%, 0); }
}

/* ===== Scroll Hide Topbar ===== */
#topbar {
  transition: top 0.4s ease, opacity 0.4s ease;
  position: relative;
  z-index: 998;
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
  height: 220px;
  z-index: 997;
  border-bottom: 2px solid #7a7a7aff;
}
body {
  padding-top: 195px;
}

/* ===== Mobile Nav ===== */
.mobile-nav-toggle {
  font-size: 28px;
  cursor: pointer;
  color: #000;
  transition: 0.3s;
  margin-left: 15px;
}
.mobile-nav-toggle.bi-x {
  color: #000;
}

/* When active */
.navbar-mobile {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(0,0,0,0.8);
  transition: 0.3s;
  z-index: 999;
  overflow-y: auto;
}
.navbar-mobile ul {
  display: block;
  background: #fff;
  margin: 70px 15px;
  padding: 20px;
  border-radius: 8px;
}
.navbar-mobile ul li {
  margin-bottom: 10px;
}
.navbar-mobile a {
  display: block;
  padding: 10px;
  color: #000 !important;
  font-weight: 500;
  text-transform: uppercase;
}
.navbar-mobile .dropdown ul {
  display: none;
  padding-left: 20px;
}
.navbar-mobile .dropdown-active {
  display: block;
}

.navbar-mobile ul {
    display: block;
    position: absolute;
    top: 55px;
    right: 15px;
    bottom: 15px;
    left: 15px;
    padding: 10px 0;
    background-color: #fff;
    overflow-y: auto;
    transition: 0.3s;
}

/* Hide nav list on desktop only in mobile view */
@media (max-width: 991px) {
  .navbar ul {
    display: none;
  }
}
</style>

<!-- ======= JS ======= -->
<script>
document.addEventListener("DOMContentLoaded", function () {
  const topbar = document.getElementById("topbar");
  const header = document.getElementById("header");
  const navbar = document.getElementById("navbar");
  const mobileToggle = document.querySelector(".mobile-nav-toggle");
  let lastScroll = 0;

  // Scroll Hide Topbar
  window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
    if (currentScroll > lastScroll && currentScroll > 100) {
      topbar.classList.add("hide-topbar");
    } else {
      topbar.classList.remove("hide-topbar");
    }
    lastScroll = currentScroll <= 0 ? 0 : currentScroll;
  });

  // Mobile Nav Toggle
  if (mobileToggle) {
    mobileToggle.addEventListener("click", function () {
      navbar.classList.toggle("navbar-mobile");
      this.classList.toggle("bi-list");
      this.classList.toggle("bi-x");
    });

    // Dropdown inside mobile menu
    document.querySelectorAll(".navbar .dropdown > a").forEach(function (dropdownLink) {
      dropdownLink.addEventListener("click", function (e) {
        if (navbar.classList.contains("navbar-mobile")) {
          e.preventDefault();
          this.nextElementSibling.classList.toggle("dropdown-active");
        }
      });
    });
  }
});
</script>
