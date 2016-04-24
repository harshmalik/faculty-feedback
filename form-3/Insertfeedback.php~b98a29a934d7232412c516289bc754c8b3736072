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

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/form-basic.css">

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
                    <a href="logout.php">
                        Logout
                    </a>
                </li>
                <li>Feedback
                <ul style="list-style-type:none">
                <li>
                    <a href="#">Insert</a>
                </li>
                <li>
                    <a href="#">Update</a>
                </li>
                <li>
                    <a href="#">Delete</a>
                </ul></li>
                </li>
                <li>
                    <a href="#">Contact</a>
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
                        	<h1>DTU Feedback System</h1>
                        	<header >
   								<a href="Student_home_page.html">
   									<img src="DTU-logo.jpe" alt="logo" id="logo"/>
   								</a>
   							</header
                    	</center>
                    	<br>
                    	<br>
                        <form class="form-basic" method="post" action="insertfeedbackdatabase.php">

            <div class="form-title-row">
                <h1>Teachers Feedback</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Full Name</span>
                    <input type="text" name="name">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Registration No</span>
                    <input type="text" name="registration-no">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Semester</span>
                    <select name="dropdown">
                        <option>I</option>
                        <option>II</option>
                        <option>III</option>
                        <option>IV</option>
                        <option>V</option>
                        <option>VI</option>
                        <option>VII</option>
                        <option>VIII</option>
                    </select>
                </label>
            </div>
                <div class="form-row">
                <label>
                    <span>Branch</span>
                    <input type="text" name="branch">
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Additional Remarks(if any):</span>
                    <textarea name="remarks"></textarea>
                </label>
            </div>
    
            



            <div class="form-row">
                <button type="submit">Submit Form</button>
            </div>

        </form>

                    <br>   
                    <center>  <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                   </center>
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
