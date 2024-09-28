<?php

include("conn.php");

if (isset($_POST["chk"])) {
    $cccc =  $_POST["cls"];
    $sssss =  $_POST["sem"];
    $rrrrr =  $_POST["rollno"];

    $myq =  "select * from result where cls = '$cccc' and semester = '$sssss' and rollno = '$rrrrr' ";
    $result_mila_re =  mysqli_query($conn, $myq);

    $num = mysqli_num_rows($result_mila_re);

    if ($num == 1) {
        $res =  mysqli_fetch_array($result_mila_re); 
     
        echo "<script>alert('Result Found  !')</script>";
    } else {
        echo "<script>alert('Result not Found  !')</script>";
        header("Refresh:0;url=index.html");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .Father {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .Son {
            width: 300px;
            padding: 30px;
           
        }
        th,td{
            font-size: 30px;
            padding: 5px 10px;
        }
        a{  
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            font-size: 20px;
            background-color: blue;
            color: white;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="Father">
        <div class="Son">
            <table border="2">

                <tr>
                    <th>Class</th>
                    <th>Semester</th>
                    <th>RollNo</th>
                    <th>Result</th>
                </tr>

                <tr>
                    <td>   <?php  echo $res[1]; ?>       </td>
                    <td>   <?php  echo $res[2]; ?>       </td>
                    <td>   <?php  echo $res[3]; ?>       </td>
                    <td>   <?php  echo $res[4]; ?>       </td>
                </tr>


            </table>
            <a href="index.html">Back to home</a>
        </div>
    </div>

</body>

</html>