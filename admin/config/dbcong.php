<?php 
            $host = "localhost";
            $username="root";
            $password="root";
            $database="fancyfasion";
            //creating data base connection
            $conn = mysqli_connect($host,$username,$password,$database);
            //checking connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            else{
                echo "Connected successfully";
            }
?>