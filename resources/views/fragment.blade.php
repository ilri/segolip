<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Segolip | Fragment Analysis</title>

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
              <h1 class="title-single">Fragment analysis</h1>
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

    <!-- Fragment Section -->
    <section class="section-about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="about-img-box">
              <img src="{{ asset('img/fragm.jpg') }}" alt="" class="img-fluid">
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
                Segolip Unit accepts multi-well plates (compatible with the instrument) containing DNA fragments
                        for size analysis on the 48-capillary Array 3730 DNA Analyzer. The instruments use the G5 and F
                        filter set. The following dyes are therefore used for G5 and F Filter set to label PCR fragments
                        respectively: The LIZ dye is used as the internal size standard.
                </p>
                <table class="table table-bordered">
                    <tr>
                        <td>G5</td>
                        <td>6-FAM</td>
                        <td>VIC</td>
                        <td>NED</td>
                        <td>PET</td>
                        <td>LIZ</td>
                    </tr>
                    <tr>
                        <td>F</td>
                        <td>5-FAM</td>
                        <td>JOE</td>
                        <td>NED</td>
                        <td>ROX</td>
                        <td></td>
                    </tr>
                </table>
                <p class="color-text-a">
                A tab delimited version of the sample sheet (48 wells sheet <a href="excel_docs/Segolip_Sample_Sheet_48_Wells_Fragment_Analysis.xlsx"><u>here</u> <i class="fa fa-file-excel-o attachment" aria-hidden="true"></i></a>
                        and 96 wells sheet <a href="excel_docs/Segolip_Sample_Sheet_96_Wells_Fragment_Analysis.xlsx"><u>here</u> <i class="fa fa-file-excel-o attachment" aria-hidden="true"></i></a>) with the sample information and orientation must be
                        submitted together with the plate. This is used to process the plate on the genetic analyzer.
                        Only the highlighted fields of the downloaded sample sheet should be populated. Avoid these illegal
                        characters:(.,-‘ () etc.) because they hinder importation of the sample sheet
                        into the data collection software. Only an underscore can be used in the sample naming.
                </p>

                <p>For more information, refer to the <a href="{{ asset('guidelines/fragment_analysis_guidelines.pdf') }}"><u>guidelines</u> <i class="fa fa-file-pdf-o attachment-pdf" aria-hidden="true"></i></a></p>

                <div class="row">
                    <!-- <div class="course-col col-md-4">
                        <h6><b>Fragment Analysis Sheets</b></h6>
                        <p>48 wells sheet <a href="excel_docs/Segolip_Sample_Sheet_48_Wells_Fragment_Analysis.xlsx"><u>here</u></a>
                        and 96 wells sheet <a href="excel_docs/Segolip_Sample_Sheet_96_Wells_Fragment_Analysis.xlsx"><u>here</u></a>
                        </p>
                    </div>
                    <div class="course-col col-md-4">
                        <h6><b>Guidelines</b></h6>
                        <p>View them </p>
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