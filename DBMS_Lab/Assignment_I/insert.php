<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Assignment_I";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$roll = mysqli_real_escape_string($conn, $_REQUEST['roll']);
$phone = mysqli_real_escape_string($conn,$_REQUEST['phone']) ;
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$date = mysqli_real_escape_string($conn,$_REQUEST["dob"]) ;
$s1 = mysqli_real_escape_string($conn,$_REQUEST["s1"]) ;
$s2 = mysqli_real_escape_string($conn,$_REQUEST["s2"]) ;
$s3 = mysqli_real_escape_string($conn,$_REQUEST["s3"]) ;
$s4 = mysqli_real_escape_string($conn,$_REQUEST["s4"]) ;
$s5 = mysqli_real_escape_string($conn,$_REQUEST["s5"]) ;
$s6 = mysqli_real_escape_string($conn,$_REQUEST["s6"]) ;
$s7 = mysqli_real_escape_string($conn,$_REQUEST["s7"]) ;
$s8 = mysqli_real_escape_string($conn,$_REQUEST["s8"]) ;
$cgpa = mysqli_real_escape_string($conn,$_REQUEST["cgpa"]) ;
$hobbies = mysqli_real_escape_string($conn,$_REQUEST["hobbies"]) ;
$hosteller = mysqli_real_escape_string($conn,$_REQUEST["hosteller"]) ;
$references = mysqli_real_escape_string($conn,$_REQUEST["references"]) ;

if ($s1 == NULL)
    $s1 = 0 ;
if ($s2 == NULL)
    $s2 = 0 ;
if ($s3 == NULL)
    $s3 = 0 ;
if ($s4 == NULL)
    $s4 = 0 ;
if ($s5 == NULL)
    $s5 = 0 ;
if ($s6 == NULL)
    $s6 = 0 ;
if ($s7 == NULL)
    $s7 = 0 ;
if ($s8 == NULL)
    $s8 = 0 ;

echo "" . $name ;
echo "" . $roll ;
echo "" . $email ;
echo "" . $date ;

$sql = "INSERT INTO BioData VALUES (
    '{$name}',
    '{$roll}',
    '{$date}',
    '{$phone}',
    '{$email}',
    {$s1},
    {$s2},
    {$s3},
    {$s4},
    {$s5},
    {$s6},
    {$s7},
    {$s8},
    {$cgpa},
    '{$hobbies}',
    '{$hosteller}',
    '{$references}'
    ) ;";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>