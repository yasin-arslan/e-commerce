<?php include '../e-commerce/adminpanel/full-width-dark/baglan.php';
include '../e-commerce/adminpanel/full-width-dark/function.php';
$menus = $db->prepare("SELECT * FROM menu WHERE statusmenu=:statusmenu ORDER BY linemenu ASC LIMIT 4");
$menus -> execute(array(
    "statusmenu" => 1
));
?>
<div id="sticky-header" class="main-header menu-area blue-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo d-block d-lg-none">
                                        <a href="index.html">
                                            <img src="img/logo/white_logo.png" class="sticky-none" alt="Logo">
                                            <img src="img/logo/logo.png" class="sticky-block" alt="Logo">
                                        </a>
                                    </div>
                                    <div class="header-category d-none d-lg-block">
                                        <a href="#" class="cat-toggle"><i class="fas fa-bars"></i>KATEGORİLER<i class="fas fa-angle-down"></i></a>
                                        <ul class="category-menu">
                                            <li class="has-dropdown"><a href="#">Accessories & Parts</a>
                                                <ul class="mega-menu">
                                                    <li>
                                                        <ul>
                                                            <li class="dropdown-title">Accessories & Parts</li>
                                                            <li><a href="#">Cables & Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Chargers</a></li>
                                                            <li><a href="#">Bags & Cases</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="dropdown-title">Electronic Cigarettes</li>
                                                            <li><a href="#">Audio & Video</a></li>
                                                            <li><a href="#">Televisions</a></li>
                                                            <li><a href="#">TV Receivers</a></li>
                                                            <li><a href="#">Projectors</a></li>
                                                            <li><a href="#">Audio Amplifier Boards</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li class="dropdown-title">Smart Electronics</li>
                                                            <li><a href="#">Cables & Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Chargers</a></li>
                                                            <li><a href="#">Bags & Cases</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="dropdown-title">Portable Audio & Video</li>
                                                            <li><a href="#">Audio & Video</a></li>
                                                            <li><a href="#">Televisions</a></li>
                                                            <li><a href="#">TV Receivers</a></li>
                                                            <li><a href="#">Projectors</a></li>
                                                            <li><a href="#">Audio Amplifier Boards</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li class="dropdown-title">Accessories & Parts</li>
                                                            <li><a href="#">Cables & Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Chargers</a></li>
                                                            <li><a href="#">Bags & Cases</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="dropdown-title">Audio & Video</li>
                                                            <li class="mega-menu-banner"><a href="#"><img src="img/images/megamenu_banner.jpg" alt=""></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown"><a href="#">Cables & Adapters</a>
                                                <ul class="mega-menu">
                                                    <li>
                                                        <ul>
                                                            <li class="dropdown-title">Accessories & Parts</li>
                                                            <li><a href="#">Cables & Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Chargers</a></li>
                                                            <li><a href="#">Bags & Cases</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="dropdown-title">Electronic Cigarettes</li>
                                                            <li><a href="#">Audio & Video</a></li>
                                                            <li><a href="#">Televisions</a></li>
                                                            <li><a href="#">TV Receivers</a></li>
                                                            <li><a href="#">Projectors</a></li>
                                                            <li><a href="#">Audio Amplifier Boards</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li class="dropdown-title">Smart Electronics</li>
                                                            <li><a href="#">Cables & Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Chargers</a></li>
                                                            <li><a href="#">Bags & Cases</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="dropdown-title">Portable Audio & Video</li>
                                                            <li><a href="#">Audio & Video</a></li>
                                                            <li><a href="#">Televisions</a></li>
                                                            <li><a href="#">TV Receivers</a></li>
                                                            <li><a href="#">Projectors</a></li>
                                                            <li><a href="#">Audio Amplifier Boards</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li class="dropdown-title">Accessories & Parts</li>
                                                            <li><a href="#">Cables & Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Chargers</a></li>
                                                            <li><a href="#">Bags & Cases</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="dropdown-title">Audio & Video</li>
                                                            <li class="mega-menu-banner"><a href="#"><img src="img/images/megamenu_banner.jpg" alt=""></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Batteries</a></li>
                                            <li><a href="#">Chargers</a></li>
                                            <li><a href="#">Bags & Cases</a></li>
                                            <li><a href="#">Electronic Cigarettes</a></li>
                                            <li><a href="#">Audio & Video</a></li>
                                            <li><a href="#">Televisions</a></li>
                                            <li><a href="#">TV Receivers</a></li>
                                            <li class="has-dropdown"><a href="#">Projectors</a>
                                                <ul class="mega-menu">
                                                    <li>
                                                        <ul>
                                                            <li class="dropdown-title">Accessories & Parts</li>
                                                            <li><a href="#">Cables & Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Chargers</a></li>
                                                            <li><a href="#">Bags & Cases</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="dropdown-title">Electronic Cigarettes</li>
                                                            <li><a href="#">Audio & Video</a></li>
                                                            <li><a href="#">Televisions</a></li>
                                                            <li><a href="#">TV Receivers</a></li>
                                                            <li><a href="#">Projectors</a></li>
                                                            <li><a href="#">Audio Amplifier Boards</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li class="dropdown-title">Smart Electronics</li>
                                                            <li><a href="#">Cables & Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Chargers</a></li>
                                                            <li><a href="#">Bags & Cases</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="dropdown-title">Portable Audio & Video</li>
                                                            <li><a href="#">Audio & Video</a></li>
                                                            <li><a href="#">Televisions</a></li>
                                                            <li><a href="#">TV Receivers</a></li>
                                                            <li><a href="#">Projectors</a></li>
                                                            <li><a href="#">Audio Amplifier Boards</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li class="dropdown-title">Accessories & Parts</li>
                                                            <li><a href="#">Cables & Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Chargers</a></li>
                                                            <li><a href="#">Bags & Cases</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="dropdown-title">Audio & Video</li>
                                                            <li class="mega-menu-banner"><a href="#"><img src="img/images/megamenu_banner.jpg" alt=""></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Audio Amplifier Boards</a></li>
                                            <li><a href="#">TV Sticks</a></li>
                                        </ul>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <?php while($menudatas = $menus -> fetch(PDO::FETCH_ASSOC)){?>
                                            <li class="dropdown"><a href="<?php if(!empty($menudatas['urlmenu']))
                                            {echo "page-". $menudatas['urlmenu'];}
                                            else{echo "page/" . converttoseo($menudatas['namemenu']);;}?>"><?php echo $menudatas['namemenu'] ?></a> </li>
                                           
                                            <?php }?>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="menu-backdrop"></div>
                                <div class="close-btn"><i class="fas fa-times"></i></div>

                                <nav class="menu-box">
                                    <div class="nav-logo"><a href="index.php"><img src="img/logo/white_logo.png" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>