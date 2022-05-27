<?php
require 'function.php';
if(isset($_SESSION["id"])){
  $id = $_SESSION["id"];
  $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id = $id"));
}
else{
  header("Location: login.php");
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
                            <a class="nav-link head" href="#">User Dashboard</a>
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle user-name" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <?php  echo $user['name']; ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <li><a class="dropdown-item" href="dashboard.php">Dashboard</a></li>

                                <li><a class="dropdown-item" style="color:red!important" href="logout.php">Logout</a>
                                </li>

                            </ul>
                        </li>


                    </ul>

                </div>


            </nav>
        </div>
    </header>
    <!-- header section end -->
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-12 col-12">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                        <h2 class="breadcrumb-title">Dashboard</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content mt-3 mb-5">
        <div class="container">

            <div class="row">
                <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

                    <!-- Profile Sidebar -->
                    <div class="card">
                        <div class="profile-sidebar">
                            <div class="widget-profile pro-widget-content  text-center">
                                <div class="profile-info-widget">
                                    <a href="#" class="booking-doc-img">
                                        <img src="assets/media/img/avatar.jpg" class="mt-3" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3> <?php  echo $user['name']; ?></h3>


                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-widget">
                                <nav class="dashboard-menu d-flex align-items-start">
                                    <ul>
                                        <hr>
                                        <li class="active">
                                            <a href="dashboard.php">
                                                <i class="fa fa-columns" aria-hidden="true"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>
                                        <hr>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-bookmark"></i>
                                                <span>Favourites</span>
                                            </a>
                                        </li>
                                        <hr>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-comments"></i>
                                                <span>Message</span>

                                            </a>
                                        </li>
                                        <hr>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-cog"></i>
                                                <span>Profile Settings</span>
                                            </a>
                                        </li>
                                        <hr>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-lock"></i>
                                                <span>Change Password</span>
                                            </a>
                                        </li>
                                        <hr>
                                        <li>
                                            <a href="logout.php">
                                                <i class="fa fa-sign-out" aria-hidden="true"></i>

                                                <span>Logout</span>
                                            </a>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- /Profile Sidebar -->

                </div>

                <div class="col-md-7 col-lg-8 col-xl-9">

                    <div class="row">
                        <div class="col-md-6 offset-3">
                            <div class="card mt-5">
                                <div class="card-body">
                                    <div class="profile-pic text-center">
                                        <img src="assets/media/img/avatar.jpg" class="mt-3" alt="User Image">
                                    </div>
                                    <table class="table table-striped mt-3">
                                    <tr>
                                        <td>Name :</td>
                                        <td><?php  echo $user['name']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email :</td>
                                        <td><?php  echo $user['email']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Cell :</td>
                                        <td><?php  echo $user['cell']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Username :</td>
                                        <td><?php  echo $user['username']; ?></td>
                                    </tr>
                                    
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="assets/js/custom.js"></script>
</body>

</html>