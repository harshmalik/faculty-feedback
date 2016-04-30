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
$user_check = $_SESSION['login_user'];
$tname = mysqli_real_escape_string($link, $_POST['teacher']);
$sql="DELETE FROM feedback where NAME='$user_check' AND Teacher_Name='$tname'";
 $result = mysqli_query($db,$sql);
	  if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
 $regno = mysqli_real_escape_string($link, $_POST['registration-no']);
$semester = mysqli_real_escape_string($link, $_POST['dropdown']);
$branch = mysqli_real_escape_string($link, $_POST['branch']);
$comments = mysqli_real_escape_string($link, $_POST['remarks']);
$department = mysqli_real_escape_string($link, $_POST['department']);

$a= mysqli_real_escape_string($link, $_POST['Punctuality']);
$b= mysqli_real_escape_string($link, $_POST['Regularity']);

$c= mysqli_real_escape_string($link, $_POST['syllabus']);

$d= mysqli_real_escape_string($link, $_POST['assignments']);
$e= mysqli_real_escape_string($link, $_POST['Focus']);
$f= mysqli_real_escape_string($link, $_POST['confidence']);
$g= mysqli_real_escape_string($link, $_POST['Communication']);
$h= mysqli_real_escape_string($link, $_POST['discussions']);
$i= mysqli_real_escape_string($link, $_POST['aids']);
$j= mysqli_real_escape_string($link, $_POST['structure']);
$k= mysqli_real_escape_string($link, $_POST['innovative']);
$l= mysqli_real_escape_string($link, $_POST['laboratory']);
$m= mysqli_real_escape_string($link, $_POST['Availability']);
$n= mysqli_real_escape_string($link, $_POST['demonstrations']);
$o= mysqli_real_escape_string($link, $_POST['experiment']);
$user_check = $_SESSION['login_user'];
 
// Escape user inputs for security



 $sql="SELECT * FROM feedback where NAME='$user_check' AND Teacher_Name='$tname'";
 $result = mysqli_query($db,$sql);
	  if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count >= 1) {
        
        echo '<script language="javascript">';
echo 'alert("Feedback already filled for the particular teacher!!")';
echo '</script>';
        header("location:session-student.php");

          exit();
        // header("location:session-student.php");
      }
	  else{
// attempt insert query execution
$sql = "INSERT INTO feedback (Teacher_Name,NAME,Registration_No,Semester, Branch,Department, Comments,A,B,C,D,E,F,G,H,I,J,K,L,M,N,O) VALUES ('$tname','$user_check','$regno','$semester','$branch','$department','$comments','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o')";
if (!$sql) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
if(mysqli_query($link, $sql)){
echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';


    //header("location:session-student.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 }
// close connection
mysqli_close($link);

?>