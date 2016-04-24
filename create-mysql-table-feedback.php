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
$sql ="CREATE TABLE feedback(Feedback_ID INT(4) AUTO_INCREMENT PRIMARY KEY,NAME CHAR(30) NOT NULL,Registration_No INT(5) NOT NULL, Semester CHAR(8), Branch VARCHAR(40), Comments VARCHAR(150), A CHAR(4), B CHAR(4), C CHAR(4), D CHAR(4), E CHAR(4), F CHAR(4), G CHAR(4), H CHAR(4), I CHAR(4), J CHAR(4), K CHAR(4), L CHAR(4), M CHAR(4), N CHAR(4), O CHAR(4))";
if (mysqli_query($link, $sql)){
    echo "Table entry created successfully";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>