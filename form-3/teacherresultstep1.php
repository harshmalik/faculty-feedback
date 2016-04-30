<?php
session_start();
   include('config.php');

if(!isset($_SESSION['login_user'])){
      header("location:log.php");
   }

/*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/
$link = mysqli_connect("localhost", "root", "", "StudentAdmin");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$teacher= mysqli_real_escape_string($link, $_POST['teacher']);
$user_check = $_SESSION['login_user'];
$sql="SELECT sum((A+B+C+D+E+F+G+H+I+J+K+L+M+N+O)/15)/count(*) AS averages FROM feedback where Teacher_Name='$teacher'";
 $result = mysqli_query($db,$sql);
 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

 //print_r ($result);
	  if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
?>
 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Homepage - DTU Faculty Feedback System</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    Hello Admin!
                </li>
                <li class="sidebar-brand">
                    <a href="logout.php">
                        Logout
                    </a>
                </li>
                <li>Feedback
                <ul style="list-style-type:none">
                <li>
                    <a href="departmentadmin.php">Departments</a>
                </li>
                <li>
                    <a href="#">Teacher</a>
                </li>
                <li>
                    <a href="#">Delete</a>
                </ul></li>
                </li>
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    	<center>
                        	<h1>DTU Faculty Feedback System</h1>
                        	<header >
   								
   									<img src="DTU-logo.jpe" alt="logo" id="logo" title="Go to homepage"/>
   								</a>
   							</header
                    	</center>
                    	<br>
                    	<br>
                        <h1><?php echo $teacher ?></h1> 
                        <h2>Teacher average rating-<?php print_r( $row['averages'])?></h2>
                       
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>