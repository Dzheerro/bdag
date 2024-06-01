<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>BdagLiving</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="BdagLiving" name="keywords" />
  <meta content="Furniture Selected for the Sophisticated Home" name="description" />
  <link href="img/favicon.png" rel="icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="on-cookies.css" />
  <script defer type="module" src="on-cookies.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem" role="status"></div>
    <img class="position-absolute top-50 start-50 translate-middle" src="img/icons/icon-1.png" alt="Icon" />
  </div>
  <div class="container-fluid bg-dark p-0 wow fadeIn" data-wow-delay="0.1s"></div>
  <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="index.php" class="navbar-brand ms-4 ms-lg-0"> BdagLiving </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="index.php" class="nav-item nav-link">HOME</a>
        <a href="about.php" class="nav-item nav-link">ABOUT US </a>
        <a href="shop.php" class="nav-item nav-link active">CHOOSE FURNITURE
        </a>

        <a href="contact.php" class="nav-item nav-link">CONTACTS</a>
      </div>
      <a href="#contactform" class="btn btn-primary py-2 px-4 d-none d-lg-block">Free consultation</a>
    </div>
  </nav>

  <div id="benefit" class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="
              visibility: visible;
              animation-delay: 0.1s;
              animation-name: fadeInUp;
            ">
          <div class="border-5 border-primary ps-4 mb-5">
            <h1 class="display-6 mb-0">
              MN-16: Timeless Design Meets Modern Convenience
            </h1>
          </div>

          <p class="mb-5">
            BdagLiving's MN-16 chest transcends mere storage; it's a harmonious fusion of timeless elegance and contemporary functionality. Meticulously crafted with premium materials for enduring beauty, the MN-16 infuses any room with a sense of sophistication and comfort. Its clean lines, minimalist handles, and effortless-gliding drawers ensure a seamless user experience, while providing generous storage space for all your essentials. Effortlessly elevating any space, the MN-16 transforms functional rooms into artfully designed sanctuaries.
          </p>
          <a class="btn btn-primary py-3 px-5" href="#contactform">Consult</a>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s" style="
              visibility: visible;
              animation-delay: 0.5s;
              animation-name: fadeInUp;
            ">
          <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px">
            <img class="position-absolute w-100 h-100" src="img/11.jpg" alt="" style="object-fit: cover" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <a name="contactform"></a>
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px">
        <h3 class="mb-5">Consult</h3>
      </div>
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <form action="mail.php" method="GET">
            <div class="form-outline mb-4">
              <input type="text" id="form4Example1" class="form-control" name="name" required />
              <label class="form-label" for="form4Example1">Your name</label>
            </div>

            <div class="form-outline mb-4">
              <input type="email" id="form4Example2" class="form-control" name="email" required />
              <label class="form-label" for="form4Example2">Your Email</label>
            </div>

            <div class="form-outline mb-4">
              <textarea class="form-control" id="form4Example3" rows="4" name="messages"></textarea>
              <label class="form-label" for="form4Example3">Your question</label>
            </div>

            <button type="submit" class="btn btn-primary btn-block mb-4">
              Send
            </button>
          </form>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="d-flex pb-3 mb-3">
            <div class="ms-3">
              <h6>Our office:</h6>
              <span>Muirfield, Nebraska 69039, USA</span>
            </div>
          </div>
          <div class="d-flex pb-3 mb-3">
            <div class="ms-3">
              <h6>Call us:</h6>
              <span>+1311-869-0761</span>
            </div>
          </div>
          <div class="d-flex pb-3 mb-3">
            <div class="ms-3">
              <h6>Our Email:</h6>
              <span>shop@bdagliving.com</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-dark text-body footer mt-5 pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-3 col-md-6">
          <h3 class="text-light mb-4">OUR CONTACTS</h3>
          <p class="mb-2">
            <i class="fa fa-map-marker-alt text-primary me-3"></i>1452 Kyle
            Street, Farnam, United States
          </p>
          <p class="mb-2">
            <i class="fa fa-phone-alt text-primary me-3"></i>+1311-869-0761
          </p>
          <p class="mb-2">
            <i class="fa fa-envelope text-primary me-3"></i>shop@bdagliving.com
          </p>
        </div>

        <div class="col-lg-3 col-md-6">
          <h3 class="text-light mb-4">Links</h3>
          <a class="btn btn-link" href="privacy.php">Privacy Policy</a>
          <a class="btn btn-link" href="terms.php">Terms and Conditions</a>
          <a class="btn btn-link" href="cookie.php">Cookie Policy</a>
        </div>
      </div>
    </div>
    <div class="container-fluid copyright">
      <div class="container"></div>
    </div>
  </div>
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/tempusdominus/js/moment.min.js"></script>
  <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>