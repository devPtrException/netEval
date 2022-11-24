<!DOCTYPE html>
<html lang="en">

<head>
    <title>netEval/Score</title>
    <link rel="stylesheet" href="score.css">
</head>

<body>
    <center>
        <div class="container Score">
            <center>


                <?php

                include '_dbconnect.php';
                session_start();

                $uName = $_SESSION['username'];

                $sql = "SELECT * FROM userdata WHERE eMail='$uName'";
                $result = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($result);
                $rows = $result->fetch_assoc();
                $salutation = "Mr./Mrs. ";

                if ($rows['gender'] == "F")
                    $salutation = "Mrs. ";
                else if ($rows['gender'] == "M")
                    $salutation = "Mr. ";



                if ($rows['score'] > 3) {
                    echo "Congratulations " . $salutation . $rows['fName'] . " " . $rows['lName'] . ";<br><br> You have scored " . $rows['score'] . " points.<br>";
                    echo "<br>Keep it up.";
                } else {
                    echo "Hello " . $salutation . $rows['fName'] . " " . $rows['lName'] . ";<br><br> You have scored " . $rows['score'] . " points.<br>";
                    echo "<br>Better luck next time.";
                }


                ?>
            </center>

        </div>
    </center>



</body>

</html>
