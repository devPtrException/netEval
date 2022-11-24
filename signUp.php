<?php {


    $rlNo = $_POST['rlNo'];
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $rdbGender = $_POST['rdbGender'];
    $eMail = $_POST['eMail'];
    $phNo = $_POST['phNo'];
    $pW = $_POST['pW'];
    $pWcnf = $_POST['pWcnf'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {


        include '_dbconnect.php';


        // $sql = "Select * from userdata where eMail='$eMail'";
        $sql = "SELECT * FROM userdata WHERE eMail='$eMail'";

        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 0) {
            if ($pW != $pWcnf)
                echo '<script>alert("Passwords don\'t match.");</script>';
            else {
                $sql = "INSERT INTO `userdata` VALUES ('$rlNo', '$fName', '$lName', '$rdbGender', '$eMail', '$phNo', '$pW','');";
                $result = mysqli_query($conn, $sql);

                echo '<script>
                 alert("Welcome to netEval.\nYour account has been created successfully.\nPlease login to continue.");
                 window.location ="index.html";
                 </script>';
            }
        } else
            echo '<script>
             alert("eMail is already in use. To recover password, contact admin.");
             window.location ="signup.html";
             </script>';
    }
}
