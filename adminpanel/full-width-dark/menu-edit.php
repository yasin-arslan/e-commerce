		<?php include 'header.php';
        $menudata = $db -> prepare("SELECT * FROM menu WHERE idmenu=:idmenu");
        $menudata->execute(array(
            'idmenu' => $_GET['menuid']
        ));
        $menudatatoedit = $menudata->fetch(PDO::FETCH_ASSOC);
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
								<li><a href="#"><span>Menüler</span></a></li>
								<li class="active"><span>Düzenle</span></li>
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
															<label for="inputName" class="control-label mb-10">Menü ID</label>
															<input style="background-color:#212121;"disabled=""value="<?php echo $menudatatoedit['idmenu']?>" type="text" class="form-control" name="idmenu"id="idmenu" required>
                                                            <button disabled=""type="button" class="btn btn-outline-primary">Değiştirilemez!</button>
                                                        </div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Menü Üst</label>
															<input style="background-color:#212121;"disabled=""value="<?php echo $menudatatoedit['topmenu']?>"type="text" class="form-control" name="topmenu"id="topmenu" required>
                                                            <button disabled=""type="button" class="btn btn-outline-primary">Değiştirilemez!</button>
                                                        </div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Menü İsmi</label>
															<input value="<?php echo $menudatatoedit['namemenu']?>"type="text" class="form-control" name="namemenu"id="namemenu" required>
                                                        </div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Menü İçeriği</label>
															<input value="<?php echo $menudatatoedit['contentmenu']?>"type="text" class="form-control" name="contentmenu"id="contentmenu" required>
														</div>
                                                        <div class="form-group">
															<label for="inputName" class="control-label mb-10">Menü URL</label>
															<input value="<?php echo $menudatatoedit['urlmenu']?>"type="text" class="form-control" name="urlmenu"id="urlmenu">
														</div>
                                                        <div class="form-group">
															<label for="inputName" class="control-label mb-10">Menü Sıra</label>
															<input value="<?php echo $menudatatoedit['linemenu']?>"type="text" class="form-control" name="linemenu"id="linemenu" required>
														</div>
                                                        <div class="form-group">
															<label class="control-label mb-10">Menü Durumu</label>
															<select class="form-control"name="statusmenu" id="statusmenu" required>
                                                                <option value="1"<?php echo $menudatatoedit['statusmenu'] == '1' ? 'selected=""': '';?>>Aktif</option>
                                                                <option value="0"<?php echo $menudatatoedit['statusmenu'] == '0' ? 'selected=""': '';?>>Pasif</option>
                                                            </select>
														</div>
														<div class="form-group">
															<div align="right" class="checkbox">
																<input  type="checkbox" id="terms" data-error="Lütfen burayı işaretleyin!" required>
																<label for="terms" >Onayla</label>
																<div class="help-block with-errors"></div>
															</div>
														</div>
														<input type="hidden" name="idmenu" value="<?php echo $menudatatoedit['idmenu']?>">
														<div align="right" class="form-group mb-0">
															<button type="submit" name="menu-edit" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">Güncelle</span></button>
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