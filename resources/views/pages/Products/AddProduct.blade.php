@extends('temp')

@section('styles')

<link rel="stylesheet" type="text/css" href="{{ asset('public/global/plugins/select2/select2.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('public/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap-rtl.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('public/global/plugins/bootstrap-datepicker/css/datepicker.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('public/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}"/>


<link rel="stylesheet" type="text/css" href="{{ asset('public/global/plugins/select2/select2.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('public/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap-rtl.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('public/global/plugins/bootstrap-datepicker/css/datepicker.css') }}"/>
@endsection

@section('content')

	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>Dashboard <small>statistics & reports</small></h1>
				</div>
				<!-- END PAGE TITLE -->
				<!-- BEGIN PAGE TOOLBAR -->
				<div class="page-toolbar">
					<!-- BEGIN THEME PANEL -->
					<div class="btn-group btn-theme-panel">
						<a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
						<i class="icon-settings"></i>
						</a>
						<div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-12">
									<h3>THEME</h3>
									<ul class="theme-colors">
										<li class="theme-color theme-color-default" data-theme="default">
											<span class="theme-color-view"></span>
											<span class="theme-color-name">Dark Header</span>
										</li>
										<li class="theme-color theme-color-light active" data-theme="light">
											<span class="theme-color-view"></span>
											<span class="theme-color-name">Light Header</span>
										</li>
									</ul>
								</div>
								<div class="col-md-8 col-sm-8 col-xs-12 seperator">
									<h3>LAYOUT</h3>
									<ul class="theme-settings">
										<li>
											 Theme Style
											<select class="layout-style-option form-control input-small input-sm">
												<option value="square">Square corners</option>
												<option value="rounded" selected="selected">Rounded corners</option>
											</select>
										</li>
										<li>
											 Layout
											<select class="layout-option form-control input-small input-sm">
												<option value="fluid" selected="selected">Fluid</option>
												<option value="boxed">Boxed</option>
											</select>
										</li>
										<li>
											 Header
											<select class="page-header-option form-control input-small input-sm">
												<option value="fixed" selected="selected">Fixed</option>
												<option value="default">Default</option>
											</select>
										</li>
										<li>
											 Top Dropdowns
											<select class="page-header-top-dropdown-style-option form-control input-small input-sm">
												<option value="light">Light</option>
												<option value="dark" selected="selected">Dark</option>
											</select>
										</li>
										<li>
											 Sidebar Mode
											<select class="sidebar-option form-control input-small input-sm">
												<option value="fixed">Fixed</option>
												<option value="default" selected="selected">Default</option>
											</select>
										</li>
										<li>
											 Sidebar Menu
											<select class="sidebar-menu-option form-control input-small input-sm">
												<option value="accordion" selected="selected">Accordion</option>
												<option value="hover">Hover</option>
											</select>
										</li>
										<li>
											 Sidebar Position
											<select class="sidebar-pos-option form-control input-small input-sm">
												<option value="left" selected="selected">Left</option>
												<option value="right">Right</option>
											</select>
										</li>
										<li>
											 Footer
											<select class="page-footer-option form-control input-small input-sm">
												<option value="fixed">Fixed</option>
												<option value="default" selected="selected">Default</option>
											</select>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- END THEME PANEL -->
				</div>
				<!-- END PAGE TOOLBAR -->
			</div>
			<!-- END PAGE HEAD -->
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb hide">
				<li>
					<a href="javascript:;">Home</a><i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Dashboard
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row margin-top-10">
				
	                                             <div class="portlet yellow-crusta box">
													<div class="portlet-title">
														<div class="caption">
															<i class="fa fa-cogs"></i>فاتورة شراء
														</div>
														<div class="actions">
															<a href="javascript:;" class="btn btn-default" id="addCompanyBillModal">
															<i class="fa fa-plus"></i> فتح فاتورة جديدة </a>
														</div>
													</div>
													<div class="portlet-body">
														<div class="row static-info">
															<div class="col-md-5 name">
																 رقم الفاتورة # :
															</div>
															<div class="col-md-7 value">
																 <span class="label label-success">
															{{$company_bills->bill_num}} </span>
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 اسم الشركة :
															</div>
															<div class="col-md-7 value">
																 <span class="label label-info label-sm">{{$company_bills->company_id}}</span>
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 الكمية :
															</div>
															<div class="col-md-7 value">
																{{$company_bills->quantity}}														
															</div>
														</div>

														<div class="row static-info">
															<div class="col-md-5 name">
																 الاجمالى :
															</div>
															<div class="col-md-7 value">
																 {{$company_bills->total_bill}}
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 المدفوع :
															</div>
															<div class="col-md-7 value">
																 <div class="col-md-4">
														<div class="input-icon">
															<i class="fa fa-money"></i>
															<input type="text" class="form-control input-circle" placeholder="المدفوع">
														</div>

													</div>
											
															</div>

														</div>
                                            <div class="row static-info">
															<div class="col-md-5 name">
																 تاريخ الفاتورة :
															</div>
															<div class="col-md-7 value">
																{{ $company_bills->created_at->format('Y-d-m')}}															
															</div>
														</div>
														
													</div>
												</div>
			</div>
