<?php

    include('connection.php');

    if (isset($_POST['usn']) && isset($_POST['sub'])) {
        $usn = $_POST['usn'];
        $sub = $_POST['sub'];
        $sql = "SELECT $sub from attendance where usn = '$usn'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) == 1){
            $studs = $result->fetch_assoc();
        }

        $val = $studs[$sub];
        $val++;
        $sql = "UPDATE attendance SET $sub=$val WHERE usn = '$usn'";
        if(mysqli_query($conn, $sql)){
            echo "updated";
        }
    }

?>