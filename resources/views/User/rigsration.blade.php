@extends('Master.master')
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

        <section class="vh-100 bg-image" style=" margin-top:150px;margin-bottom:80px">
            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-12 col-lg-8 col-xl-6">
                            <div class="card" style="border-radius: 15px;">
                                <div class="card-body p-5">
                                    <h1 class="text-uppercase text-center mb-5"> Register Today and Join Our Family</h1>

                                    <form action="/users/store" method="post" role="form" >
                                        @csrf
                                        <div class=" mb-5" data-text="Select your file!">



                                            {{-- 
                                            <label for="custom-file-upload" class="filupp">
                                                <span id="inputGroupFileAddon01" class="filupp-file-name js-value">Browse
                                                    Files</span>
                                                <input type="file" name="image" value="1"
                                                    id="custom-file-upload" accept="image/*"
                                                    aria-describedby="inputGroupFileAddon01" />
                                            </label> --}}




                                        </div>
                                        <div class="form-outline mb-5">
                                            <input type="text" id="input" class="form-control form-control-lg"
                                                name="name" />
                                            <label class="form-label">Your Name</label>
                                        </div>


                                        @error('name')
                                            <p class="text-danger text-left  small" style="margin-top: -1.5rem">
                                                {{ $message }}</p>
                                        @enderror

                                        <div class="form-outline mb-5">
                                            <input type="email" id="input" class="form-control form-control-lg "
                                                name="email" />
                                            <label class="form-label">Your Email</label>
                                        </div>

                                        @error('email')
                                            <p class="text-danger text-left  small" style="margin-top: -1.5rem">
                                                {{ $message }}</p>
                                        @enderror

                                        <div class="form-outline mb-5">
                                            <input type="text" id="input" class="form-control form-control-lg"
                                                name="address" />
                                            <label class="form-label">Address</label>
                                        </div>

                                        @error('address')
                                            <p class="text-danger text-left  small" style="margin-top: -1.5rem">
                                                {{ $message }}</p>
                                        @enderror
                                        <div class="form-outline mb-5">
                                            <input type="text" id="input" class="form-control form-control-lg"
                                                name="phone" />
                                            <label class="form-label">Phone</label>
                                        </div>
                                        @error('phone')
                                            <p class="text-danger text-left  small" style="margin-top: -1.5rem">
                                                {{ $message }}</p>
                                        @enderror


                                        <div class="form-outline mb-5">
                                            <input type="password" id="input" class="form-control form-control-lg"
                                                name="password" />
                                            <label class="form-label">Password</label>
                                        </div>

                                        @error('password')
                                            <p class="text-danger text-left small" style="margin-top: -1.5rem">
                                                {{ $message }}</p>
                                        @enderror




                                        <div class="d-flex justify-content-center ">
                                            <button type="submit"
                                                class="btn btn-dengar btn-block btn-lg gradient-custom-4 colorBtn"
                                                style="border-radius:10px;">Register</button>
                                        </div>

                                        <p class="text-center text-muted mt-5 mb-0">Already a member? <a href="/login"
                                                class="fw-bold text-body"><u>Log In</u></a></p>

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

        @import url(https://fonts.googleapis.com/css?family=Varela+Round);

        html {
            box-sizing: border-box;

        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }


        h2 {
            font-weight: 400;
        }

        .filupp>input[type="file"] {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0;
        }

        .filupp {
            position: relative;
            background: #242424;
            display: block;
            padding: 1em;
            font-size: 1em;
            width: 100%;
            height: 3.5em;
            color: #fff;
            cursor: pointer;
            box-shadow: 0 1px 3px #0a0a0a;
        }

        .filupp:before {
            content: "";
            position: absolute;
            top: 1.5em;
            right: .75em;
            width: 2em;
            height: 1.25em;
            border: 3px solid #dd4040;
            border-top: 0;
            text-align: center;
        }

        .filupp:after {
            content: "\279c";
            position: absolute;
            top: .65em;
            right: .45em;
            font-size: 2em;
            color: #dd4040;
            line-height: 0;
        }

        .filupp-file-name {
            width: 75%;
        }
    </style>
    <script>
        let value = document.getElementById("custom-file-upload").value;
        console.log(value)
    </script>
@endsection
