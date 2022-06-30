<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-VOTING SYSTEM REGISTRATION</title>
    <!-- Bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet">
</head>
<!-- Start body part -->
<!-- Give the body background color as dark -->
<body class="bg-success">
    <h1 class="text-center text-info p-3">E-VOTING SYSTEM</h1>
     <!-- Creating a div(i.e creating a section and make the background skyblue) 
    and also adding a padding of 4 to both top and buttom  -->
    <div class="bg-white py-4">
        <h2 class="text-center">Register Users</h2>
        <!-- Creating container for the registration  section -->
        <div class="container text-center">
            <!-- registration form  i.e getting input from user and submit it to the web server  -->
            <form action="register.php" method="POST" enctype='multipart/form-data'>
            <div class="mb-3">
                    <input type="text" name="name" class="form-control w-70 m-auto"
                     placeholder="Enter Full Name"
                      required="required"
                     title="FULL NAME">
            </div>
            <div class="mb-3">
                    <input type="email" name="email" class="form-control w-70 m-auto"
                     placeholder="Enter Email"
                      required="required"
                     title="Email">
            </div>
            <div class="mb-3">
                    <input type="number" name="mobile" class="form-select w-70 m-auto"
                     placeholder="ENTER MOBILE NUMBER"
                      required="required"
                     title="Please Enter Mobile Number"
                      maxLength="11" minLength="11">
                </div>
            <div class="mb-3">
                    <input type="number" name="nin" class="form-control w-70 m-auto"
                     placeholder="National Identification Number"
                      required="required"
                     title="National Identification Number"
                      maxLength="11" minLength="11">
                </div>
                <div class="mb-3">
                    <input type="date" name="dob" class="form-select w-70 m-auto"
                      required="required"
                     title="DATE OF BIRTH">
                </div>
                <div class="mb-3">
                    <input type="file" name="photo" class="form-select w-70 m-auto"
                      required="required"
                     title="UPLOAD IMAGE">
                </div>
                <div class="mb-3">
                    <select name="std" class="form-control w-70 m-auto">
                        
                        <option value="voter">Voter</option>
                        
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <button type="submit" name="register" class="btn btn-dark my-4">Register</button>
            </form>
        </div>

    </div>
    
</body>
</html>