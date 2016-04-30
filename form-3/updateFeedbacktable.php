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
 
// Escape user inputs for security
$tname = mysqli_real_escape_string($link, $_POST['teacher']);
$user= $_SESSION['login_user'];
$sql="SELECT * FROM feedback WHERE Teacher_Name='$tname' AND NAME='$user'";
$result = mysqli_query($db,$sql);
	  if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);

            // print_r($row);

		
      if($count<1) {
         //session_register("myusername");
        echo '<script language="javascript">';
echo 'alert("Feedback not filled for the particular teacher!!")';
echo '</script>';
         
        header("location:session-student.php");
      }
	  else{
	 echo $row['Teacher_Name'];
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
                        <form class="form-basic" method="post" action="updateinsert.php">

            
                <h1>Teachers Feedback</h1>
            

            

<div class="form-row">
                <label>
                    <span>Teacher Name</span>
                 <input type="text" name="teacher" value="<?php print_r($row['Teacher_Name']);
 ?>"/>>

                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Registration No</span>
                    <input type="text" name="registration-no" value="<?php        print_r($row['Registration_No']);
 ?>"/>>
                </label>
            </div>
			<div class="form-row">
                <label>
                    <span>Department</span>
                    <input type="text" name="department" value="<?php print_r($row['Department'])?>"/>>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Semester</span>
                    <
						                    <input type="text" name="dropdown" value="<?php print_r($row['Semester'])?>"/>>

                    </select>
                </label>
            </div>
                <div class="form-row">
                <label>
                    <span>Branch</span>
                    <input type="text" name="branch" value="<?php print_r($row['Branch'])?>"/>>
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Additional Remarks(if any):</span>
                    <textarea name="remarks" value="<?php print_r($row['Comments'])?>"/>></textarea>
                </label>
            </div>
    
              
<h2>A. TIME SENSE</h2>

<div class="form-row">
                <label>
                    <span>1. Punctuality in the Class</span>
                    <input type="text" name="Punctuality" value="<?php print_r($row['A'])?>"/>>
                </label>
            </div>
<div class="form-row">
                <label>
                    <span>2. Regularity in taking Classes</span>
                    <input type="text" name="Regularity" value="<?php print_r($row['B'])?>"/>>
                </label>
            </div>
			

			<div class="form-row">
                <label>
                    <span>4. Completes syllabus of the course in time </span>
                    <input type="text" name="syllabus" value="<?php print_r($row['C'])?>"/>>
                </label>
            </div>

<div class="form-row">
                <label>
                    <span>5.Scheduled organization of assignments, class test, quizzes and seminars</span>
                    <input type="text" name="assignments" value="<?php print_r($row['D'])?>"/>>
                </label>
            </div>

<h2>B. SUBJECT COMMAND</h2>

</TR>
<div class="form-row">
                <label>
                    <span>6 .Focus on Syllabus</span>
                    <input type="text" name="Focus" value="<?php print_r($row['E'])?>"/>>
                </label>
            </div>

<div class="form-row">
                <label>
                    <span>Self-confidence</span>
                    <input type="text" name="confidence" value="<?php print_r($row['F'])?>"/>>
                </label>
            </div>

<div class="form-row">
                <label>
                    <span>8.Communication skills</span>
                    <input type="text" name="Communication" value="<?php print_r($row['G'])?>"/>>
                </label>
            </div>


<div class="form-row">
                <label>
                    <span>9.Conducting the classroom discussions</span>
                    <input type="text" name="discussions" value="<?php print_r($row['H'])?>"/>>
                </label>
            </div>

<h2>C.USE OF TEACHING METHODS/TEACHING AIDS</h2>

<div class="form-row">
                <label>
                    <span>10.Uses of teaching aids(OHP/Blackboard /PPT's)</span>
                    <input type="text" name="aids" value="<?php print_r($row['I'])?>"/>>
                </label>
            </div>

<div class="form-row">
                <label>
                    <span>11.Blackboard/Whiteboard work interms of legibility, visibility and structure
</span>
                    <input type="text" name="structure" value="<?php print_r($row['J'])?>"/>>
                </label>
            </div>

<div class="form-row">
                <label>
                    <span>12.Uses of innovative teaching methods
</span>
                    <input type="text" name="innovative" value="<?php print_r($row['K'])?>"/>>
                </label>
            </div>

<h2>D.LABORATORY INTERACTION(Only for Laboratory Courses)</h2>
<div class="form-row">
                <label>
                    <span>13.Regular checking of laboratory log books/ note books</span>
                    <input type="text" name="laboratory" value="<?php print_r($row['L'])?>"/>>
                </label>
            </div>


<div class="form-row">
                <label>
                    <span>14.Availability of teacher in the laboratory for whole duration of laboratory hours</span>
                    <input type="text" name="Availability" value="<?php print_r($row['M'])?>"/>>
                </label>
            </div>

<div class="form-row">
                <label>
                    <span>15.Helping the students in conducting experiments through set of instructions or demonstrations</span>
                    <input type="text" name="demonstrations" value="<?php print_r($row['N'])?>"/>>
                </label>
            </div>

<div class="form-row">
                <label>
                    <span>16.Helps students in exploring the area of study involved in the experiment
</span>
                    <input type="text" name="experiment" value="<?php print_r($row['O'])?>"/>>
                </label>
            </div>


            </table>



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