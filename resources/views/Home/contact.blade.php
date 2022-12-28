@extends('Master.master')

@section('title', 'contact')

@section('section')

    <!--? Preloader Start -->
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
                                <h2>Contact Us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--?  Contact Area start  -->
        <section class="contact-section">
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="/contact" method="post" id="contactForm">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                            placeholder=" Enter Message"></textarea>
                                    </div>


                                    @error('message')
                                        <p class="text-danger text-left small" style="margin-top: -1.5rem">
                                            {{ $message }}</p>
                                    @enderror
                                </div>



                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input @if (Auth::check()) value="{{ auth()->user()->name }}" @endif
                                            class="form-control" name="name" id="name" type="text"
                                            placeholder="Enter your name">
                                    </div>

                                    @error('name')
                                        <p class="text-danger text-left small" style="margin-top: -1.5rem">
                                            {{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input @if (Auth::check()) value="{{ auth()->user()->email }}" @endif
                                            class="form-control " type="email" name="email" \ placeholder="Email">
                                    </div>

                                    @error('email')
                                        <p class="text-danger text-left small" style="margin-top: -1.5rem">
                                            {{ $message }}</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Jordan , Zarqa.</h3>
                                <p>Rosemead, CA 91770</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>0797496471</h3>
                                <p>7/24</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>’MohammedKhalel@gmail.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Area End -->
    </main>






    <!-- Scroll Up -->


    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
    <!-- End Scroll Up -->

@endsection