<!-- Begin: Add New Product -->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-plus font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase"> أضافة </span>
								<span class="caption-helper">منتج جديد</span>
							</div>
							<div class="actions">
								<button class="btn btn-sm yellow table-group-action-submit"><i class="fa fa-check"></i> أضافة المنتج</button>
							</div>
						</div>
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
									
									<th width="15%">
										 اسم المنتج
									</th>
									<th width="15%">
										 التصنيف
									</th>
									<th width="10%">
										 سعر الشراء
									</th>
									<th width="10%">
										سعر البيع
									</th>
									<th width="15%">
										الكمية
									</th>
									<th width="10%">
										 كمية التنبية
									</th>

									<th width="10%">
										 الباركود
									</th>
								</tr>
								<tr role="row" class="filter">
									
									<td>
										<input type="text" class="form-control form-filter input-sm" name="name">
									</td>
									<td>
										<div class="clearfix">
										<select name="classification_id" class="form-control form-filter input-sm">
											<option value="">Select...</option>
										</select>
										<button class="btn btn-sm red "><i class="fa fa-plus"></i> </button>
									</div>
									</td>
									<td>
										<input type="text" class="form-control form-filter input-sm" name="Gomla">
									</td>
									<td>
										<input type="text" class="form-control form-filter input-sm" name="price">
									</td>
									<td>
										<input type="text" class="form-control form-filter input-sm" name="quantity">
									</td>
									<td>
										<input type="text" class="form-control form-filter input-sm" name="Alarm_QUANTITY">
									</td>
									<td>
										<input type="text" class="form-control form-filter input-sm" name="BARCODE">
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
									<th width="10%">
										 ID
									</th>
									<th width="15%">
										 Product&nbsp;Name
									</th>
									<th width="15%">
										 Category
									</th>
									<th width="10%">
										 Price
									</th>
									<th width="10%">
										 Quantity
									</th>
									<th width="15%">
										 Date&nbsp;Created
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
										<input type="text" class="form-control form-filter input-sm" name="product_id">
									</td>
									<td>
										<input type="text" class="form-control form-filter input-sm" name="product_name">
									</td>
									<td>
										<select name="product_category" class="form-control form-filter input-sm">
											<option value="">Select...</option>
											<option value="1">Mens</option>
											<option value="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Footwear</option>
											<option value="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Clothing</option>
											<option value="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Accessories</option>
											<option value="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fashion Outlet</option>
											<option value="6">Football Shirts</option>
											<option value="7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Premier League</option>
											<option value="8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Football League</option>
											<option value="9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Serie A</option>
											<option value="10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bundesliga</option>
											<option value="11">Brands</option>
											<option value="12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adidas</option>
											<option value="13">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nike</option>
											<option value="14">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Airwalk</option>
											<option value="15">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USA Pro</option>
											<option value="16">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kangol</option>
										</select>
									</td>
									<td>
										<div class="margin-bottom-5">
											<input type="text" class="form-control form-filter input-sm" name="product_price_from" placeholder="From"/>
										</div>
										<input type="text" class="form-control form-filter input-sm" name="product_price_to" placeholder="To"/>
									</td>
									<td>
										<div class="margin-bottom-5">
											<input type="text" class="form-control form-filter input-sm" name="product_quantity_from" placeholder="From"/>
										</div>
										<input type="text" class="form-control form-filter input-sm" name="product_quantity_to" placeholder="To"/>
									</td>
									<td>
										<div class="input-group date date-picker margin-bottom-5" data-date-format="dd/mm/yyyy">
											<input type="text" class="form-control form-filter input-sm" readonly name="product_created_from" placeholder="From">
											<span class="input-group-btn">
											<button class="btn btn-sm default" type="button"><i class="fa fa-calendar"></i></button>
											</span>
										</div>
										<div class="input-group date date-picker" data-date-format="dd/mm/yyyy">
											<input type="text" class="form-control form-filter input-sm" readonly name="product_created_to " placeholder="To">
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
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>

	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->					
   <div id="formModal" aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1"
             class="modal bs-example-modal-basic fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">
                            ×
                        </button>
                        <h4 class="modal-title">Add New Company Bill</h4>
                    </div>
                    <div class="modal-body">
                    	<form method="post" id="company_bill_form">
