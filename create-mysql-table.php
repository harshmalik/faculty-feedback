<?php
/*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/
$link = mysqli_connect("localhost", "root", "", "StudentAdmin");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create table query execution
$sql ="CREATE TABLE studentlogintest(STUDENT_ID INT(4) AUTO_INCREMENT PRIMARY KEY,REGISTRATION_NO CHAR(45) NOT NULL UNIQUE, STUDENT_NAME CHAR(30) NOT NULL, email_address VARCHAR(50), SEMESTER VARCHAR(4),BRANCH CHAR(30) NOT NULL,PASSWORD VARCHAR(15) NOT NULL)";
if (mysqli_query($link, $sql)){
    echo "Table entry created successfully";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>