<?php

include 'databases/comdbh1.php';




        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        
        
        $sql ="INSERT INTO meatballscomments (uid, date, message) VALUES ('$uid','$date', '$message')";
        mysqli_query($db1, $sql);
       


