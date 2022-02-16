<?php include 'header.php'; 
$menusorgu = $db -> prepare("SELECT * FROM menu WHERE seourlmenu=:sef ");
$menusorgu->execute(array(
    'sef' => $_GET['sef']
));
$menuayar = $menusorgu->fetch(PDO::FETCH_ASSOC);?>
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


            <!-- about-area -->
            <section class="about-area pt-100 pb-100">
                <div class="container">
                    <div class="row align-items-xl-center">
                        <div class="col-lg-6">
                            <div class="about-content">
                                <h4 class="title">BİZ KİMİZ?</h4>
                                <p><?php echo $menuayar['contentmenu'];?></p>      
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->



            

        </main>
        <!-- main-area-end -->

 <?php include 'footer.php'; ?>



    </body>
</html>
