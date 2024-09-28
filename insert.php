
<?php
     include("conn.php");

     if(isset($_POST["chk"])){
        $cccc =  $_POST["cls"];   
        $sssss =  $_POST["sem"];   
        $rrrrr =  $_POST["result"];   
        $mmmm =  $_POST["marks"];
          
        
       $myq =  "insert into result(cls,semester,rollno,marking) values('$cccc','$sssss','$rrrrr','$mmmm')";
       mysqli_query($conn,$myq);

       echo "<script>alert('Data Inserted !')</script>";
       header("Refresh:0;url=admin.html");
       


     }
?>
