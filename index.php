<?php


$login = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    include '_dbconnect.php';

    $username = $_POST['uN'];
    $password = $_POST['pW'];

    // $sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "Select * from userdata where eMail='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            // if (password_verify($password, $row['pWd'])) {
            if ($password == $row['pWd']) {
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                if (!headers_sent()) {
                    header("location: home.html");
                } else {
                    echo "out";
                    $showError = "Invalid Credentials";
                }
            } else {
                $showError = "Invalid Credentials";
            }
        }
    } else {
        $showError = "Invalid Credentials";
    }





    if ($login) {
    }
    //     }
    //     if ($showError) {
    //         echo '<script>alert("Credentials invalid.");
    //              window.location ="index.html";
    //
    //         </script>';
    //     }
}
