<?php
if (isset($_POST['login_submi'])) {
    require 'dbh.inc.php';
    $userName = $_POST['$userName'];
    $password = $_POST['$password'];
    if (empty($userName) || empty($password)) {
        header("location:\xampp\htdocs\webpage\index.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM form  WHERE userName=? ; ";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {

            header("location:\xampp\htdocs\webpage\index.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $userName);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdcheck = password_verify($password, $row['password']);
                if ($pwdcheck == false) {
                    header("location:\xampp\htdocs\webpage\index.php?error=wrongpassword");
                    exit();
                } else if ($pwdcheck == true) {
                    session_start();
                    $_SESSION['sessionId'] = $row['id'];
                    $_SESSION['sessionName'] = $row['userName'];
                    header("location:\xampp\htdocs\webpage\index.php?login=success");
                    exit();
                } else {
                    header("location:\xampp\htdocs\webpage\index.php?error=wrongpassword");
                    exit();
                }
            } else {
                header("location:\xampp\htdocs\webpage\index.php?=nouser");
                exit();
            }
        }
    }
} else {
    header("location:\xampp\htdocs\webpage\index.php");
    exit();
}
