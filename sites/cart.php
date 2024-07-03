<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shotcut icon" type="x-icon" href="img/logo3.svg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fancy style</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />


    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>


    <link rel="stylesheet" href="style.css">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

    <section id="header">
        <a href="#"><img width="70" height="70" src="img/logo3.svg" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="blog.html">Offers</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="#">Sign In</a></li>
                <li id="lg-bag"><a onclick="cart();"><i class="far fa-shopping-bag">
                            <?php

                            $conn = mysqli_connect("localhost","root","","login") ;
                            $q = ("SELECT * FROM `cart`");
                            $rs = $conn->query($q);
                            $num = $rs->num_rows;
                            ?>

                            <span id="total-items"><?php echo $num; ?></span>
                            <?php

                            ?>
                        </i></a></li>
                <a id="close" href="#"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>

        </div>
    </section>

    <section id="page-header" class="about-header">

        <h2>#cart</h2>
        <p>Add your coupon code & SAVE upto 70%!</p>

    </section>

    <section id="" class="section-p1">
        <table id="cartTable">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>

                <?php

                $conn = mysqli_connect("localhost","root","","login") ;
                $q = ("SELECT * FROM `cart`");
                $rs = $conn->query($q);
                $num = $rs->num_rows;


                for ($y = 0; $y < $num; $y++) {

                    $data = $rs->fetch_assoc();
                ?>

                    <tr>
                        <td><a onclick="deleterow(<?php echo $data['img'] ?>);"><i class="far fa-times-circle"></i></a></td>
                        <td><img src="<?php echo $data["img"]; ?>" alt="" style="width: 50px;"></td>
                        <td><?php echo $data["name"]; ?></td>
                        <td id="price"><?php echo $data["price"]; ?></td>
                        <td>1</td>
                        <td id="subtotal"><?php echo $data["price"]; ?></td>
                    </tr>
                <?php
                }
                ?>
    
            </tbody>
        </table>


    </section>

    <section id="cart-add" class="section-p1">
        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>
                        <div id="cart-total"></div>
                    </td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>Rs.20,500.00</strong></td>
                </tr>
            </table>
            <button class="normal" onclick="process();">Proceed to checkout</button>
        </div>
    </section>


    <footer class="section-p1">
        <div class="col">
            <img width="70" height="70" class="logo" src="img/logo3.svg" alt="">
            <h4>Contact</h4>
            <p><strong>Address: </strong> Mahenwaththa, Pitipana, Homagama, Sri Lanka</p>
            <p><strong>Phone:</strong> +94 11 544 5000/+94 71 244 5000</p>
            <p><strong>Hours:</strong> 10:00 - 10:00, Mon - Sat</p>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="about.html">About Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">Login</a>


        </div>
        <div class="col install">


            <div class="row">

            </div>
            <p>Secured Payment Gateways </p>
            <img src="img/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>© 2023 nsbm web group</p>
        </div>
    </footer>


    <script src="script.js"></script>

</body>

</html>