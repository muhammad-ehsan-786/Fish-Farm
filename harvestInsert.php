<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Harvest Insert</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
    <?php

     
include_once'connect.php';

    if(isset($_POST['insert'])){
 
        //$farmId = (isset($_GET['farmId']) ? $_GET['farmId'] : '');
        $harvestId =$_GET['harvestId'];
        $totalFishHarvest =$_POST['totalFishHarvest'];

        $farmId = $_POST['farmId'];
        //$id= 1;
       
        $query = "INSERT INTO harvest( totalFishHarvest  , farmId ) VALUES($totalFishHarvest,$farmId) ";

        mysqli_query($connect,$query);
        
    header('location:harvestRecord.php'); 
       
            
       
       

    }


   


    ?>
<?php include_once'header_side_bar.php'; ?>

     

        <!-- PAGE CONTAINER-->
        <div class="page-container">
         
        
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                           
                        <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Insert Harvest</div>
                                    <div class="card-body card-block">
                                        <form action="" method="POST" class="">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    
                                                    <input type="text" id="totalFishHarvest" name="totalFishHarvest" placeholder="Total Fish Harvest" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                  
                                                    <input type="text" id="farmId" name="farmId" placeholder="farm Id" class="form-control">
                                                </div>
                                            </div>
                                           <!-- <div class="form-group">
                                                <div class="input-group">
                                                    
                                                    <input type="text" id="farmDepth" name="farmDepth" placeholder="Farm Depth" class="form-control">
                                                </div>
                                            </div> -->
                                            <div class="form-actions form-group">
                                                <button type="submit" name =" insert" class="btn btn-success btn-sm">Submit</button>
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
   

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
