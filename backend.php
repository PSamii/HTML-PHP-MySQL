<?php
include ("mysql.php");

$name =  $_REQUEST['name'];
$email = $_REQUEST['email'];
$number =  $_REQUEST['number'];
$password = $_REQUEST['password'];

$sql = "INSERT INTO singup  VALUES ('$name',
'$email','$number','$password')";


if(mysqli_query($mySQL, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";     
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($mySQL);
}
?>

<html>
<body>
</body>
</html>