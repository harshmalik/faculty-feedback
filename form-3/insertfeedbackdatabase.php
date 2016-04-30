
<?php
session_start();
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
$regno = mysqli_real_escape_string($link, $_POST['registration-no']);
$semester = mysqli_real_escape_string($link, $_POST['dropdown']);
$branch = mysqli_real_escape_string($link, $_POST['branch']);


$department = mysqli_real_escape_string($link, $_POST['dropdownlist']);
$comments = mysqli_real_escape_string($link, $_POST['remarks']);

$user_check = $_SESSION['login_user'];



 
 
// close connection
mysqli_close($link);


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
                        <form class="form-basic" method="post" action="updatedb.php">

            <div class="form-title-row">
                <h1>Teachers Feedback</h1>
            </div>

            

<div class="form-row">
                <label>
                    <span>Teacher Name</span>
                    <select name="teacher">
<?php 
$link = mysqli_connect("localhost", "root", "", "StudentAdmin");
$sql = mysqli_query($link,"SELECT name FROM $department");
while ($row = mysqli_fetch_array($sql)){
?>

<option value="<?php echo $row['name']?>"><?php echo $row['name']; ?></option>

<?php
}
?>
</select>

                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Registration No</span>
                    <input type="text" name="registration-no" value="<?php echo $regno?>"/>>
                </label>
            </div>
			<div class="form-row">
                <label>
                    <span>Department</span>
                    <input type="text" name="department" value="<?php echo $department?>"/>>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Semester</span>
                    <
						                    <input type="text" name="dropdown" value="<?php echo $semester?>"/>>

                    </select>
                </label>
            </div>
                <div class="form-row">
                <label>
                    <span>Branch</span>
                    <input type="text" name="branch" value="<?php echo $branch?>"/>>
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Additional Remarks(if any):</span>
                    <textarea name="remarks" value="<?php echo $comments?>"/>></textarea>
                </label>
            </div>
    
            <div class="form-row">
            <table border="2" style="width:100%">
            <tr>
<TH>Rating</TH>
<TH>(Below Avg.)1</TH>
<TH>(Avg.)2</TH>
<TH>(Good)3</TH>
<TH>(Very Good)4</TH>
<TH>(Excellent)5</TH>
</tr>
<TR>
<TD>A. TIME SENSE</TD>
</TR>
<TR>


<TD>1. Punctuality in the Class</TD>
<TD><input type="radio" size="10" name="punctuality" value="1"></TD>
<TD><input type="radio" name="punctuality" value="2"></TD>
<TD><input type="radio" name="punctuality" value="3"></TD>
<TD><input type="radio" name="punctuality" value= "4"></TD>
<TD><input type="radio" name="punctuality" value="5"></TD><TR>
<TD>2. Regularity in taking Classes</TD>
<TD><input type="radio" size="10" name="Regularity" value="1"></TD>
<TD><input type="radio" name="Regularity" value="2"></TD>
<TD><input type="radio" name="Regularity" value="3"></TD>
<TD><input type="radio" name="Regularity" value= "4"></TD>
<TD><input type="radio" name="Regularity" value="5"></TD><TR>
</TR>
</TR>
<TR>
<TD>4. Completes syllabus of the course in time </TD>
<TD><input type="radio" size="10" name="syllabus" value="1"></TD>
<TD><input type="radio" name="syllabus" value="2"></TD>
<TD><input type="radio" name="syllabus" value="3"></TD>
<TD><input type="radio" name="syllabus" value= "4"></TD>
<TD><input type="radio" name="syllabus" value="5"></TD><TR>
</TR>
</TR>
<TR>
<TD>5.Scheduled organization of assignments, class test, quizzes and seminars</TD>
<TD><input type="radio" size="10" name="assignments" value="1"></TD>
<TD><input type="radio" name="assignments" value="2"></TD>
<TD><input type="radio" name="assignments" value="3"></TD>
<TD><input type="radio" name="assignments" value= "4"></TD>
<TD><input type="radio" name="assignments" value="5"></TD><TR>
</TR>
</TR>
<TR>
<TH>B. SUBJECT COMMAND</TH>

