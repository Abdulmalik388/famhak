<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Famhak.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <styl>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;

            }

            .container1 {
                max-width: 600px;
                margin: 20px auto;
                background: whitesmoke;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            h1 {
                text-align: center;
                color: black;
            }

            form {
                display: flex;
                flex-direction: column;
            }

            label {
                margin: 10px 0 5px;
                font-weight: bold;
            }

            input,
            select,
            textarea {
                padding: 10px;
                font-size: 1em;
                border: 1px solid #ccc;
                border-radius: 5px;
                margin-bottom: 15px;
            }

            button {
                padding: 10px;
                background-color: #333;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 1em;
            }

            button:hover {
                background-color: #555;
            }

            .footer {
                background-color: pink;

            }

            .apply-for-rider-container {
                position: relative;
                text-align: center;
                max-width: 100%;
                margin: auto;
                /* Centers the container on the page */
            }

            .apply-for-rider-container img {
                width: 100%;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
                height: 400px;
            }

            .apply-for-rider-container .message-overlay {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: white;
                font-size: 2rem;
                font-weight: bold;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            }
            .logo{
            font-family: cursive;
        }
        </style>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
<?php
include("include/navbar.php");
?>
    <div class="apply-for-rider-container">
        <div class="rider-image">
            <img src="img/pics.jpeg" alt="Rider Application" />
        </div>
        <h1>
            <div class="message-overlay">Apply for Rider</div>
        </h1>
    </div><br><br><br><br>
    <div class="container1">
        <h1>Rider Employment Form</h1>
        <form action="submit.php" method="post">
            <!-- Personal Information -->
            <label for="full_name">Full Name:</label>
            <input type="text" id="full_name" name="full_name" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>

            <label for="address">Residential Address:</label>
            <textarea id="address" name="address" rows="3" required></textarea>
            <label for="nin">NIN:</label>
            <input type="text" id="nin" name="nin" required>
            <label for="Guarantor">Guarantor's Name</label>
            <input type="text" id="guarantor" name="guarantor">
            <label for="guarantor">Guarantor's Resident</label>
            <input type="text" id="guarantor" name="guarantorresident">

            <!-- Licensing and Vehicle Information -->
            <label for="license">Do you have a valid rider's license?</label>
            <select id="license" name="license" required>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>


            <!-- Experience and Skills -->
            <label for="experience">Do you have delivery experience?(if yes, how many years )</label>
            <input type="text" id="experience" name="experience" required>

            <label for="routes">Are you familiar with local routes?</label>
            <select id="routes" name="routes" required>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>

            <!-- Agreement -->
            <label for="agreement">
                <input type="checkbox" id="agreement" name="agreement" required>
                I confirm that all the information provided is accurate.
            </label>

            <!-- Submit -->
            <button type="submit">Submit Application</button>
        </form>
        <header></header>
    </div><br><br><br>
    <?php
include("include/footer.php");
?>
</body>

</html>