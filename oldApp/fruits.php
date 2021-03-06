<!DOCTYPE html>
<html>

<head>
    <title>Fruits</title>
    <link rel="stylesheet" href="fruits.css" />
    <link rel="stylesheet" href="nav.css" />
    <script src="main.js" async></script>
</head>

<body>
    <nav id="navbar">
        <div class="logo">
            <a href="index.html"> Veg-Fruits </a>
        </div>
        <ul id="menu">
           <?php
                session_start();
                if (isset($_SESSION['username'])){
                     echo '<li><a href="home.html">Home</a></li>
            <li><a href="logout.php">logout</a></li>
            <li><a href="#cart">Cart </a></li>';

                }
                else{
                    echo ' <li><a href="index.html">Home</a></li>
            <li><a href="login.html">login</a></li>
            <li><a href="register.html">Register</a></li>
            <li><a href="#cart">Cart </a></li>';
                }
            ?>
        </ul>
    </nav>

    <section class="container content-section">
        <div class="shop-items">
            <div class="shop-item">
                <div class="shop-item-title">watermelon</div>
                <img class="shop-item-image" src="./images/watermelon.jpg" />
                <div class="shop-item-details">
                    <span class="shop-item-price">$12.99</span>
                    <button class="btn btn-primary shop-item-button" type="button">
                        ADD TO CART
                    </button>
                </div>
            </div>
            <div class="shop-item">
                <span class="shop-item-title">apple</span>
                <img class="shop-item-image" src="./images/apple.jpg" />
                <div class="shop-item-details">
                    <span class="shop-item-price">$14.99</span>
                    <button class="btn btn-primary shop-item-button" type="button">
                        ADD TO CART
                    </button>
                </div>
            </div>
            <div class="shop-item">
                <span class="shop-item-title">orange</span>
                <img class="shop-item-image" src="./images/orange.jpg" />
                <div class="shop-item-details">
                    <span class="shop-item-price">$9.99</span>
                    <button class="btn btn-primary shop-item-button" type="button">
                        ADD TO CART
                    </button>
                </div>
            </div>
            <div class="shop-item">
                <span class="shop-item-title">Strawberry </span>
                <img class="shop-item-image" src="./images/Strawberry.jpeg" />
                <div class="shop-item-details">
                    <span class="shop-item-price">$19.99</span>
                    <button class="btn btn-primary shop-item-button" type="button">
                        ADD TO CART
                    </button>
                </div>
            </div>
        </div>
    </section>
    <p id="demo"></p>


    <section id="cart" class="container content-section">
        <center>
            <h2 class="section-header">CART</h2>
        </center>
        <div class="cart-row">
            <span class="cart-item cart-header cart-column">Item</span>
            <span class="cart-price cart-header cart-column">Price</span>
            <span class="cart-quantity cart-header cart-column">Quantity</span>
        </div>
        <div class="cart-items"></div>
        <div class="cart-total">
            <strong class="cart-total-title">Total</strong>
            <span class="cart-total-price">$0</span>
        </div>
        <button class="btn btn-primary btn-purchase" type="button">
            PURCHASE
        </button>
    </section>

</body>

</html>