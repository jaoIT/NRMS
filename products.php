<?php require('api/session.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/custom.css">
  </head>
  <?php confirm_logged_in();?>
  <body class="sb-nav-fixed">
    <!--Top Navbar-->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <div class="d-flex text-white" style="width: 225px">
        <div class="p-3">
          <img src="src/img/logo_light.png" width="30" alt="">
        </div>
      </div>

      <!-- Sidebar Toggle-->
      <button class="btn btn-link btn-sm order-1 order-lg-0 me-lg-0" id="sidebarToggle" href="#!">
        <i class="fas fa-bars fa-lg"></i>
      </button>
      <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item">
          <a class="nav-link" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-shopping-cart fa-lg fa-fw"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-bell fa-lg fa-fw"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-question-circle fa-lg fa-fw"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user-circle fa-lg fa-fw"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li>
                <div class="d-flex align-items-center">
                  <a class="dropdown-item ml-2 mr-2" href="#!">
                    <i class="fas fa-sliders-h fa-fw"></i><span class="pl-2">My Account</span> 
                  </a>
                </div>
              </li>
              
              <li>
                <div class="d-flex align-items-center"> 
                  <a class="dropdown-item ml-2 mr-2" href="#!">
                    <i class="fas fa-sign-out-alt fa-fw"></i><span class="pl-2">Sign Out</span> 
                  </a>
                </div>
              </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!--Contains layout of sidenav and the main content-->
    <div id="layoutSidenav">
      <!--Side Navbar-->
      <div id="layoutSidenav_nav" class="side-nav-bg">
        <nav class="sb-sidenav accordion sb-sidenav-dark" style="opacity: 85%" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
            <div class="text-center my-3">
                <img class="img-fluid rounded-circle mb-4" src="https://dummyimage.com/150x150/6c757d/dee2e6.jpg" alt="..." />
                <h5 class="text-white fs-6">
                  <?php echo $_SESSION['FIRST_NAME']." ".substr($_SESSION['MIDDLE_NAME'], 0, 1).". ".$_SESSION['LAST_NAME'];?>
                </h5>
                <p class="text-warning">Semi-Verified</p>
            </div>
            <div class="nav">
              <div class="sb-sidenav-menu-heading"><h6>Core</h6></div>
                <a class="nav-link collapsed" href="home.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-home"></i>
                  </div>
                  Home
                </a>
                <a class="nav-link collapsed active" href="products.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fab fa-product-hunt"></i>
                  </div>
                  Numismatic Products
                </a>
                <a class="nav-link collapsed" href="auction.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-gavel"></i>
                  </div>
                  Auction
                </a>
              <div class="sb-sidenav-menu-heading"><h6>Interface</h6></div>
                <!--Account Verification-->
                <a class="nav-link collapsed" href="account_verification.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-user-check"></i>
                  </div>
                  Account Verification
                </a>
                <!--Events-->
                <a class="nav-link collapsed" href="events.php" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-calendar-check"></i>
                  </div>
                  Events
                </a>
                <!--My Orders-->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-list"></i>
                  </div>
                  My Orders
                </a>
                <!--Cart-->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-shopping-cart"></i>
                  </div>
                  My Cart
                </a>
              <div class="sb-sidenav-menu-heading"><h6>Settings</h6></div>
                <!--My Account-->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-user-circle"></i>
                  </div>
                  My Account
                </a>
                <!--Help-->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-question-circle"></i>
                  </div>
                  Help
                </a>
                <!--Logout-->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                  <div class="sb-nav-link-icon">
                    <i class="fas fa-sign-out-alt"></i>
                  </div>
                  Sign Out
                </a>
            </div>
          </div>
        </nav>
      </div>
      <!--Main Content-->
      <div id="layoutSidenav_content">
        <main>
          <div class="bg-home p-3 pb-1">
            <!--Breadcrumb-->
            <div class="page__section mb-4 ">
              <nav class="breadcrumb bg-light breadcrumb_type" aria-label="Breadcrumb">
                <ol class="breadcrumb__list r-list">
                  <li class="breadcrumb__group">
                    <div class="bg-warning rounded p-2 mt">
                      <i class="fas fa-home fa-lg"></i>
                    </div>
                    
                    <span href="home.php" class="breadcrumb__divider r-link  ml-3">Home</span>
                    <span class="breadcrumb__divider" aria-hidden="true">›</span>
                  </li>
                  
                  <li class="breadcrumb__group">
                    <span href="#0" class="breadcrumb__point">Numismatic Products</span>
                    <span class="breadcrumb__divider" aria-hidden="true">›</span>
                  </li>
                </ol>
              </nav>
            </div>
            <div class="pb-3 row">
              <div class="col-md-6 pt-5">
                <div class="d-flex justify-content-center pb-3">
                  <div class="embed-responsive embed-responsive-16by9">
                    <video class="embed-responsive-item w-100 rounded" muted autoplay>
                      <source src="src/logo_animation.mp4" type="video/mp4">
                    </video>
                  </div>
                </div> 
              </div>
              <div class="col-md-6">
                <div class="pb-1">
                  <div class="">
                    <div class="rounded p-4 company-intro-bg shadow">
                      <p class="company-intro">Inspired by the hobby and a tribute to the dream of his late father Amaro Baleta Sr., the Numisworks Auction Product Trading (NAPT), was conceptualized by Amaro Baleta Jr. on February 22, 2019. To pursue his passion for numismatics, he formally registered the business name: NAPT at the Department of Trade and Industry of the Philippine Government on January 28, 2021. NAPT is an offshoot of Las Islas Filipinas Trading and El Filinumista Exclusive Auction in Facebook Groups which was also founded by Amaro Baleta Jr.</p>
                    </div>                
                  </div>
                </div> 
              </div>          
            </div>
          </div>

          <!-- Section-->
          <section class="container pl-5 pr-5">
            <div class="row no-gutters bg-light">
              <!-- Carousel for upcoming events-->
              <div id="eventsCarousel" class="p-2 col-md-6 carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#eventsCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#eventsCarousel" data-slide-to="1"></li>
                  <li data-target="#eventsCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="images/default_banner.png" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/default_banner.png" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/default_banner.png" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#eventsCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#eventsCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              <!-- Carousel for upcoming products-->
              <div id="upcomingProductCarousel" class="p-2 col-md-6 carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#upcomingProductCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#upcomingProductCarousel" data-slide-to="1"></li>
                  <li data-target="#upcomingProductCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="https://dummyimage.com/600x300/000/fff" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="https://dummyimage.com/600x300/000/fff" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="https://dummyimage.com/600x300/000/fff" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#upcomingProductCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#upcomingProductCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="container-fluid px-4 px-lg-5 mt-5">
              <div class="row">
                <div class="col mb-4">
                  <div class="card h-100">
                    <!-- Sale badge-->
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                    <!-- Product image-->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                      <div class="text-center">
                        <!-- Product name-->
                        <h5 class="fw-bolder">Sale Item</h5>
                        <!-- Product price-->
                        <span class="text-muted text-decoration-line-through">$50.00</span>
                        $25.00
                      </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card h-100">
                    <!-- Sale badge-->
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                    <!-- Product image-->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                      <div class="text-center">
                        <!-- Product name-->
                        <h5 class="fw-bolder">Sale Item</h5>
                        <!-- Product price-->
                        <span class="text-muted text-decoration-line-through">$50.00</span>
                        $25.00
                      </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                    </div>
                  </div>
                </div>
                <div class="col mb-4">
                  <div class="card h-100">
                    <!-- Sale badge-->
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                    <!-- Product image-->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                      <div class="text-center">
                        <!-- Product name-->
                        <h5 class="fw-bolder">Sale Item</h5>
                        <!-- Product price-->
                        <span class="text-muted text-decoration-line-through">$50.00</span>
                        $25.00
                      </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2021</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
      </div>
    </div>

  <!--===============================================================================================-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/cycle-carousel.js"></script>
  </body>
</html>
