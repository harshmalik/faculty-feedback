
<?php
/*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/
$link = mysqli_connect("localhost", "root", "", "StudentAdmin");


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
$name = mysqli_real_escape_string($link, $_POST['name']);
$regno = mysqli_real_escape_string($link, $_POST['registration-no']);
$semester = mysqli_real_escape_string($link, $_POST['dropdown']);
$branch = mysqli_real_escape_string($link, $_POST['branch']);
$comments = mysqli_real_escape_string($link, $_POST['remarks']);

 
// attempt insert query execution
$sql = "INSERT INTO feedback (NAME,Registration_No,Semester, Branch, Comments) VALUES ('$name', '$regno','$semester','$branch','$comments')";
if(mysqli_query($link, $sql)){
echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';


    //header("location:Insertfeedback2.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);


?>
/*
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
                    <span>Full Name</span>
                    <input type="text" name="name" value="<?php echo $name ?>"/>>
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
<TD>1<input type="radio" size="10" align="Center"name="punctuality" value="1"></TD>
<TD>2<input type="radio" name="punctuality" value="2"></TD>
<TD>3<input type="radio" name="punctuality" value="3"></TD>
<TD>4<input type="radio" name="punctuality" value= "4"></TD>
<TD>5<input type="radio" name="punctuality" value="5"></TD><TR>
<TD>2. Regularity in taking Classes</TD>
<TD>1<input type="radio" size="10" align="Center"name="1b"></TD>
<TD><input type="radio" name="2b"></TD>
<TD><input type="radio" name="3b"></TD>
<TD><input type="radio" name="4b"></TD>
<TD><input type="radio" name="5b"></TD>
</TR>
</TR>
<TR>
<TD>4. Completes syllabus of the course in time </TD>
<TD><input type="radio" size="10" align="Center"name="1c"></TD>
<TD><input type="radio" name="2c"></TD>
<TD><input type="radio" name="3c"></TD>
<TD><input type="radio" name="4c"></TD>
<TD><input type="radio" name="5c"></TD>
</TR>
</TR>
<TR>
<TD>5.Scheduled organization of assignments, class test, quizzes and seminars</TD>
<TD><input type="radio" size="10" align="Center"name="1d"></TD>
<TD><input type="radio" name="2d"></TD>
<TD><input type="radio" name="3d"></TD>
<TD><input type="radio" name="4d"></TD>
<TD><input type="radio" name="5d"></TD>
</TR>
</TR>
<TR>
<TH>B. SUBJECT COMMAND</TH>

</TR>
<TD>6. Focus on Syllabus</TD>
<TD><input type="radio" size="10" align="Center"name="1e"></TD>
<TD><input type="radio" name="2e"></TD>
<TD><input type="radio" name="3e"></TD>
<TD><input type="radio" name="4e"></TD>
<TD><input type="radio" name="5e"></TD>
</TR>
</TR>
<TR>
<TD>7. Self-confidence</TD>
<TD><input type="radio" size="10" align="Center"name="1f"></TD>
<TD><input type="radio" name="2f"></TD>
<TD><input type="radio" name="3f"></TD>
<TD><input type="radio" name="4f"></TD>
<TD><input type="radio" name="5f"></TD>
</TR>
</TR>
<TR>
<TD>8.Communication skills</TD>
<TD><input type="radio" size="10" align="Center"name="1g"></TD>
<TD><input type="radio" name="2g"></TD>
<TD><input type="radio" name="3g"></TD>
<TD><input type="radio" name="4g"></TD>
<TD><input type="radio" name="5g"></TD>
</TR>
</TR>
<TR>
<TD>9.Conducting the classroom discussions</TD>
<TD><input type="radio" size="10" align="Center"name="1h"></TD>
<TD><input type="radio" name="2h"></TD>
<TD><input type="radio" name="3h"></TD>
<TD><input type="radio" name="4h"></TD>
<TD><input type="radio" name="5h"></TD>
</TR>
</TR>
<TR>
<TR>
<TH>C.USE OF TEACHING METHODS/TEACHING AIDS</TH>

</TR>
<TD>10.Uses of teaching aids(OHP/Blackboard /PPT's)</TD>
<TD><input type="radio" size="10" align="Center"name="1i"></TD>
<TD><input type="radio" name="2i"></TD>
<TD><input type="radio" name="3i"></TD>
<TD><input type="radio" name="4i"></TD>
<TD><input type="radio" name="5i"></TD>
</TR>
</TR>
<TR>
<TD>11.Blackboard/Whiteboard work interms of legibility, visibility and structure</TD>
<TD><input type="radio" size="10" align="Center"name="1j"></TD>
<TD><input type="radio" name="2j"></TD>
<TD><input type="radio" name="3j"></TD>
<TD><input type="radio" name="4j"></TD>
<TD><input type="radio" name="5j"></TD>
</TR>
</TR>
<TR>
<TD>12.Uses of innovative teaching methods</TD>
<TD><input type="radio" size="10" align="Center"name="1k"></TD>
<TD><input type="radio" name="2k"></TD>
<TD><input type="radio" name="3k"></TD>
<TD><input type="radio" name="4k"></TD>
<TD><input type="radio" name="5k"></TD>
</TR>
</TR>
<TR>
<TH>D.LABORATORY INTERACTION(Only for Laboratory Courses)</TH>
</TR>
<TR>
<TD>13.Regular checking of laboratory log books/ note books</TD>
<TD><input type="radio" size="10" align="Center"name="1l"></TD>
<TD><input type="radio" name="2l"></TD>
<TD><input type="radio" name="3l"></TD>
<TD><input type="radio" name="4l"></TD>
<TD><input type="radio" name="5l"></TD>
</TR>
</TR>
<TR>
<TD>14.Availability of teacher in the laboratory for whole duration of laboratory hours</TD>
<TD><input type="radio" size="10" align="Center"name="1m"></TD>
<TD><input type="radio" name="2m"></TD>
<TD><input type="radio" name="3m"></TD>
<TD><input type="radio" name="4m"></TD>
<TD><input type="radio" name="5m"></TD>
</TR>
</TR>
<TR>
<TD>15.Helping the students in conducting experiments through set of instructions or demonstrations</TD>
<TD><input type="radio" size="10" align="Center"name="1n"></TD>
<TD><input type="radio" name="2n"></TD>
<TD><input type="radio" name="3n"></TD>
<TD><input type="radio" name="4n"></TD>
<TD><input type="radio" name="5n"></TD>
</TR>
</TR>
<TR>
<TD>16.Helps students in exploring the area of study involved in the experiment</TD>
<TD><input type="radio" size="10" align="Center"name="1o"></TD>
<TD><input type="radio" name="2o"></TD>
<TD><input type="radio" name="3o"></TD>
<TD><input type="radio" name="4o"></TD>
<TD><input type="radio" name="5o"></TD>
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
