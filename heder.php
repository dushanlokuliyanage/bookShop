<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        .initials {
            width: 40px;
            height: 40px;
            background-color: white;
            color: black;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 18px;
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .dropdown {
            display: none;
            position: absolute;
            top: 65px;
            right: 0;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            min-width: 120px;

        }

        .dropdown a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #000;
        }

        .dropdown a:hover {
            background-color: #e8dfdfd0;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar section-content">
            <a href="#" class="nav-logo" style="text-decoration: none;">
                <h2 class="logo-text">Books</h2>
            </a>

            <ul class="nav-menu">
                <li class=" btn btn-outline-dark"><a href="index.php" class="nav-link">Home</a></li>
                <li class=" btn btn-outline-dark"><a href="#" class="nav-link">About</a></li>
                <li class=" btn btn-outline-dark"><a href="#" class="nav-link">Menu</a></li>
                <li class=" btn btn-outline-dark"><a href="#" class="nav-link">Feedback</a></li>
                <li class=" btn btn-outline-dark"><a href="#" class="nav-link">Gallery</a></li>
                <li class=" btn btn-outline-dark"><a href="#" class="nav-link">Contact</a></li>

                <?php if (!isset($_SESSION['user'])) { ?>
                    <a href="register.php">
                        <button class="btn btn-outline-dark" style="width: 250px;">Register</button>
                    </a>
                    <a href="logIn.php">
                        <button class="btn btn-outline-dark" style="width: 100px;">Log In</button>
                    </a>

                <?php } else {
                    $first = $_SESSION['user']['firstName'];
                    $last  = $_SESSION['user']['lastName'];
                    $intials = strtoupper($first[0] . $last[0]);
                ?>
            </ul>
            <div class="initials" id="userInitials"><?php echo $intials; ?></div>
            <div class="dropdown" id="dropdownMenu">
                <a href="userProfile.php">Profile</a>
                <a href="logout.php">Logout</a>
                <form action="deleteAccount.php" method="POST" onsubmit="return confirm('Are you sure you want to delete your account?');">
                    <button type="submit" class="btn btn-outline-danger" name="delete">Delect Account</button>
                </form>
            </div>
        <?php } ?>
        </nav>
    </header>
    <script>
        const initials = document.getElementById("userInitials");
        const dropdown = document.getElementById("dropdownMenu");

        if (initials && dropdown) {
            initials.addEventListener("click", (e) => {
                e.stopPropagation();
                dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
            });

            document.addEventListener("click", (e) => {
                if (!e.target.closest(".dropdown") && !e.target.closest("#userInitials")) {
                    dropdown.style.display = "none";
                }
            });
        }
    </script>
</body>

</html>