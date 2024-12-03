<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Document</title>
    <style> <style>
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
            .qoute {
                position: relative;
                text-align: center;
                max-width: 100%;
                margin: auto;
                /* Centers the container on the page */
            }

            .qoute img {
                width: 100%;
                
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
                height: 302px;
            }

            .qoute .message-overlay {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: white;
                font-size: 2rem;
                font-weight: bold;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            }
            
            
        </style>
</head>
<body>
<?php
    require("include/navbar.php");
    ?>
    <div class="qoute">
        <div class="rider-image">
            <img src="img/qoute.webp" alt="Rider Application" />
        </div>
        <h1>
            <div class="message-overlay">Get Free Qoute</div>
        </h1>
    </div><br><br><br><br>
    <div class="container1">
        <h1>Get free Qoute</h1>
    <form action="link.php" method="POST" >
        <label for="pickuppoint">Pickup Point</label>
        <select name="pickuppoint" id="">
            <option value="ebgeda">ebgeda</option>
            <option value="opeqy">opeqy</option>
            <option value="Ayobo">Ayobo</option>
            <option value="ipaja">ipaja</option>
            <option value="iyana-ipaja">iyana-ipaja</option>
            <option value="oshodi">oshodi</option>
            <option value="command">command</option>
            <option value="highland">highland</option>
            <option value="Aja">Aja</option>
            <option value="gate">gate</option>
        </select>
        <label for="deliverypoint">Delivery Point</label>
       <select name="deliverypoint" id="">
        <option value="Abeokuta">Abeokuta</option>
        <option value="highland">highland</option>
        <option value="Ayobo">Ayobo</option>
        <option value=" iyana-ipaja">iyana-ipaja</option>
        <option value="oshodi">oshodi</option>
        <option value="sango">sango</option>
        <option value="lafenwa">lafenwa</option>
        <option value="Ipaja">Ipaja</option>
        <option value="command">command</option>
        <option value="Gate">Gate</option>
       </select>
        <label for="weight">Weight of the product(in kg)</label>
        <input type="text" name="weight">
        
        <br>
        <button>Get Qoute</button>
    </form>
    </div>
<?php
include("include/footer.php");
?>
</body>
</html>