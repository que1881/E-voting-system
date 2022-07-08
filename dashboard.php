<?php
//starting session
session_start();
// writing an exception to disallow user from viewing the dashboard without loggin in.
if(!isset($_SESSION['id'])){
    header('location:index.php');
}
// Fetching user's data from the userdata table inside the database
// changing the vote buttons to yellow  after vote is casted successfully 
// and updating status feild to 1 inside the database
// displaying yellow buttons when user is yet to vote...

$data=$_SESSION['data'];
if($_SESSION['status']==1){
    $status = '<button class="btn btn-info">Voted</button></br>';
}else{
    $status = '<button class=" btn btn-danger disabled">Not Voted</button></br>'; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-VOTING SYSTEM</title>
</head>
<body>
<div class="container my-5">
        <a href="index.php"><button class="btn btn-dark text-light px-3">Back</button></a>
        <a href="logout.php"><button class="btn btn-dark text-light px-3">Logout</button></a>
        <h1 class="my-3">E-Voting System</h1>
        <div class="row my-5">
            <div class="col-md-7 col-lg-7">
             
            
            </div>
            <div class="col-md-5 col-lg-5">
                 <!---selecting voters  profile from database table 
                selecting photo,name,nin and vote status-->
                 <img src="uploads/<?php echo $data['photo'] ; ?>" alt="Voter Image">
                 <br>
                 <br>
                 <strong class="h5">Name:</strong>
                 <?php echo $data['name']; ?><br><br>
                 <strong class="h5">NIN:</strong>
                 <?php echo $data['nin']; ?><br><br>
                 <strong class="h5">Status:</strong>
                 <?php echo $status; ?><br><br>
            </div>

        </div>


    </div>
</body>
</html>
    
