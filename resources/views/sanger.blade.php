<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Segolip | Sanger Sequencing</title>

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
              <h1 class="title-single">Sanger sequencing</h1>
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

    <!-- Sanger Section -->
    <section class="section-about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="about-img-box text-center">
              <img src="{{ asset('img/sanger-two.jpg') }}" alt="" class="img-fluid">
              <img src="{{ asset('img/sanger-one.png') }}" alt="" class="img-fluid">
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
                Sanger sequencing, also known as the “chain termination method”, is a method for determining the
                        nucleotide sequence of DNA. The method was developed by two-time Nobel Laureate Frederick Sanger
                        and his colleagues in 1977, hence the name 'Sanger' sequencing. At Segolip, sequencing is done
                        using BigDye Terminator v3.1 Chemistry. 
                </p>
                <p class="color-text-a">
                Electrophoresis is done on the 48-capillary
                        Array 3730 DNA Analyzer. Read length of 700 bases or more is guaranteed for a common plasmid
                        template. Similar read lengths can be obtained from PCR products. Sequence data is generated and
                        shared in two formats: as a text file and ABI file (electropherogram/raw data). Data is accessible through a secure web account.
                </p>
                <p><b>Service requirements</b></p>
                <ul>
                    <li>A duly completed service request form. Download it <a href="excel_docs/Segolip_Sequencing_Request_Form_2021.xls"><u>here</u> <i class="fa fa-file-excel-o attachment" aria-hidden="true"></i></a> </li>
                    <li>Submission of purified PCR products/plasmids and primers that meet the following criterion.
                        <ul>
                            <li>Sample concentration PCR products at 50ng/ul, plasmids 100ng/ul</li>
                            <li>Submit 10-15ul of the sample sequenced with the forward and reverse primer. Increase proportionatly the
                                sample volume where multiple primers are used on the same sample
                                set.</li>
                            <li>Forward and reverse primers each at 10pmols per ul.
                            </li>
                            <li>A 1% agarose gel image of the samples. Ensure the samples have a single band before submission.</li>
                        </ul>
                    </li>
                    <li>For more information, refer to the <a href="{{ asset('guidelines/sanger_sequencing_guidelines.pdf') }}"><u>guidelines</u> <i class="fa fa-file-pdf-o attachment-pdf" aria-hidden="true"></i></a></li>
                </ul>
                <p><b>Recommended purification kits</b></p>
                <ul>
                    <li>Plasmids
                        <ul>
                            <li>Promega Wizard® SV Clean-Up Systems</li>
                            <li>Qiagen Plasmid DNA Kits</li>
                        </ul>
                    </li>
                    <li>PCR Products
                        <ul>
                            <li>Qiagen QIAquick PCR Purification Systems</li>
                            <li>GeneJet PCR Purification Kit (Sigma Aldrich)</li>
                            <li>Promega Wizard PCR Clean-Up Systems</li>
                            <li>Gel Purification Systems (Promega or Qiagen) - Applicable where samples have multiple bands.</li>
                        </ul>
                    </li>
                </ul>
                <!-- <h6><b>Sequencing Request Form</b></h6> -->
                <div class="row">
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