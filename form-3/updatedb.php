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
$a = mysqli_real_escape_string($link, $_POST['punctuality']);


 
// attempt insert query execution
$sql = "INSERT INTO feedback (NAME,Registration_No,Semester, Branch, Comments,A) VALUES ('$name', '$regno','$semester','$branch','$comments','$a')";
if (!$sql) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
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