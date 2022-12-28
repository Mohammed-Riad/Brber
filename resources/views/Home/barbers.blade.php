@extends('Master.master')

@section('title', 'barbers')

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
                                <h2>Barbers</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Blog Area Start-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12  ">
                        <div class="blog_left_sidebar">

                            <div class="col-lg-12">
                                <div class="blog_right_sidebar">
                                    <aside class="single_sidebar_widget search_widget">
                                        <form action="{{route('search')}}">
                                            <div class="form-group">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" name="search" placeholder='Search Keyword'
                                                        onfocus="this.placeholder = ''"
                                                        onblur="this.placeholder = 'Search Keyword'">
                                                    <div class="input-group-append">
                                                        <button class="btns" type="submit"><i
                                                                class="ti-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </aside>

                                </div>
                            </div>

            

                            <div class="team-area" style="margin-top:80px">
                                <div class="container">
                                    <!-- Section Tittle -->
                                    <div class="row justify-content-center">
                                        <div class="col-xl-8 col-lg-8 col-md-11 col-sm-11">
                                            <div class="section-tittle text-center mb-100 ">


                                            </div>
                                        </div>
                                    </div>
                                    <div class="row"  >
                                        
                                        <!-- single Tem -->
                                        @foreach ($Barber as $barber)
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-" >
                                            <div class="single-team mb-80 text-center " >
                                                <div class="team-img" >
                                                    <a href="/barber/{{ $barber->id }}">
                                                    <img src="images/Barbers/{{ $barber->image }}" alt="">
                                                </a>
                                                </div>
                                                <div class="team-caption" > 
                                                    <span style="color: #fff; text-transform: uppercase;font-weight: 900;">{{ $barber->shopeName }}</span>
                                                    <h3 style="color: #fff; text-transform: uppercase;font-weight: 900;">{{ $barber->name }}</h3>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach 




                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Blog Area End -->
    </main>

    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>


@endsection
