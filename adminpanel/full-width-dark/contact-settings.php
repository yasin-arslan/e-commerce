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
							<h5 class="txt-dark"><?php if(isset($_GET['status'])){?>
								<?php if($_GET['status'] == 'success'){?>
									<b style="color:green;font-size:small;">İşlem Başarılı!</b>
								<?php }elseif ($_GET['status'] == 'failed'){?>
									<b style="color:red;font-size:small;">İşlem Başarısız!</b>
								<?php }}
									?></h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
							<ol class="breadcrumb">
								<li><a href="index.html">Yönetim Paneli</a></li>
								<li><a href="#"><span>Ayarlar</span></a></li>
								<li class="active"><span>İletişim Ayarları</span></li>
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
															<label for="inputName" class="control-label mb-10">Facebook</label>
															<input value="<?= $ayarcek['facebook']?>"name="facebook"type="text" class="form-control" id="facebook" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Twitter</label>
															<input value="<?= $ayarcek['twitter']?>"name="twitter"type="text" class="form-control" id="twitter" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Youtube</label>
															<input value="<?= $ayarcek['youtube']?>"name="youtube"type="text" class="form-control" id="youtube" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Instagram</label>
															<input value="<?= $ayarcek['instagram']?>"name="instagram"type="text" class="form-control" id="instagram" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Telefon</label>
															<input value="<?= $ayarcek['tel']?>"name="tel"type="text" class="form-control" id="tel" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Gsm</label>
															<input value="<?= $ayarcek['gsm']?>"name="gsm"type="text" class="form-control" id="gsm" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Faks</label>
															<input value="<?= $ayarcek['faks']?>"name="faks"type="text" class="form-control" id="faks" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Mail</label>
															<input value="<?= $ayarcek['mail']?>"name="mail"type="text" class="form-control" id="mail" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">İl</label>
															<input value="<?= $ayarcek['il']?>"name="il"type="text" class="form-control" id="il" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">İlçe</label>
															<input value="<?= $ayarcek['ilce']?>"name="ilce"type="text" class="form-control" id="ilce" required>
														</div>
														<div class="form-group">
															<div align="right" class="checkbox">
																<input type="checkbox" id="terms" data-error="Lütfen burayı işaretleyin!" required>
																<label for="terms" >Onayla</label>
																<div class="help-block with-errors"></div>
															</div>
														</div>
														<div align="right" class="form-group mb-0">
															<button type="submit" name="contact-update" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">Güncelle</span></button>
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
