<html>
    <head>
        <title>
            Assignment I
        </title>
        <h1>
            Assignment I
        </h1>
    </head>
    <body>
        <ul>
            <li>
                <a href="add.php">
                    Enter Data
                </a>
            </li>
            <li>
                <a href="search.php">
                    Search
                </a>
            </li>
        </ul>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Assignment_I";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$create_qry = "CREATE TABLE IF NOT EXISTS BioData(
    Name CHAR(25) NOT NULL ,
    RollNumber CHAR(10) NOT NULL PRIMARY KEY ,
    DOB DATE NOT NULL ,
    MobileNumber CHAR(10) NOT NULL,
    EmailId CHAR(30) NOT NULL,
    SGPA_S1 FLOAT ,
    SGPA_S2 FLOAT ,
    SGPA_S3 FLOAT ,
    SGPA_S4 FLOAT ,
    SGPA_S5 FLOAT ,
    SGPA_S6 FLOAT ,
    SGPA_S7 FLOAT ,
    SGPA_S8 FLOAT ,
    CGPA FLOAT NOT NULL ,
    Hobbies VARCHAR(100) ,
    Hosteller CHAR(1) ,
    Reference VARCHAR(100)
) ;" ;

if ($conn->query($create_qry) === TRUE) {
  echo "";
} else {
  echo "Error: " . $create_qry . "<br>" . $conn->error;
}
$conn->close();
?>
    </body>

</html>