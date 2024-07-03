<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shotcut icon" type="x-icon" href="img/newlogo2.svg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fancy Style</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section id="header">
        <a href="#"><img width="70" height="70" src="img/newlogo2.svg" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="blog.html">Offers</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="#">Sign In</a></li>
                <li id="lg-bag"><a onclick="cart();" type="submit"><i class="far fa-shopping-bag">
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
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>
    <div id="card-name"></div>
    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up to 70% off! </p>
        <button>
            <link rel="stylesheet" href="shop.html"> Shop Now
        </button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/icon/free.jpg" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/icon/online.jpg" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/icon/save.jpg" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/icon/happy.jpg" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="img/icon/pro.jpg" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="img/icon/24.jpg" alt="">
            <h6>F24/7 Support</h6>
        </div>
    </section>

    <div id="card-item"></div>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>New Morden Design</p>
        <div class="pro-container">
            <?php

            $conn = mysqli_connect("localhost","root","","login") ;
            $q = ("SELECT * FROM `product`");
            $rs = $conn->query($q);
            $category_num = $rs->num_rows;

            for ($y = 0; $y < $category_num; $y++) {

                $data = $rs->fetch_assoc();
            ?>
                <div class="pro">
                    <img src="<?php echo $data["img"]; ?>" alt="">
                    <div class="des">
                        <span><?php echo $data["brand"] ?></span>
                        <h5 id="id"><?php echo $data["name"]; ?></h5>
                        <h4 id="price"><?php echo $data["price"]; ?></h4>
                    </div>
                    <button onclick="addcart(<?php echo $data['product_id'] ?>);"><i class="fal fa-shopping-cart cart"></i></button>

                </div>
            <?php

            }

            ?>
            <div class="pro">
                <img src="img/products/s10.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5> YY Black T-Shirt</h5>

                    <h4>RS.2500.00</h4>
                </div>
                <button><i class="fal fa-shopping-cart cart"></i></button>
            </div>
            <div class="pro">
                <img src="img/products/s0.jpg" alt="">
                <div class="des">
                    <span>705</span>
                    <h5>705 black Jacket</h5>
                    <h4>RS.9000.00</h4>
                </div>
                <button><i class="fal fa-shopping-cart cart"></i></button>
            </div>
            <div class="pro">
                <img src="img/products/s7.jpg" alt="">
                <div class="des">
                    <span>705</span>
                    <h5>705 black T-Shirt</h5>
                    <h4>RS.4000.00</h4>
                </div>
                <button><i class="fal fa-shopping-cart cart"></i></button>
            </div>
            <div class="pro">
                <img src="img/products/s8.jpg" alt="">
                <div class="des">
                    <span>705</span>
                    <h5> 705 black T-Shirt</h5>

                    <h4>RS.3000.00</h4>
                </div>
                <button><i class="fal fa-shopping-cart cart"></i></button>
            </div>
        </div>
    </section>


    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Coding is life</p>
        <div class="pro-container">
            <div class="pro">
                <img src="img/products/1.jpg" alt="">
                <div class="des">
                    <span>Code</span>
                    <h5>T-Shirt</h5>

                    <h4>RS.2500.00</h4>
                </div>
                <button><i class="fal fa-shopping-cart cart"></i></button>
            </div>
            <div class="pro">
                <img src="img/products/2.jpg" alt="">
                <div class="des">
                    <span>Code</span>
                    <h5> T-Shirt</h5>

                    <h4>RS.2300.00</h4>
                </div>
                <button><i class="fal fa-shopping-cart cart"></i></button>
            </div>
            <div class="pro">
                <img src="img/products/3.jpg" alt="">
                <div class="des">
                    <span>code</span>
                    <h5>JS T-Shirt</h5>

                    <h4>RS.3000.00</h4>
                </div>
                <button><i class="fal fa-shopping-cart cart"></i></button>
            </div>
            <div class="pro">
                <img src="img/products/4.jpg" alt="">
                <div class="des">
                    <span>code</span>
                    <h5>long sleve</h5>

                    <h4>RS.6000.00</h4>
                </div>
                <button><i class="fal fa-shopping-cart cart"></i></button>
            </div>
            <div class="pro">
                <img src="img/products/5.jpg" alt="">
                <div class="des">
                    <span>tech ETC</span>
                    <h5>VueJS T-Shirt</h5>

                    <h4>RS.3000.00</h4>
                </div>
                <button><i class="fal fa-shopping-cart cart"></i></button>
            </div>
            <div class="pro">
                <img src="img/products/6.jpg" alt="">
                <div class="des">
                    <span>tech ETC</span>
                    <h5>Long sleve</h5>
                    <h4>RS.5000.00</h4>
                </div>
                <button><i class="fal fa-shopping-cart cart"></i></button>
            </div>
            <div class="pro">
                <img src="img/products/9.jpg" alt="">
                <div class="des">
                    <span>Code</span>
                    <h5>Logic T-Shirt</h5>
                    <h4>4>RS.3400.00</h4>
                </div>
                <button><i class="fal fa-shopping-cart cart"></i></button>
            </div>
            <div class="pro">
                <img src="img/products/800.jpg" alt="">
                <div class="des">
                    <span>Code</span>
                    <h5>React T-Shirt </h5>
                    <h4>RS.3000.00</h4>
                </div>
                <button><i class="fal fa-shopping-cart cart"></i></button>
            </div>
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at cara</span>
        </div>
        <div class="banner-box banner-box2">
            <h4>spring/summer</h4>
            <h2>upcomming season</h2>
            <span>The best classic dress is on sale at cara</span>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>NEW FOOTWEAR COLLECTION </h2>
            <h3>Spring / Summer 2024</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>T-SHIRTS</h2>
            <h3>New Trendy Prints</h3>
        </div>
    </section>



    </section>

    <footer class="section-p1">
        <div class="col">
            <img width="70" height="70" class="logo" src="img/newlogo2.svg" alt="">
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
            <a href="Sign In.html">Sign In</a>
            <a href="login.html">Login</a>

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