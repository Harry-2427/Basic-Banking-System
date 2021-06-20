<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bank_customers";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn)
    {
        ?>
        <!-- <script>
            alert("connection successful");
        </script> -->
         <!-- echo "Connection successful"; -->
    
    <?php
    }
    else
    {
        ?>
        <script>alert("connection failed");</script>
        echo "Connection Failed".mysqli_connect_error();
        <?php
    }
    ?>