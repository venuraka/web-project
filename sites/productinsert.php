<?php


$brand = $_POST["pb"];
$name = $_POST["pn"];
$price = $_POST["pp"];
$image = $_FILES["pi"];

$conn = mysqli_connect("localhost","root","","login") ;

$allowed = array("image/jpg", "image/jpeg", "image/png", "image/svg+xml");

if (isset($image)) {

    $file_type = $image["type"];

    if (in_array($file_type, $allowed)) {

        $new_img_type;

        if ($file_type == "image/jpg") {
            $new_img_type = ".jpg";
        } else if ($file_type == "image/jpeg") {
            $new_img_type = ".jpeg";
        } else if ($file_type == "image/png") {
            $new_img_type = ".png";
        } else if ($file_type == "image/svg+xml") {
            $new_img_type = ".svg";
        }

        $new_name = "resources//" . uniqid() . $new_img_type;
        move_uploaded_file($image["tmp_name"], $new_name);

        $q = "INSERT INTO `product`(`name`,`price`,`img`,`brand`) VALUES ('".$name."','".$price."','".$new_name."','".$brand."')";
        $conn->query($q);

        echo ("Product Saved Successfully");
        
    } else {
        echo ("Invalid file type.");
    }
} else {
    echo ("Please Select an Image.");
}






?>