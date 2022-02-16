<?php include 'header.php' ?>
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
						  <h5 class="txt-dark">Ürün Ekle</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="e-commerce.php">E-commerce</a></li>
							<li><a href=""><span>Ürün Ekle</span></a></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form action="#">
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>Ürün Hakkında</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Ürün İsmi</label>
															<input name="product-name" type="text" id="firstName" class="form-control">
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Ürün Alt Metni</label>
															<input name="product-sub-text"type="text" id="lastName" class="form-control">
														</div>
													</div>
													<!--/span-->
												</div>
												<!-- Row -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<!--Buraya kategoriler çekilecek -->
															<label class="control-label mb-10">Category</label>
															<select name="product-category"class="form-control" data-placeholder="Kategori seçiniz..." tabindex="1">
																<option value="Category 1">Category 1</option>
																<option value="Category 2">Category 2</option>
																<option value="Category 3">Category 5</option>
																<option value="Category 4">Category 4</option>
															</select>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Üretim Durumu</label>
															<div class="radio-list">
																<div class="radio-inline pl-0">
																	<div class="radio radio-info">
																		<input name="production"type="radio" name="radio" id="radio1" value="still">
																		<label for="radio1">Üretimde</label>
																	</div>
																</div>
																<div class="radio-inline">
																	<div class="radio radio-info">
																		<input name="production"type="radio" name="radio" id="radio2" value="will">
																		<label for="radio2">Üretilecek</label>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Fiyat</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-money"></i></div>
																<input name="price"type="text" class="form-control" id="exampleInputuname" placeholder="Türk lirası cinsinden giriniz...">
															</div>
														</div>
													</div>
												</div>
												<div class="seprator-block"></div>
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-comment-text mr-10"></i>Ürün Tarifi</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<textarea name="product-description"class="form-control" rows="4" placeholder="Ürünün açıklamasını giriniz..."></textarea>
														</div>
													</div>
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Ürün Başlığı</label>
															<input name="product-title"type="text" class="form-control">
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Ürün Anahtar Kelime</label>
															<input name="product-keywords"type="text" class="form-control">
														</div>
													</div>
												</div>
												<div class="seprator-block"></div>
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-collection-image mr-10"></i>Ürün Resim</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-lg-12">
														<div class="fileupload btn btn-info btn-anim"><i class="fa fa-upload"></i><span class="btn-text">Resim Seç</span>
															<input name="product-image"type="file" class="upload">
														</div>
													</div>
												</div>
												<div class="seprator-block"></div>
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-calendar-note mr-10"></i>Ürün Genel Bilgileri</h6>
												<hr class="light-grey-hr"/>
												
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<input name="product-brand"type="text" class="form-control" placeholder="Marka">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<input name="product-color"id="color" type="text" class="form-control" placeholder="Renk">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<input name="product-type"type="text" class="form-control" placeholder="Tipi">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<input name="product-design"id="brand" type="text" class="form-control" placeholder="Desen">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
																<!--Buraya kategoriler çekilecek -->
																<label class="control-label mb-10">Cinsiyet</label>
																<select name="product-gender"class="form-control" data-placeholder="Cinsiyet seçiniz..." tabindex="1">
																	<option value="erkek">Erkek</option>
																	<option value="kadin">Kadın</option>
																</select>
															</div>
														</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label mb-10">Beden</label>
															<select name="product-size"class="form-control" data-placeholder="Beden seçiniz..." tabindex="1">
																<option value="xs">XS</option>
																<option value="s">S</option>
																<option value="m">M</option>
																<option value="l">L</option>
																<option value="xl">XL</option>
															</select>
														</div>
													</div>
												</div>
												<div class="form-actions">
													<button name="save-product"class="btn btn-success btn-icon left-icon mr-10 pull-left"> <i class="fa fa-check"></i> <span>Kaydet</span></button>
													<button type="button" class="btn btn-warning pull-left">İptal</button>
													<div class="clearfix"></div>
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
				
				<?php include 'footer.php' ?>
				<!-- /Footer -->
				
			</div>
			<!-- /Main Content -->
		
		</div>
	
	
		<!-- Init JavaScript -->
		<script src="../full-width-dark/assets/js/init.js"></script>
		
	</body>
</html>