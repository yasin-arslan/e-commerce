<?php include 'header.php'; ?>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper theme-2-active pimary-color-pink">
        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid pt-25">
                <div class="row">
					<div class="col-lg-7 col-xs-12">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="panel panel-default card-view">
									<div class="panel-heading">
										<div class="pull-left">
											<h6 class="panel-title">Traffic</h6>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="panel-wrapper collapse in">
										<div class="panel-body">
											<div id="e_chart_4" class="" style="height:172px;"></div>
										</div>
									</div>
								</div>
							
								<div id="weather_3" class="panel panel-default card-view pa-0 weather-gradient2">
									<div class="panel-wrapper collapse in">
										<div class="panel-body pa-0">
											<div class="row ma-0">
												<div class="col-xs-6 pa-0">
													<div class="left-block-wrap pa-30">
														<p class="block nowday"></p>
														<span class="block nowdate"></span>
														<div class="left-block  mt-15"></div>
													</div>
												</div>
												<div class="col-xs-6 pa-0">
													<div class="right-block-wrap pa-30">
														<div class="right-block"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="panel panel-default card-view">
									<div class="panel-heading">
										<div class="pull-left">
											<h6 class="panel-title txt-dark">browser stats</h6>
										</div>
										<div class="pull-right">
											<a href="#" class="pull-left inline-block mr-15">
												<i class="zmdi zmdi-download"></i>
											</a>
											<a href="#" class="pull-left inline-block close-panel" data-effect="fadeOut">
												<i class="zmdi zmdi-close"></i>
											</a>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="panel-wrapper collapse in">
										<div class="panel-body row">
												<div class="table-wrap sm-data-box-2">
												<div class="table-responsive">
													<table  class="table  top-countries mb-0">
														<tbody>
															<tr>
																<td>
																	<img src="../img/country/01-flag.png" alt="country">	
																	<span class="country-name txt-dark pl-15">Aland</span>
																</td>
																<td class="text-right">
																	<span class="badge badge-warning transparent-badge weight-500">57%</span>
																</td>
															</tr>
															<tr>
																<td>
																	<img src="../img/country/02-flag.png" alt="country">	
																	<span class="country-name txt-dark pl-15">Angola</span>
																</td>
																<td class="text-right">
																	<span class="badge badge-danger transparent-badge weight-500">17%</span>
																</td>
															</tr>
															<tr>
																<td>
																	<img src="../img/country/03-flag.png" alt="country">
																	<span class="country-name txt-dark pl-15">Anguilla</span>
																</td>
																
																<td class="text-right">
																	<span class="badge badge-info transparent-badge weight-500">27%</span>
																</td>
															</tr>
															<tr>
																<td>
																	<img src="../img/country/04-flag.png" alt="country">
																	<span class="country-name txt-dark pl-15">Bahrain</span>
																</td>
																<td class="text-right">
																	<span class="badge badge-danger transparent-badge weight-500">17%</span>
																</td>
															</tr>
															<tr>
																<td>
																	<img src="../img/country/05-flag.png"  alt="country">
																	<span class="country-name txt-dark pl-15">Australia</span>
																</td>
																<td class="text-right">
																	<span class="badge badge-primary transparent-badge weight-500">51%</span>
																</td>
															</tr>
															
															<tr>
																<td>
																	<img src="../img/country/06-flag.png" alt="country">	
																	<span class="country-name txt-dark pl-15">Austria</span>
																</td>
																
																<td class="text-right">
																	<span class="badge badge-warning transparent-badge weight-500">10%</span>
																</td>
															</tr>
															<tr>
																<td>
																	<img src="../img/country/07-flag.png" alt="country">
																	<span class="country-name txt-dark pl-15">Belgium</span>
																</td>
																<td class="text-right">
																	<span class="badge badge-success transparent-badge weight-500">27%</span>
																</td>
															</tr>
															<tr>
																<td class="txt-dark">
																	Other	
																</td>
																
																<td class="text-right">
																	<span class="badge badge-warning transparent-badge weight-500">10%</span>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
			<?php include 'footer.php' ?>
			
		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	
	<!-- Init JavaScript -->
	<script src="assets/js/init.js"></script>
	<script src="assets/js/dashboard2-data.js"></script>
</body>

</html>
