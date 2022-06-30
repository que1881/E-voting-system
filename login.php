<!--open the  php tag -->
<?php 
/* start a session (used to identify current session)->This check if a session already started and if none is started then it starts one*/
/* import connect.php to connect to  the database inside i
 have already written the code to connect to the database */
session_start();

include('connect.php');
// Access the name given to the mobile number and nin attributes on index.php file and store it inside $mobile and $nin variables
//Access mobile number
$mobile=$_POST['mobile'];
//Access NIN 
$nin=$_POST['nin'];


//query to select all the data from the database table name(userdata) if data inputed exist in the database
//prepare an sql query that will return all rows from userdata
$sql="SELECT * FROM userdata WHERE mobile='$mobile' AND nin='$nin' "; 
// execute query which takes two parameters first is the connection variable and the last is the query variable
$result=mysqli_query($con,$sql);

// Checking the number of rows present in the database i.e if number of rows is greater than 0 that means it is present inside the database and only then user will be able to login
//if(mysqli_num_rows($result)>0){
    if(password_verify($nin,$result['nin'])){
    // if the condition is true select some user details of admin from the database table
    // NOTE: Age verification would be added later 
    $sql="SELECT name,photo,votes,nin FROM `userdata` WHERE std='admin' ";
    // executing query for the admin
    $resultadmin=mysqli_query($con,$sql);
    // Checking if the row exit in the database
    if(mysqli_num_rows($admingroup)>0){
        //fetching all the data where MYSQLI_ASSOC is going to generate an object
        /*NOTE:if user is able to logged in successfully the user will be redirected to dashboard.php and 
        inside dashboard.php user profile would be display, now to access whatever value i am having inside dashboard.php ,I am going
        to use session */
        /* What i done is i have fetched all the data from the database and 
        stored it inside variable here */
        $admins=mysqli_fetch_all($resultvoter,MYSQLI_ASSOC);  
        $_SESSION['admins'] = $admins;
    }
    // fetching data of single user based on requirements that can be accessed inside dashboard.php
    $data=mysqli_fetch_array($result);
    $_SESSION['id'] = $data['id'];
    $_SESSION['status'] = $data['status'];
    $_SESSION['data'] = $data;
    // redirecting user to dashboard.php
    echo '<script>
        window.location="dashboard.php";
    </script>';

}
//}
// If login details are not correct 
else{
    echo '<script>
        alert("Invalid Credentials");
        window.location="index.php";
    </script>';
}

//close php tag
?>
