<?php

$id = $_POST["id"];


$conn = mysqli_connect("localhost","root","","login") ;
$q = ("SELECT * FROM `product` WHERE `product_id` = '" . $id . "'");
$rs = $conn->query($q);
$category_num = $rs->num_rows;

for ($y = 0; $y < $category_num; $y++) {
    $data = $rs->fetch_assoc();
}

$name = $data["name"];
$price = $data["price"];
$img =  $data["img"];
$brand = $data["brand"];

$querry1 = "CREATE TABLE IF NOT EXISTS `day`.`cart` (

    `name` VARCHAR(45) NULL,
    `price` VARCHAR(45) NULL,
    `img` VARCHAR(100) NULL,
    `brand` VARCHAR(45) NULL,
    `id` INT NOT NULL AUTO_INCREMENT,,
    PRIMARY KEY (`id`))";


$q2 = "INSERT INTO `cart`(`name`,`price`,`img`,`brand`) VALUES ('" . $name . "','" . $price . "','" . $img . "','" . $brand . "')";

$conn->query($q2);

?>


