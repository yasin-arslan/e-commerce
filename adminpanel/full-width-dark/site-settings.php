		<?php include 'header.php';
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
								<li class="active"><span>Site Ayarları</span></li>
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
															<label for="inputName" class="control-label mb-10">Site Başlığı</label>
															<input value="<?php echo $ayarcek['title']?>" type="text" class="form-control" name="title"id="title" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Site Açıklaması</label>
															<input value="<?php echo $ayarcek['description']?>"type="text" class="form-control" name="description"id="description" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Site Anahtar Kelimeler</label>
															<input value="<?php echo $ayarcek['keywords']?>"type="text" class="form-control" name="keywords"id="keywords" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Site Yazarı</label>
															<input value="<?php echo $ayarcek['author']?>"type="text" class="form-control" name="author"id="author" required>
														</div>
														<div class="form-group">
															<div align="right" class="checkbox">
																<input  type="checkbox" id="terms" data-error="Lütfen burayı işaretleyin!" required>
																<label for="terms" >Onayla</label>
																<div class="help-block with-errors"></div>
															</div>
														</div>
														
														<div align="right" class="form-group mb-0">
															<button type="submit" name="settings-update" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">Güncelle</span></button>
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