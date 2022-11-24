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
    <title>netEval/fetcher</title>
    <link rel="stylesheet" href="evaluation.css">

</head>

<body>
    <form action="checker.php" method="post">

        <?php
        // for loop here
        if ($num > 0) {
            while ($rows = $result->fetch_assoc()) {
        ?>
                <div name="question">
                    <hr>
                    <p>
                    <h2>Question <?php echo $rows['slNo']; ?>: </h2>
                    <h4><?php echo $rows['q']; ?></h4>
                    <input type="radio" name="opt[<?php echo $rows['slNo'] ?>]" id="rdbA" value="1" /><?php echo $rows['optA']; ?><br>
                    <input type="radio" name="opt[<?php echo $rows['slNo'] ?>]" id="rdbB" value="2" /><?php echo $rows['optB']; ?><br>
                    <input type="radio" name="opt[<?php echo $rows['slNo'] ?>]" id="rdbC" value="3" /><?php echo $rows['optC']; ?><br>
                    <input type="radio" name="opt[<?php echo $rows['slNo'] ?>]" id="rdbD" value="4" /><?php echo $rows['optD']; ?><br>
                    </p>
                    <!-- <button onclick="<?php
                                            //if (isset($_POST['opt'])) {
                                            //    $uAns = $_POST['opt'];
                                            //    $fAns = $rows['ans'];
                                            //    if ($uAns == $fAns) {
                                            //        $sql_g = "SELECT * FROM userdata WHERE eMail='$eM'";
                                            //        $result_g = mysqli_query($conn, $sql_g);
                                            //        $num_g = mysqli_num_rows($result_g);
                                            //        $rows_g = $result_g->fetch_assoc();
                                            //        $uScore = $rows_g['score'] + 1;
                                            //        $sql_s = "UPDATE userdata SET score = '$uScore' WHERE eMail = '$eM'";
                                            //        $result_s = mysqli_query($conn, $sql_s);
                                            //        $sql = "SELECT * FROM userdata WHERE eMail='$eM'";
                                            //        $result = mysqli_query($conn, $sql);
                                            //        $rows = $result->fetch_assoc();
                                            //    }
                                            //    echo $eM . "<br>";
                                            //    echo $uAns . "<br>";
                                            //    echo $fAns . "<br>";
                                            //}
                                            ?>">Save</button><br><br><br><br> -->
            <?php
            }
        }
            ?>
            <br><br><br>
                </div>
                <hr>
                <input type="submit" name="submit" Value="Save & Exit" /> <br><br><br><br><br><br><br><br>
    </form>


</body>

</html>
