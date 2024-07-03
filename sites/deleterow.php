<?php

$img = $_POST["d"];

$conn = mysqli_connect("localhost","root","","login") ;
$q = "DELETE FROM login.cart WHERE `img` = '".$img."'";

$conn->query($q);



?>