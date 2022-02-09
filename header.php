<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kennchan | Database connection</title>
    <link rel="stylesheet" href="header.php">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montagu+Slab:wght@200;400;700&family=Poppins:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="footer.php"> -->
</head>

<body>
    <header>
        <nav class="nav_header">
            <a href="#" class="header_logo"> Kennchan</a>
            <ul>
                <li> <a href="index.php">HOME</a></li>
                <li> <a href="#">ABOUT</a> </li>
                <li> <a href="#">PORTFOLIO</a> </li>
                <li> <a href="#">BLOG</a> </li>
                <li> <a href="#">CONTACTS</a> </li>

            </ul>
            <div class="header_login">

                <div class="form_control_logout">
                    <form action="" method="POST">
                        <button type="submit" name="logout_submit"> Logout </button>
                    </form>
                </div>'


                <form action="include/login.php" method="POST" class="form_control_login">
                    <input type="text" name="mailuid" placeholder="username/email">
                    <input type="password" name="pwd" placeholder="password">
                    <button type="submit" name="login_submit"> Login</button>
                </form>'


                <div class="icon">
                    <a href="sign_up.php" class="sign_up"> Sign up</a>
                    <a href="sign_up.php" class="sign_up"><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>









        </nav>
    </header>



</body>

</html>