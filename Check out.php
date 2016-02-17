<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check Out </title>
    <link href="https://assets.onestore.ms/cdnfiles/onestorerolling-1601-22000/shell/v3/scss/shell.min.css"
          rel="stylesheet" type="text/css" media="screen"/>
    <link href="signup.css" rel="stylesheet" type="text/css">
    <script src="signin.js" type="text/javascript"></script>
</head>
<body>
<?php
try {
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=shopping', 'root', 'root');

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
if(@$_POST['formSubmit'] == "Submit")
{
    $errorMessage = "";

    if(empty($_POST['firstname']))
    {
        $errorMessage = "<li>You forgot to enter your first name.</li>";
    }
    if(empty($_POST['lastname']))
    {
        $errorMessage = "<li>You forgot to enter your last name.</li>";
    }
    if(empty($_POST['streetAddress']))
    {
        $errorMessage = "<li>You forgot to enter a title.</li>";
    }
    if(empty($_POST['city']))
    {
        $errorMessage = "<li>You forgot to enter your age.</li>";
    }
    if(empty($_POST['state']))
    {
        $errorMessage = "<li>You forgot to enter your email.</li>";
    }
    if(empty($_POST['zipCode']))
    {
        $errorMessage = "<li>You forgot to enter your zipcode.</li>";
    }
    if(empty($_POST['payment']))
    {
        $errorMessage = "<li>You forgot to enter your phone type.</li>";
    }
    if(empty($_POST['nameOfCC']))
    {
        $errorMessage = "<li>You forgot to enter your email.</li>";
    }
    if(empty($_POST['onCC']))
    {
        $errorMessage = "<li>You forgot to enter your phone number.</li>";
    }
    if(empty($_POST['securityCode']))
    {
        $errorMessage = "<li>You forgot to enter your phone type.</li>";
    }

    $stmt = $dbh->prepare("INSERT INTO checkout (firstname, lastname, streetAddress, city, state, zipCode, payment, nameOfCC, onCC, securityCode ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $result = $stmt->execute(array($_POST['firstname'], $_POST['lastname'], $_POST['streetAddress'], $_POST['city'], $_POST['state'], $_POST['zipCode'], $_POST['payment'], $_POST['nameOfCC'], $_POST['onCC'], $_POST['securityCode']));

    if(!$result){
        print_r($stmt->errorInfo());
    }

    if(!empty($errorMessage))
    {
        echo("<p>There was an error with your form:</p>\n");
        echo("<ul>" . $errorMessage . "</ul>\n");
    }

}?>
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
                                Check Out
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<h1>Check Out</h1>
<div id="form" style="float: right;">
    <form id="msform" method="post">

        <fieldset>
            <h2 class="fs-title">Check Out Now!</h2>
            <h3 class="fs-subtitle">Step 1</h3>
            <input type="text" name="firstname" placeholder="First Name" />
            <input type="text" name="lastname" placeholder="Last Name" />
            <input type="text" name="streetAddress" placeholder="Street Address" />
            <input type="text" name="city" placeholder="City" />
            <input type="text" name="state" placeholder="State" />
            <input type="number" name="zipCode" placeholder="Zipcode" />
            <input type="text" name="payment" placeholder="Payment Method"/>
            <input type="text" name="nameOfCC" placeholder="Name of Credit Card"/>
            <input type="number" name="onCC" placeholder="Number on Credit Card"/>
            <input type="number" name="securityCode" placeholder="Security Code"/>
            <input type="submit" name="formSubmit" value="Submit" onclick="newPage()">
    </form>

</div>

<div style="height: 400px; width: 800px; margin-top: 7%;">
    <img src="http://i.telegraph.co.uk/multimedia/archive/02664/pringles_2664876b.jpg" style="height: 400px; width: 600px; margin-left: 10%">
</div>

<div style="height: 300px; width: 800px; margin-top: 5%">
    <h1>Please Shop Again!</h1>
</div>
</body>
</html>