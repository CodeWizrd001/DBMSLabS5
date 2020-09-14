<html>
    <head>
        <h1>Search</h1>
        <title>
            Search
        </title>
    </head>
<body>
    <div style="align:center;" >
        <form style="align:center;">
            <div>
                <label for="rollq"> Roll Number: </label>
                <input name="rollq" id="rollq">
            </div>
            <input type="submit" class="search">
        </form>
    </div>
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

$roll = $_REQUEST['rollq'] ;
echo "Searched For : " . $roll ;

$query = "SELECT * FROM BioData WHERE RollNumber='{$roll}';" ;
$res = $conn->query($query) ;

console.log($res) ;

if($res->num_rows === 1){
    $row = $res->fetch_assoc() ;
    echo "<br> Query Success" ;
    echo "<br> {$row['Name']}" ;
    echo "<br> {$row['RollNumber']}" ;
    echo "<br> {$row['DOB']}" ;
    echo "<br> {$row['MobileNumber']}" ;
    echo "<br> {$row['EmailId']}" ;
    echo "<br> {$row['SGPA_S1']}" ;
    echo "<br> {$row['SGPA_S2']}" ;
    echo "<br> {$row['SGPA_S3']}" ;
    echo "<br> {$row['SGPA_S4']}" ;
    echo "<br> {$row['SGPA_S5']}" ;
    echo "<br> {$row['SGPA_S6']}" ;
    echo "<br> {$row['SGPA_S7']}" ;
    echo "<br> {$row['SGPA_S8']}" ;
    echo "<br> {$row['CGPA']}" ;
    echo "<br> {$row['Hobbies']}" ;
    echo "<br> {$row['Hosteller']}" ;
    echo "<br> {$row['Reference']}" ;
}
else {
    echo "<br> Doesn't Exist" ;
}

?>
</body>
</html>