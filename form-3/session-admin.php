<?php
session_start();
   include('config.php');


if(!isset($_SESSION['login_user'])){
      header("location:log.php");
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
                    <a href="#">Departments</a>
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
<<<<<<< HEAD:form-3/session-admin.php
                        <p>This is a portal for taking feedback from students about their academics, faculties and any issues which may plague the lives of any of the students in the University.</p>
                        <br><br>
=======
                        <p>This feedback has been designed by Delhi University to seek a feedback from
                            the student to strengthen the quality of teaching-learning environment and to look for
                            opportunities to improve teacher’s performance in classroom engagement with students to
                            bring excellence in teaching and learning.</p>
                       
>>>>>>> b98a29a934d7232412c516289bc754c8b3736072:form-3/Student_home_page.html
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
