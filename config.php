<?php 

    $host = "localhost";
    $username="root";
    $passwd = "";
    $dbName ="pratice";

    $conn = mysqli_connect($host,$username,$passwd,$dbName);


    if($conn){
        echo "ok";



    }else{

        echo "oh no";
    }



?>