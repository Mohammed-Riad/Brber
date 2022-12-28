@extends('Master.master')

@section('title', 'about')
@section('section')


<!-- ? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/loder.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->





<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70 text-center">
                            <h2>About US</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--? About Area Start -->
    <section class="about-area section-padding30 position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-11">
                    <!-- about-img -->
                    <div class="about-img ">
                        <img src="assets/img/gallery/about.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle3 mb-35">
                            <span>About Our company</span>
                            <h2>52 Years Of Experience In Hair cut!</h2>
                        </div>
                        <p class="mb-30 pera-bottom">Brook presents your services with flexible, convenient and cdpoe layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfreplication of the designers is intended.</p>
                        <p class="pera-top mb-50">Brook presents your services with flexible, convefnient and ent anipurpose layouts. You can select your favorite.</p>
                        <img src="assets/img/gallery/signature.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- About Shape -->
        <div class="about-shape">
            <img src="assets/img/gallery/about-shape.png" alt="">
        </div>
    </section>
    <!-- About-2 Area End -->
    <!--? Services Area Start -->
    <section class="service-area pb-170">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-11 col-sm-11">
                    <div class="section-tittle text-center mb-90">
                        <span>Professional Services</span>
                        <h2>Our Best services that we offering to you</h2>
                    </div>
                </div>
            </div>
            <!-- Section caption -->
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-caption text-center mb-30">
                        <div class="service-icon">
                            <i class="flaticon-healthcare-and-medical"></i>
                        </div>
                        <div class="service-cap">
                            <h4><a href="#">Stylish Hair Cut</a></h4>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-caption active text-center mb-30">
                        <div class="service-icon">
                            <i class="flaticon-healthcare-and-medical"></i>
                        </div>
                        <div class="service-cap">
                            <h4><a href="#">Body Massege</a></h4>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-caption text-center mb-30">
                        <div class="service-icon">
                            <i class="flaticon-healthcare-and-medical"></i>
                        </div>
                        <div class="service-cap">
                            <h4><a href="#">Breard Style</a></h4>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>



<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>
<!-- End Scroll Up -->


@endsection