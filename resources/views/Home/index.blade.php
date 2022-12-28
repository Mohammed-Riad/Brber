@extends('Master.master')
@section('section')
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="" style="object-fit:cover;">
                    <!-- <img width="300px"  style="object-fit:cover;height:300px" src=""
                                        class="ms-lg-auto bg-light shadow-lg img-fluid rounded-5" alt=""> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Strt -->




    <main>
        <!--? slider Area Start-->
        <div class="slider-area position-relative fix ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-9 col-md-11 col-sm-10">
                                <div class="hero__caption">
                                    <span data-animation="fadeInUp" data-delay="0.2s">with patrick potter</span>
                                    <h1 data-animation="fadeInUp" data-delay="0.5s">Our Hair Style make your look elegance
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-9 col-md-11 col-sm-10">
                                <div class="hero__caption">
                                    <span data-animation="fadeInUp" data-delay="0.2s">with patrick potter</span>
                                    <h1 data-animation="fadeInUp" data-delay="0.5s">Our Hair Style make your look elegance
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- stroke Text -->
            <div class="stock-text">

                @if (!Auth::user())
                    <h2>Get More confident</h2>
                    <h2>Get More confident</h2>
                @endif
                @if (Auth::user())
                    <h2>{{ Auth::user()->name }}</h2>
                    <h2>{{ Auth::user()->name }}</h2>
                @endif
            </div>
            <!-- Arrow -->
            <div class="thumb-content-box">
                <div class="thumb-content">
                    <h3>make an appointment now</h3>
                    <a href="#"> <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
        <!-- slider Area End-->


        <!--? Team Start -->
        {{-- <div class="team-area pb-180 " style="margin-top: 100px">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-11 col-sm-11">
                        <div class="section-tittle text-center mb-100">
                            <span>Professional Teams</span>
                            <h2>Our award winner hair cut exparts for you</h2>
                        </div>
                    </div>
                </div>
                <div class="row team-active dot-style">
                    <!-- single Tem -->

                    @foreach ($topRated as $topRated)
                        
                   
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-80 text-center">
                            <div class="team-img">
                                <img src="assets/img/gallery/team1.png" alt="">
                            </div>
                            <div class="team-caption">
                                <span>{{$topRated}}</span>
                                <h3><a href="#">Guy C. Pulido bks</a></h3>
                            </div>
                        </div>
                    </div>
                   
                    @endforeach
             
                </div>
            </div>
        </div> --}}



        <div class="team-area" style="margin-top:70px">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-11 col-sm-11">
                        <div class="section-tittle text-center mb-100 ">
                            <div class="section-tittle text-center mb-100">
                                <span>Professional Teams</span>
                                <h2>Our Top Exparts Barber  for you</h2>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row"  >
                    
                    @foreach ($topRateds as $topRated)
                    
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-" >
                        <div class="single-team mb-80 text-center " >

                            <div class="team-img" >
                                {{-- <a href="/barber/{{ $barber->id }}"> --}}
                            {{-- {{$topRated->avg_rating}} --}}
                            </a>

                            <a href="/barber/{{ $topRated->id }}">
                                <img src="images/Barbers/{{ $topRated ->image}}" alt="">
                            </a>
                            
                            </div>

                            <div class="team-caption" > 
                                
                                <span style="color: #fff; text-transform: uppercase;font-weight: 900;">{{$topRated->address}}</span>
                                <h3 style="color: #fff; text-transform: uppercase;font-weight: 900;">{{$topRated->name}}</h3>
                            </div>
                        </div>
                        
                    </div>
           @endforeach
                    
                 




    </div>


    <div class="team-area" style="margin-top:100px">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-11 col-sm-11">
                    <div class="section-tittle text-center mb-100 ">
                        <div class="section-tittle text-center mb-100">
                            <span>Professional Teams</span>
                            <h2>Our Random Exparts Barber  for you</h2>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row"  >
                
                @foreach ($random as $random)
                
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-" >
                    <div class="single-team mb-80 text-center " >

                        <div class="team-img" >
                            {{-- <a href="/barber/{{ $barber->id }}"> --}}
                        {{-- {{$topRated->avg_rating}} --}}
                        </a>

                        <a href="/barber/{{ $random->id }}">
                            <img src="images/Barbers/{{ $random ->image}}" alt="">
                        </a>
                        
                        </div>

                        <div class="team-caption" > 
                            
                            <span style="color: #fff; text-transform: uppercase;font-weight: 900;">{{$random->address}}</span>
                            <h3 style="color: #fff; text-transform: uppercase;font-weight: 900;">{{$random->name}}</h3>
                        </div>
                    </div>
                    
                </div>
       @endforeach
                
             




</div>
        <!-- Team End -->
        <!-- Best Pricing Area Start -->

        <!-- Best Pricing Area End -->
        <!--? Gallery Area Start -->
        <div class="gallery-area mb-50 " style="margin-top:70px ; margin-buttom:10px ">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-9 col-sm-10">
                        <div class="section-tittle text-center mb-100">
                            <span>our image gellary</span>
                            <h2>some images from our barber shop</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery1.png);"></div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery4.png);"></div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery Area End -->
        <!-- Cut Details Start -->

        <!-- Cut Details End -->
        <!--? Blog Area Start -->

        <!-- Blog Area End -->
    </main>



    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
@endsection
