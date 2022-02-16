<?php include 'header.php';
	$aboutussorgu = $db -> prepare("SELECT * FROM aboutus WHERE id=:id");
	$aboutussorgu->execute(array(
	'id' => 0
		));
		$aboutusayar = $aboutussorgu->fetch(PDO::FETCH_ASSOC);
	?>
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
								<li class="active"><span>Hakkımızda Ayarları</span></li>
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
													<form action="../full-width-dark/islem.php" method="POST" data-toggle="validator" role="form">
													<div class="alert alert-danger" role="alert">
                      									Lütfen ne yaptığınızı bilmiyorsanız bu alanla ilgili işlem yapmayın, sitenize zarar verebilir!
                          								</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Hakkımızda Başlık</label>
															<input value="<?php echo $aboutusayar['aboutbaslik']?>"type="text" class="form-control" name="aboutbaslik"id="aboutbaslik" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Hakkımızda İçerik</label>
															<input value="<?php echo $aboutusayar['abouticerik']?>"type="text" class="form-control" name="abouticerik"id="abouticerik" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Hakkımızda Resim</label>
															<input value="<?php echo $aboutusayar['aboutresim']?>"type="text" class="form-control" name="aboutresim"id="aboutresim" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Müşteri 1 Resim</label>
															<input value="<?php echo $aboutusayar['resim_1']?>"type="text" class="form-control" name="resim_1"id="resim_1" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Müşteri 1 İsim</label>
															<input value="<?php echo $aboutusayar['isim_1']?>"type="text" class="form-control" name="isim_1"id="isim_1" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Müşteri 1 Pozisyon</label>
															<input value="<?php echo $aboutusayar['pozisyon_1']?>"type="text" class="form-control" name="pozisyon_1"id="pozisyon_1" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Müşteri 1 Metin</label>
															<input value="<?php echo $aboutusayar['text_1']?>"type="text" class="form-control" name="text_1"id="text_1" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Müşteri 2 Resim</label>
															<input value="<?php echo $aboutusayar['resim_2']?>"type="text" class="form-control" name="resim_2"id="resim_2" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Müşteri 2 İsim</label>
															<input value="<?php echo $aboutusayar['isim_2']?>"type="text" class="form-control" name="isim_2"id="isim_2" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Müşteri 2 Pozisyon</label>
															<input value="<?php echo $aboutusayar['pozisyon_2']?>"type="text" class="form-control" name="pozisyon_2"id="pozisyon_2" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Müşteri 2 Metin</label>
															<input value="<?php echo $aboutusayar['text_2']?>"type="text" class="form-control" name="text_2"id="text_2" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Müşteri 3 Resim</label>
															<input value="<?php echo $aboutusayar['resim_3']?>"type="text" class="form-control" name="resim_3"id="resim_3" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Müşteri 3 İsim</label>
															<input value="<?php echo $aboutusayar['isim_3']?>"type="text" class="form-control" name="isim_3"id="isim_3" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Müşteri 3 Pozisyon</label>
															<input value="<?php echo $aboutusayar['pozisyon_3']?>"type="text" class="form-control" name="pozisyon_3"id="pozisyon_3" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Müşteri 3 Metin</label>
															<input value="<?php echo $aboutusayar['text_3']?>"type="text" class="form-control" name="text_3"id="text_3" required>
														</div>
														<div class="form-group">
															<div align="right" class="checkbox">
																<input  type="checkbox" id="terms" data-error="Lütfen burayı işaretleyin!" required>
																<label for="terms" >Onayla</label>
																<div class="help-block with-errors"></div>
															</div>
														</div>
														
														<div align="right" class="form-group mb-0">
															<button type="submit"name="about-update" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">Güncelle</span></button>
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
	