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
        <div class="col-12 col-md-8 col-lg-4">

            <div id="signUpBox">
                <div class="row g-2">

                    <div class="col-12 mb-5">
                        <center> <samp class="title" style="font-size: x-large;">SignUp In Us</samp></center>
                    </div>

                    <div class="col-12 d-none" id="errorDiv">
                        <div class="alert alert-danger" role="alert" id="errorMsg"></div>
                    </div>

                    <div class="col-6">
                        <lable class="form-label">First Name</lable>
                        <input type="text" class="form-control" placeholder="ex:- Dushan" id="fname">
                    </div>

                    <div class="col-6">
                        <lable class="form-label">Last Name</lable>
                        <input type="text" class="form-control" placeholder="ex:- Loku Liyanage" id="lname">
                    </div>

                    <div class="col-12">
                        <lable class="form-label">Email</lable>
                        <input type="email" class="form-control" placeholder="ex:- dushan@gmail.com" id="gmail">
                    </div>

                    <div class="col-6">
                        <lable class="form-label">Password</lable>
                        <input type="password" class="form-control" placeholder="ex:- 123#@%5h" id="password">
                    </div>

                    <div class="col-6">
                        <lable class="form-label">Phone Number</lable>
                        <input type="text" class="form-control" placeholder="ex:- 0759255256" id="pNumber">
                    </div>

                    <div class="col-12">
                        <lable class="form-label">Address</lable>
                        <input type="text" class="form-control" placeholder="ex:- 10/A Meegod, Homagama" id="address">
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
                        <input type="text" class="form-control" placeholder="ex:- 200607456266" id="nic">
                    </div>

                    <div class="col-12 d-grid">
                        <button class="btn btn-primary">Sign Up</button>
                    </div>

                    <div class="col-12 d-grid">
                        <button class="btn btn-dark">Already have an account? Sign In </button>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <!-- End Sign Up Box -->

</body>

</html>