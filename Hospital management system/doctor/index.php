<?php

session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
</head>

<body>
    <?php
    include('../include/header.php');

    ?>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-left:-30px">
                    <?php
                    include('../doctor/sidenav.php');

                    ?>
                </div>
                <div class="col-md-10">
                    <divv class="container-fluid">
                        <h5 class="text-center">Doctor's DashBoard</h5>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3 my-3 bg-info mx-2" style="height: 150px;">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="text-white my-4">My profile</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="http://localhost:8080/Hospital%20management%20system/doctor/profile.php"> <i class="fa fa-user-circle fa-3x my-4" style="color: white;"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 my-3 bg-warning mx-2" style="height: 150px;">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="text-white my-2" style="font-size: 30px;">0</h5>
                                                <h5 class="text-white  my-4">Total</h5>
                                                <h5 class="text-white  my-4">Patient</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="http://localhost:8080/Hospital%20management%20system/doctor/profile.php"> <i class="fas fa-procedures fa-3x my-4" style="color: white;"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 my-3 bg-success mx-2" style="height: 150px;">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="text-white my-2" style="font-size: 30px;">0</h5>
                                                <h5 class="text-white my-4">Total</h5>
                                                <h5 class="text-white my-4">Appointment</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="http://localhost:8080/Hospital%20management%20system/doctor/profile.php"> <i class=" fa-solid fa-calendar-days fa-3x my-4" style="color: white;"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </divv>
                </div>
            </div>
        </div>
    </div>
</body>

</html>