<?php
try {
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=shopping', 'root', 'root');

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
<!--
<?php
session_start();
if (isset($_GET['item1'])) {
    $_SESSION['checkout']++;
    header("location: index.php");
    $_SESSION['total']+= 800;
}
if (isset($_GET['item2'])) {
    $_SESSION['checkout']++;
    header("location: index.php");
    $_SESSION['total']+= 500;
}
if (isset($_GET['item3'])) {
    $_SESSION['checkout']++;
    header("location: index.php");
    $_SESSION['total']+= 100;
}
if (isset($_GET['item4'])) {
    $_SESSION['checkout']++;
    header("location: index.php");
    $_SESSION['total']+= 800;
}
if (isset($_GET['item5'])) {
    $_SESSION['checkout']++;
    header("location: index.php");
    $_SESSION['total']+= 300;
}
if (isset($_GET['item6'])) {
    $_SESSION['checkout']++;
    header("location index.php");
    $_SESSION['total']+= 5;
}
if (isset($_GET['item7'])) {
    $_SESSION['checkout']++;
    header("location: index.php");
    $_SESSION['total']+= 300;
}
if (isset($_GET['item8'])) {
    $_SESSION['checkout']++;
    header("location: index.php");
    $_SESSION['total']+= 5;
}
if (isset($_GET['item9'])) {
    $_SESSION['checkout']++;
    header("location: index.php");
    $_SESSION['total']+= 50;
}
?>
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product page</title>
    <link href="https://assets.onestore.ms/cdnfiles/onestorerolling-1601-22000/shell/v3/scss/shell.min.css"
          rel="stylesheet" type="text/css" media="screen"/>

</head>
<body>
<!-- header -->
    <div id="shell-header" class="shell-header shell-responsive" ms.pgarea="header">
    <!-- drop down menu and the shopping cart -->
        <div class="shell-header-wrapper">
            <div class="shell-header-top" data-bi-area="HeaderL0" data-bi-view="L0V1">
            <!-- All of the button and drop downs -->
                <div class="shell-header-nav-wrapper" ms.cmpgrp="nav" role="navigation">
                <!-- css maybe? -->
                    <ul class="shell-header-nav" id="srv_shellHeaderNav" data-bi-area="L1"
                    data-bi-view="Hovermenus">
                        <li class="shell-header-user-mobile-container" style="right: 75px;">
                         <div id="shellmenu_6" class="shell-header-dropdown-label">
                                <a
                                    href="javascript:void(0)" role="menu" ms.title="Store"
                                    data-bi-name="Store" data-bi-slot="1" tabindex="20"
                                    style="font-family: monospace; font-size: 20px;">
                                    <a href="Home%20page.php"> Pringles Me </a>
                            </a>
                        </div>
                    </li>
                        <li class="shell-header" data-navcontainer="shellmenu_5_NavContainer" style="right: 30px;">
                            <div id="shellmenu_5" class="shell-header-dropdown-label">
                                <a
                                        href="javascript:void(0)" role="menu" ms.title="Store"
                                        data-bi-name="Store" data-bi-slot="1" tabindex="20">
                                    Product Page
                                </a>
                            </div>
                        </li>
                        <!--
                        <li>
                            <a href="">
                                In Cart:
                                <?php
                                echo $_SESSION['checkout']
                                ?>
                            </a>
                        </li>
                        -->
                </ul>
            </div>
            </div>
        </div>
    </div>

<div>
<table style="margin-left: 40px;">
    <tr style="height: 400px; width: auto;">

        <td style="width: 350px;">
            <img  style="width: 350px;"
                 src="http://heavenlylollies.com.au/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/p/r/prngchdchs-b1-01.jpg">
            <p style="text-align: center;">Cheddar Cheese - $50</p>
            <button type="submit" style="float: right;" >
                <a href="Cheddar.php"> More Info</a>
            </button>

        </td>

        <td style="width: 350px;">
            <img style="width: 350px;" src="http://images.huffingtonpost.com/2014-04-18-p4.jpg">
            <p style="text-align: center;">Pizza - $50</p>
            <button type="submit" style="float: right;">
                <a href="Pizza.php"> More Info </a>
            </button>
        </td>
        <td style="width: 350px;">
            <img style="width: 350px;"
                 src="http://heavenlylollies.com.au/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/p/r/prngrnch-b1-01.jpg">
            <p style="text-align: center;">Ranch - $50</p>
            <button type="submit" style="float: right;">
                <a href="Ranch.php"> More Info </a>
            </button>
        </td>

    </tr>
    <tr style="height: 400px; width: auto;">

        <td style="width: 350px;">
            <img style="width: 350px;"
                 src="http://cdn4.list25.com/wp-content/uploads/2014/10/andnowjakarta.blogspot.com-weed.jpg">
            <p style="text-align: center;">Salted Seaweed - $30</p>
            <button type="submit" style="float: right;"><a href="Saltedseaweed.php"> More Info </a></button>
        </td>

        <td style="width: 350px;">
            <img style="width: 350px; "
                 src="http://farm3.static.flickr.com/2899/14123303413_a45e6880cf.jpg">
            <p style="text-align: center;">Zesty Southwest Cheese - $20</p>
            <button type="submit" style="float: right;"><a href="Southwest%20Cheese.php"> More Info </a></button>
        </td>
        <td style="width: 350px;">
            <img style="width: 350px;"
                 src="http://s.ecrater.com/stores/333649/5378632585048_333649n.jpg">
            <p style="text-align: center;">Lightly Salted - $10</p>
            <button type="submit" style="float: right;"><a href="Lightlysalted.php"> More Info </a></button>
        </td>

    </tr>
    <tr style="height: 400px; width: auto;">

        <td style="width: 350px;">
            <img style="width: 350px;"
                 src="http://heavenlylollies.com.au/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/2/1/211_1.jpg">
            <p style="text-align: center;">Jalapeno - $20</p>
            <button type="submit" style="float: right;"><a href="Jalapeno.php"> More Info </a></button>
        </td>

        <td style="width: 350px;">
            <img style="width: 350px;"
                 src="http://www.junkfoodguy.com/wp-content/uploads/2012/01/gametime10.png">
            <p style="text-align: center;">French Onion Dip - $30</p>
            <button type="submit" style="float: right;"><a href="French.php"> More Info </a></button>
        </td>
        <td style="width: 350px;">
            <img style="width: 350px;"
                 src="http://kitchener.ctvnews.ca/polopoly_fs/1.1488162.1381225600!/httpImage/image.jpg_gen/derivatives/landscape_620/image.jpg">
            <p style="text-align: center;">Salt And Vinegar - $10</p>
            <button type="submit" style="float: right;"><a href="Saltandvin.php"> More Info </a></button>
            <!--<button type="button" class="btn btn-info">Info</button> <a href="ShoppingCart.php?item9=true"> <button class="btn btn-success">Add to cart</button></a>-->
        </td>

    </tr>

</table>
</div>


</body>
</html>