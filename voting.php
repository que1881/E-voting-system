<?php
//starting a session
session_start();
// Include the  database file
include('connect.php');

//getting votes from user
//initializing the vote to be equal to zero
$votes=$_POST['aspirantvotes'];
$totalvotes=$votes+1;

//pass group id inside $gid
$gid=$_POST['groupid'];
$uid=$_SESSION['id'];

////query to update votes column in the userdata inside database
///query to update status column in the userdata inside database
$updatevotes = mysqli_query($con,"update `userdata` set votes='$totalvotes' where id='$gid' ");
$updatestatus = mysqli_query($con,"update `userdata` set status=1 
where id='$uid' ");

//checking the conditions
//query to select voter's name,photo,votes,id from the usertable
if($updatevotes and $updatestatus){
    $getgroups=mysqli_query($con,"select name,photo,votes,id from `userdata`
     where standard='aspirant'");
}
/*else{
    echo '<script>
        alert("Technical error !! Voter after sometime");
        window.location="dashboard.php";
    </script>'
}*/
 ?>