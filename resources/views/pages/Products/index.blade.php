@extends('temp')

@section('content')
				<!-- Begin: life time stats -->
						<div class="portlet light">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-gift font-green-sharp"></i>
									<span class="caption-subject font-green-sharp bold uppercase">Products</span>
									<span class="caption-helper">manage products...</span>
								</div>
								<div class="actions">
									<div class="btn-group">
										<a class="btn btn-default btn-circle" href="javascript:;" data-toggle="dropdown">
										<i class="fa fa-share"></i> Tools <i class="fa fa-angle-down"></i>
										</a>
										<ul class="dropdown-menu pull-right">
											<li>
												<a href="javascript:;">
												Export to Excel </a>
											</li>
											<li>
												<a href="javascript:;">
												Export to CSV </a>
											</li>
											<li>
												<a href="javascript:;">
												Export to XML </a>
											</li>
											<li class="divider">
											</li>
											<li>
												<a href="javascript:;">
												Print Invoices </a>
											</li>
										</ul>
									</div>
								</div>
							</div>
<div class="portlet yellow-crusta box">
														<div class="portlet-title">
															<div class="caption">
																<i class="fa fa-gift"></i>{{trans('arabic_trans.company_bill')}}
															</div>
															<div class="actions">
																<a href="javascript:;" class="btn btn-default btn-sm">
																<i class="fa fa-plus"></i> {{trans('arabic_trans.new_bill')}} </a>
															</div>
														</div>
														<div class="portlet-body">
															<div class="row static-info">
																<div class="col-md-5 name">
																	 {{trans('arabic_trans.bill_num')}}
																</div>
																<div class="col-md-7 value">
																	<span class="label label-success">
																	2510 </span>
																   
																</div>
															</div>
															<div class="row static-info">
																<div class="col-md-5 name">
																	 {{trans('arabic_trans.company_name')}}
																</div>
																<div class="col-md-7 value">
																	 <span class="label label-info label-sm">
																	Elnaser Company </span>
																</div>
															</div>
															
															<div class="row static-info">
																<div class="col-md-5 name">
																	 {{trans('arabic_trans.bill_quantity')}}
																</div>
																<div class="col-md-7 value">
																	<span class="label label-success">
																	Closed </span>
																</div>
															</div>
															<div class="row static-info">
																<div class="col-md-5 name">
																	 {{trans('arabic_trans.bill_total')}}
																</div>
																<div class="col-md-7 value">
																	 Dec 27, 2013 7:16:25 PM
																</div>
															</div>
															<div class="row static-info">
																<div class="col-md-5 name">
																	 Payment Information:
																</div>
																<div class="col-md-7 value">
																	 Credit Card
																</div>
															</div>
														</div>
													</div>
	<div class="tabbable">
										<ul class="nav nav-tabs">
											<li class="active">
												<a href="#tab_general" data-toggle="tab">
												{{trans('arabic_trans.company_bill')}} </a>
											</li>
											<li>
												<a href="#tab_meta" data-toggle="tab">
												Meta </a>
											</li>
											<li>
												<a href="#tab_images" data-toggle="tab">
												Images </a>
											</li>
											<li>
												<a href="#tab_reviews" data-toggle="tab">
												Reviews <span class="badge badge-success">
												3 </span>
												</a>
											</li>
											<li>
												<a href="#tab_history" data-toggle="tab">
												History </a>
											</li>
										</ul>
										<div class="tab-content no-space">
											<div class="tab-pane active" id="tab_general">
												<div class="form-body">
													<div class="form-group">
														<label class="col-md-2 control-label"> {{trans('arabic_trans.company_name')}}<span class="required">
														* </span>
														</label>
														<div class="col-md-10">
															<select class="table-group-action-input form-control input-medium" name="product[tax_class]">
																<option value="">Select...</option>
																<option value="1">None</option>
																<option value="0">Taxable Goods</option>
																<option value="0">Shipping</option>
																<option value="0">USA</option>
															</select>
														</div>
													</div>

													<div class="form-group">
														<label class="col-md-2 control-label">{{trans('arabic_trans.bill_num')}}<span class="required">
														* </span>
														</label>
														<div class="col-md-10">
															<input type="text" class="form-control" name="product[name]" placeholder="">
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-2 control-label">{{trans('arabic_trans.bill_total')}}<span class="required">
														* </span>
														</label>
														<div class="col-md-10">
															<textarea class="form-control" name="product[description]"></textarea>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-2 control-label">Short Description: <span class="required">
														* </span>
														</label>
														<div class="col-md-10">
															<textarea class="form-control" name="product[short_description]"></textarea>
															<span class="help-block">
															shown in product listing </span>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-2 control-label">Categories: <span class="required">
														* </span>
														</label>
														<div class="col-md-10">
															<div class="form-control height-auto">
																<div class="scroller" style="height:275px;" data-always-visible="1">
																	<ul class="list-unstyled">
																		<li>
																			<label><input type="checkbox" name="product[categories][]" value="1">Mens</label>
																			<ul class="list-unstyled">
																				<li>
																					<label><input type="checkbox" name="product[categories][]" value="1">Footwear</label>
																				</li>
																				<li>
																					<label><input type="checkbox" name="product[categories][]" value="1">Clothing</label>
																				</li>
																				<li>
																					<label><input type="checkbox" name="product[categories][]" value="1">Accessories</label>
																				</li>
																				<li>
																					<label><input type="checkbox" name="product[categories][]" value="1">Fashion Outlet</label>
																				</li>
																			</ul>
																		</li>
																		<li>
																			<label><input type="checkbox" name="product[categories][]" value="1">Football Shirts</label>
																			<ul class="list-unstyled">
																				<li>
																					<label><input type="checkbox" name="product[categories][]" value="1">Premier League</label>
																				</li>
																				<li>
																					<label><input type="checkbox" name="product[categories][]" value="1">Football League</label>
																				</li>
																				<li>
																					<label><input type="checkbox" name="product[categories][]" value="1">Serie A</label>
																				</li>
																				<li>
																					<label><input type="checkbox" name="product[categories][]" value="1">Bundesliga</label>
																				</li>
																			</ul>
																		</li>
																		<li>
																			<label><input type="checkbox" name="product[categories][]" value="1">Brands</label>
																			<ul class="list-unstyled">
																				<li>
																					<label><input type="checkbox" name="product[categories][]" value="1">Adidas</label>
																				</li>
																				<li>
																					<label><input type="checkbox" name="product[categories][]" value="1">Nike</label>
																				</li>
																				<li>
																					<label><input type="checkbox" name="product[categories][]" value="1">Airwalk</label>
																				</li>
																				<li>
																					<label><input type="checkbox" name="product[categories][]" value="1">Kangol</label>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</div>
															</div>
															<span class="help-block">
															select one or more categories </span>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-2 control-label">Available Date: <span class="required">
														* </span>
														</label>
														<div class="col-md-10">
															<div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
																<input type="text" class="form-control" name="product[available_from]">
																<span class="input-group-addon">
																to </span>
																<input type="text" class="form-control" name="product[available_to]">
															</div>
															<span class="help-block">
															availability daterange. </span>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-2 control-label">SKU: <span class="required">
														* </span>
														</label>
														<div class="col-md-10">
															<input type="text" class="form-control" name="product[sku]" placeholder="">
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-2 control-label">Price: <span class="required">
														* </span>
														</label>
														<div class="col-md-10">
															<input type="text" class="form-control" name="product[price]" placeholder="">
														</div>
													</div>
													
													<div class="form-group">
														<label class="col-md-2 control-label">Status: <span class="required">
														* </span>
														</label>
														<div class="col-md-10">
															<select class="table-group-action-input form-control input-medium" name="product[status]">
																<option value="">Select...</option>
																<option value="1">Published</option>
																<option value="0">Not Published</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab_meta">
												<div class="form-body">
													<div class="form-group">
														<label class="col-md-2 control-label">Meta Title:</label>
														<div class="col-md-10">
															<input type="text" class="form-control maxlength-handler" name="product[meta_title]" maxlength="100" placeholder="">
															<span class="help-block">
															max 100 chars </span>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-2 control-label">Meta Keywords:</label>
														<div class="col-md-10">
															<textarea class="form-control maxlength-handler" rows="8" name="product[meta_keywords]" maxlength="1000"></textarea>
															<span class="help-block">
															max 1000 chars </span>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-2 control-label">Meta Description:</label>
														<div class="col-md-10">
															<textarea class="form-control maxlength-handler" rows="8" name="product[meta_description]" maxlength="255"></textarea>
															<span class="help-block">
															max 255 chars </span>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab_images">
												<div class="alert alert-success margin-bottom-10">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
													<i class="fa fa-warning fa-lg"></i> Image type and information need to be specified.
												</div>
												<div id="tab_images_uploader_container" class="text-align-reverse margin-bottom-10">
													<a id="tab_images_uploader_pickfiles" href="javascript:;" class="btn yellow">
													<i class="fa fa-plus"></i> Select Files </a>
													<a id="tab_images_uploader_uploadfiles" href="javascript:;" class="btn green">
													<i class="fa fa-share"></i> Upload Files </a>
												</div>
												<div class="row">
													<div id="tab_images_uploader_filelist" class="col-md-6 col-sm-12">
													</div>
												</div>
												<table class="table table-bordered table-hover">
												<thead>
												<tr role="row" class="heading">
													<th width="8%">
														 Image
													</th>
													<th width="25%">
														 Label
													</th>
													<th width="8%">
														 Sort Order
													</th>
													<th width="10%">
														 Base Image
													</th>
													<th width="10%">
														 Small Image
													</th>
													<th width="10%">
														 Thumbnail
													</th>
													<th width="10%">
													</th>
												</tr>
												</thead>
												<tbody>
												<tr>
													<td>
														<a href="../../assets/admin/pages/media/works/img1.jpg" class="fancybox-button" data-rel="fancybox-button">
														<img class="img-responsive" src="../../assets/admin/pages/media/works/img1.jpg" alt="">
														</a>
													</td>
													<td>
														<input type="text" class="form-control" name="product[images][1][label]" value="Thumbnail image">
													</td>
													<td>
														<input type="text" class="form-control" name="product[images][1][sort_order]" value="1">
													</td>
													<td>
														<label>
														<input type="radio" name="product[images][1][image_type]" value="1">
														</label>
													</td>
													<td>
														<label>
														<input type="radio" name="product[images][1][image_type]" value="2">
														</label>
													</td>
													<td>
														<label>
														<input type="radio" name="product[images][1][image_type]" value="3" checked>
														</label>
													</td>
													<td>
														<a href="javascript:;" class="btn default btn-sm">
														<i class="fa fa-times"></i> Remove </a>
													</td>
												</tr>
												<tr>
													<td>
														<a href="../../assets/admin/pages/media/works/img2.jpg" class="fancybox-button" data-rel="fancybox-button">
														<img class="img-responsive" src="../../assets/admin/pages/media/works/img2.jpg" alt="">
														</a>
													</td>
													<td>
														<input type="text" class="form-control" name="product[images][2][label]" value="Product image #1">
													</td>
													<td>
														<input type="text" class="form-control" name="product[images][2][sort_order]" value="1">
													</td>
													<td>
														<label>
														<input type="radio" name="product[images][2][image_type]" value="1">
														</label>
													</td>
													<td>
														<label>
														<input type="radio" name="product[images][2][image_type]" value="2" checked>
														</label>
													</td>
													<td>
														<label>
														<input type="radio" name="product[images][2][image_type]" value="3">
														</label>
													</td>
													<td>
														<a href="javascript:;" class="btn default btn-sm">
														<i class="fa fa-times"></i> Remove </a>
													</td>
												</tr>
												<tr>
													<td>
														<a href="../../assets/admin/pages/media/works/img3.jpg" class="fancybox-button" data-rel="fancybox-button">
														<img class="img-responsive" src="../../assets/admin/pages/media/works/img3.jpg" alt="">
														</a>
													</td>
													<td>
														<input type="text" class="form-control" name="product[images][3][label]" value="Product image #2">
													</td>
													<td>
														<input type="text" class="form-control" name="product[images][3][sort_order]" value="1">
													</td>
													<td>
														<label>
														<input type="radio" name="product[images][3][image_type]" value="1" checked>
														</label>
													</td>
													<td>
														<label>
														<input type="radio" name="product[images][3][image_type]" value="2">
														</label>
													</td>
													<td>
														<label>
														<input type="radio" name="product[images][3][image_type]" value="3">
														</label>
													</td>
													<td>
														<a href="javascript:;" class="btn default btn-sm">
														<i class="fa fa-times"></i> Remove </a>
													</td>
												</tr>
												</tbody>
												</table>
											</div>
											<div class="tab-pane" id="tab_reviews">
												<div class="table-container">
													<table class="table table-striped table-bordered table-hover" id="datatable_reviews">
													<thead>
													<tr role="row" class="heading">
														<th width="5%">
															 Review&nbsp;#
														</th>
														<th width="10%">
															 Review&nbsp;Date
														</th>
														<th width="10%">
															 Customer
														</th>
														<th width="20%">
															 Review&nbsp;Content
														</th>
														<th width="10%">
															 Status
														</th>
														<th width="10%">
															 Actions
														</th>
													</tr>
													<tr role="row" class="filter">
														<td>
															<input type="text" class="form-control form-filter input-sm" name="product_review_no">
														</td>
														<td>
															<div class="input-group date date-picker margin-bottom-5" data-date-format="dd/mm/yyyy">
																<input type="text" class="form-control form-filter input-sm" readonly name="product_review_date_from" placeholder="From">
																<span class="input-group-btn">
																<button class="btn btn-sm default" type="button"><i class="fa fa-calendar"></i></button>
																</span>
															</div>
															<div class="input-group date date-picker" data-date-format="dd/mm/yyyy">
																<input type="text" class="form-control form-filter input-sm" readonly name="product_review_date_to" placeholder="To">
																<span class="input-group-btn">
																<button class="btn btn-sm default" type="button"><i class="fa fa-calendar"></i></button>
																</span>
															</div>
														</td>
														<td>
															<input type="text" class="form-control form-filter input-sm" name="product_review_customer">
														</td>
														<td>
															<input type="text" class="form-control form-filter input-sm" name="product_review_content">
														</td>
														<td>
															<select name="product_review_status" class="form-control form-filter input-sm">
																<option value="">Select...</option>
																<option value="pending">Pending</option>
																<option value="approved">Approved</option>
																<option value="rejected">Rejected</option>
															</select>
														</td>
														<td>
															<div class="margin-bottom-5">
																<button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search"></i> Search</button>
															</div>
															<button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i> Reset</button>
														</td>
													</tr>
													</thead>
													<tbody>
													</tbody>
													</table>
												</div>
											</div>
											<div class="tab-pane" id="tab_history">
												<div class="table-container">
													<table class="table table-striped table-bordered table-hover" id="datatable_history">
													<thead>
													<tr role="row" class="heading">
														<th width="25%">
															 Datetime
														</th>
														<th width="55%">
															 Description
														</th>
														<th width="10%">
															 Notification
														</th>
														<th width="10%">
															 Actions
														</th>
													</tr>
													<tr role="row" class="filter">
														<td>
															<div class="input-group date datetime-picker margin-bottom-5" data-date-format="dd/mm/yyyy hh:ii">
																<input type="text" class="form-control form-filter input-sm" readonly name="product_history_date_from" placeholder="From">
																<span class="input-group-btn">
																<button class="btn btn-sm default date-set" type="button"><i class="fa fa-calendar"></i></button>
																</span>
															</div>
															<div class="input-group date datetime-picker" data-date-format="dd/mm/yyyy hh:ii">
																<input type="text" class="form-control form-filter input-sm" readonly name="product_history_date_to" placeholder="To">
																<span class="input-group-btn">
																<button class="btn btn-sm default date-set" type="button"><i class="fa fa-calendar"></i></button>
																</span>
															</div>
														</td>
														<td>
															<input type="text" class="form-control form-filter input-sm" name="product_history_desc" placeholder="To"/>
														</td>
														<td>
															<select name="product_history_notification" class="form-control form-filter input-sm">
																<option value="">Select...</option>
																<option value="pending">Pending</option>
																<option value="notified">Notified</option>
																<option value="failed">Failed</option>
															</select>
														</td>
														<td>
															<div class="margin-bottom-5">
																<button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search"></i> Search</button>
															</div>
															<button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i> Reset</button>
														</td>
													</tr>
													</thead>
													<tbody>
													</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
