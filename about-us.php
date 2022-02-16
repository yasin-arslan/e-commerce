<?php include 'header.php'; 
$aboutussorgu = $db -> prepare("SELECT * FROM aboutus WHERE id=:id");
$aboutussorgu->execute(array('id' => 0));
$aboutusayar = $aboutussorgu->fetch(PDO::FETCH_ASSOC);?>
        <!-- preloader  -->
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="M" class="letters-loading">
                            M
                        </span>
                        <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
                        <span data-text-preloader="R" class="letters-loading">
                            R
                        </span>
                        <span data-text-preloader="K" class="letters-loading">
                            K
                        </span>
                        <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
                    </div>
                </div>
                <div class="loader">
                    <div class="row">
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->


		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->


        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2><?php echo $aboutusayar['aboutbaslik'] ?></h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Ana Sayfa</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Hakkımızda</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- about-area -->
            <section class="about-area pt-100 pb-100">
                <div class="container">
                    <div class="row align-items-xl-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="<?php echo $aboutusayar['aboutresim'] ?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content">
                                <h4 class="title">BİZ KİMİZ?</h4>
                                <p><?php echo $aboutusayar['abouticerik']?></p>      
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- features-area -->
            <section class="features-area theme-bg pt-100 pb-70">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span class="sub-title">NEDEN BİZİ SEÇMELİSİNİZ?</span>
                                <h2 class="title">BİZİ AYIRAN ÖZELLİKLERİMİZ</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="features-wrap-item mb-30">
                                <div class="features-icon">
                                    <i class="flaticon-shuttle"></i>
                                </div>
                                <div class="features-content">
                                    <h5>Hızlı Teslimat</h5>
                                    <p>Lorem Ipsum simply dumm the printing and typesetting indust orem Ipsum has been the industry standard dummy men book.</p>
                                    <div class="features-item-list">
                                        <ul>
                                            <li>Ürün 1</li>
                                            <li>Ürün 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="features-wrap-item mb-30">
                                <div class="features-icon">
                                    <i class="flaticon-secure-payment"></i>
                                </div>
                                <div class="features-content">
                                    <h5>Güvenli Ödeme</h5>
                                    <p>Lorem Ipsum simply dumm the printing and typesetting indust orem Ipsum has been the industry standard dummy men book.</p>
                                    <div class="features-item-list">
                                        <ul>
                                            <li>7/24 Destek</li>
                                            <li>Para İadesi İmkanı</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="features-wrap-item mb-30">
                                <div class="features-icon">
                                    <i class="flaticon-24-hours-support"></i>
                                </div>
                                <div class="features-content">
                                    <h5>7/24 Müşteri Desteği</h5>
                                    <p>Lorem Ipsum simply dumm the printing and typesetting indust orem Ipsum has been the industry standard dummy men book.</p>
                                    <div class="features-item-list">
                                        <ul>
                                            <li>Ürün 1</li>
                                            <li>Ürün 2</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- features-area-end -->

            <!-- testimonial-area -->
            <section class="testimonial-area pt-100 pb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center mb-60">
                                <span class="sub-title">Gurur Tablosu</span>
                                <h2 class="title">MEMNUN KALAN MÜŞTERİLER</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row testimonial-active">
                        <div class="col-xl-4">
                            <div class="testimonial-item text-center">
                                <div class="testi-avatar-img mb-20">
                                    <img src="<?php echo $aboutusayar['resim_1'] ?>" alt="">
                                </div>
                                <div class="testi-avatar-info">
                                    <h5><?php echo $aboutusayar['isim_1'] ?></h5>
                                    <span><strong><?php echo $aboutusayar['pozisyon_1'] ?></strong></span>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="testi-content">
                                    <p><?php echo $aboutusayar['text_1'] ?></p>
                                </div>
                            </div>
                        </div>  
                        <div class="col-xl-4">
                            <div class="testimonial-item text-center">
                                <div class="testi-avatar-img mb-20">
                                    <img src="<?php echo $aboutusayar['resim_2'] ?>" alt="">
                                </div>
                                <div class="testi-avatar-info">
                                    <h5><?php echo $aboutusayar['isim_2'] ?></h5>
                                    <span><strong><?php echo $aboutusayar['pozisyon_2'] ?></strong></span>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="testi-content">
                                    <p><?php echo $aboutusayar['text_2'] ?></p>
                                </div>
                            </div>
                        </div>  
                        <div class="col-xl-4">
                            <div class="testimonial-item text-center">
                                <div class="testi-avatar-img mb-20">
                                    <img src="<?php echo $aboutusayar['resim_3'] ?>" alt="">
                                </div>
                                <div class="testi-avatar-info">
                                    <h5><?php echo $aboutusayar['isim_3'] ?></h5>
                                    <span><strong><?php echo $aboutusayar['pozisyon_3'] ?></strong></span>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="testi-content">
                                    <p><?php echo $aboutusayar['text_3'] ?></p>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- limited-offer-area -->
            <!--<section class="limited-offer-area" data-background="img/bg/limited_offer_bg.jpg">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-5 col-lg-6 col-md-7">
                            <div class="limited-offer-left">
                                <div class="limited-offer-title">
                                    <span class="sub-title">exclusive offer</span>
                                    <h2 class="title">Smart Watch Bracelet</h2>
                                </div>
                                <div class="limited-offer-disc">
                                    <img src="img/images/limited_offer_discount.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-5">
                            <div class="limited-offer-action">
                                <a href="#" class="btn">limited time offer</a>
                                <div class="amount-info">
                                    <span class="upto">UPTO</span>
                                    <span class="amount">$ 50.00</span>
                                    <span class="off">OFF</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="limited-overlay-title">Vanam Top Sale 35<span>%</span></h2>
                <div class="limited-overlay-img"><img src="img/images/limited_offer_img.png" alt=""></div>
            </section>-->
            <!-- limited-offer-area-end -->

        </main>
        <!-- main-area-end -->

 <?php include 'footer.php'; ?>



    </body>
</html>
