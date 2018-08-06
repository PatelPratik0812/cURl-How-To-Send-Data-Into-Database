<?php
if(isset($_POST['firstname'],$_POST['lastname'])){
    $db= new mysqli("localhost","root","","pratik_demo");

    $fname= $db->real_escape_string($_POST['firstname']);
    $lname= $db->real_escape_string($_POST['lastname']);

    $query="INSERT INTO user SET firstname='$fname',lastname='$lname'";
   
    $db->query($query);
}


?>