<input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="id" id="id">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group{{$errors->has('client_Name')?' has-error':''}}">
                                        <strong>رقم الفاتورة</strong>

                                               <div class="form-group">
                       	 <input type="text" name="client_Name" class="form-control" id="client_Name"
                       placeholder="Client Name"
                       value="{{ old('client_Name') }}">
                {!! Form::text('bill_num','2',['class'=>'form-control']) !!}
            </div>
                                        <span class="text-danger" id="client_Name_error"></span>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group{{$errors->has('client_Unit')?' has-error':''}}">
                                        <strong>اسم الشركة</strong>
                                        <div class="form-group">
                {!! Form::select('company_id', $companies, null, ['class'=>'form-control']) !!}

            </div>
                                        <span class="text-danger" id="client_Unit_error"></span>
                                    </div>
                                </div>
                         
                           

                            </div>
                         

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">
                            Close
                        </button>
                        <input type="submit" class="btn btn-primary" id="action_button" name="action_button" value="Add"/>
                    </div>
                    {!! Form::close() !!}
                </div>
                <!-- /.modal-content -->
            </div>


            <!-- /.modal-dialog -->
        </div>
						
@endsection

@section('scripts')

<script type="text/javascript" src="{{ asset('public/global/plugins/select2/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/global/plugins/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('public/global/scripts/metronic.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/admin/layout4/scripts/layout.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/admin/layout4/scripts/demo.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/global/scripts/datatable.js') }}"></script>
<script src="{{ asset('public/admin/pages/scripts/ecommerce-orders-view.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/admin/global/plugins/select2/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/admin/global/plugins/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/admin/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/admin/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('public/admin/global/scripts/metronic.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/admin/admin/layout4/scripts/layout.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/admin/admin/layout4/scripts/demo.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/admin/global/scripts/datatable.js') }}"></script>
<script src="{{ asset('public/admin/admin/pages/scripts/ecommerce-products.js') }}"></script>

<script type="text/javascript">

     $(document).ready(function () {

            $('#addCompanyBillModal').click(function () {
                $('#formModal').modal('show');
            });
   $('#sample_form').on('submit',function (event) {
					event.preventDefault();
					if($('#action').val() =='Add'){
					 $.ajax({
                        url: "{{route('company_Bill.store')}}",
                        method:"POST",
                        data: new FormData(this),
                        contentType: false,
                        cache:false,
                        processData:false,
                        dataType: "json",
                        success:function(data)
                        {
                        	var html = '';
                        	if(data.errors)
                        	{
                        		html='<div class="alert alert-danger">';
                        		for(var count = 0; count <data.errors.lenght; count++)
                        		{
                        			html +='<p>' + data.errors[count] + '</p>';
                        		}
                        		html += '</div>';
                        	}
                        	if(data.success)
                        	{
                        		html = '<div class="alert alert-success">' + data.success + '</div>';
                        		$('#sample_form')[0].reset();
                        		$('#user_table').DataTable().ajax.reload();
                        	}
                        	$('#form_result').html(html);
                        }
});
            }

            });
 });





</script>
@endsection


@section('scriptDocument')
EcommerceOrdersView.init();
EcommerceProducts.init();
@endsection