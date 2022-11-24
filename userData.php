<!DOCTYPE html>
<html lang="en">

<head>
    <title>netEval/UserData</title>
    <link rel="stylesheet" href="userData.css">
</head>

<body>

    <div>
        <?php

        session_start();
        include '_dbconnect.php';
        include 'index.php';

        $uName = $_SESSION['username'];

        $sql = "SELECT * FROM userdata WHERE eMail='$uName'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        $rows = $result->fetch_assoc();

        // $uName = "Username ----&rarr;" . $rows['fName'] . " " . $rows['lName'];
        // $uGender = "gender ------&rarr;" . $rows['gender'];
        // $uMail = "eMail -------&rarr;" . $rows['eMail'];
        // $uMob = "mobNo -------&rarr;" . $rows['mobNo'];
        // $uScore = "score -------&rarr;" . $rows['score'];

        //             echo " <pre> <br>|" . $uName . "]</pre>";
        //             echo " <pre> <br>|" . $uGender . "]</pre>";
        //             echo " <pre> <br>|" . $uMail . "]</pre>";
        //             echo " <pre> <br>|" . $uMob . "]</pre>";
        //             echo " <pre> <br>|" . $uScore . "]</pre>";

        // echo "<pre><br>Username => </pre>" . $rows['fName']. " " . $rows['lName'] ;
        // echo "<pre><br>gender   => </pre>" . $rows['gender'];
        // echo "<pre><br>eMail    => </pre>" . $rows['eMail'];
        // echo "<pre><br>mobNo    => </pre>" . $rows['mobNo'];
        // echo "<pre><br>score    => </pre>" . $rows['score'];
        ?>


        <div class="container c6">
            <h6 class="sub">Currently logged in as &#8759;</h6>
            <div class="container data1">
                <p>
                <h1> <?php echo $rows['fName'] . " " . $rows['lName'] ?></h1>
                </p>
            </div>
            <br>
            <div class="container data">
                <p>
                <h3>&rarr; <?php
                            if ($rows['gender'] == "M") echo "Male";
                            else if ($rows['gender'] == "F") echo "Female";
                            else if ($rows['gender'] == "N") echo "Non-Binary"; ?></h3>
                </p>
            </div>
            <br>
            <div class="container data">
                <p>
                <h3>&rarr; <?php echo $rows['eMail'] ?></h3>
                </p>
            </div>
            <br>
            <div class="container data">
                <p>
                <h3>&rarr; <?php echo $rows['mobNo'] ?></h3>
                </p>
            </div>
            <br>
            <div class="container data">
                <p>
                <h3>&rarr; <?php echo $rows['score'] ?></h3>
                </p>
            </div>
            <br>
        </div>

    </div>

    </div>

</body>

</html>

<?php
//
// session_start();
// include '_dbconnect.php';
// include 'index.php';
//
// $uName = $_SESSION['username'];
//
// $sql = "SELECT * FROM userdata WHERE eMail='$uName'";
// $result = mysqli_query($conn, $sql);
// $num = mysqli_num_rows($result);
// $rows = $result->fetch_assoc();
//
// $uName = "Username => [" . $rows['fName'] . " " . $rows['lName'];
// $uGender = "gender   => [" . $rows['gender'];
// $uMail = "eMail    => [" . $rows['eMail'];
// $uMob = "mobNo    => [" . $rows['mobNo'];
// $uScore = "score    => [" . $rows['score'];
//
// echo " <pre> <br>|" . $uName . "]</pre>";
// echo " <pre> <br>|" . $uGender . "]</pre>";
// echo " <pre> <br>|" . $uMail . "]</pre>";
// echo " <pre> <br>|" . $uMob . "]</pre>";
// // echo " <pre> <br>|" . $uScore . "]</pre>";


// echo "<pre><br>Username => </pre>" . $rows['fName']. " " . $rows['lName'] ;
// echo "<pre><br>gender   => </pre>" . $rows['gender'];
// echo "<pre><br>eMail    => </pre>" . $rows['eMail'];
// echo "<pre><br>mobNo    => </pre>" . $rows['mobNo'];
// echo "<pre><br>score    => </pre>" . $rows['score'];
?> -->
