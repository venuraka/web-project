<?php
session_start();

// Sample data stored in session (replace this with your actual data)
$_SESSION["cart"] = [
    [
        "image" => "product1.jpg",
        "name" => "Product 1",
        "price" => 10,
        "quantity" => 2,
    ],
    [
        "image" => "product2.jpg",
        "name" => "Product 2",
        "price" => 20,
        "quantity" => 1,
    ],
    // Add more sets of data as needed
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Table</title>
</head>
<body>

<table border="1">
    <thead>
        <tr>
            <th>Action</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>

    <?php
    if (isset($_SESSION["cart"]) && is_array($_SESSION["cart"])) {
        foreach ($_SESSION["cart"] as $item) {
    ?>
        <tr>
            <td><a onclick="remove(this);"><i class="far fa-times-circle"></i></a></td>
            <td><img src="<?php echo $item["image"]; ?>" alt="" width="50"></td>
            <td><?php echo $item["name"]; ?></td>
            <td id="price">Rs.<?php echo $item["price"]; ?>.00</td>
            <td><input type="number" value="<?php echo $item["quantity"]; ?>" name="quantity" onclick="qty();" id="qty" default="0"></td>
            <td id="total"></td>
        </tr>
    <?php
        }
    } else {
    ?>
        <tr>
            <td colspan="6">No items in the cart</td>
        </tr>
    <?php
    }
    ?>

    </tbody>
</table>

<script>
function remove(row) {
    // Remove the row from the table
    row.parentNode.parentNode.remove();
}

function qty() {
    // Add your logic to update the total based on quantity
    // You can access the quantity input and update the corresponding total cell
}
</script>

</body>
</html>
