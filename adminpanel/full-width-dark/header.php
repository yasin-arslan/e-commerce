<?php 
ob_start();
session_start();
include 'baglan.php';
$siteayarsorgu = $db -> prepare("SELECT * FROM ayar WHERE id=:id");
$siteayarsorgu->execute(array(
    'id' => 0
));
$ayarcek = $siteayarsorgu->fetch(PDO::FETCH_ASSOC);
$kullaniciadisor = $db -> prepare("SELECT * FROM users WHERE usermail=:usermail");
$kullaniciadisor->execute(array(
    'usermail' => $_SESSION['usermail']
));
$rows = $kullaniciadisor->rowCount();
$kullaniciadicek = $kullaniciadisor->fetch(PDO::FETCH_ASSOC);
if($rows==0){
	Header("Location:login.php?status=unauth");
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title><?= $ayarcek['title']?></title>
	<meta name="description" content="<?= $ayarcek['description']?>" />
	<meta name="keywords" content="<?= $ayarcek['keywords']?>" />
	<meta name="author" content="<?= $ayarcek['author']?>"/>
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Data table CSS -->
	<link href="vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
	<!-- Custom CSS -->
	<link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->
    <div class="wrapper theme-1-active pimary-color-pink">

        <!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="mobile-only-brand pull-left">
				<div class="nav-header pull-left">
					<div class="logo-wrap">
						<a href="index.php">
							<img class="brand-img" src="img/logo.png" alt="brand"/>
							<span class="brand-text">Logo</span>
						</a>
					</div>
				</div>	
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
				<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
			</div>
			<div id="mobile_only_nav" class="mobile-only-nav pull-right">
				<ul class="nav navbar-right top-nav pull-right">
					<li class="dropdown full-width-drp">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-settings top-nav-icon"></i></a>
						<ul class="dropdown-menu mega-menu pa-0" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
							<li class="product-nicescroll-bar row">
								<ul class="pa-20">
									<li class="col-md-3 col-xs-6 col-menu-list pull-right">
										<a href="javascript:void(0);"><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Yönetim Paneli</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
										<hr class="light-grey-hr ma-0"/>
										<ul>
											<li>
												<a href="users.php"><i class="zmdi zmdi-email mr-20"></i><span class="right-nav-text">Kullanıcılar</span></a>
											</li>
											<li>
												<a href="dashboard-demographic.php"><i class="zmdi zmdi-chart mr-20"></i><span class="right-nav-text">Demografik</span></a>
											</li>
											<li>
												<a href="site-settings.php"><i class="zmdi zmdi-settings mr-20"></i><span class="right-nav-text">Ayarlar</span></a>
											</li>
											<li>
												<a href="contact-settings.php"><i class="zmdi zmdi-share mr-20"></i><span class="right-nav-text">İletişim Ayar</span></a>
											</li>
											<li>
												<a href="api-mail-settings.php"><i class="zmdi zmdi-email mr-20"></i><span class="right-nav-text">API-Mail Ayar</span></a>
											</li>
											<li>
												<a href="about-us-settings.php"><i class="zmdi zmdi-accounts mr-20"></i><span class="right-nav-text">Hakkımızda Ayar</span></a>
											</li>
											
										</ul>
									</li>
									<li class="col-md-3 col-xs-6 col-menu-list pull-right">
										<a href="javascript:void(0);">
											<div class="pull-left">
												<i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">E-Ticaret</span>
											</div>	
											
											<div class="clearfix"></div>
										</a>
										<hr class="light-grey-hr ma-0"/>
										<ul>
											<li>
												<a href="e-commerce.php"><i class="zmdi zmdi-shopping-cart mr-20"></i><span class="right-nav-text">Ürünler</span></a>
											</li>
											<li>
												<a href="product-detail.php"><i class="zmdi zmdi-more mr-20"></i><span class="right-nav-text">Ürün Detayları</span></a>
											</li>
											<li>
												<a href="add-products.php"><i class="zmdi zmdi-shopping-cart-plus mr-20"></i><span class="right-nav-text">Ürün Ekle</span></a>
											</li>
											<li>
												<a href="product-orders.php"><i class="zmdi zmdi-store mr-20"></i><span class="right-nav-text">Siparişler</span></a>
											</li>
											<li>
												<a href="menu.php"><i class="zmdi zmdi-menu mr-20"></i><span class="right-nav-text">Menüler</span></a>
											</li>
										</ul>
									</li>
									
								</ul>
							</li>	
						</ul>
					</li>
					
					<li class="dropdown auth-drp">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="img/user1.png" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
							<li>
								<a href="profile.php"><i class="zmdi zmdi-account"></i><span>Profil</span></a>
							</li>
							<li>
								<a href="inbox.php"><i class="zmdi zmdi-email"></i><span>Mesaj Kutusu</span></a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="logout.php"><i class="zmdi zmdi-power"></i><span>Güvenli Çıkış Yap</span></a>
							</li>
						</ul>
					</li>
				</ul>
			</div>	
		</nav>
		<!-- /Top Menu Items -->
		
		<!-- Left Sidebar Menu -->
		<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">
				
					<!-- User Profile -->
					<li>
						<div class="user-profile text-center">
							<img src="img/user1.png" alt="user_auth" class="user-auth-img img-circle"/>
							<div class="dropdown mt-5">
							<a href="#" class="dropdown-toggle pr-0 bg-transparent" data-toggle="dropdown"><?php echo $kullaniciadicek['userad'] ?> <?php echo $kullaniciadicek['usersoyad'] ?> <span class="caret"></span></a>
							<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
								<li>
									<a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profil</span></a>
								</li>
								<li>
									<a href="inbox.html"><i class="zmdi zmdi-email"></i><span>Mesaj Kutusu</span></a>
								</li>
								<li class="divider"></li>
								<li>
								<a href="logout.php"><i class="zmdi zmdi-power"></i><span>Güvenli Çıkış Yap</span></a>
								</li>
							</ul>
							</div>
						</div>
					</li>
					<!-- /User Profile -->
				<li class="navigation-header">
					<span>Ana Sekmeler</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr"><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Yönetim Paneli</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="dashboard_dr" class="collapse collapse-level-1">
						<li>
							<a href="users.php"><i class="zmdi zmdi-account mr-20"></i><span class="right-nav-text">Kullanıcılar</span></a>
						</li>
						<li>
							<a href="dashboard-demographic.php"><i class="zmdi zmdi-chart mr-20"></i><span class="right-nav-text">Demografik</span></a>
						</li>
						<li>
							<a href="site-settings.php"><i class="zmdi zmdi-settings mr-20"></i><span class="right-nav-text">Ayarlar</span></a>
						</li>
						<li>
							<a href="contact-settings.php"><i class="zmdi zmdi-share mr-20"></i><span class="right-nav-text">İletişim Ayar</span></a>
						</li>
						<li>
							<a href="api-mail-settings.php"><i class="zmdi zmdi-email mr-20"></i><span class="right-nav-text">API-Mail Ayar</span></a>
						</li>
						<li>
							<a href="about-us-settings.php"><i class="zmdi zmdi-accounts mr-20"></i><span class="right-nav-text">Hakkımızda Ayar</span></a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">E-Ticaret</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="ecom_dr" class="collapse collapse-level-1">
											<li>
												<a href="e-commerce.php"><i class="zmdi zmdi-shopping-cart mr-20"></i><span class="right-nav-text">Ürünler</span></a>
											</li>
											<li>
												<a href="product-detail.php"><i class="zmdi zmdi-more mr-20"></i><span class="right-nav-text">Ürün Detayları</span></a>
											</li>
											<li>
												<a href="add-products.php"><i class="zmdi zmdi-shopping-cart-plus mr-20"></i><span class="right-nav-text">Ürün Ekle</span></a>
											</li>
											<li>
												<a href="product-orders.php"><i class="zmdi zmdi-store mr-20"></i><span class="right-nav-text">Siparişler</span></a>
											</li>
											<li>
												<a href="menu.php"><i class="zmdi zmdi-menu mr-20"></i><span class="right-nav-text">Menüler</span></a>
											</li>
					</ul>
				</li>
				<li>	
					</ul>
				</li>
			</ul>
		</div>
		<!-- /Left Sidebar Menu -->

