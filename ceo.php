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
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <style>
        .ceo-profile {
            text-align: center;
            margin-top: 20px;
        }

        .ceo-photo {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 10px;
        }

        .ceo-profile h2 {
            font-size: 1.8em;
            color: #333;
        }

        .ceo-profile p {
            font-size: 1.2em;
            color: #666;
        }

        .ceo-bio {
            max-width: 800px;
            margin: 20px auto;
            text-align: center;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .ceo-bio h3 {
            color: #333;
            margin-bottom: 10px;
        }

        .ceo-bio p {
            font-size: 1em;
            line-height: 1.6;
            color: #555;
        }

        .container1 {
            margin-left: 450px;
        }
        .footer{
            background-color: pink;
        }
        .logo{
            font-family: cursive;
        }
        .ceo {
                position: relative;
                text-align: center;
                max-width: 100%;
                margin: auto;
                /* Centers the container on the page */
            }

            .ceo img {
                width: 100%;
                
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
                height: 302px;
            }

            .ceo .message-overlay {
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
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <?php
    include("include/navbar.php");
    ?>
<div class="ceo">
        <div class="rider-image">
            <img src="img/ceo-hero.webp" alt="Rider Application" />
        </div>
        <h1>
            <div class="message-overlay">CEO</div>
        </h1>
    </div><br><br><br><br>
    <section id="ceo">
        <div class="ceo-profile">
            <img src="img/ceo.jpg" alt="CEO of Famhak Logistics" class="ceo-photo">
            <h2>Abdulfatai Lawal</h2>
            <p>Founder & CEO, Famhak Logistics</p>
        </div>
        <div class="ceo-bio">
            <h3>About Abdulfatai Lawal</h3>
            <p>
                Abdulfatai Lawal is a visionary entrepreneur with a passion for innovation in the logistics industry.
                With over a decade of experience, he founded Famhak Logistics to revolutionize delivery services and
                provide unmatched reliability to customers worldwide.
            </p>
            <p>
                Under his leadership, Famhak Logistics has grown into a trusted brand, known for its<br> customer-first
                approach and cutting-edge technology.
                Abdulfatai is committed<br> to ensuring every package arrives safely and on time while fostering a <br>culture
                of excellence within the company.
            </p>
            <p>A word from our ceo:</p><small>“At Famhak Logistics, we believe in delivering more than just packages. We
                deliver trust,<br> reliability,
                and peace of mind. Thank you for choosing us as <br> your logistics partner.” — [Abdulfatai Lawal]</small>
        </div>

    </section><br><br><br><br>

    <?php
include("include/footer.php");
?>
</body>

</html>