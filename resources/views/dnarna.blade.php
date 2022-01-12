<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Segolip | DNA/RNA Extraction</title>

  <!-- Scripts -->
  <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="vendor/icofont/icofont.min.css">
  <link rel="stylesheet" href="vendor/boxicons/css/boxicons.min.css">
  <link rel="stylesheet" href="vendor/venobox/venobox.css">
  <link rel="stylesheet" href="vendor/animate.css/animate.min.css">
  <link rel="stylesheet" href="vendor/remixicon/remixicon.css">
  <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Styles -->
  <!-- <link href="css/app.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <!-- Header -->
  @extends('layouts.header')

  <main id="main">

    <!-- Title -->
    <section class="intro-single section-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">DNA/RNA extraction</h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Services
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>

    <!-- DNA/RNA Section -->
    <section class="section-about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="about-img-box">
              <img src="{{ asset('img/dnarna.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="sinse-box">
              <h3 class="sinse-title">Introduction
                <span></span>
                <br>
              </h3>
            </div>
          </div>
          <div class="col-md-12 section-t8">
            <div class="row">
              <div class="col-md-6 col-lg-12 section-md-t3">
                <p class="color-text-a">
                Segolip houses TANBead Maelstrom 9600 which is an
                        automated nucleic acid platform for high throughput RNA and DNA
                        extraction. The platform is efficient with capacity to process 96 samples of high quality (purity) and quantity
                        DNA/RNA extracted in less than an hour. The automation process ensures zero chances of
                        cross contamination. The extraction cost is competitive with a quick turnaround.
                </p>

                <p>Use the DNA/RNA Extraction <a href="excel_docs/Segolip_DNA_Extraction_Request_Form_2021.xlsx"><u>template</u> <i class="fa fa-file-excel-o attachment" aria-hidden="true"></i></a> to submit your request.</p>

                <p>For more information on sample requirements, kindly refer to the <a href="{{ asset('guidelines/dna_extraction_guidelines.pdf') }}" target="_blank"><u>guidelines</u> <i class="fa fa-file-pdf-o attachment-pdf" aria-hidden="true"></i></a></p>
                <div class="row">
                    <!-- <div class="course-col col-md-4">
                        <h6><b>DNA/RNA Extraction Request Form</b></h6>
                        <p>Download it <a href="excel_docs/Segolip_DNA_Extraction_Request_Form_2021.xlsx"><u>here</u></a>
                        </p>
                    </div> -->
                    <!-- <div class="course-col col-md-4">
                        <h6><b>Guidelines</b></h6>
                        <p>View them <a href="{{ asset('guidelines/dna_extraction_guidelines.pdf') }}"><u>here</u></a></p>
                    </div> -->
                    <div id="reqbutton" class="course-col col-md-4">
                        <a href="{{ route('ordering') }}" class="btn-get-started scrollto">Request Service</a>
                    </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- Footer -->
  @extends('layouts.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/venobox/venobox.min.js"></script>
  <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="vendor/counterup/counterup.min.js"></script>
  <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>