<!-- <?php
ob_start();
?> -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Educational Dashboard</title>
    <link rel="shortcut icon" href="assets/images/dlogo.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body id="page-top">
 
    <div id="wrapper">
        <!-- <?php
        session_start();
        $name=$_SESSION["user_id"];
        // $pic=$_SESSION["pic"];
        // $ip="useruploads/".$_SESSION["pic"]; 
        require("dbconnect.php");
        $sql="select * from teacher_login where user_id='$name'";
        $rs=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($rs);
        $pic=$row["image"];
        // $ip="useruploads/".$pic; 
        $ip="assets/img/$pic";
        $email=$row["email"];
        $fname=$row["fname"];
        $lname=$row["lname"];
        $address=$row["address"];
        $city=$row["city"];
        $country=$row["country"];

    ?> -->
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-dark p-0" style="color: blueviolet!important;">
        <div class="container-fluid d-flex flex-column p-0">
        <span class="navbar-logo">
            <a href="profile.php">
                 <img src="assets/img/logo.png" alt="Mobirise" style="height: 8rem;">
            </a>
        </span>
            <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                <!-- <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div><br> -->
                
                <div class="sidebar-brand-text mx-3"><span>Sonography&nbsp;</span></div>
            </a>
            <hr class="sidebar-divider my-0">
            <ul class="nav navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item" role="presentation"><a class="nav-link text-bold" href="#"><i class="fas fa-plus fa-sm text-white-50"></i><span style="font-size: 1.2rem; font-weight: bolder;">Add Doctor</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#"><i class="fas fa-plus fa-sm text-white-50"></i><span style="font-size: 1.2rem; font-weight: bolder;">New Patient</span></a></li>
                <!-- <li class="nav-item" role="presentation"><a class="nav-link" href="#"><i class="fas fa-user"></i><span>Update Record</span></a></li> -->
                <li class="nav-item" role="presentation"><a class="nav-link" href="#"><i class="fas fa-search"></i><span style="font-size: 1.2rem; font-weight: bolder;">Search</span></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#"><i class="fas fa-trash"></i><span style="font-size: 1.2rem; font-weight: bolder;">Delete</span></a></li>
                
                <!-- <li class="nav-item" role="presentation"><a class="nav-link" href="../Teacher Module/developer.php"><i class="fas fa-table"></i><span>Developer</span></a></li> -->
            </ul>
            <!-- <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
        </div> -->
    </nav>
        <?php include "nav.php" ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
              
                <?php include "nav2.php" ?>

                <div class="container-fluid">
                    <!-- <h3 class="text-dark mb-4">Profile</h3> -->
                    <div class="row mb-3">
                        <!-- <div class="col-lg-12"> -->
                            <!-- <div class="card mb-3">
                            <form action="upload_pic.php" method="POST" enctype="multipart/form-data">
                                <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4"
                                        src="<?php echo $ip; ?>" width="160" height="160">
                                    <div class="mb-3">
                                        <label> <input type="file" name="f1" style="align-content: center;"/></label>
                                        <br/>
                                        <label><input type="submit" value="Upload" name="b6" class="btn btn-primary float-left"/></label>
                                    </div>
                                </div>

                            </form>
                        </div> -->
                            <!-- <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="text-primary font-weight-bold m-0">Subject Results&nbsp;</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Operating System<span
                                            class="float-right">0%</span></h4>
                                    <div class="progress progress-sm mb-3">
                                        <div class="progress-bar bg-danger" aria-valuenow="20" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 0%;"><span class="sr-only">0%</span>
                                        </div>
                                    </div>
                                    <h4 class="small font-weight-bold">Discrete Mathematics<span
                                            class="float-right">0%</span></h4>
                                    <div class="progress progress-sm mb-3">
                                        <div class="progress-bar bg-warning" aria-valuenow="40" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 0%;"><span class="sr-only">0%</span>
                                        </div>
                                    </div>
                                    <h4 class="small font-weight-bold"> Database<span class="float-right">60%</span>
                                    </h4>
                                    <div class="progress progress-sm mb-3">
                                        <div class="progress-bar bg-primary" aria-valuenow="60" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 0%;"><span class="sr-only">0%</span>
                                        </div>
                                    </div>
                                    <h4 class="small font-weight-bold">Overall Result<span
                                            class="float-right">0%</span></h4>
                                    <div class="progress progress-sm mb-3">
                                        <div class="progress-bar bg-info" aria-valuenow="80" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 0%;"><span class="sr-only">0%</span>
                                        </div>
                                    </div> -->
                                    <!-- <h4 class="small font-weight-bold">Account setup<span
                                            class="float-right">Complete!</span></h4>
                                    <div class="progress progress-sm mb-3">
                                        <div class="progress-bar bg-success" aria-valuenow="100" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 100%;"><span class="sr-only">100%</span>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <!-- <div class="row mb-3 d-none">
                                <div class="col">
                                    <div class="card text-white bg-primary shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5%
                                                since last month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card text-white bg-success shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5%
                                                since last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="  m-0  font-weight-bold"style="font-size: 30px; color: #b83280;">New Patient</p>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="col">
                                                <form action="" method="POST" >
                                                    <div class="form-group" style="font-size:1.5rem;"><label
                                                            for="username"><strong>Doctor ID</strong></label>
                                                        <input class="form-control" type="text"
                                                            value="<?php echo $name; ?>" name="username" readonly>

                                                    </div>

                                                </div>
                                                <div class="col">
                                                    <div class="form-group" style="font-size:1.5rem;"><label for="email"><strong>Doctor Name</strong></label><input class="form-control"
                                                            type="email" value="<?php echo $email; ?>" name="email">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-group" style="font-size:1.5rem;"><label
                                                for="address"><strong>Address</strong></label><input
                                                class="form-control" type="text" value="<?php echo $address; ?>"
                                                name="address"></div>
                                                <div class="form-row">
                                                    <div class="col">
                                                    <form action="" method="POST" >
                                                        <div class="form-group" style="font-size:1.5rem;"><label
                                                                for="username"><strong>Patient Name</strong></label>
                                                            <input class="form-control" type="text"
                                                                value="<?php echo $name; ?>" name="username" readonly>

                                                        </div>

                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group" style="font-size:1.5rem;"><label for="email"><strong>Date</strong></label><input class="form-control"
                                                                type="date" value="<?php echo $email; ?>" name="email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group" style="font-size:1.5rem;"><label for="first_name"><strong>Sonography
                                                                    Amount</strong></label><input class="form-control"
                                                                type="text" value="<?php echo $fname; ?>"
                                                                name="first_name"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group" style="font-size:1.5rem;"><label for="last_name"><strong>Doctor Commision
                                                                    </strong></label><input class="form-control"
                                                                type="text" value="<?php echo $lname; ?>"
                                                                name="last_name"></div>
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group">

                                                    <input type="submit" value="Save" class="btn btn-primary"
                                                        name="b1" />
                                                    <input type="reset" value="Reset" class="btn btn-danger float-right"
                                                        name="b3" />
                                                </div> -->
                                                <!-- ############### -->
                                                <!-- <?php
                                                    if(isset($_POST["b1"])){
                                                        $username=$_POST["username"];
                                                        $email=$_POST["email"];
                                                        $fname=$_POST["first_name"];
                                                        $lname=$_POST["last_name"];
                                                        $sql="UPDATE teacher_login SET email='$email',fname='$fname',lname='$lname' where user_id='$username'";
                                                        if(mysqli_query($conn,$sql)>0){
                                                            header("location:index.php");
                                                        }else{
                                                            echo mysqli_error($conn);
                                                        }
                                                        
                                                    }
                                                   
                                                ?> -->
                                                <!-- ############## -->

                                      
                                    <!-- <div class="card shadow"> -->
                                        <!-- <div class="card-header py-3">
                                            <p class="text-primary m-0 font-weight-bold">Contact Settings</p>
                                        </div> -->
                                        <!-- <div class="card-body"> -->

                                            <!-- <div class="form-group" style="font-size:1.5rem;"><label
                                                    for="address"><strong>Address</strong></label><input
                                                    class="form-control" type="text" value="<?php echo $address; ?>"
                                                    name="address"></div> -->
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group" style="font-size:1.5rem;"><label
                                                            for="city"><strong>Pythology</strong></label><input
                                                            class="form-control" type="text"
                                                            value="<?php echo $city; ?>" name="city"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group" style="font-size:1.5rem;"><label
                                                            for="country"><strong>Doctor Commission</strong></label><input
                                                            class="form-control" type="text"
                                                            value="<?php echo $country; ?>" name="country"></div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group"><input type="reset" value="Reset"
                                                    class="btn btn-danger" name="b2" />
                                                <input type="submit" value="Add" class="btn btn-success float-right"
                                                    name="b4" />
                                            </div>
                                           
                                            <!-- ############## -->
                                            <!-- <?php
                                                    if(isset($_POST["b2"])){
                                                        $username=$_POST["username"];
                                                        $address=$_POST["address"];
                                                        $city=$_POST["city"];
                                                        $country=$_POST["country"];
                                                        $query="UPDATE teacher_login SET address='$address',city='$city',country='$country' where user_id='$username'";
                                                        if(mysqli_query($conn,$query)>0){
                                                            header("location:index.php");
                                                        }else{
                                                            echo mysqli_error($conn);
                                                        }
                                                        
                                                    }
                                                ?> -->
                                            <!-- ############## -->
                                        <!-- </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                    <!-- <div class="card shadow mb-5">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Change Password</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <tr>
                                        <td>
                                            <div class="form-group"><label for="address"><strong>Old
                                                        Password</strong></label><input class="form-control" type="password"
                                                    value="" name="old_password"></div>
                                        </td>

                                        <td>
                                            <div class="form-group"><label for="address"><strong>New
                                                        Password</strong></label><input class="form-control" type="password"
                                                    value="" name="new_password"></div>
                                        </td>

                                        <td>
                                            <div class="form-group"><label for="address"><strong>Confirm New
                                                        Password</strong></label><input class="form-control" type="password"
                                                    value="" name="c_n_password"></div>
                                        </td>

                                        <td>
                                            <input type="submit" value="Update" name="b5" class="btn btn-success" />
                                        </td>
                                    </tr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <footer class="bg-white sticky-footer">

                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>© 2020 Copyright Educational Dashboard</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>