<?php 
// connecting to database
include('connect.php');
//getting input from registration.php file and encrypting it into the database using hashing algorith
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$nin=$_POST['nin'];
$dob=$_POST['dob'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$std=$_POST['std'];



$emailhash=password_hash($email,PASSWORD_DEFAULT);
//$mobile=password_hash($_POST['mobile'],PASSWORD_DEFAULT);
$ninhash=password_hash($nin,PASSWORD_DEFAULT);
//$dob=password_hash($_POST['dob'],PASSWORD_DEFAULT);
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];







// verification of data ken swartwout
if($nin !=''){
    //upload image to the upload folder
    move_uploaded_file($tmp_name,"uploads/$image");
    //insert query into database
    $sql = "insert into `userdata` (name,email,mobile,nin,dob,photo,std,
    status, votes) values ('$name','$emailhash','$mobile','$ninhash','$dob',
    '$image','$std',0,0) ";

    $result = mysqli_query($con,$sql);
        if($result){
            echo '<div class="alert alert-white" role="alert">
            <strong>Success</strong> Data Inserted Successfully
          </div>' ;
          echo "<script>window.open('registration.php', '_self')</script>";
          
        }else{
            die(mysqli_error($con));
        }
}

?>