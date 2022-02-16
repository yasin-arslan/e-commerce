		<?php include 'header.php';
        $userdata = $db -> prepare("SELECT * FROM users WHERE userid=:userid");
        $userdata->execute(array(
            'userid' => $_GET['userid']
        ));
        $userdatatoedit = $userdata->fetch(PDO::FETCH_ASSOC);
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
								<li><a href="#"><span>Kullanıcılar</span></a></li>
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
															<label for="inputName" class="control-label mb-10">Kullanıcı Adı</label>
															<input value="<?php echo $userdatatoedit['userad']?>" type="text" class="form-control" name="userad"id="userad" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Kullanıcı Soyadı</label>
															<input value="<?php echo $userdatatoedit['usersoyad']?>"type="text" class="form-control" name="usersoyad"id="usersoyad" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">Resim</label>
															<input value="<?php echo $userdatatoedit['userresim']?>"type="text" class="form-control" name="userresim"id="userresim" required>
														</div>
														<div class="form-group">
															<label for="inputName" class="control-label mb-10">T.C</label>
															<input value="<?php echo $userdatatoedit['usertc']?>"type="text" class="form-control" name="usertc"id="usertc" required>
														</div>
                                                        <div class="form-group">
															<label for="inputName" class="control-label mb-10">Telefon Numarası</label>
															<input value="<?php echo $userdatatoedit['usergsm']?>"type="text" class="form-control" name="usergsm"id="usergsm" required>
														</div>
                                                        <div class="form-group">
															<label for="inputName" class="control-label mb-10">Adres</label>
															<input value="<?php echo $userdatatoedit['useradres']?>"type="text" class="form-control" name="useradres"id="useradres" required>
														</div>
                                                        <div class="form-group">
															<label for="inputName" class="control-label mb-10">Ünvanı</label>
															<input value="<?php echo $userdatatoedit['userunvan']?>"type="text" class="form-control" name="userunvan"id="userunvan" required>
														</div>
                                                        <div class="form-group">
															<label class="control-label mb-10">Kullanıcı Durumu</label>
															<select class="form-control"name="userdurum" id="userdurum" required>
                                                                <option value="1"<?php echo $userdatatoedit['userdurum'] == '1' ? 'selected=""': '';?>>Aktif</option>
                                                                <option value="0"<?php echo $userdatatoedit['userdurum'] == '0' ? 'selected=""': '';?>>Pasif</option>
                                                            </select>
														</div>
                                                        <div class="form-group">
															<label for="inputName" class="control-label mb-10">İl</label>
															<input value="<?php echo $userdatatoedit['il']?>"type="text" class="form-control" name="il" id="il" required>
														</div>
                                                        <div class="form-group">
															<label for="inputName" class="control-label mb-10">İlçe</label>
															<input value="<?php echo $userdatatoedit['ilce']?>"type="text" class="form-control" name="ilce" id="ilce" required>
														</div>
                                                        <div class="form-group">
															<label for="inputName" class="control-label mb-10">Kayıt Tarihi</label>
															<input disabled=""style="background-color:#212121;"value="<?php echo $userdatatoedit['userzaman']?>"type="text" class="form-control" name="userzaman"id="userzaman" required>
															<button disabled=""type="button" class="btn btn-outline-primary">Değiştirilemez!</button>
														</div>
                                                        <div class="form-group">
															<label for="inputName" class="control-label mb-10">E-Mail</label>
															<input style="background-color:#212121;"disabled=""value="<?php echo $userdatatoedit['usermail']?>"type="text" class="form-control" name="usermail"id="usermail" required>
                                                            <button disabled=""type="button" class="btn btn-outline-primary">Değiştirilemez!</button>
                                                        </div>
														<div class="form-group">
															<div align="right" class="checkbox">
																<input  type="checkbox" id="terms" data-error="Lütfen burayı işaretleyin!" required>
																<label for="terms" >Onayla</label>
																<div class="help-block with-errors"></div>
															</div>
														</div>
														<input type="hidden" name="userid" value="<?php echo $userdatatoedit['userid']?>">
														<div align="right" class="form-group mb-0">
															<button type="submit" name="user-edit-update" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">Güncelle</span></button>
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