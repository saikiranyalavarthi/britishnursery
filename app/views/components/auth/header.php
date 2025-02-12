<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard · British Islamic Nursery</title>
<link href="/assets/css/style.css" rel="stylesheet" />
<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/assets/img/logo.png" type="image/png" />
<meta name="theme-color" content="#17a2b8">


    <style>
        /* .navbar {
            z-index: 888;
            background: #fff;
        } */
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="/assets/css/dashboard.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  </head>
  <body>
    <nav class="navbar sticky-top flex-md-nowrap p-0 shadow bg-white">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">
    <img src="/assets/img/logo.png" style="max-width: 28px" alt="British Islamic Nursery">
  </a>

  <strong>
      <?= $_SESSION['email'] ?>
  </strong>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="btn btn-sm text-white" style="background: #17a2b8" href="javascript:void(0)" onclick="window.location.href = '/admin/logout'">Sign out</a>
    </li> 
  </ul>
</nav>