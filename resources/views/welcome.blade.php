<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SegoliP</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/icofont/icofont.min.css">
    <!-- <link rel="stylesheet" href="vendor/boxicons/css/boxicons.min.css"> -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="vendor/venobox/venobox.css">
    <link rel="stylesheet" href="vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="vendor/remixicon/remixicon.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Styles -->
    <!-- <link href="css/app.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- Header -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="{{ route('welcome') }}">SegoliP</a></h1>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                <li class="active"><a href="{{ route('welcome') }}">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#ourservices">Services</a></li>
                <li><a href="{{ route('faqs') }}">FAQs</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#contact">Contacts</a></li>
                @guest
                <li class="drop-down"><a href="">Account</a>
                    <ul>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    </ul>
                </li>
                @else
                <li class="drop-down"><a href="">{{ Auth::user()->name }}</a>
                    <ul>
                        <li>
                            <a class="dropdown-item" href="{{ route('myorders') }}">
                                {{ __('Dashboard') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
        <h1>Welcome to SegoliP</h1>
        <h2>For genomic services</h2>
        <a href="{{ route('ordering') }}" class="btn-get-started scrollto">Get Started</a>
        </div>
    </section>

    <!-- Main Section -->
    <main id="main">
        <!-- Why Us Section -->
        <section id="why-us" class="why-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h4>Why Choose SegoliP?</h4>
                            <p>
                                Our customer experience is unmatched, valuable feedback and positive testimonies received from our past and current customers is a treasure. We are committed to maintain the preset standards and make them even better.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-receipt"></i>
                                        <h4>Pricing</h4>
                                        <p>We render our services on a cost recovery basis, making our pricing very competitive.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class='bx bx-comment-detail'></i>
                                        <h4>Feedback</h4>
                                        <p>We pride ourselves in quick turnaround time and quality data output.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class='bx bx-group'></i>
                                        <h4>Customers</h4>
                                        <p>Our customers are our focus and are our priority.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About</h2>
                    <!-- <p>Find out more about us.</p> -->
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('img/reuabouti.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <h3>SegoliP Unit</h3>
                        <p class="fst-italic">
                        Established in 1993 as ILRI’s centralized sequencing, genotyping and oligosynthesis platform (SegoliP), the facility has since expanded to support
                        the needs of scientists working in Africa and beyond.
                        </p>
                        <p> 
                        The process of sending biological samples out of the continent is not only time consuming but also costly 
                        leading to delayed milestones in projects. Since inception, the unit’s client portfolio has included
                         research institutes and universities across the globe, with the bulk of its support given
                          to scientists and students working in the region.
                        </p>
                        <p>
                        SegoliP unit renders capillary electrophoresis for Sanger sequencing and microsatellite (fragment) analysis, 
                        KASP genotyping and automated nucleic acid extraction (DNA and RNA) services on a cost recovery basis. 
                        The platform also offers KASP primer design and validation and a monthly consolidated primer procurement service. 
                        The platform facilitates permit processing for the purpose of sample shipment, provide technical advice and training.
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <!-- Services Section -->
        <section id="ourservices" class="ourservices">
            <div class="container">
                <div class="section-title">
                    <h2>Services</h2>
                    <!-- <p>Check out the services we offer.</p> -->
                </div>
                <div class="row">
                    <div class="col mx-1 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class='bx bx-equalizer'></i></div>
                        <h4 class="title">Sanger Sequencing</h4>
                        <p class="description"><a href="{{ route('sanger') }}">Read more<i class='bx bx-chevrons-right'></i></a></p>
                        </div>
                    </div>

                    <div class="col mx-1 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class='bx bx-chart'></i></div>
                        <h4 class="title">Fragment Analysis</h4>
                        <p class="description"><a href="{{ route('fragment') }}">Read more<i class='bx bx-chevrons-right'></i></a></p>
                        </div>
                    </div>

                    <div class="col mx-1 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class='bx bx-bowling-ball'></i></div>
                        <h4 class="title">KASP Genotyping</h4>
                        <p class="description"><a href="{{ route('kasp') }}">Read more<i class='bx bx-chevrons-right'></i></a></p>
                        </div>
                    </div>

                    <div class="col mx-1 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class='bx bx-dna'></i></div>
                        <h4 class="title">DNA/RNA Extraction</h4>
                        <p class="description"><a href="{{ route('dnarna') }}">Read more<i class='bx bx-chevrons-right'></i></a></p>
                        </div>
                    </div>

                    <div class="col mx-1 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class='bx bx-stats'></i></div>
                        <h4 class="title">Oligonucleotide Procurement</h4>
                        <p class="description"><a href="{{ route('oligo') }}">Read More<i class='bx bx-chevrons-right'></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section id="gallery" class="gallery section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>Gallery</h2>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('img/gallery/reuabouti.jpg') }}" class="venobox" data-gall="gallery-item">
                                <img src="{{ asset('img/gallery/reuabouti.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('img/gallery/kaspdeparti.jpg') }}" class="venobox" data-gall="gallery-item">
                                <img src="{{ asset('img/gallery/kaspdeparti.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('img/gallery/lucydeparti.jpg') }}" class="venobox" data-gall="gallery-item">
                                <img src="{{ asset('img/gallery/lucydeparti.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('img/gallery/sequenser.jpg') }}" class="venobox" data-gall="gallery-item">
                                <img src="{{ asset('img/gallery/sequenser.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('img/gallery/slid1min.jpg') }}" class="venobox" data-gall="gallery-item">
                                <img src="{{ asset('img/gallery/slid1min.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('img/gallery/slid2min.jpg') }}" class="venobox" data-gall="gallery-item">
                                <img src="{{ asset('img/gallery/slid2min.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('img/gallery/slid3min.jpg') }}" class="venobox" data-gall="gallery-item">
                                <img src="{{ asset('img/gallery/slid3min.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('img/gallery/tanbead.jpg') }}" class="venobox" data-gall="gallery-item">
                                <img src="{{ asset('img/gallery/tanbead.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title">
                    <h2>Contacts</h2>
                    <!-- <p>This is how to contact us.</p> -->
                </div>
            </div>

            <div>
                <iframe style="border:0; width: 100%; height: 350px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.331657546243!2d36.7280586!3d-1.2734374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f196b8cb30955%3A0x86c0b3fae81dd77a!2sILRI%20Offices!5e0!3m2!1sen!2ske!4v1616745882304!5m2!1sen!2ske"
                frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="container">
                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Address</h4>
                                <p>International Livestock Research Institute, SegoliP Unit</p>
                                <p>P.O Box 30709 – 00100, Old Naivasha Road, Nairobi</p>
                                <p></p>
                            </div>

                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email</h4>
                                <p>segolilab@cgiar.org</p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Phone</h4>
                                <p>+254 20 422 3055/+254 20 422 3059</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <div class="row">
                            <div class="col">
                                @include('layouts.alerts')
                            </div>
                        </div>

                        <form action="{{ route('submit-inquiry') }}" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Your Name" value="{{ old('name') }}"/>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}"/>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" placeholder="Subject" value="{{ old('subject') }}"/>
                                @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="5" placeholder="Message">{{ old('message') }}</textarea>
                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>SegoliP Unit</h3>
                    <p>
                    ILRI Offices, <br>
                    Naivasha Rd, Nairobi<br>
                    Kenya <br><br>
                    <strong>Phone:</strong> +254 20 422 3055<br>
                    <strong>Email:</strong> segolilab@cgiar.org<br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#about">About</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#ourservices">Services</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="{{ route('faqs') }}">FAQs</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#gallery">Gallery</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="{{ route('sanger') }}">Sanger Sequencing</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="{{ route('fragment') }}">Fragment Analysis</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="{{ route('kasp') }}">KASP Genotyping</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="{{ route('dnarna') }}">DNA/RNA Extraction</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="{{ route('oligo') }}">Oligonucleotide Procurement</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <a href="https://www.ilri.org/"><img src="{{ asset('img/ilri5.png') }}" alt="ilri" width="400"></a>
                </div>

                </div>
            </div>
        </div>

        <div class="d-md-flex py-4 px-4 copyr">
            <div class="mr-md-auto text-center text-md-left pt-3">
                <div class="copyright">
                    <strong><span>SegoliP</span></strong> &copy; 2022.
                </div>
            </div>
        </div>
    </footer>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Main JS File -->
    <script src="js/main.js"></script>
</body>

</html>
