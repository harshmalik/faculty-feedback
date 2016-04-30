<?php
session_start();
   include('config.php');

if(!isset($_SESSION['login_user'])){
      header("location:log.php");
   }


// Check connection

$user_check = $_SESSION['login_user'];
$tname = mysqli_real_escape_string($db,$_POST['teacher']);
 echo '<script language="javascript">';
echo 'confirm("Press enter to confirm!!")';
echo '</script>';
$sql="SELECT * FROM feedback where NAME='$user_check' AND Teacher_Name='$tname'";
 $result = mysqli_query($db,$sql);
	  if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count <1) {
        
        echo '<script language="javascript">';
echo 'alert("Feedback Not filled for the particular teacher!!")';
echo '</script>';
        //header("location:session-student.php");

          exit();
        // header("location:session-student.php");
      }
	  else{
$sql="DELETE FROM feedback where NAME='$user_check' AND Teacher_Name='$tname'";
echo "DELETED SUCESSFULLY!";
 $result = mysqli_query($db,$sql);
	  if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}

      
	 
	  
mysqli_close($db);
}
?>