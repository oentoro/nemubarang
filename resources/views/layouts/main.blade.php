<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Cari barang hilang & nemu barang</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('/') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/templatemo-onix-digital.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/animated.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/owl.css">
    <!--

TemplateMo 565 Onix Digital

https://templatemo.com/tm-565-onix-digital

-->
    @yield('style')
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{url('/')}}" class="logo">
                            <span style="color:black;">
                            NEMUBARANG
                            </span>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a id="menu-beranda" href="{{url('/')}}">Beranda</a></li>
                            <li class="scroll-to-section"><a id="menu-nemu" href="{{url('/nemu')}}">Nemu Barang</a></li>
                            <li class="scroll-to-section"><a id="menu-tentang" href="{{url('/tentang-kami')}}">Tentang Kami</a></li>
                            <li class="scroll-to-section"><a id="menu-hubungi" href="{{url('/hubungi-kami')}}">Hubungi Kami</a></li>
                            <li class="scroll-to-section">
                                <div class="main-red-button-hover"><a href="{{url('/cari')}}">Cari Barang Hilang</a></div>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Content Start **** -->
    @yield('content') 
    <!-- ***** Content End ***** -->

    <div class="footer-dec">
        <img src="{{ url('/') }}/assets/images/footer-dec.png" alt="">
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="about footer-item">
                        <div class="logo">
                            <a href="#"><img src="{{ url('/') }}/assets/images/logo.png"
                                    alt="Onix Digital TemplateMo"></a>
                        </div>
                        <a href="mailto:info@{{env('APP_NAME')}}">info@nemubarang.com</a>
                        <ul>
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="services footer-item">
                        <h4>Services</h4>
                        <ul>
                            <li><a href="#">SEO Development</a></li>
                            <li><a href="#">Business Growth</a></li>
                            <li><a href="#">Social Media Managment</a></li>
                            <li><a href="#">Website Optimization</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="community footer-item">
                        <h4>Community</h4>
                        <ul>
                            <li><a href="#">Digital Marketing</a></li>
                            <li><a href="#">Business Ideas</a></li>
                            <li><a href="#">Website Checkup</a></li>
                            <li><a href="#">Page Speed Test</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="subscribe-newsletters footer-item">
                        <h4>Subscribe Newsletters</h4>
                        <p>Get our latest news and ideas to your inbox</p>
                        <form action="#" method="get">
                            <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email"
                                required="">
                            <button type="submit" id="form-submit" class="main-button "><i
                                    class="fa fa-paper-plane-o"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="copyright">
                        {{-- <p>Copyright © 2021 Onix Digital Co., Ltd. All Rights Reserved.
                            <br>
                            Designed by <a rel="nofollow" href="https://templatemo.com"
                                title="free CSS templates">TemplateMo</a><br>
                            Distributed by <a href="https://themewagon.com">Themewagon</a>
                        </p> --}}
                    </div>
                </div>

            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="{{ url('/') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ url('/') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/') }}/assets/js/owl-carousel.js"></script>
    <script src="{{ url('/') }}/assets/js/animation.js"></script>
    <script src="{{ url('/') }}/assets/js/imagesloaded.js"></script>
    <script src="{{ url('/') }}/assets/js/custom.js"></script>

    <script>
        // Acc
        $(document).on("click", ".naccs .menu div", function() {
            var numberIndex = $(this).index();

            if (!$(this).is("active")) {
                $(".naccs .menu div").removeClass("active");
                $(".naccs ul li").removeClass("active");

                $(this).addClass("active");
                $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

                var listItemHeight = $(".naccs ul")
                    .find("li:eq(" + numberIndex + ")")
                    .innerHeight();
                $(".naccs ul").height(listItemHeight + "px");
            }
        });
    </script>
    @yield('script')
</body>

</html>
