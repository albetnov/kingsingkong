<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- SEO Meta Tags -->
    <meta name="description" content="King Singkong Rajanya Singkong!" />
    <meta name="author" content="Inovatik, KingSingkong Team" />

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="kingsingkong" />
    <!-- website name -->
    <meta property="og:site" content="https://kingsingkong.herokuapp.com" />
    <!-- website link -->
    <meta property="og:title" content="Produk KingSingkong" />
    <!-- title shown in the actual shared post -->
    <meta property="og:description" content="Informasi seputar produk dari KingSingkong" />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" />
    <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="https://kingsingkong.herokuapp.com" />
    <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>KingSingkong | Rajanya Singkong <?= isset($title) ? '| ' . $title : '' ?></title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/fontawesome-all.css" rel="stylesheet" />
    <link href="css/swiper.css" rel="stylesheet" />
    <link href="css/magnific-popup.css" rel="stylesheet" />
    <link rel="stylesheet" href="node_modules/animate.css/animate.min.css">
    <link rel="stylesheet" href="css/hover.css">
    <link href="css/styles.css" rel="stylesheet" />

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.ico" />
</head>

<body data-spy="scroll" id="body" data-target=".fixed-top">
    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.html"><img src="images/kingkong.png" alt="alternative" /></a>

            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll hvr-underline-from-left" href="#header">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll hvr-underline-from-left" href="#features">VARIAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll hvr-underline-from-left" href="#details">DETAIL</a>
                    </li>

                    <!-- Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll hvr-underline-from-left" href="#video" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">BLOG & LAIN-LAIN</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item hvr-underline-from-left" href="article-details.html"><span class="item-text">ARTICLE DETAILS</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item hvr-underline-from-left" href="terms-conditions.html"><span class="item-text">ATURAN PEMBELIAN</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item hvr-underline-from-left" href="privacy-policy.html"><span class="item-text">INFORMSI KONSUMSI</span></a>
                        </div>
                    </li>
                    <!-- end of dropdown menu -->

                    <li class="nav-item">
                        <a class="nav-link page-scroll hvr-underline-from-left" href="#pricing">HARGA</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end of container -->
    </nav>
    <!-- end of navbar -->
    <!-- end of navigation -->

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5">
                        <div class="text-container">
                            <h1>KingSingkong Rajanya Singkong!</h1>
                            <p class="p-large">
                                Selamat datang di KingSingkong! Mari lihat daftar varian yang
                                kami miliki!
                            </p>
                            <a class="btn-solid-lg hvr-radial-out page-scroll animate__animated animate__pulse animate__infinite" href="#features">DISINI</a>
                        </div>
                        <!-- end of text-container -->
                    </div>
                    <!-- end of col -->
                    <div class="col-lg-6 col-xl-7">
                        <div class="image-container">
                            <div class="img-wrapper">
                                <img class="img-fluid floating" src="images/header-kingkong.png" alt="alternative" />
                            </div>
                            <!-- end of img-wrapper -->
                        </div>
                        <!-- end of image-container -->
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </div>
        <!-- end of header-content -->
    </header>
    <!-- end of header -->
    <svg class="header-frame" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 310">
        <defs>
            <style>
                .cls-1 {
                    fill: #5f4def;
                }
            </style>
        </defs>
        <title>kingsingkong-frame</title>
        <path class="heading-path" d="M0,283.054c22.75,12.98,53.1,15.2,70.635,14.808,92.115-2.077,238.3-79.9,354.895-79.938,59.97-.019,106.17,18.059,141.58,34,47.778,21.511,47.778,21.511,90,38.938,28.418,11.731,85.344,26.169,152.992,17.971,68.127-8.255,115.933-34.963,166.492-67.393,37.467-24.032,148.6-112.008,171.753-127.963,27.951-19.26,87.771-81.155,180.71-89.341,72.016-6.343,105.479,12.388,157.434,35.467,69.73,30.976,168.93,92.28,256.514,89.405,100.992-3.315,140.276-41.7,177-64.9V0.24H0V283.054Z" />
    </svg>
    <!-- end of header -->