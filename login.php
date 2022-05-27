<?php 

require 'script.php';
require 'function.php';
if(isset($_SESSION["id"])){
	header("Location: dashboard.php");
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Development Area</title>
    <!-- ALL CSS FILES  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- header section start-->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light pt-3 pb-3">
                <img src="assets/media/img/logo.png" alt="">


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link head" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Patients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Admin</a>
                        </li>
                        <li class="nav-item logsign">
                            <a class="nav-link logsignn" href="index.php">login / Signup </a>
                        </li>


                    </ul>

                </div>


            </nav>
        </div>
    </header>
    <!-- header section end -->
    <!-- Login section start -->
    <section class="Login-user">
        <div class="container">
            <div class="login">
                <div class="row">
                    <div class="col-md-10 offset-1 ">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="assets/media/img/login-banner2.png" alt="">
                            </div>
                            <div class="col-md-6  logincard">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>User Login</h6>
                                        <form action="" method="post">
                                            <input type="hidden" id="action" value="login">
                                            <div class="form-group">

                                                <input id="email" class="form-control" type="text"
                                                    placeholder="Enter Email">
                                            </div>

                                            <div class="form-group">

                                                <input id="password" class="form-control" type="password"
                                                    placeholder="Password">
                                            </div>
                                            <div class="form-group form-group d-grid gap-2 btnn">
                                                <button type="button" class="btn" onclick="submitData();">Login</button>

                                            </div>
                                            <div class="login-or">
                                                <span class="or-line"></span>
                                                <span class="span-or">or</span>
                                            </div>
                                            <div class="d-flex justify-content-evenly">
                                                <div class="facebook text-center">
                                                    <a href="" class="btn"><i class="fa fa-facebook"
                                                            aria-hidden="true"></i>
                                                        Facebook</a>
                                                </div>
                                                <div class="google text-end">
                                                    <a href="" class="btn btn-danger"><i class="fa fa-google"
                                                            aria-hidden="true"></i>
                                                        Google</a>
                                                </div>
                                            </div>
                                            <div class="text-center mt-3 reg">
                                                Don't have an account?<a href="index.php"> Register</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- signup section end -->
    <!-- footer start -->
    <footer class="mt-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-3">
                    <img class="w-75" src="assets/media/img/footer-logo2.png" alt="">
                    <p class="text-light pt-2 pb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa,
                        nobis.ipsum dolor sit amet consectetur adipisicing elit. Culpa, nobis</p>
                    <div class="text-light social">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <i class="fa fa-linkedin" aria-hidden="true"></i>

                        <i class="fa fa-instagram" aria-hidden="true"></i>



                    </div>

                </div>
                <div class="col-md-3">
                    <h4 class="text-light pb-2">For Patients</h2>
                        <div class="text-light">
                            <p><i class="fa fa-forward" aria-hidden="true"></i>
                                Search for Doctors</p>
                            <p><i class="fa fa-forward" aria-hidden="true"></i>
                                Register</p>
                            <p><i class="fa fa-forward" aria-hidden="true"></i>
                                Login</p>
                            <p><i class="fa fa-forward" aria-hidden="true"></i>
                                Booking</p>
                            <p><i class="fa fa-forward" aria-hidden="true"></i>
                                Patient Dashboard</p>
                        </div>

                </div>
                <div class="col-md-3">
                    <h4 class="text-light pb-2">For Doctor</h2>
                        <div class="text-light">
                            <p><i class="fa fa-forward" aria-hidden="true"></i>
                                Appointments</p>
                            <p><i class="fa fa-forward" aria-hidden="true"></i>
                                Chat</p>
                            <p><i class="fa fa-forward" aria-hidden="true"></i>
                                Login</p>
                            <p><i class="fa fa-forward" aria-hidden="true"></i>
                                Booking</p>
                            <p><i class="fa fa-forward" aria-hidden="true"></i>
                                Doctor Dashboard</p>
                        </div>

                </div>
                <div class="col-md-3">
                    <h4 class="text-light pb-2">Contact Us</h2>
                        <div class="text-light">

                            <p><i class="fa fa-map-marker mr-5" aria-hidden="true"></i>

                                3556 Beech Street, San Francisco,
                                California, CA 94108</p>
                            <p><i class="fa fa-phone mr-5" aria-hidden="true"></i>

                                +1 315 369 5943</p>

                            <p><i class="fa fa-envelope-o mr-5" aria-hidden="true"></i>

                                doccure@example.com</p>
                        </div>
                </div>

            </div>
        </div>
    </footer>



    <!-- footer end -->








    <!-- JS FILES  -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>