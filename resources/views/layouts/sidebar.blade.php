
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar md-shadow-z-2-i  navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li class="start active ">
					<a href="index.html">
					<i class="icon-home"></i>
					<span class="title">Home Page</span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-basket"></i>
					<span class="title">sell</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="ecommerce_index.html">
							<i class="icon-tag"></i>
							With Barcode and Name</a>
						</li>
						<li>
							<a href="ecommerce_orders.html">
							<i class="icon-diamond"></i>
							With Quick Buttons</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-handbag"></i>
					<span class="title">Products</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{ URL::to('company_Bill') }}">
							
                      <i class="icon-plus"></i>
						Add Product</a>
						</li>
						<li>
							<a href="layout_sidebar_fixed.html">
								<i class="icon-eye"></i>
							View Products</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-user"></i>
					<span class="title">Employees</span>
					
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-puzzle"></i>
					<span class="title">Customers</span>
					
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-paper-plane"></i>
					<span class="title">Companies</span>
					
					</a>
				</li>
				<!-- BEGIN ANGULARJS LINK -->
				<li class="tooltips" data-container="body" data-placement="right" data-html="true">
					<a href="angularjs" target="_blank">
					<i class="icon-bar-chart"></i>
					<span class="title">
					 Sales </span>
					</a>
				</li>
				<!-- END ANGULARJS LINK -->
	
				<li>
					<a href="javascript:;">
					<i class="icon-briefcase"></i>
					<span class="title">Income</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="table_basic.html">
							Daily</a>
						</li>
						<li>
							<a href="table_tree.html">
							Monthly</a>
						</li>
						<li>
							<a href="table_responsive.html">
							yearly</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-briefcase"></i>
					<span class="title">Profit</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="table_basic.html">
							Daily</a>
						</li>
						<li>
							<a href="table_tree.html">
							Monthly</a>
						</li>
						<li>
							<a href="table_responsive.html">
							yearly</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-wallet"></i>
					<span class="title">OutGoing</span>
					
					</a>
					
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-pie-chart"></i>
					<span class="title">Charts</span>
					
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-calendar"></i>
					<span class="title">History</span>
					
					</a>
				</li>

				<li>
					<a href="javascript:;">
					<i class="icon-settings"></i>
					<span class="badge badge-warning">new</span>
					<span class="title">Settings</span>
					
					</a>

				</li>

			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->