<?php {

    session_start();
    include "_dbconnect.php";
    $eM = $_SESSION['username'];

    $sql = "SELECT * FROM qna";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
</head>

<body>




    <?php {

        if (isset($_POST['submit'])) {
            // echo "in the loop <br>";
            if (!empty(($_POST['opt']))) {
                $counts = count($_POST['opt']);
                echo $counts . "/" . $num . "<br>";
                $ansArray = $_POST['opt'];

                $sqlA = "SELECT * FROM qna";
                $resultA = mysqli_query($conn, $sqlA);
                // var_dump($resultA['ans']);
                // $temp = $resultA->fetch_assoc();
                // var_dump($temp['ans']);
                echo "<br>";
                echo "<br>";

                $scoreTotal = 0;
                $i = 1; // iterator for answer array; needs to be incremented
                while ($rowsA = $resultA->fetch_assoc()) {

                    $flag = $rowsA['ans'] == $ansArray[$i];
                    if ($flag) {
                        echo "Answer " . $i . " is correct.<br><br>";
                        ++$scoreTotal;
                    } else {
                        echo "Answer " . $i . " is incorrect.<br><br>";
                    }
                    ++$i;
                }
                echo "Total score = " . $scoreTotal . " / " . $num;
            }
        }
    }
    ?>
    <br><br><br><br>
    <button name="return_from_score"> <a href="home.html">Return</a></button>





</body>

</html>
