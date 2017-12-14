<?php
session_start();
include 'databases/comdbh1.php';


  

        $sql = "SELECT * FROM meatballscomments ";
        $result = mysqli_query($db1,$sql);
       
        while($row =  mysqli_fetch_assoc($result)){
                echo "<div class='commentBox'><h3>";
                echo $row['uid']."</h3><br><p>";
                echo $row['date']."<br>";
                echo  nl2br($row['message']);
                if($_SESSION['u_uid'] == $row['uid']){
               
                echo "<input type='hidden' id='cid' value='".$row['cid']."'>";
                echo "<button class='btn' type='submit' id='deleteCom'>Delete</button>";
               
                } 
                echo" </p></div>"; 


}

    
?>
 <script>
                    $(document).ready(function(){
                        
                        $("#deleteCom").click(function(){
                                var cid = $("#cid").val();
                                $.ajax({   
                                url: "deleteComment.php",
                                type: "POST",
                                async: false,
                                data: {
                                    "cid": cid
                                }});
                            alert("Your comment has been deleted");
                            });
                        });
                   
                </script>

    
