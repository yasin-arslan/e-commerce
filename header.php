<?php 
include '../e-commerce/adminpanel/full-width-dark/baglan.php';
$siteayarsorgu = $db -> prepare("SELECT * FROM ayar WHERE id=:id");
$siteayarsorgu->execute(array(
    'id' => 0
));
$ayarcek = $siteayarsorgu->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?= $ayarcek['title']?></title>
        <meta name="description" content="<?= $ayarcek['description']?>">
        <meta name="keywords" content="<?= $ayarcek['keywords']?>">
        <meta name="author" content="<?= $ayarcek['author']?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/odometer.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
    
       <!-- header-area -->
        <header>

            <!-- header-top -->
            <div class="header-top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-7">
                            <div class="header-top-left">
                                <ul>   
                                    <li>
                                        <div class="heder-top-guide">
                                            <span>Hızlı Ulaşım</span>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Yardım
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                    <a class="dropdown-item" href="terms-conditios.html">İade</a>
                                                    <a class="dropdown-item" href="terms-conditios.html">Gizlilik</a>
                                                    <a class="dropdown-item" href="terms-conditios.html">Kullanıcı Sözleşmesi </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-5">
                            <div class="header-top-right">
                                <ul>
                                    <li><a href="my-account.html"><i class="far fa-user"></i>Giriş Yap</a></li>
                                    <li><a href="my-account.html">Üyeliğim</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-top-end -->

            <!-- header-search-area -->
            <div class="header-search-area d-none d-md-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-3 d-none d-lg-block">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="img/logo/logo.png" alt="Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-9">
                            <div class="d-flex align-items-center justify-content-end">
                                <div class="header-search-wrap">
                                    <form action="#">
                                        <input type="text" placeholder="Ürün Ara...">
                                        <select class="custom-select">
                                            <option selected="">Kategoriler çekilecek!</option>
                                            <option>Women's Clothing</option>
                                            <option>Men's Clothing</option>
                                            <option>Computer & Office</option>
                                            <option>Consumer Electronics</option>
                                            <option>Home & Garden</option>
                                            <option>Luggage & Bags</option>
                                            <option>Shoes</option>
                                            <option>Mother & Kids</option>
                                            <option>Beauty & Health</option>
                                            <option>Home Appliances</option>
                                            <option>Food</option>
                                            <option>Underwear & Sleepwear</option>
                                            <option>In All Categories</option>
                                        </select>
                                        <button><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="header-top-action">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i>Rating Item</a></li>
                                        <li><a href="wishlist.html"><i class="far fa-heart"></i>Sepet</a></li>
                                        <li><a href="#"><i class="fas fa-venus-double"></i>Compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-search-area-end -->

            <!-- menu-area -->
           <?php include 'sidebar.php'; ?>
            <!-- menu-area-end -->

        </header>
        <!-- header-area-end -->