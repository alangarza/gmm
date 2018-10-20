
<?php 

$con = mysqli_connect('138.68.58.202', 'gmm', 'do1Want2now');

if(!$con) {

    echo 'No connection';
}

if (!mysqli_select_db($con,'gmmtest')) 
{
    echo 'database not selected';
}

$Genero= $_POST['genero'];
$Edad = $_POST['edad'];
$Estado = $_POST['estado'];


$sql = "INSERT INTO precotiza (Genero,Edad,Estado) VALUES ('$Genero', '$Edad', '$Estado')";

/**/
if (!mysqli_query($con,$sql))
{
     echo "Not Inserted";
 }
 else
 {
    echo"Inserted!";
 }
?>