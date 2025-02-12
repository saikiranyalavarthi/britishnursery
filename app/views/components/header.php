<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title><?= isset($title) ? $title : "British Islamic Nursery" ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Favicon -->
  <link href="/assets/img/logo.png" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

  <!-- Flaticon Font -->
  <link href="/assets/lib/flaticon/font/flaticon.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="/assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="/assets/css/style.css" rel="stylesheet" />
  <style>
     .topbar {
      background-color: #17a2b8;
      color: #fff;
      padding: 4px 10px;
      font-size: 20px;
    }

    .topbar a {
      color: #fff;
    }

    .social-icons i {
      margin-right: 10px;
    }
  </style>
  <script id="pixel-chaty" async="true" src="https://cdn.chaty.app/pixel.js?id=WjXm2UM2"></script>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5SSPPRTK');</script>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5SSPPRTK"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- End Google Tag Manager -->
  <style>
    #moreContent {
      display: none;
    }
  </style>
  <?php if($_SERVER['REQUEST_URI'] == "/") { ?>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "WebSite",
        "name": "British Islamic Nursery School",
        "url": "https://britishislamicnursery.org/",
        "potentialAction": {
          "@type": "SearchAction",
          "target": "https://britishislamicnursery.org/{search_term_string}https://britishislamicnursery.org/contact",
          "query-input": "required name=search_term_string"
        }
      }
  </script>
  <?php } ?>
</head>

<body>
  <div class="header-main position-fixed" style="top:0px; z-index: 9999; width: 100%">
  <!-- TopBar  -->
  <div class="topbar">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="social-icons">
        <a href="https://www.facebook.com/BritishIslamicNursery" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.youtube.com/@britishislamicnursery2061" target="_blank"><i class="fab fa-youtube"></i></a>
        <a href="https://www.instagram.com/britishislamicnursery/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://wa.me/971509981237" target="_blank"><i class="fab fa-whatsapp"></i></a>
      </div>
      <div class="language-switcher">
        <!-- google translate  -->
        <div id="google_translate_element"></div>
        
        <!-- custom language switcher  -->
        <!-- <?= isset($_GET['lang']) ? ($_GET['lang'] == 'en' ? '<a href="?lang=ar">عربي</a>' : '<a href="?lang=en">English</a>') : '<a href="?lang=ar">عربي</a>'; ?> -->
        </div>
    </div>
  </div>
  <!-- Navbar Start -->
  <div class="container-fluid bg-light position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
      <a href="/" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px">
        <span class="text-primary">
          <img src="/assets/img/bin_logo_full.png" class="w-50" alt="British Islamic Nursery">
        </span>
      </a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav font-weight-bold mx-auto py-0">
          <a href="/" class="nav-item nav-link <?= $_SERVER['REQUEST_URI'] == "/" ? "active" : "" ?>">Home</a>
          <a href="/about" class="nav-item nav-link <?= $_SERVER['REQUEST_URI'] == "/about" ? "active" : "" ?>">About</a>
          <!-- <a href="#" class="nav-item nav-link">Teachers</a> -->
          <a href="/blog" class="nav-item nav-link <?= $_SERVER['REQUEST_URI'] == "/blog" ? "active" : "" ?>">Blogs</a>
          <a href="/gallery" class="nav-item nav-link <?= $_SERVER['REQUEST_URI'] == "/gallery" ? "active" : "" ?>">Gallery</a>
          <a href="/corporates" class="nav-item nav-link <?= $_SERVER['REQUEST_URI'] == "/corporates" ? "active" : "" ?>">Corporates</a>
          <!-- <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
            <div class="dropdown-menu rounded-0 m-0">
              <a href="blog.html" class="dropdown-item">Blog Grid</a>
              <a href="single.html" class="dropdown-item">Blog Detail</a>
            </div>
          </div> -->
          <a href="/contact" class="nav-item nav-link <?= $_SERVER['REQUEST_URI'] == "/contact" ? "active" : "" ?>">Contact</a>
        </div>
        <a href="/#learn-more" class="btn btn-primary px-4" style="width: 132px">Learn More</a>
      </div>
    </nav>
  </div>
</div>
  <!-- Navbar End -->

  