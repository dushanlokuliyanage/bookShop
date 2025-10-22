
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .intials {
            width: 40px;
            height: 40px;
            background-color: white;
            color: black;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 450px;
            margin-left: 250px;
            font-weight: bold;
            font-size: 18px;
            position: absolute;
            top: 15px;
            left: 1300px;
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <!-- Header / Navbar -->
    <header>
        <nav class="navbar section-content">
            <a href="#" class="nav-logo" style="text-decoration: none;">
                <h2 class="logo-text">Books</h2>
            </a>

            <ul class="nav-menu">

                <button id="btnClose" class="btn btn-close"></button>


                <li class=" btn btn-outline-dark ">
                    <a href="index.php" class="nav-link">Home</a>
                </li>

                <li class="btn btn-outline-dark ">
                    <a href="#" class="nav-link">About</a>
                </li>
                <li class=" btn btn-outline-dark ">
                    <a href="#" class="nav-link">Menu</a>
                </li>
                <li class="btn btn-outline-dark ">
                    <a href="#" class="nav-link">Feedback</a>
                </li>
                <li class=" btn btn-outline-dark">
                    <a href="#" class="nav-link">Gallery</a>
                </li>
                <li class=" btn btn-outline-dark ">
                    <a href="#" class="nav-link">Contact</a>
                </li>

                <?php if (!isset($_SESSION['user'])) {
                ?>
                    <a href="register.php">
                        <button class="btn btn-outline-dark" style="width: 250px;">Register</button>
                    </a>

                    <a href="logIn.php">
                        <button class="btn btn-outline-dark" style="width: 100px;">Log In</button>
                    </a>
            </ul>

            <button id="menuOpenBtn" class="btn btn-outline-light">=</button>

        </nav>



    <?php
                } else {
                    $first =  $_SESSION['user']['firstName'];
                    $last  =  $_SESSION['user']['lastName'];
                    $intials = strtoupper($first[0] . $last[0]);
    ?>
        <a href="userProfile.php" style="text-decoration: none;">
            <div class="intials"><?php echo $intials ?></div>
        </a>
    <?php
                }
    ?>


    </header>
    <!-- Heder Section -->
</body>

</html>