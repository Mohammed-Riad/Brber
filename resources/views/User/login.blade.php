@extends('Master.master')
@include('sweetalert::alert')
@section('section')
    @if (session()->has('email'))
        <div class="alert alert-danger text-center">
            {{ session()->get('email') }}
        </div>
    @endif
    @if (session()->has('status'))
        <div class="alert alert-success text-center">
            {{ session()->get('status') }}
        </div>
    @endif

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

        <section class="vh-100 bg-image" style=" margin-top:150px;margin-bottom:80px">
            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="card" style="border-radius: 15px;">
                                <div class="card-body p-5">
                                    <h1 class="text-uppercase text-center mb-5">Log In to Your Account</h1>

                                    <form action="users/authenticate" method="post" role="form">

                                        @csrf
                                        <div class="form-outline mb-5">
                                            <input type="email" id="input" class="form-control form-control-lg "
                                                name="email" />
                                            <label class="form-label">Your Email</label>
                                        </div>
                                        @error('email')
                                            <p class="text-danger small" style="margin-top: -1.5rem">{{ $message }}</p>
                                        @enderror

                                        <div class="form-outline mb-5">
                                            <input type="password" id="input" class="form-control form-control-lg"
                                                name="password" />
                                            <label class="form-label">Password</label>
                                        </div>

                                        @error('password')
                                            <p class="text-danger small" style="margin-top: -1.5rem">{{ $message }}</p>
                                        @enderror


                                        <div class="d-flex justify-content-center ">
                                            <button type="submit"
                                                class="btn btn-dengar btn-block btn-lg gradient-custom-4 colorBtn"
                                                style="border-radius:10px;">Login</button>
                                        </div>

                                        <p class="text-center text-muted mt-5 mb-0">Not a member? <a href="/register"
                                                class="fw-bold text-body"><u>Sign Up</u></a></p>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <style>
        .colorBtn:hover {
            color: white;
        }

        #input {
            height: 50px;
            border-radius: 10px;
            font-size: 20px;
            line-height: 1.5;
            touch-action: manipulation;
            font-family: inherit;

        }

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        .form-label {
            Margin-left: 3px
        }
    </style>
@endsection
