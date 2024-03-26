<?php include('config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Food Order System</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="https://ugc.production.linktr.ee/912dce7e-c4f0-415c-bbae-2162096b9d80_Logo-03.png?io=true&size=avatar-v3_0" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>
            <div class="title">
                <h1><b>Ignyt - BeerStation</b></h1>
            </div>

            <div class="menu text-right">
                <ul>
                <li>
                        <a href="<?php echo SITEURL; ?>home.php ">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>">About Us</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>categories.php">Menu</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>foods.php">Foods</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>events.php">Events and Promotions</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->