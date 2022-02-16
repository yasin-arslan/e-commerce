		<?php include 'header.php';
			include 'baglan.php';?>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		<div class="wrapper theme-1-active pimary-color-pink">	
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<h5 class="txt-dark">
								<?php if(isset($_GET['status'])){?>
								<?php if($_GET['status'] == 'success'){?>
									<b style="color:green;font-size:small;">İşlem Başarılı!</b>
								<?php }elseif ($_GET['status'] == 'failed'){?>
									<b style="color:red;font-size:small;">İşlem Başarısız!</b>
								<?php }}
									?>
					</h5>		
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.php">Yönetim Paneli</a></li>
								<li><a href="#"><span>Ayarlar</span></a></li>
								<li class="active"><span>API-Mail Ayarları</span></li>
							</ol>
						</div>
						<!-- /Breadcrumb -->
					
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark"></h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										
										<div class="row">
											<div class="col-md-12">
												<div class="form-wrap">
													<form action="islem.php" method="POST" data-toggle="validator" role="form">
													<div class="alert alert-danger" role="alert">
                      									Lütfen ne yaptığınızı bilmiyorsanız bu alanla ilgili işlem yapmayın, sitenize zarar verebilir!
                          								</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Analitik</label>
															<input value="<?php echo $ayarcek['analitik']?>" type="text" class="form-control" name="analitik"id="analitik" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Zopim</label>
															<input value="<?php echo $ayarcek['zopim']?>"type="text" class="form-control" name="zopim"id="zopim" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Google Maps</label>
															<input value="<?php echo $ayarcek['maps']?>"type="text" class="form-control" name="maps"id="maps" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">SMTP Host</label>
															<input value="<?php echo $ayarcek['smtphost']?>"type="text" class="form-control" name="smtphost"id="smtphost" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">SMTP Kullanıcı Adı</label>
															<input value="<?php echo $ayarcek['smtpuser']?>"type="text" class="form-control" name="smtpuser"id="smtpuser" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">SMTP Şifre</label>
															<input value="<?php echo $ayarcek['smtppassword']?>"type="text" class="form-control" name="smtppassword"id="smtppassword" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">SMTP Port</label>
															<input value="<?php echo $ayarcek['smtpport']?>"type="text" class="form-control" name="smtpport"id="smtpport" required>
														</div>
														<div class="form-group">
															<div align="right" class="checkbox">
																<input  type="checkbox" id="terms" data-error="Lütfen burayı işaretleyin!" required>
																<label for="terms" >Onayla</label>
																<div class="help-block with-errors"></div>
															</div>
														</div>
														
														<div align="right" class="form-group mb-0">
															<button type="submit" name="api-update" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">Güncelle</span></button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			<?php include 'footer.php'; ?>
				
			</div>
		
		</div>
		<!-- Init JavaScript -->
		<script src="assets/js/init.js"></script>