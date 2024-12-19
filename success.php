<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="assets/css/plugins/fontawesome-5.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/unicons.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .success {
            text-align: center;
            margin: auto;
            background-color: gray;
            color: black;
        }

        .successful {
            text-align: center;
            margin: auto;
            padding: 60px 50px 20px 50px;
            font-size: 45px !important;
            color: black;
        }

        .imgg {
            max-width: 100%;
        }

        .img-size {
            width: 100px;
            height: 100px;
            margin: auto;
            margin-top: 25px;
            margin-bottom: -20px;
        }

        .text-black {
            padding-bottom: 30px;
        }

        .color-success {
            color: #6BC839;
        }

        .pp {
            text-align: center;
        }

        @media (max-width: 576px) {

            /* Extra small devices (phones) */
            .successful {
                font-size: 15px !important;
            }
        }
    </style>
</head>

<body>

    <!-- Header Pages -->
    <?php include 'header.php'; ?>
    <!-- Header Pages -->

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Success</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="index.php">Home</a>
                        <span> > </span>
                        <a href="#" class="active">Success</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <div class="container pt-5 pb-4">
        <div class="img-size">
            <img class="imgg" src="assets/images/home/other/success.png" />
        </div>
        <div class="successful text-black">
            Your Request Has Been <span class="color-success">Successfully</span> Submited
        </div>
        <div class="pp text-black">
            Our dedicated care coordinator will reach out to you as soon as possible to assist you further.
        </div>
    </div>

    <!-- Footer Pages -->
    <?php include 'footer.php'; ?>
    <!-- Footer Pages -->