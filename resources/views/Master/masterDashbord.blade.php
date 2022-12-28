<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../AssetsDashbord/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../AssetsDashbord/img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /></body>

    <title>
        Dashbord
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../AssetsDashbord/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../AssetsDashbord/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../AssetsDashbord/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../AssetsDashbord/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../AssetsDashbord/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../AssetsDashbord/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />

    <link rel="apple-touch-icon" sizes="76x76" href="../AssetsDashbord/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../AssetsDashbord/img/favicon.png">

    <link rel="apple-touch-icon" sizes="76x76" href="../AssetsDashbord/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../AssetsDashbord/img/favicon.png">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../AssetsDashbord/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../AssetsDashbord/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../AssetsDashbord/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="76x76" href="../AssetsDashbord/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../AssetsDashbord/img/favicon.png">
</head>

<body>
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="/">
                <img src="assets/img/logo/logo.png" alt="">
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white   {{str_contains(url()->current() , '/dashboard') ? 'bg-gradient-primary' : ''}}" href="/dashboard">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>

              
                <li class="nav-item">
                    <a class="nav-link text-white {{str_contains(url()->current() , '/usersdash') ? 'bg-gradient-primary' : ''}}" href="/usersdash">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center ">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <span class="nav-link-text ms-1">Users</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white {{str_contains(url()->current() , '/barberdash') ? 'bg-gradient-primary' : ''}}" href="/barberdash">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center ">
                            <i class="fa-solid fa-bars"></i>
                         </div>
                        <span class="nav-link-text ms-1">Barbers</span>
                    </a>
                </li>
                

                <li class="nav-item">
                    <a class="nav-link text-white {{str_contains(url()->current() , '/ContactDashbord') ? 'bg-gradient-primary' : ''}}" href="/ContactDashbord">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            {{-- <i class="material-icons opacity-10">person</i> --}}
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <span class="nav-link-text ms-1">Contact</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white {{str_contains(url()->current() , '/NewsletterDashbord') ? 'bg-gradient-primary' : ''}}" href="/NewsletterDashbord">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-newspaper"></i>
                        </div>
                        <span class="nav-link-text ms-1">Newsletter</span>
                    </a>
                </li>

                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages
                    </h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{str_contains(url()->current() , '/profiledash') ? 'bg-gradient-primary' : ''}}" href="/profiledash">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-address-card"></i>
                        </div>
                        <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>


            </ul>
        </div>
        <div class="sidenav-footer position-absolute w-100 bottom-0 ">
            <div class="mx-3">
                <a class="btn bg-gradient-primary mt-4 w-100"
                    type="button">Welcome {{Auth::user()->name}} </a>
            </div>
        </div>
    </aside>

    @yield('section')


</html>
