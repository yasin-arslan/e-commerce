<?php include 'baglan.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Yönetim Paneli Giriş Ekranı</title>
		<meta name="description" content="Grandin is a Dashboard & Admin Site Responsive Template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Grandin Admin, Grandinadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="../full-width-dark/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css"type="text/css">
		<link rel="stylesheet" href="../full-width-dark/assets/css/style.css"type="text/css">
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		<div class="wrapper pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="index.html">
						<img class="brand-img mr-10" src="../full-width-dark/img/logo.png" alt="brand"/>
						<span class="brand-text">LOGO</span>
					</a>
				</div>
			</header>
		</head>
	<body>
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float card-view pt-30 pb-30">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Yönetim Paneline Giriş</h3>
											<h6 class="text-center nonecase-font txt-grey">Bilgilerinizi Girin</h6>
										</div>	
										<div class="form-wrap">
											<form action="islem.php" method="POST">
												<div class="form-group">
													<label class="control-label mb-10" for="admin-panel-id">Mail Adresi</label>
													<input type="text" class="form-control" required="" name="usermail" id="usermail" placeholder="Mail Adresiniz...">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="admin-panel-pw">Şifre</label>
													<a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="forgot-password.html">Şifremi Unuttum</a>
													<div class="clearfix"></div>
													<input type="password" class="form-control" required="" name="userpassword" id="userpassword" placeholder="Şifreniz...">
												</div>
												
												<div class="form-group">
													<div class="checkbox checkbox-primary pr-10 pull-left">
														<input id="checkbox_2" type="checkbox">
														<label for="checkbox_2">Oturumu Açık Tut</label>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="form-group text-center">
													<button name="adminlogin" type="submit" class="btn btn-primary  btn-rounded">Giriş Yap</button>
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="../full-width-dark/vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="../full-width-dark/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="../full-width-dark/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="../full-width-dark/assets/js/jquery.slimscroll.js"></script>
		
		<!-- Init JavaScript -->
		<script src="../full-width-dark/assets/js/init.js"></script>
	</body>
</html>
