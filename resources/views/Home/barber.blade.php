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
                        <div class="team-area">
                            <div class="container">
                                <div>
                                    <div class="single-team mb-80 text-center">
                                        <div class="team-img" style="">
                                            <img src="../images/Barbers/{{ $barber->image }}" alt="">
                                        </div>
                                        <div class="team-caption">
                                            <span>Master Barber</span>
                                            <h3><a href="#">{{ $barber->name }}</a></h3>
                                        </div>
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
                                        <p class="ml-4">{{ $barber->name }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h2 class="ml-4">Email : </h2>
                                    </div>
                                    <div class="col-sm-9 ">
                                        {{ $barber->email }}
                                    </div>
                                </div>
                                <hr class="#d9534f ">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h2 class="ml-4">Phone : </h2>
                                    </div>
                                    <div class="col-sm-9 ">
                                        {{ $barber->phone }}

                                    </div>
                                </div>
                                <hr>


                                <div class="row">
                                    <div class="col-sm-3">
                                        <h2 class="ml-4">City : </h2>
                                    </div>
                                    <div class="col-sm-9 ">
                                        {{ $barber->address }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        {{-- <a class="btn" style="float: right" target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a> --}}
                                        {{-- <form action=""> --}}

                                        @if (Auth::user() != null && Auth::user()->role == 'admin')
                                            <a href="">
                                                {{-- <button class="btn header-btn" type="submit" style="float: right">
                                                Edit 
                                            </button>&nbsp; --}}
                                            </a>
                                        @else
                                        {{-- <form action="/approvepost/{{Auth::user()->id}}" method="POST"> --}}

                                            <button class="btn header-btn" type="submit" style="float: right">
                                                Submit your review
                                            </button>&nbsp;
                                        @endif
                                    {{-- </form> --}}



                                        {{-- </form> --}}


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-12 d-none d-md-block  ">
                            <h3 class="custom-text-block d-flex justify-content-end"> <a href="/editProfile"><i
                                        class="bi bi-gear-fill "></i></a></h3>

                        </div>

                    </div>

                    <div class="col-12 " style="margin-top: 100px">

                        <div class="about-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle3 mb-35">
                                <span>About Our company</span>
                                <h2>{{ $barber->yearsofexperience }} Years Of Experience In Hair cut!</h2>
                            </div>
                            <p class="mb-30 pera-bottom">
                                {{ $barber->description }}

                            </p>
                            {{-- <p class="pera-top mb-50">Brook presents your services with flexible, convefnient and ent
                                anipurpose layouts. You can select your favorite.</p> --}}
                            <img src="assets/img/gallery/signature.png" alt="">
                        </div>

                    </div>

                    {{-- <hr class=" mt-5"> --}}

                    <div class="container  about-section section-padding text-center">



                        <div class="rt-container">
                            <div class="col-rt-12">
                                <div class="Scriptcontent">

                                    <form action="/Reviews" method="post">
                                        @csrf
                                        <span class="star-rating">
                                            <input type="radio" name="rating1" value="1"><i></i>
                                            <input type="radio" name="rating1" value="2"><i></i>
                                            <input type="radio" name="rating1" value="3"><i></i>
                                            <input type="radio" name="rating1" value="4"><i></i>
                                            <input type="radio" name="rating1" value="5"><i></i>
                                        </span>

                                        <input type="hidden" hidden name="barber_id" value="{{ $barber->id }}">

                                        <div class="clear"></div>
                                        <br>

                                        <div class="clear"></div>


                                        <textarea cols="75" name="commentText" rows="5" style="100%"></textarea><br>
                                        <br>
                                        <div class="clear"></div>
                                        <button class="btn header-btn" type="submit">
                                            Submit your review
                                        </button>&nbsp;
                                    </form>

                                    <!-- Review Card -->



                                    <div class="container " style="margin-top: 50px">
                                        <div class="review-list">
                                            <ul>
                                                @foreach ($reviews as $review)
                                                    <li>
                                                        <div class="d-flex">
                                                            <div class="left">
                                                                <span>

                                                                    <img src="../images/User/{{ $review->user->image }}"
                                                                        class="profile-pict-img img-fluid"
                                                                        style="width: 1000px;" alt="" />
                                                                </span>
                                                            </div>
                                                            <div class="right">
                                                                <h2>
                                                                    {{ $review->user->name }}
                                                                    <span class="gig-rating text-body-2">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 1792 1792" width="15"
                                                                            height="15">
                                                                            <path fill="currentColor"
                                                                                d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                                                            </path>
                                                                        </svg>
                                                                        {{ $review->ratings }}
                                                                    </span>
                                                                </h2>
                                                                <div class="country d-flex align-items-center">
                                                                    <div class="country-name font-accent">
                                                                        {{ $review->user->address }}</div>
                                                                </div>
                                                                <div class="review-description">
                                                                    <p>
                                                                        {{ $review->messages }}
                                                                    </p>
                                                                </div>
                                                                <span class="publish py-3 d-inline-block w-100">
                                                                    {{ $review->created_at }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
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


<style>
    .review-list ul li .left span {
        width: 64px;
        height: 50px;
        display: inline-block;
    }

    .review-list ul li .left {
        flex: none;
        max-width: none;
        margin: 0 10px 0 0;
    }

    .review-list ul li .left span img {
        border-radius: 50%;
    }

    .review-list ul li .right h2 {
        font-size: 26px;
        margin: 0;
        display: flex;
    }

    .review-list ul li .right h2 .gig-rating {
        display: flex;
        align-items: center;
        margin-left: 10px;
        color: #ffbf00;
    }

    .review-list ul li .right h2 .gig-rating svg {
        margin: 0 4px 0 0px;
    }

    .country .country-flag {
        width: 16px;
        height: 16px;
        vertical-align: text-bottom;
        margin: 0 7px 0 0px;
        border: 1px solid #fff;
        border-radius: 50px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    }

    .country .country-name {
        color: #95979d;
        font-size: 17px;
        font-weight: 600;
    }

    .review-list ul li {
        border-bottom: 1px solid #dadbdd;
        padding: 0 0 30px;
        margin: 0 0 30px;
    }

    .review-list ul li .right {
        flex: auto;
    }

    .review-list ul li .review-description {
        margin: 20px 0 0;
    }

    .review-list ul li .review-description p {
        font-size: 24px;
        margin: 0;
    }

    .review-list ul li .publish {
        font-size: 16px;
        color: #95979d;
    }

    .review-section h2 {
        font-size: 20px;
        color: #222325;
        font-weight: 700;
    }

    .review-section .stars-counters tr .stars-filter.fit-button {
        padding: 6px;
        border: none;
        color: #4a73e8;
        text-align: left;
    }

    .review-section .fit-progressbar-bar .fit-progressbar-background {
        position: relative;
        height: 8px;
        background: #efeff0;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        background-color: #ffffff;
        ;
        border-radius: 999px;
    }

    .review-section .stars-counters tr .star-progress-bar .progress-fill {
        background-color: #ffb33e;
    }

    .review-section .fit-progressbar-bar .progress-fill {
        background: #2cdd9b;
        background-color: rgb(29, 191, 115);
        height: 100%;
        position: absolute;
        left: 0;
        z-index: 1;
        border-radius: 999px;
    }

    .review-section .fit-progressbar-bar {
        display: flex;
        align-items: center;
    }

    .review-section .stars-counters td {
        white-space: nowrap;
    }

    .review-section .stars-counters tr .progress-bar-container {
        width: 100%;
        padding: 0 10px 0 6px;
        margin: auto;
    }

    .ranking h6 {
        font-weight: 600;
        padding-bottom: 16px;
    }

    .ranking li {
        display: flex;
        justify-content: space-between;
        color: #95979d;
        padding-bottom: 8px;
    }

    .review-section .stars-counters td.star-num {
        color: #4a73e8;
    }

    .ranking li>span {
        color: #62646a;
        white-space: nowrap;
        margin-left: 12px;
    }

    .review-section {
        border-bottom: 1px solid #dadbdd;
        padding-bottom: 24px;
        margin-bottom: 34px;
        padding-top: 64px;
    }

    .review-section select,
    .review-section .select2-container {
        width: 188px !important;
        border-radius: 3px;
    }

    ul,
    ul li {
        list-style: none;
        margin: 0px;
    }

    .helpful-thumbs,
    .helpful-thumb {
        display: flex;
        align-items: center;
        font-weight: 700;
    }





    .rt-container {
        margin: 0 auto;
        padding-left: 12px;
        padding-right: 12px;
    }

    .rt-row:before,
    .rt-row:after {
        display: table;
        line-height: 0;
        content: "";
    }

    .rt-row:after {
        clear: both;
    }

    [class^="col-rt-"] {
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -o-box-sizing: border-box;
        -ms-box-sizing: border-box;
        padding: 0 15px;
        min-height: 1px;
        position: relative;
    }


    @media (min-width: 768px) {
        .rt-container {
            width: 750px;
        }

        [class^="col-rt-"] {
            float: left;
            width: 49.9999999999%;
        }

        .col-rt-6,
        .col-rt-12 {
            width: 100%;
        }

    }

    @media (min-width: 1200px) {
        .rt-container {
            width: 1170px;
        }

        .col-rt-1 {
            width: 16.6%;
        }

        .col-rt-2 {
            width: 30.33%;
        }

        .col-rt-3 {
            width: 50%;
        }

        .col-rt-4 {
            width: 67.664%;
        }

        .col-rt-5 {
            width: 83.33%;
        }


    }

    @media only screen and (min-width:240px) and (max-width: 768px) {

        .ScriptTop h1,
        .ScriptTop ul {
            text-align: center;
        }

        .ScriptTop h1 {
            margin-top: 0;
            margin-bottom: 15px;
        }

        .ScriptTop ul {
            margin-top: 12px;
        }

        .ScriptHeader h1,
        .ScriptHeader h2,
        .scriptnav ul {
            text-align: center;
        }

        .scriptnav ul {
            margin-top: 12px;
        }

        #float-right {
            float: none;
        }

    }




    .feedback {
        width: 100%;
        max-width: 780px;
        background: #fff;
        margin: 0 auto;
        padding: 15px;
        box-shadow: 1px 1px 16px rgba(0, 0, 0, 0.3);
    }

    .survey-hr {
        margin: 10px 0;
        border: .5px solid #ddd;
    }

    .star-rating {
        margin: 25px 0 0px;
        font-size: 0;
        white-space: nowrap;
        display: inline-block;
        width: 175px;
        height: 35px;
        overflow: hidden;
        position: relative;
        background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
background-size: contain;
}
.star-rating i {
opacity: 0;
position: absolute;
left: 0;
top: 0;
height: 100%;
width: 20%;
z-index: 1;
background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
        background-size: contain;
    }

    .star-rating input {
        -moz-appearance: none;
        -webkit-appearance: none;
        opacity: 0;
        display: inline-block;
        width: 20%;
        height: 100%;
        margin: 0;
        padding: 0;
        z-index: 2;
        position: relative;
    }

    .star-rating input:hover+i,
    .star-rating input:checked+i {
        opacity: 1;
    }

    .star-rating i~i {
        width: 40%;
    }

    .star-rating i~i~i {
        width: 60%;
    }

    .star-rating i~i~i~i {
        width: 80%;
    }

    .star-rating i~i~i~i~i {
        width: 100%;
    }

    .choice {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        text-align: center;
        padding: 20px;
        display: block;
    }

    span.scale-rating {
        margin: 5px 0 15px;
        display: inline-block;

        width: 100%;

    }

    span.scale-rating>label {
        position: relative;
        -webkit-appearance: none;
        outline: 0 !important;
        border: 1px solid grey;
        height: 33px;
        margin: 0 5px 0 0;
        width: calc(10% - 7px);
        float: left;
        cursor: pointer;
    }

    span.scale-rating label {
        position: relative;
        -webkit-appearance: none;
        outline: 0 !important;
        height: 33px;

        margin: 0 5px 0 0;
        width: calc(10% - 7px);
        float: left;
        cursor: pointer;
    }

    span.scale-rating input[type=radio] {
        position: absolute;
        -webkit-appearance: none;
        opacity: 0;
        outline: 0 !important;
        /*border-right: 1px solid grey;*/
        height: 33px;

        margin: 0 5px 0 0;

        width: 100%;
        float: left;
        cursor: pointer;
        z-index: 3;
    }

    span.scale-rating label:hover {
        background: #fddf8d;
    }

    span.scale-rating input[type=radio]:last-child {
        border-right: 0;
    }

    span.scale-rating label input[type=radio]:checked~label {
        -webkit-appearance: none;

        margin: 0;
        background: #fddf8d;
    }

    span.scale-rating label:before {
        content: attr(value);
        top: 7px;
        width: 100%;
        position: absolute;
        left: 0;
        right: 0;
        text-align: center;
        vertical-align: middle;
        z-index: 2;
    }
</style>





<!-- Analytics -->
