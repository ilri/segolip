<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Segolip | Kasp Genotyping</title>

  <!-- Scripts -->
  <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/icofont/icofont.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/venobox/venobox.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/animate.css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/remixicon/remixicon.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Styles -->
  <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

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
              <h1 class="title-single">KASP genotyping</h1>
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

    <!-- KASP Section -->
    <section class="section-about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="about-img-box">
              <img src="{{ asset('img/kaspdepartin.jpg') }}" alt="" class="img-fluid" width="1920" height="960">
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
                KASP (Kompetitive Allele Specific PCR) is a SNP (Single Nucleotide Polymorphism) genotyping
                        technology. KASP genotyping assays are based on competitive allele-specific PCR and enable
                        biallelic scoring of single nucleotide polymorphisms at specific loci. The technology utilizes a
                        commercially available KASP master mix, and different platforms can be used for plate reading.
                        At Segolip the FLUOstar® Omega platform is used for this purpose.
                </p>

                <p class="color-text-a">
                Segolip KASP genotyping service is all inclusive and runs from Primer design, procurement and
                        validation, DNA extraction, KASP PCR and SNP calling. The service can be a full genotyping
                        service or partial depending on the preferred point of engagement by the client.
                </p>

                <p>Use the KASP Genotyping <a href="excel_docs/Segolip_KASP_Genotyping_Services_Request_Template_2021.xlsx"><u>template</u> <i class="fa fa-file-excel-o attachment" aria-hidden="true"></i></a> to submit your request.</p>

                <p>For more information, refer to the <a href="{{ asset('guidelines/kasp_genotyping_guidelines.pdf') }}"><u>guidelines</u> <i class="fa fa-file-pdf-o attachment-pdf" aria-hidden="true"></i></a></p>
                
                <div class="row">
                    <!-- <div class="course-col col-md-4">
                        <h6><b>KASP Genotyping Template</b></h6>
                        <p>Download it <a href="excel_docs/Segolip_KASP_Genotyping_Services_Request_Template_2021.xlsx"><u>here</u></a>
                        </p>
                    </div> -->
                    <!-- <div class="course-col col-md-4">
                        <h6><b>Guidelines</b></h6>
                        <p>View them <a href="{{ asset('guidelines/kasp_genotyping_guidelines.pdf') }}"><u>here</u></a></p>
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
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset( 'vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>