</TR>
<TD>6. Focus on Syllabus</TD>
<TD><input type="radio" size="10" name="Focus" value="1"></TD>
<TD><input type="radio" name="Focus" value="2"></TD>
<TD><input type="radio" name="Focus" value="3"></TD>
<TD><input type="radio" name="Focus" value= "4"></TD>
<TD><input type="radio" name="Focus" value="5"></TD><TR>
</TR>
</TR>
<TR>
<TD>7. Self-confidence</TD>
<TD><input type="radio" size="10" name="confidence" value="1"></TD>
<TD><input type="radio" name="confidence" value="2"></TD>
<TD><input type="radio" name="confidence" value="3"></TD>
<TD><input type="radio" name="confidence" value= "4"></TD>
<TD><input type="radio" name="confidence" value="5"></TD><TR>
</TR>
</TR>
<TR>
<TD>8.Communication skills</TD>
<TD><input type="radio" size="10" name="Communication" value="1"></TD>
<TD><input type="radio" name="Communication" value="2"></TD>
<TD><input type="radio" name="Communication" value="3"></TD>
<TD><input type="radio" name="Communication" value= "4"></TD>
<TD><input type="radio" name="Communication" value="5"></TD><TR>
</TR>
</TR>
<TR>
<TD>9.Conducting the classroom discussions</TD>
<TD><input type="radio" size="10" name="discussions" value="1"></TD>
<TD><input type="radio" name="discussions" value="2"></TD>
<TD><input type="radio" name="discussions" value="3"></TD>
<TD><input type="radio" name="discussions" value= "4"></TD>
<TD><input type="radio" name="discussions" value="5"></TD><TR>
</TR>
</TR>
<TR>
<TR>
<TH>C.USE OF TEACHING METHODS/TEACHING AIDS</TH>

</TR>
<TD>10.Uses of teaching aids(OHP/Blackboard /PPT's)</TD>
<TD><input type="radio" size="10" name="aids" value="1"></TD>
<TD><input type="radio" name="aids" value="2"></TD>
<TD><input type="radio" name="aids" value="3"></TD>
<TD><input type="radio" name="aids" value= "4"></TD>
<TD><input type="radio" name="aids" value="5"></TD><TR>
</TR>
</TR>
<TR>
<TD>11.Blackboard/Whiteboard work interms of legibility, visibility and structure</TD>
<TD><input type="radio" size="10" name="structure" value="1"></TD>
<TD><input type="radio" name="structure" value="2"></TD>
<TD><input type="radio" name="structure" value="3"></TD>
<TD><input type="radio" name="structure" value= "4"></TD>
<TD><input type="radio" name="structure" value="5"></TD><TR>
</TR>
</TR>
<TR>
<TD>12.Uses of innovative teaching methods</TD>
<TD><input type="radio" size="10" name="innovative" value="1"></TD>
<TD><input type="radio" name="innovative" value="2"></TD>
<TD><input type="radio" name="innovative" value="3"></TD>
<TD><input type="radio" name="innovative" value= "4"></TD>
<TD><input type="radio" name="innovative" value="5"></TD><TR>
</TR>
</TR>
<TR>
<TH>D.LABORATORY INTERACTION(Only for Laboratory Courses)</TH>
</TR>
<TR>
<TD>13.Regular checking of laboratory log books/ note books</TD>
<TD><input type="radio" size="10" name="laboratory" value="1"></TD>
<TD><input type="radio" name="laboratory" value="2"></TD>
<TD><input type="radio" name="laboratory" value="3"></TD>
<TD><input type="radio" name="laboratory" value= "4"></TD>
<TD><input type="radio" name="laboratory" value="5"></TD><TR>
</TR>
</TR>
<TR>
<TD>14.Availability of teacher in the laboratory for whole duration of laboratory hours</TD>
<TD><input type="radio" size="10" name="Availability" value="1"></TD>
<TD><input type="radio" name="Availability" value="2"></TD>
<TD><input type="radio" name="Availability" value="3"></TD>
<TD><input type="radio" name="Availability" value= "4"></TD>
<TD><input type="radio" name="Availability" value="5"></TD><TR>
</TR>
</TR>
<TR>
<TD>15.Helping the students in conducting experiments through set of instructions or demonstrations</TD>
<TD><input type="radio" size="10" name="demonstrations" value="1"></TD>
<TD><input type="radio" name="demonstrations" value="2"></TD>
<TD><input type="radio" name="demonstrations" value="3"></TD>
<TD><input type="radio" name="demonstrations" value= "4"></TD>
<TD><input type="radio" name="demonstrations" value="5"></TD><TR>
</TR>
</TR>
<TR>
<TD>16.Helps students in exploring the area of study involved in the experiment</TD>
<TD><input type="radio" size="10" name="experiment" value="1"></TD>
<TD><input type="radio" name="experiment" value="2"></TD>
<TD><input type="radio" name="experiment" value="3"></TD>
<TD><input type="radio" name="experiment" value= "4"></TD>
<TD><input type="radio" name="experiment" value="5"></TD><TR>
</TR>
</TR>

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
