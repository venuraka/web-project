<?php

$conn = mysqli_connect("localhost","root","","login") ;

$q = "DELETE FROM login.cart";

$conn->query($q);


?>