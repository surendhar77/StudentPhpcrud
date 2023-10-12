<?php
$connection =mysqli_connect("localhost","root","");
$db= mysqli_select_db($connection,"php_crud");

if(isset($_POST['submit']))
{
    $name =$_POST['name'];
    $address  =$_POST['address'];
    $mobile =$_POST['mobile'];
 $sql="insert into students(name,address,mobile)values('$name','$address','$mobile')";
 if(mysqli_query($connection,$sql))
 {
    echo "<script>location.replace('index.php')</script>";
 }
 else
 {
    echo "something Error".$connection->error;
 }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Crud Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card" >
                   <div class="card-header">
                      <h1>Student Crud Application</h1>
                   </div>
                   <div class="card-body">
                    
                   <form action="add.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control"  placeholder="Enter Name"> 
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control"  placeholder="Enter Address"> 
                        </div>

                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="number" name ="mobile" class="form-control"  placeholder="Enter Mobile"> 
                        </div>
                        <br/>
                        <input type="submit" class="btn btn-primary" name="submit" value="Register">
                        </form>
                   </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>