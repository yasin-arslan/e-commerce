<?php include 'header.php';
		$menudata = $db -> prepare("SELECT * FROM menu");
        $menudata->execute(); ?>
    <div class="wrapper theme-1-active pimary-color-pink">
		<!-- Main Content -->
		<div class="page-wrapper">
			<div class="container-fluid">
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					 
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">E-Ticaret</a></li>
						<li class="active"><span>Menüler</span></li>
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
									<h6 class="panel-title txt-dark">Menüler</h6>
								</div>
								<a href="menu-add.php"><button class="btn btn-primary btn-xs text-center pull-right">Menü Ekle</button></a>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="datable_1" class="table table-hover display pb-30" >
												<thead>
                                                        <th class="text-center">MENÜ ID</th>
														<th class="text-center">MENÜ İSİM</th>
														<th class="text-center">MENÜ URL</th>
														<th class="text-center">MENÜ SIRA</th>
														<th class="text-center">MENÜ DURUM</th>
														<th class="text-center">İŞLEMLER</th>
												</thead>
												
												<tbody>
                                                <?php while($menudatas = $menudata->fetch(PDO::FETCH_ASSOC)){?>
														<tr>	
														<td class="text-center"><?php echo $menudatas['idmenu']?></td>
														<td class="text-center"><?php echo $menudatas['namemenu']?></td>
														<td class="text-center"><?php echo $menudatas['urlmenu']?></td>
														<td class="text-center"><?php echo $menudatas['linemenu']?></td>
														<td class="text-center"><?php if($menudatas['statusmenu']==1) {?>
														<button class="btn btn-success btn-xs btn-block pull-right">Aktif</button>
														<?php } else{?>
														<button class="btn btn-danger btn-xs btn-block pull-right">Pasif</button>
														<?php } ?></td>
														<td class="text-center"><a href="menu-edit.php?menuid=<?php echo $menudatas['idmenu']?>" class="text-inverse"><button class="btn btn-danger btn-xs text-center">Düzenle</button><a href="islem.php?menuid=<?php echo $menudatas['idmenu']?>&menudelete=confirm" class="text-inverse"><button class="btn btn-danger btn-xs text-center">Sil</button></td>
														
													</tr><?php } ?>
													
												</tbody>
											
												<tfoot>
														<th class="text-center">MENÜ ID</th>
														<th class="text-center">MENÜ İSİM</th>
														<th class="text-center">MENÜ URL</th>
														<th class="text-center">MENÜ SIRA</th>
														<th class="text-center">MENÜ DURUM</th>
														<th class="text-center">İŞLEMLER</th>
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

