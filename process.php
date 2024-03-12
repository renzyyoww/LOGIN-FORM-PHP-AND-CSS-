<?php

include "conn.php";
session_start();

//this program student

if(isset($_POST['add_student'])){
    
    $fn=$_POST["fn"];
    $md=$_POST["md"];
    $ln=$_POST["ln"];
    $age=$_POST["age"];
    $school=$_POST["school"];
    $status=$_POST["status"];
    $occupation=$_POST["occupation"];
    $address=$_POST["address"];
    $sex=$_POST["sex"];
    $birthday=$_POST["birthday"];


$insertusers=mysqli_query($conn, "INSERT INTO student VALUE ('0','$fn','$md','$ln','$age' , '$school' , '$status' , '$occupation' , '$address' , '$sex' , '$birthday' )");

if($insertusers==true){
    ?>
        <script>
            alert("Data was Succesful");
            window.location.href="records.php";
        </script>
    <?php
} else {
    ?>
        <script>
            alert("Error Registration\nTry again!");
            window.location.href="index.php";
        </script>
    <?php
 }

} 



?>
