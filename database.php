<?php
$conn = new mysqli('sql210.byetcluster.com','epiz_25064859','40RyIHoJC22J');
if ($conn) {
    echo "connection successful";
}
else
{
    echo "No Connection";
}
mysqli_select_db($conn,'epiz_25064859_comment');
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$query = " insert into entry (name,email,message)
values ('$name','$email','$message') ";  
mysqli_query($conn,$query);
header('location:contact.php'); 
?>