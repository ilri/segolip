<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SegoliP | FAQs</title>

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
              <h1 class="title-single">Frequently Asked Questions</h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  FAQs
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQs Section -->
    <section id="faq" class="faq">
        <div class="container">
            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapsed questions"
                            href="#faq-list-1">How can I access SegoliP services? <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse" data-parent=".faq-list">
                            <p>
                              SegoliP services are available online and open to all clients from research organizations, NARS and universities
                              wishing to partner with us. Visit our website's <a class="que-link" href="{{ route('welcome') }}/#ourservices">services</a> section and explore the various services offered, download
                              the appropriate request form of your area of interest and request for the service online.<br>
                              <strong><u>N/B</u> A service specification agreement will be uploaded for you to download and agree to the terms.
                                 If you have a service level agreement with SegoliP a service specification is not required.</strong>
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2"
                            class="collapsed questions">What are the sample requirements for the sanger sequencing service? <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                            <p>
                                SegoliP accepts purified PCR amplicons and plasmids at a concentration of 50ng & 100ng 
                                respectively. The samples and primers must be eluted in water. PCR products must be single banded. 
                                An agarose gel image must be uploaded together with the sequencing request form. 
                                For more, details refer to our <a class="que-link" href="{{ asset('guidelines/sanger_sequencing_guidelines.pdf') }}">Sanger sequencing guidelines</a> on samples submission.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3"
                            class="collapsed questions">What can I do to generate single banded PCR products per your requirement? <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                            <p>
                            Gradient PCR can be used to optimize the annealing temperature of your primers. One sample is amplified 
                            against a range of different annealing temperatures. The temperature that generates a single band is 
                            optimal for that set of primers. Alternatively, if your samples have multiple products (band) you can 
                            excise the band of interest from agarose gel under UV light and do gel purification. Commercial kits 
                            are readily available in the market for this purpose.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4"
                            class="collapsed questions">Do I need to submit sequencing primers? <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                            <p>
                                You need to submit at least 5µl of sequencing primer for each reaction at 10pmols/µl. We also facilitate 
                                procurement of sequencing primers once you submit the sequences. For more details, refer to the <a class="que-link" href="{{ route('oligo') }}">Primer 
                                ordering</a> service section on our website.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5"
                            class="collapsed questions">How will I receive my Sequencing results?  <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                            <p>
                            Results are uploaded on the website in a zipped file format. These will be ABI files and FASTA (seq) files. 
                            You will receive a link for you to download the results. <br>
                            All other results for various services are uploaded in a similar manner for downloading from the client’s end.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-6"
                            class="collapsed questions">Do you still offer microsatellite analysis services for SSR (simple sequence repeats) genotyping? What are the samples requirement?  <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-6" class="collapse" data-parent=".faq-list">
                            <p>
                              Yes, we do offer Fragment analysis service. We receive a ready to process plate. You will have done PCR, 
                              co-loaded your samples (if required) added Liz and Hidi. Through our online system, upload the samplesheet 
                              with the sample information replicated per sample orientation in your plate. For more details, refer 
                              to our <a class="que-link" href="{{ asset('guidelines/fragment_analysis_guidelines.pdf') }}">Fragment analysis guidelines</a> on our website. 
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-7"
                            class="collapsed questions">How do I prepare my samples for microsatellite (Fragment) analysis? <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-7" class="collapse" data-parent=".faq-list">
                            <p>
                              After generation of PCR products, normalize to 50ng/µl. Design your co-loading sets using different dye combinations. 
                              You can co-load at least 4 different markers per well. NB: Pool at least 1.2µl of one sample amplified with different 
                              primers labeled with different dyes. Prepare a Liz/hidi cocktail by combining 1ml of hidi with 15µl of Liz 
                              standard (this is enough for one 96 well plate). Aliquot 9µl of this cocktail to each well of the 96 well plate. 
                              Transfer 1.2µl of each sample pooled to an individual well with the cocktail. If no multiplexing has been done, 
                              transfer 1.2µl of individual PCR amplicons to individual wells with the Liz/Hidi cocktail. Mix well and denature 
                              at 95°c for 3 minutes. Samples are now ready for submission. 
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-8"
                            class="collapsed questions">Which dyes are your Genetic analyzer calibrated for? <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-8" class="collapse" data-parent=".faq-list">
                            <p>
                              Our Genetic Analyzers are calibrated for the following dyes and can therefore be used for labeling your primers; Dye set G5 (6FAM, VIC, NED, PET) – with Liz as an internal size standard. 
                              Dye set F (5-FAM, JOE, NED, and ROX).
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-9"
                            class="collapsed questions">Do you still synthesize primers for clients? <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-9" class="collapse" data-parent=".faq-list">
                            <p>
                                No, we do not synthesize primers locally, however, we pool orders from interested clients and do a consolidated 
                                monthly order from an external source. This happens on the first Wednesday of each month. Clients take advantage
                                 of shared freight charges thereby mitigating their individual cost. Clients can also request for an express 
                                 service where they don’t wish to wait for the consolidation. For more details, refer 
                                 to our <a class="que-link" href="{{ asset('guidelines/primer_ordering_guidelines.pdf') }}">Primer ordering 
                                 guidelines</a> on our website.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-10"
                            class="collapsed questions">What is your cost of primers?  <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-10" class="collapse" data-parent=".faq-list">
                            <p>
                                Primers are costed based on several parameters: <br>1. The length of the primers (# of bases).<br> 2. The cost per base depends on the preferred synthesis scale <br>3. Purification method <br>4. Modifications. <br>A quote will be provided based on these specifications.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-11"
                            class="collapsed questions">What kind of samples do I need to submit for DNA/RNA extraction?  <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-11" class="collapse" data-parent=".faq-list">
                            <p>
                                We have a wide portfolio for the DNA/RNA extraction service. We use different kits for different sample 
                                types in our automated DNA extraction service. Refer to our website's <a class="que-link" href="{{ route('dnarna') }}">DNA/RNA extraction</a> section for the full range of this service, 
                                sample submission and sample requirement.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-12"
                            class="collapsed questions">Do you offer partial or full KASP genotyping service?  <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-12" class="collapse" data-parent=".faq-list">
                            <p>
                              Our KASP genotyping service can be either full or partial. The full genotyping service span from primer design, 
                              procurement and validation, DNA extraction, running KASP Assays and SNP analysis. For the Partial service, 
                              you can engage us from your preferred point. Eg. You can provide DNA and primers for us to run the assays 
                              for you. Refer to our website's <a class="que-link" href="{{ route('kasp') }}">KASP genotyping</a> section for more details about this service.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-13"
                            class="collapsed questions">What are the charges for the KASP genotyping service?  <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-13" class="collapse" data-parent=".faq-list">
                            <p>
                              The cost is segmented depending on the point of engagement. We will cost your project and share
                               a budget within agreeable timelines. 
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-14"
                            class="collapsed questions">What are the payment options for your services and is the payment pre- or post- service?  <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-14" class="collapse" data-parent=".faq-list">
                            <p>
                                Upon submission of a service request for either of our services, an electronic invoice is generated 
                                and uploaded on the website for you to download. ILRI accounts details are entrenched on the invoice, 
                                and you can pay into the account either by direct deposit, cheque, wire transfer or via Mpesa.  
                                All our services are prepaid. 
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-15"
                            class="collapsed questions">What’s the turnaround time for your service?  <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-15" class="collapse" data-parent=".faq-list">
                            <p>
                                The turnaround time varies depending on the service of interest, project size and range. Mostly 5 working days, 
                                but if any delay is envisaged, it is communicated well in advance.  
                            </p>
                        </div>
                    </li>
                </ul>
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
