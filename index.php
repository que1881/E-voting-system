<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-VOTING SYSTEM</title>

    <!-- Bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet">
</head>
<!-- Start body part -->
<!-- Give the body background color as dark -->
<body class="bg-success">
    <!-- Align the text to the center -->
    <h1 class="text-info text-center p-3">E-VOTING SYSTEM</h1>
    <!-- Creating a div(i.e creating a section and make the background skyblue) 
    and also adding a padding of 4 to both top and buttom  -->
    <div class="bg-white py-4">
        <!-- setting text to the center -->
        <h2 class="text-center">Login to Vote</h2>
        <!-- Creating container for the login section -->
        <div class="container text-center">
             <!-- login form  i.e getting input from user and submit it to the web server  -->
            <form action="login.php" method="POST">
                 <!--Mobile number div with margin-buttom of 3 -->
            <div class="mb-3">
                 <!--Input field for mobile number -->
                    <input type="number" name="mobile" class="form-select w-70 m-auto"
                     placeholder="PLEASE ENTER MOBILE NUMBER ON YOUR NATIONAL IDENTITY CARD"
                      required="required"
                     title="Please Enter Mobile Number on your National Identity Card"
                      maxLength="11" minLength="11">
                </div>
                 <!-- End mobile number div -->
                  <!--NIN div with margin-buttom of 3 -->
                <div class="mb-3">
                    <input type="password" name="nin" class="form-control w-70 m-auto"
                     placeholder="PLEASE ENTER YOUR NIN(NATIONAL IDENTIFICATION NUMBER) HERE"
                      required="required"
                     title="Please Enter National Identification Number"
                      maxLength="11" minLength="11">
                </div>
                <!-- End  div for nin -->
                 <!-- End mobile number div -->
                <!--<div class="mb-3">
                    <select name="std" class="form-control w-70 m-auto">
                        <option value="group"></option>
                        <option value="voter">Voter</option>

                    </select>
                </div>-->
                <!-- submit button which first  verify the details inserted and then redirect to login.php  -->
                <button type="submit" class="btn btn-dark my-4">Submit</button>
               
            </form>
             <!-- End login form -->
        </div>
         <!-- End  div -->

    </div>
    <!-- End  div -->

    
</body>
<!-- End  body part-->
</html>