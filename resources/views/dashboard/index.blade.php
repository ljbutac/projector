<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Nav Item - Dashboard -->
     
            <li class="nav-item active">
            
                  
                    <a class="nav-link active" href="{{ route('dashboards.index')}}">Dashboard</a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
         
                <a class="nav-link active" href="{{ route('residents.index')}}">Resident Management</a>
            
            </li>

            <li class="nav-item ">
         
         <a class="nav-link active" href="{{ route('users.index')}}">User Management</a>
     
     </li>

         
            <!-- Divider -->
            <hr class="sidebar-divider">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                  
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow ">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user"></i>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->username}}</span>
                            
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                         <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Total Residents -->
                        <div class="col-xl-5 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-200 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <h6 class="m-b-20">Total Resident</h6>
                                            <h2 class="text-right"><i class="fa fa-user f-left"></i><span>{{$resident}}</span></h2>
                                            

                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--  -->
                        <div class="col-xl-5 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-200 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <h6 class="m-b-20">????</h6>
                                            <h2 class="text-right"><i class="fa fa-user f-left"></i><span>0000</span></h2>
                                            

                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        
    
</div>

            

        <!-- Content Row -->
        <div class="row">

                        <!-- Pie Chart -->
                
                         <?php
                         $con = mysqli_connect("localhost","root","roots","dbprojector");
                         ?>

                             <div class="card border-left-primary shadow h-100 py-2">

                         <head>
                             <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                             <script type="text/javascript">
                             google.charts.load('current', {'packages':['corechart']});
                             google.charts.setOnLoadCallback(drawChart);
             
                             function drawChart() {
             
                                 var data = google.visualization.arrayToDataTable([
                                 ['Address', 'Number'],
             
                                 <?php
             
                                 $sql="SELECT address, count(*) as number FROM residents GROUP BY address";
                                 $fire=mysqli_query($con,$sql);
                                         while($result = mysqli_fetch_assoc($fire))
                                         echo "['".$result["address"]."', ".$result["number"]."],";
                                 ?> 
                                 ]);
             
                                 var options = {
                                 title: 'TOTAL NO. PER BARANGAY'
                                 };
             
                                 var chart = new google.visualization.PieChart(document.getElementById('piechart'));
             
                                 chart.draw(data, options);
                             }
                             </script>
                         </head>
                         <body>
                             <div id="piechart" style="width: 900px; height: 400px; "></div>
                            </body>
                         <div>
            
       <!-- /.container-fluid -->



            </div>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->  

                            
        <!-- Card Body -->
        <div class="card-body">
            <div class="chart-area">
                <canvas id="myAreaChart"></canvas>
            </div>
        </div>
    </div>
</div>




    
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
