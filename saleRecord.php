<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <meta charset="UTF-8">
    <meta name="google" content="notranslate">
    <meta http-equiv="Content-Language" content="en">

    <!-- Title Page-->
    <title>Sale Record</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

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
<?php   include_once'header_side_bar.php'; ?>

    <div class="page-wrapper">
        
        <div class="page-container">
        
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      
                      <h1>Sale Record</h1>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Sale Id</th>
                                                <th>Sale Amount</th>
                                                <th>Sale Date</th>
                                                <th>Farm Id</th>
                                                <th>Modify table</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                         
                                            
                                            include_once'connect.php';
                                            $query = "SELECT * FROM sale";
                                            $result = mysqli_query($connect,$query);
                                            
                                            if($result){
                                                while($rec = mysqli_fetch_array($result)){
                                                    echo" <tr>";
                                                    echo"<td>".$rec['saleId']."</td>";
                                                    echo"<td>".$rec['saleAmount']."</td>";
                                                    echo"<td>".$rec['saleDate']."</td>";
                                                    echo"<td>".$rec['farmId']."</td>";
                                                    ?>
                                                     <td>
                                                    <a href="saleDelete.php?saleId=<?php echo $rec['saleId']?>"> <button Class="btn btn-danger" type="submit">Delete</button></a>
                                                    <a href="saleUpdate.php?saleId=<?php echo $rec['saleId']?>"><button name ="update" Class="btn btn-success" type="submit"  data-toggle="modal" data-target="#mediumModal">Update</button></a>
                                                    <a href="saleInsert.php"><button Class="btn btn-success" type="submit" name="insert" >Insert</button></a>
                                                    </td>
                                                  <?php
                                                    echo"</tr>";
                                                   
                                                }
                                            
                                            
                                            }
                                              
                                          ?>
                                           
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        
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
