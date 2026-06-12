<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="Thank you for reaching out to Doffin Constructions LLP.">
    <meta name="author" content="Doffin Constructions LLP">
    <title>Thank You | Doffin Constructions LLP</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo/loader/loader.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/all.min.css" rel="stylesheet" media="screen">
    <link href="css/custom.css" rel="stylesheet" media="screen">

    <style>
        .thankyou-wrap {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 100px 20px;
        }

        .thankyou-card {
            text-align: center;
            max-width: 480px;
            width: 100%;
        }

        /* Check icon */
        .check-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: #C19A5B;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 32px;
        }

        .check-icon svg {
            stroke: #ffffff;
            stroke-dasharray: 40;
            stroke-dashoffset: 40;
            animation: draw 0.5s ease-out 0.2s forwards;
        }

        @keyframes draw {
            to { stroke-dashoffset: 0; }
        }

        .thankyou-card h1 {
            font-family: 'Inter Tight', sans-serif;
            font-size: 32px;
            font-weight: 700;
            color: #0d0d0d;
            margin: 0 0 14px;
        }

        .thankyou-card p {
            font-family: 'Inter Tight', sans-serif;
            font-size: 15px;
            color: #777777;
            line-height: 1.7;
            margin: 0 0 36px;
        }

        .btn-home {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 14px 36px;
            background-color: #0d0d0d;
            color: #ffffff;
            font-family: 'Inter Tight', sans-serif;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 0.04em;
            text-decoration: none;
            text-transform: uppercase;
            transition: background 0.2s;
        }

        .btn-home:hover {
            background-color: #C19A5B;
            color: #ffffff;
        }
    </style>
</head>

<body>

    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="images/logo/loader/loader.svg" alt=""></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Header Start -->
    <?php include 'includes/header.php'; ?>
    <!-- Header End -->

    <div class="thankyou-wrap">
        <div class="thankyou-card">

            <div class="check-icon">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
            </div>

            <h1>Thank You!</h1>

            <p>Your message has been received. A member of our team will be in touch with you shortly. We aim to respond to all enquiries within one business day.</p>

            <a href="index.php" class="btn-home">
                Back To Home &nbsp;&#8599;
            </a>

        </div>
    </div>

    <!-- Main Footer Start -->
    <?php include 'includes/footer.php'; ?>
    <!-- Main Footer End -->

    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/SmoothScroll.js"></script>
    <script src="js/gsap.min.js"></script>
    <script src="js/magiccursor.js"></script>
    <script src="js/function.js"></script>

</body>

</html>