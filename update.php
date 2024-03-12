<?php
include "conn.php";
$ref_id = $_GET['id'];

$getdata = mysqli_query($conn,"SELECT * FROM student WHERE id='$ref_id'");

while($d=mysqli_fetch_object($getdata)){
    $fname = $d -> fn;
    $md = $d -> md;
    $lname = $d -> ln;
    $age = $d -> age;
    $school = $d -> school;
    $status = $d -> status;
    $occupation = $d -> occupation;
    $adress = $d -> address;
    $sex = $d -> sex;
    $birthday = $d -> birthday;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
</head>

<body>

<form action="process.php" method="POST">

<div class="text">
        <label>First Name</label>
        <input type="text" name="fn"  placeholder= "Enter Here" required> </p>
    </div>
    <div class="text">
        <label>Middle Name</label>
        <input type="text" name="md" placeholder= "Enter  Here" required> </p> 
    </div>
    <div class="text">
        <label>Last Name</label>
        <input type="text" name="ln"  placeholder= "Enter  Here" required> </p> 
    </div>
    <div class="text">
        <label>Age</label>
        <input type="text" name="age"  placeholder= "Enter  Here" required> </p> 
    </div>
    <div class="text">
        <label>School</label>
        <input type="text" name="school"  placeholder= "Enter  Here" required> </p> 
    </div>
    <div class="text">
        <label>Status</label>
        <input type="text" name="status"  placeholder= "Enter  Here" required> </p> 
    <div class="text">
        <label>Occupation</label>
        <input type="text" name="occupation"  placeholder= "Enter  Here" required> </p> 
    <div class="text">
        <label>Address</label>
        <input type="text" name="address"  placeholder= "Enter  Here" required> </p> 
    </div>
    <div class="text">
        <label>Sex</label>
        <input type="text" name="sex"  placeholder= "Enter  Here" required> </p>
    </div>
    <div class="text">
        <label>Birthday</label>
        <input type="text" name="birthday"  placeholder= "Enter  Here" required> </p>
    </div>
    




    <div>
        <input type="submit" name="add_student" value="SUBMIT">
    </div>

    


    </div>

    </form>

</div>

</div>
</body>
</html>
