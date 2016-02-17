<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Salt And Vinegar</title>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link href="https://assets.onestore.ms/cdnfiles/onestorerolling-1601-22000/shell/v3/scss/shell.min.css"
          rel="stylesheet" type="text/css" media="screen"/>
</head>
<body>
<div id="header">
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
                                    Salt And Vinegar
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
<div id="container">
    <div id="description" style="height: 700px; width: 500px; float: right; margin-right: 4%">
        <div id="price" style="height: 400px; width: 499px; margin-top: 5%">
            <h1 style="text-align: center; text-decoration: underline;">Salt And Vinegar</h1>
            <br>
            <br>
            <p style="font-size: medium; text-align: center;">You know what's better than 1 can of pringles?
                50 cans of your favorite type of pringles!
                These Salt And Vinegar flavored goodness are at a stealing rate of 1 dollar a can.
                Normally a can of pringles goes for 1.57 a can.
                While now, not only can you order these in bulk.
                You can get it for a great price and shipped right to your home!</p>
        </div>
        <div id="buttons" style="height: 200px; width: 500px; margin-top: 12% ">
            <form action="ShoppingCart.php">
                <input type="submit" class="btn btn-default btn-lg btn-block" style="background-color: orange; height: 75px; ;" value ="Add To Cart">
            </form>
        </div>

    </div>
    <div id=" product" style="width: 600px; height: 600px; margin-top: 3%; margin-left: 2%">
        <img src="https://thoughtcatalog.files.wordpress.com/2014/06/13049339945_658e5dac8e_k.jpg?w=786&h=591" style="height: 500px; width: 500px; margin-top: 10%; margin-left: 5% ">
    </div>


</div>
</body>
</html>