<?php
session_start();

//Connnecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "bar";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "";
}


// Sql query to be executed
if($_SERVER['REQUEST_METHOD']=='POST'){
$name = $_POST['name'];
$whisky = $_POST['dc'];
$rum = $_POST['dk'];
$beer = $_POST['db'];

}

$sql="INSERT INTO `sample` (`name`,`whisky`,`rum`,`beer`) VALUES ('$name','$whisky','$rum','$beer')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo "";
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}
echo "Dear ".$name. " your  order sucessfully placed <br>";

echo"Vistt again.";
?>