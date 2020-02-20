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
					 
<h1>		 	
                      
						أضافة منتج 

					</h1>
				</div>
				<!-- END PAGE TITLE -->
				<!-- BEGIN PAGE TOOLBAR -->
			
				<!-- END PAGE TOOLBAR -->
			</div>
			<!-- END PAGE HEAD -->

			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="javascript:;">الصفحة الرئيسية</a><i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 أضافة منتج
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
<form method="post" id="products_form">
                               <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="id" id="id">

                                <input type="hidden" name="company_bill_id" id="company_bill_id" value="1">
                                <input type="hidden" name="company_id" id="company_id" value="1">
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-plus font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase"> أضافة </span>
								<span class="caption-helper">منتج جديد</span>
							</div>
							

							<div class="actions">
								<button class="btn btn-sm yellow table-group-action-submit" id="add_product" name = "add_product"><i class="fa fa-check"></i> أضافة المنتج</button>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-container">
								<div class="table-actions-wrapper">
									<span>
									</span>
								
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
										 تاريخ الصلاحية
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
											{!! Form::select('classification_id', $Store_Classification, null, ['class'=>'form-control form-filter input-sm']) !!}
										
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
										
										<input class="form-control form-control-inline input-medium date-picker" name="Expiration_Date" size="16" type="text" value=""/>
											<span class="help-block">
											Select date </span>
									</td>
									<td>
										<input type="text" class="form-control form-filter input-sm" name="BARCODE">
									</td>
								</tr>
								</thead>
								<tbody>
								</tbody>
								</table>
							</form>
							</div>
						</div>
					</div>
					<!-- End: life time stats -->

					<!-- Begin: life time stats -->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">منتاجات الفاتورة</span>
								
							</div>
						
						</div>
						<div class="portlet-body">
							<div class="table-container">
						
								<table class="table table-striped table-bordered table-hover" id="sample_1">
								<thead>
								<tr role="row" class="heading">
									
									<th width="15%">
										 اسم المنتج
									</th>
									<th width="10%">
										 سعر الشراء
									</th>
									<th width="15%">
										الكمية
									</th>
									<th width="10%">
										 الباركود
									</th>
								</tr>
								
								 @foreach($bill_poducts as $row)
								<tr role="row" class="filter">
									
									<td>
										{{ $row->getProduct->name }}
									</td>
									<td>
                                       {{ $row->getProduct->Gomla }}
									</td>
									<td>
										{{ $row->quantity }}
									</td>
									<td>
										{{ $row->getProduct->barcode }}
									</td>
								</tr>
								@endforeach
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
   $('#sample_form').on('submit',function (event)
               {
					event.preventDefault();
					if($('#action').val() =='Add')
					{
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


   $('#add_product').click(function () {
                var form = $('#products_form').serialize();
                    $.ajax({
                        url: "{{ URL::to('addProduct') }}",
                        dataType: 'json',
                        data: form,
                        type: 'post',
                        success: function (data) {
                           
                            $('#sample_1 tbody').append(data.result);
                            $("#products_form").trigger('reset');
                        }
                    });
                
            });




 });





</script>
@endsection


@section('scriptDocument')
EcommerceOrdersView.init();
EcommerceProducts.init();
@endsection