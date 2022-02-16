<?php include 'header.php';
	$userdata = $db -> prepare("SELECT * FROM users");
	$userdata->execute(); ?>
    <div class="wrapper theme-1-active pimary-color-pink">
		<!-- Main Content -->
		<div class="page-wrapper">
			<div class="container-fluid">
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">Kullanıcılar</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.php">Yönetim Paneli</a></li>
						<li class="active"><span>Kullanıcılar</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Kullanıcı Tablosu</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="datable_1" class="table table-hover display pb-30" >
												<thead>
													<th style="width:100%">ID</th>
													<th class="text-center">AD</th>
													<th class="text-center">SOYAD</th>
													<th class="text-center">MAİL</th>
													<th class="text-center">YETKİ</th>
													<th class="text-center">İŞLEMLER</th>
													<th class="text-center">KAYIT TARİHİ</th>
												</thead>
												
												<tbody>
													<?php while($userdatas = $userdata->fetch(PDO::FETCH_ASSOC)){?>
														<?php if($userdatas['useryetki'] == 0):?>
															<td><?php echo $userdatas['userid']?></td>
															<td><?php echo $userdatas['userad']?></td>
															<td><?php echo $userdatas['usersoyad']?></td>
															<td><?php echo $userdatas['usermail']?></td>
															<td>
																<span class="label label-danger">Yönetici</span>
															</td>
															<td><a href="database-user-edit.php?userid=<?php echo $userdatas['userid']?>" class="text-inverse"><button class="btn btn-danger btn-xs text-center">Düzenle</button></a> <a href="islem.php?userid=<?php echo $userdatas['userid']?>&userdelete=confirm" class="text-inverse" ><button class="btn btn-danger btn-xs text-center">Sil</button></a></td>
															<td><?php echo $userdatas['userzaman']?></td>
															</tr>
														<?php elseif($userdatas['useryetki'] == 1):?>
															<tr>
															<td><?php echo $userdatas['userid']?></td>
															<td><?php echo $userdatas['userad']?></td>
															<td><?php echo $userdatas['usersoyad']?></td>
															<td><?php echo $userdatas['usermail']?></td>
															<td>
																<span class="label label-success">Kullanıcı</span>
															</td>
															<td><a href="database-user-edit.php?userid=<?php echo $userdatas['userid']?>" class="text-inverse" ><button class="btn btn-danger btn-xs text-center">Düzenle</button></a> <a href="islem.php?userid=<?php echo $userdatas['userid']?>&userdelete=confirm" class="text-inverse" ><button class="btn btn-danger btn-xs text-center">Sil</button></a></td>
															<td><?php echo $userdatas['userzaman']?></td>
														</tr>
														<?php endif; }?>
												</tbody>
											
												<tfoot>
													<tr>
													<th style="width:100%">ID</th>
													<th class="text-center">AD</th>
													<th class="text-center">SOYAD</th>
													<th class="text-center">MAİL</th>
													<th class="text-center">YETKİ</th>
													<th class="text-center">İŞLEMLER</th>
													<th class="text-center">KAYIT TARİHİ</th>
													</tr>
												</tfoot>
											</table>
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
	<script src="assets/js/init.js"></script>
	<script src="assets/js/dashboard-data.js"></script>
	<script src="assets/js/dataTables-data.js"></script>

