<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RENZ</title>
    <style>
body{
    display: flex;
    height: 80vh;
    justify-content: center;
    align-items: center;
    padding: 10px 5px;
    background-image:url(img/cl.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    border-style:solid;
}
.center{
    max-width: 500px; 
    width: 50% ;
    padding: 25px 30px;
    border-radius: 10px;
    color: white;
    border: 1px solid rgb(172, 174, 173);
    box-shadow: 5px 10px 8px rgb(118, 119, 118);
    opacity: 0.8;
    background-color: white; 
    border-style:solid;
    left: 10px;
    right: 10px;
    }
    .form h1
.main .text{
    margin:15px;
}
.signup_link input{
    padding: 5px;
    padding-left: 40px; 
    padding-right: 40px; 
    border-radius: 15px; 
    border-style:solid;
}
    </style>
</head>
<body>
<div class="nav">

    <a href="index.php" style="color:black"> Add Students </a> &nbsp; | &nbsp;
    <a href="records.php" style="color:black"> View Records </a>
   

    <h1>Create Profile</h1>

<div class="main">

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
