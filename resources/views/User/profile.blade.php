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
    <!-- Preloader Start -->

    <main>

      
        <div class="container" style="margin-top:200px;  margin-bottom: 100px;">
            <div class="main-body">

                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3 ">
                        <div class="card ">
                            <div class="card-body " style="height:455.5px;">
                                <div class="d-flex flex-column align-items-center text-center" style="margin-top: 30px">
                                  {{-- <img src="storage/images/{{(Auth::user()->image)}}" alt="" style="width:100px; "> --}}
                                    <img src="images/User/{{(Auth::user()->image)}}"
                                        class="img-fluid rounded-5 ms-lg-auto" style="object-fit:cover;height:300px">
                                    <div class="mt-5">
                                        <h1 style="font-size:30px ;">{{ Auth::user()->name }}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-sm-9 ">

                                        <p class="ml-4">{{ Auth::user()->name }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h2 class="ml-4">Email : </h2>
                                    </div>
                                    <div class="col-sm-9 ">
                                        {{ Auth::user()->email }}
                                    </div>
                                </div>
                                <hr class="#d9534f ">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h2 class="ml-4">Phone : </h2>
                                    </div>
                                    <div class="col-sm-9 ">
                                        {{ Auth::user()->phone }}
                                    </div>
                                </div>
                                <hr>


                                <div class="row">
                                    <div class="col-sm-3">
                                        <h2 class="ml-4">City : </h2>
                                    </div>
                                    <div class="col-sm-9 ">
                                        {{ Auth::user()->address }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <a class="btn " href="editProfile">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-12 d-none d-md-block  ">
                            <h3 class="custom-text-block d-flex justify-content-end"> <a href="/editProfile"><i
                                        class="bi bi-gear-fill "></i></a></h3>

                        </div>

                    </div>
                    <hr class=" mt-5">

                    <div class="container  about-section section-padding text-center">
                        <h2 class="custom-text " style="font-size:35px">Order History </h2>

                        <div class="text-center " style="margin-top:35px">
                            <table class="table  mt-4 mx-auto" style="width:85%;">
                                <thead class="table-light">
                                    <th>Project name</th>
                                    <th>Starting date</th>
                                    <th> Category</th>

                                </thead>
                                <tbody>


                                    <tr>
                                        <td class="text-muted"></td>
                                        <td class="text-muted"></td>
                                        <td class="text-muted"></td>
                                        <td class="text-muted">

                                        </td>
                                        <td class="text-muted"></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>


                    </div>

                </div>
                </section>




            </div>
        </div>

        </div>
        </div>





    </main>



    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
@endsection
