<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'corona website';

$con = mysqli_connect($server,$username,$password,$db);


if($con){
    ?>
    <script>
    alert("Connection Successfull");
    </script>
    <?php
}else{
    ?>
    <script>
    alert("No Connection");
    </script>
    <?php
}

?>