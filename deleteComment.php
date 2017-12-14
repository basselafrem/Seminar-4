<?php
include 'databases/comdbh1.php';




 
        $cid = $_POST['cid'];
        
        $sql = "DELETE FROM meatballscomments WHERE cid='$cid'";
        $result = mysqli_query($db1,$sql);
     
    
