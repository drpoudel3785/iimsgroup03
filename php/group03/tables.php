<?php
include("connection.php");

$sql="
CREATE TABLE users(
    id int AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    role VARCHAR(50) DEFAULT 'user',
    status TINYINT(1) DEFAULT '0'
)
";

$qry=mysqli_query($conn, $sql) or die(mysqli_error($conn));
if($qry){
    echo "Table created Successfully";
}
else{
    echo "Sorry unable to create table";
}

?>