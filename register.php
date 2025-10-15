<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Here</title>

    <!-- Link Style -->
    <link rel="stylesheet" href="bootstrap.css">


    <!-- Favriout Icon -->
    <link rel="icon" href="#" type="image/x-icon">


</head>

<body>


    <!-- Start Sign Up Box -->

    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="col-12 col-md-8 col-lg-4 bg-gradien p-5 shadow rounded ">

            <form action="registerProcess.php" method="POST">
                <div id="signUpBox">
                    <div class="row g-2">

                        <div class="col-12 mb-5">
                            <center> <samp class="title" style="font-size: x-large;">SignUp In Us</samp></center>
                        </div>

                        <div class="col-12 " id="errorDiv">
                            <div class="alert alert-danger" role="alert" id="errorMsg"></div>
                        </div>

                        <div class="col-6">
                            <lable class="form-label">First Name</lable>
                            <input type="text" class="form-control"  id="fname" name="fname" >
                        </div>

                        <div class="col-6">
                            <lable class="form-label">Last Name</lable>
                            <input type="text" class="form-control"  id="lname " name="lname">
                        </div>

                        <div class="col-12">
                            <lable class="form-label">Email</lable>
                            <input type="email" class="form-control"  name="gmail">
                        </div>

                        <div class="col-6">
                            <lable class="form-label">Password</lable>
                            <input type="password" class="form-control"  id="password" name="password">
                        </div>

                        <div class="col-6">
                            <lable class="form-label">Phone Number</lable>
                            <input type="text" class="form-control" id="pNumber" name="pNumber">
                        </div>

                        <div class="col-12">
                            <lable class="form-label">Address</lable>
                            <input type="text" class="form-control"  id="address" name="address">
                        </div>

                        <div class="col-6">
                            <lable class="form-label">Gender</lable>
                            <select name="gender" class="form-control" id="gender">

                                <option value="male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <div class="col-6">
                            <lable class="form-label">Nic</lable>
                            <input type="text" class="form-control"  id="nic" name="nic">
                        </div>

                        <div class="col-12 d-grid">
                            <button class="btn btn-outline-primary">Sign Up</button>
                        </div>

                        <div class="col-12 d-grid">
                            <button class="btn btn-outline-dark">Already have an account? Sign In </button>
                        </div>

                    </div>
                </div>

            </form>
        </div>
    </div>



    <!-- End Sign Up Box -->

</body>

</html>