<!-- ----------------------------------- -->
<div class="row">
					<div class="col-md-12">
<!-- BEGIN PORTLET-->
						<div class="portlet box green-meadow">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-gift"></i>{{trans('arabic_trans.company_bill')}}
								</div>
								<div class="tools">
									<a href="javascript:;" class="collapse">
									</a>
									<a href="#portlet-config" data-toggle="modal" class="config">
									</a>
									<a href="javascript:;" class="reload">
									</a>
									<a href="javascript:;" class="remove">
									</a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form action="#" class="form-horizontal form-bordered">
									<div class="form-body">
									</div>
									<div class="form-actions">
										<div class="row">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" class="btn green"><i class="fa fa-check"></i>submit</button>
												<button type="button" class="btn default">Cancel</button>
											</div>
										</div>
									</div>
								</form>
								<!-- END FORM-->
							</div>
						</div>
						<!-- END PORTLET-->
</div>
</div>
<!-- ----------------------------------- -->

							<div class="portlet-body">
								<div class="table-container">
									<div class="table-actions-wrapper">
										<span>
										</span>
										<select class="table-group-action-input form-control input-inline input-small input-sm">
											<option value="">Select...</option>
											<option value="publish">Publish</option>
											<option value="unpublished">Un-publish</option>
											<option value="delete">Delete</option>
										</select>
										<button class="btn btn-sm yellow table-group-action-submit"><i class="fa fa-check"></i> Submit</button>
									</div>
									<table class="table table-striped table-bordered table-hover" id="datatable_products">
									<thead>
									<tr role="row" class="heading">
										<th width="1%">
											<input type="checkbox" class="group-checkable">
										</th>
										<th width="15%">
											 {{trans('arabic_trans.product_name')}}
										</th>
										<th width="15%">
											  {{trans('arabic_trans.product_classification')}}
										</th>
										<th width="15%">
											  {{trans('arabic_trans.product_quantity')}}
										</th>
										<th width="10%">
											  {{trans('arabic_trans.product_alert_quantity')}}  
										</th>
										<th width="10%">
											  {{trans('arabic_trans.product_price')}}  
										</th>
										<th width="10%">
											   {{trans('arabic_trans.product_gomla')}}  
										</th>

										<th width="10%">
											   {{trans('arabic_trans.product_barcode')}}  
										</th>
										
										<th width="15%">
											   {{trans('arabic_trans.product_enter_date')}}   
										</th>
										<th width="10%">
											 Status
										</th>
										<th width="10%">
											 Actions
										</th>
									</tr>
									<tr role="row" class="filter">
										<td>
										</td>
										<td>
											<input type="text" class="form-control form-filter input-sm" name="product_name">
										</td>
										<td>
											<select name="product_category" class="form-control form-filter input-sm">
												<option value="">Select...</option>
												<option value="1">Mens</option>
											</select>
										</td>
										<td>
											<div class="margin-bottom-5">
												<input type="text" class="form-control form-filter input-sm" name="product_price_from" />
											</div>	
										</td>
										<td>
											<div class="margin-bottom-5">
												<input type="text" class="form-control form-filter input-sm" name="product_price_from" />
											</div>	
										</td>

										<td>
											<div class="margin-bottom-5">
												<input type="text" class="form-control form-filter input-sm" name="product_price_from" />
											</div>	
										</td>
										<td>
											<div class="margin-bottom-5">
												<input type="text" class="form-control form-filter input-sm" name="product_price_from" />
											</div>
											
										</td>
										<td>
											<div class="margin-bottom-5">
												<input type="text" class="form-control form-filter input-sm" name="product_quantity_from" />
											</div>
											
										</td>
										<td>
											<div class="input-group date date-picker margin-bottom-5" data-date-format="dd/mm/yyyy">
												<input type="text" class="form-control form-filter input-sm" readonly name="product_created_from" >
												<span class="input-group-btn">
												<button class="btn btn-sm default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
										</td>
										<td>
											<select name="product_status" class="form-control form-filter input-sm">
												<option value="">Select...</option>
												<option value="published">Published</option>
												<option value="notpublished">Not Published</option>
												<option value="deleted">Deleted</option>
											</select>
										</td>
										<td>
											<div class="margin-bottom-5">
												<button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search"></i> Search</button>
											</div>
											<button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i> Reset</button>
										</td>
									</tr>

				
									</thead>
									<tbody>
									</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- End: life time stats -->
	@endsection