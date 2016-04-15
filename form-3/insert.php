
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
$regno = mysqli_real_escape_string($link, $_POST['form-reg-no']);
$name = mysqli_real_escape_string($link, $_POST['form-name']);
$email_address = mysqli_real_escape_string($link, $_POST['form-email']);
$semester = mysqli_real_escape_string($link, $_POST['form-sem']);
$branch = mysqli_real_escape_string($link, $_POST['form-branch']);
$password = mysqli_real_escape_string($link, $_POST['form-pass']);

echo "$branch";

 
// attempt insert query execution
$sql = "INSERT INTO studentlogintest (REGISTRATION_NO,STUDENT_NAME, email_address, SEMESTER, BRANCH,PASSWORD) VALUES ('$regno','$name', '$email_address','$semester','$branch','$password')";
if(mysqli_query($link, $sql)){
echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';
    header("location:log.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);


?>
