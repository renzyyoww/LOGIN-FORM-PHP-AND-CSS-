<?php
include "conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records Page</title>
</head>
<style>
    body{
        color:black;
        background-image:url('img/back.webp');
        font-family:sans-serif;
        background-repeat:no-repeat;
        background-size:cover;
        border:1px solid black;
        margin-left:auto;
        margin:right;
        border-collapse:collapse;
        width:100%;
        text-align:center;
        height:130vh;
    }
    table{
        width:80%;
        background:white;
        align-item:center;
    }
    th{
        height:20%;
    }
    .nav .nam a{ 
        font size:20px;
        color:aqua;
        font family:'sans-serif';
        text-align:center;
        width:80px;
        height: 200px;
    }
    .nav h1{
        font size:40px;
        color:aqua;
        font family:georgia;
        text-align:center;
        width:10px;
        height: 20px;
    }
    .nav a{
        color:aqua;
    }
    .main table{
        width:90%;
        position:relative;
        left: 20%;
        top:10%;
    }

</style>

<body>


<div class="nav">

<a href="index.php"> Add Students </a> &nbsp;| &nbsp;
<a href="records.php"> View Records </a>


</div>

    <h1>List of Students</h1>
    <div class="main-table">
         <table border="5px solid">
        <tr>

        <th>Id</th>
        <th>Firstname</th>
        <th>Middlename</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>School</th>
        <th>Status</th>
        <th>Occupation</th>
        <th>Address</th>
        <th>Sex</th>
        <th>Birthday</th>
        <th>Action 1</th>
        <th>Action 2</th>
 

</tr>

<tr>

    <?php
    $getdata = mysqli_query($conn,"SELECT * FROM student");
    while($row = mysqli_fetch_array($getdata)){
    ?>

<tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['fn'];?></td>
    <td><?php echo $row['md'];?></td>
    <td><?php echo $row['ln'];?></td>
    <td><?php echo $row['age'];?></td>
    <td><?php echo $row['school'];?></td>
    <td><?php echo $row['status'];?></td>
    <td><?php echo $row['occupation'];?></td>
    <td><?php echo $row['address'];?></td>
    <td><?php echo $row['sex'];?></td>
    <td><?php echo $row['birthday'];?></td>


    <td> <a href="update.php?id=<?php echo $row['id'];?>"> Update </a> </td>
    <td> <a href="delete.php?id=<?php echo $row['id'];?>"> Delete </a> </td>

    </tr>

    <?php
    }
    ?>


</table>
</body>
</html>

