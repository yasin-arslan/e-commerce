<?php include 'header.php'; ?>
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
					  <h5 class="txt-dark">Mesaj Kutusu</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.php">Yönetim Paneli</a></li>
						<li><a href="#"><span>Mesaj Kutusu</span></a></li>

					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="mail-box">
										<div class="row">
											<aside class="col-lg-3 col-md-4 pr-0">
												<div class="mt-20 mb-20 ml-15 mr-15">
													<a href="" data-toggle="modal"  title="Mesajlar"    class="btn btn-success btn-block">
													Klasörler
													</a>
													<!-- Modal -->
													<div aria-hidden="true" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
																	<h4 class="modal-title">Compose</h4>
																</div>
																<div class="modal-body">
																	<form role="form" class="form-horizontal">
																		<div class="form-group">
																			<label class="col-lg-2 control-label">To</label>
																			<div class="col-lg-10">
																				<input type="text" placeholder="" id="inputEmail1" class="form-control">
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-lg-2 control-label">Cc / Bcc</label>
																			<div class="col-lg-10">
																				<input type="text" placeholder="" id="cc" class="form-control">
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-lg-2 control-label">Subject</label>
																			<div class="col-lg-10">
																				<input type="text" placeholder="" id="inputPassword1" class="form-control">
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-lg-2 control-label">Message</label>
																			<div class="col-lg-10">
																				<textarea class="textarea_editor form-control" rows="15" placeholder="Enter text ..."></textarea>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-lg-offset-2 col-lg-10">
																				<div class="fileupload btn btn-info btn-anim mr-10"><i class="fa fa-paperclip"></i><span class="btn-text">attachments</span>
																					<input type="file" class="upload">
																				</div>
																				
																				<button class="btn btn-success" type="submit">Send</button>
																			</div>
																		</div>
																	</form>
																</div>
															</div>
															<!-- /.modal-content -->
														</div>
														<!-- /.modal-dialog -->
													</div>
													<!-- /.modal -->
												</div>
												<ul class="inbox-nav mb-30">
													<li>
														<a href="inbox.php"><i class="zmdi zmdi-inbox"></i> Gelen Kutusu <span class="label label-danger ml-10"><!-- Buraya bildirim sistemi yapılabilir!--></span></a>
													</li>
													<li class="active">
														<a href="inbox-send.php"><i class="zmdi zmdi-email-open"></i> Gönderilenler </a>
													</li>
												</ul>
												<h6 class="pl-15 mb-20">Konular</h6>
												<ul class="inbox-nav mb-30">
													<li> <a href="#"> <i class=" fa fa-stop txt-danger"></i> Ödeme </a> </li>
													<li> <a href="#"> <i class=" fa fa-stop txt-success"></i> Ürün Sipariş </a> </li>
													<li> <a href="#"> <i class=" fa fa-stop txt-info "></i> Ürün İade </a>
													</li>
												</ul>
											</aside>
											
											<aside class="col-lg-9 col-md-8 pl-0">
												<div class="panel panel-refresh pa-0">
													<div class="refresh-container">
														<div class="la-anim-1"></div>
													</div>
													<div class="panel-heading pt-20 pb-20 pl-15 pr-15">
														<div class="pull-left">
															<h6 class="panel-title txt-dark">Buraya hangi sayfada olduğumuz gelecek!</h6>
														</div>
														<div class="pull-right">
															<form role="search" class="inbox-search inline-block pull-left mr-15">
																<div class="input-group">
																	<input name="example-input1-group2" class="form-control" placeholder="Ara" type="text">
																	<span class="input-group-btn">
																	<button type="button" class="btn  btn-default" data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
																	</span>
																</div>
															</form>
															<a href="#" class="pull-left inline-block refresh">
																<i class="zmdi zmdi-replay"></i>
															</a>
														</div>
														<div class="clearfix"></div>
													</div>
													<div class="panel-wrapper collapse in">
														<div class="panel-body inbox-body pa-0">
															<div class="mail-option pl-15 pr-15">
																<div class="chk-all">
																	<div class="checkbox checkbox-default inline-block">
																		<input type="checkbox" id="checkbox051"/>
																		<label for="checkbox051"></label>
																	</div>
																	<div class="btn-group">
																		Hepsi
																	</div>
																</div>
																<ul class="unstyled inbox-pagination">
																	<li><span>1-10 arası gösteriliyor...</span></li>
																	<li>
																		<a class="pl-15 pr-15" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
																	</li>
																	<li>
																		<a href="#"><i class="fa fa-angle-right pagination-right"></i></a>
																	</li>
																</ul>
															</div>
															<div class="table-responsive mb-0">
																<table class="table table-inbox table-hover mb-0">
																	<tbody>
																		<tr class="unread">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox012"/>
																					<label for="checkbox012"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16"></i>
																			</td>
																			<td class="view-message  dont-show">Clay Masse<span class="label label-warning pull-right">new</span></td>
																			<td class="view-message ">Added a new class: Login Class Fast Site</td>
																			<td class="view-message  text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">9:27 AM</span>
																			</td>
																		</tr>
																		<tr class="">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox016"/>
																					<label for="checkbox016"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16 inbox-started"></i>
																			</td>
																			<td class="view-message dont-show">Ezequiel Merideth<span class="label label-primary pull-right">social</span></td>
																			<td class="view-message">Stop wasting your visitors </td>
																			<td class="view-message text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">March 01</span>
																			</td>
																		</tr>
																		
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</aside>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
			</div>
			
			<?php include 'footer.php'; ?>
			
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	

	<!-- Init JavaScript -->
	<script src="assets/js/init.js"></script>
	
</body>

</html>
