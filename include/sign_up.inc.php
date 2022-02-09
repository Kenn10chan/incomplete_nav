<?php
if (isset($_POST['signup-submit'])) {
    require '/xampp/htdocs/webpage/include/dbh.inc.php';
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $repeatPassword = $_POST['repeatPassword'];
    $userEmail = $_POST['userEmail'];
    $phoneNumber = $_POST['phoneNumber'];
    $postalCode = $_POST['postalCode'];

    //how to prompt an error message
    if (empty($firstName) || empty($lastName) || empty($userEmail) || empty($password) || empty($repeatPassword) || empty($userEmail) || empty($phoneNumber) || empty($postalCode)) {
        header("location:\xampp\htdocs\webpage\sign_up.php?error=emptyfields&userName=" . $userName . "&userEmail=" . $userEmail);
        exit();
    } elseif (!filter_var($userEmail, FILTER_VALIDATE_EMAIL) && !!preg_match("/^[a-zA-Z0-9]*$/", $userName)) {
        header("location:\xampp\htdocs\webpage/sign_up.php?error=invalidemailuserName=" . $userName);
    } elseif (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        header("location:\xampp\htdocs\webpage\sign_up.php?error=invalidemail&userName=" . $userName);
        exit();
    } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $userName)) {
        header("location:\xampp\htdocs\webpage/sign_up.php?error=invaliduserName&email=" . $userEmail);
        exit();
    } elseif ($password !== $repeatPassword) {
        header("location:\xampp\htdocs\webpage/sign_up.php?error=passwordcheck&username" . $userEmail . "&userEmail=" . $userEmail);
    } else {
        $sql = "SELECT userName FROM forms WHERE firstName='?' lastName='?'  userName='?'  ";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location:\xampp\htdocs\webpage/sign_up.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ssssssi", $firstName, $lastName,  $userName, $password, $userEmail, $phoneNumber, $postalCode);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("location:\xampp\htdocs\webpage/sign_up.php?error=usernametaken" . $userEmail);
                exit();
            } else {
                $sql = "INSERT INTO forms ( firstName, lastName,userName, password , userEmail, phoneNumber, postalCode)
                VALUES (?,?,?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location:\xampp\htdocs\webpage/sign_up.php?error=sqlerror");
                    exit();
                } else {
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sssssii", $firstName, $lastName, $userName, $hashedPwd, $userEmail, $phoneNumber, $postalCode);
                    mysqli_stmt_execute($stmt);
                    header("location:\xampp\htdocs\webpage/sign_up.php?signup=succes");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("location:\xampp\htdocs\webpage/sign_up.php");
    exit();
}
