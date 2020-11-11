
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
       <!-- start nav -->
       <?php include 'nav.html'; ?>
        <!-- end nav -->
        <div class="d-flex flex-column" id="content-wrapper">
            <form action="" method="POST">
            <div id="content">

                <div class="container-fluid">
                    
                    <div class="row mb-3">
                      
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                          
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="  m-0  font-weight-bold"style="font-size: 30px; color: #b83280;">New Patient</p>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="col">
                                                <!-- <form action="" method="POST" > -->
                                
                                                
                                                <div class="form-group" style="font-size:1.5rem;"><label
                                                            for="doc_no"><strong>Doctor Number</strong></label>
                                                               
                                                        
                                             <input class="form-control" 
                                             type="number" name="doc_no">
                                             
                                                    </div>
                                                <!-- </form> -->

                                                </div>
                                            
                                                <div class="col">
                    <div class="form-group" style="font-size:1.5rem;"><label for="doc_name">
                        <strong>Doctor Name</strong></label><input class="form-control" type="text"  name="doc_name">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-group" style="font-size:1.5rem;"><label
                                                for="address"><strong>Address</strong></label>
                                                <input class="form-control" type="text" 
                                                name="address"></div>
                                                <div class="form-row">
                                                    <div class="col">
                                                    <!-- <form action="" method="POST" > -->
                                                        <div class="form-group" style="font-size:1.5rem;"><label
                                                                for="username"><strong>Patient Name</strong></label>
                                                            <input class="form-control" type="text"
                                                               name="p_name">

                                                        </div>

                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group" style="font-size:1.5rem;"><label for="email"><strong>Date</strong></label>
                                                        <input class="form-control"
                                                                type="date"  name="date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group" style="font-size:1.5rem;"><label for="first_name"><strong>Sonography
                                                                    Amount</strong></label><input class="form-control" placeholder="0.0"
                                                                type="text" 
                                                                name="s_amnt"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group" style="font-size:1.5rem;"><label for="last_name"><strong>Doctor Commision
                                                                    </strong></label><input class="form-control" placeholder="0.0"
                                                                type="text" 
                                                                name="s_cmision"></div>
                                                    </div>
                                                </div>
                                               
                                               
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group" style="font-size:1.5rem;"><label
                                                            for="city"><strong>Pathology</strong></label><input
                                                            class="form-control" type="text" placeholder="0.0"
                                                           name="p_amnt"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group" style="font-size:1.5rem;"><label
                                                            for="country"><strong>Doctor Commission</strong></label><input
                                                            class="form-control" type="text" placeholder="0.0"
                                                           name="p_cmision"></div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group"><input type="reset" value="Reset"
                                                    class="btn btn-danger" name="b1" />
                                                <input type="submit" value="Add" class="btn btn-success float-right"
                                                    name="b2" />
                                            </div>
                                        
                                    
                                          
                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
              
                </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>

<?php
if(isset($_POST['b2'])){
require 'db_connect.php';
$doc_no=$_POST['doc_no'];
$doc_name=$_POST['doc_name'];
$address=$_POST['address'];
$p_name=$_POST['p_name'];
$date=$_POST['date'];
$s_amnt=$_POST['s_amnt'];
$s_cmision=$_POST['s_cmision'];
$p_amnt=$_POST['p_amnt'];
$p_cmision=$_POST['p_cmision'];
// echo $doc_no."<br>";
// echo $doc_name."<br>";
// echo $address."br";
// echo $p_name."<br>";
// echo $date."<br>";
// echo $s_amnt."<br>";
// echo $s_cmision."<br>";
// echo $p_amnt."<br>";
// echo $p_cmision."<br>";
}
?>