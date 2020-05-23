<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">	
	<title>Template admin mintran</title>    
	<base href="{{asset('')}}">
	<link rel="stylesheet" href="font/font-awesome/css/font-awesome.min.css">	
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="css/dropzone.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">	

</head>
<body class="scrollbar" id="style-7">
	<div id="pageloader-overlay" class="visible incoming" style="display: none;">
		<div class="loader-wrapper-outer">
			<div class="loader-wrapper-inner">
				<div class="loader">				
				</div>
			</div>
		</div>
	</div>

	<section class="section-wrapper force-overflow">

		<div class="header">		
			<div class="grid">
				<div class="rows u-align-center">
					<div class="col l-8 mo-8 c-3">
						<div class="header__form-group">
							<button class="header__button" id="sidebarToggle" href="#">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</button>				
							<form class="header__form" action="#">
								<input type="text" class="header__input" placeholder="Enter keywords">
								<button class="header__btn-search">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>						
							</form>
						</div>
					</div>
					<div class="col l-4 mo-4 c-9">
						<ul class="dropdown-list">					
							<li class="dropdown-list__item">
								<a class="dropdown-list__link" role="button" id="dropdownMenuBell" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-bell-o" aria-hidden="true"></i>
									<span class="dropdown-list__badge dropdown-list__badge--bell">9+</span>
								</a>
								<div class="dropdown-menu dropdown-list__sub" aria-labelledby="dropdownMenuBell">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<div class="dropdown-list__divider"></div>
									<a class="dropdown-item" href="#">Something else here</a>
								</div>
							</li>

							<li class="dropdown-list__item ">
								<a class="dropdown-list__link " href="#" id="dropdownMenuEnvelope" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-envelope-open-o" aria-hidden="true"></i>
									<span class="dropdown-list__badge dropdown-list__badge--envelope">7</span>
								</a>
								<div class="dropdown-menu dropdown-list__sub" aria-labelledby="dropdownMenuEnvelope">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<div class="dropdown-list__divider"></div>
									<a class="dropdown-item" href="#">Something else here</a>
								</div>
							</li>

							<li class="dropdown-list__item ">
								<a class="dropdown-list__link" href="#" id="dropdownMenuFlag" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-flag"></i>									
								</a>
								<div class="dropdown-menu dropdown-list__sub" aria-labelledby="dropdownMenuFlag">
									<ul class="">
										<li class="dropdown-item"> 
											<i class="flag-icon flag-icon-gb mr-2"></i> English
										</li>
										<li class="dropdown-item"> 
											<i class="flag-icon flag-icon-fr mr-2"></i> French
										</li>
										<li class="dropdown-item"> 
											<i class="flag-icon flag-icon-cn mr-2"></i> Chinese
										</li>
										<li class="dropdown-item"> 
											<i class="flag-icon flag-icon-de mr-2"></i> German
										</li>
									</ul>
								</div>
							</li>

							<li class="dropdown-list__item ">
								<a class="dropdown-list__link " href="#" id="dropdownMenuAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<img class="dropdown-list__img" src="images/users/user.jpg" alt="user avatar">
								</a>
								<div class="dropdown-menu dropdown-list__sub" aria-labelledby="dropdownMenuAccount">
									<ul class="">
										<li class="dropdown-item">
											<a href="javaScript:void();">
												<div class="dropdown-list__sub-media">
													<div class="dropdown-list__sub-avatar">
														<img class="dropdown-list__sub-img" src="images/users/user.jpg" alt="user avatar">
													</div>
													<div class="dropdown-list__sub-body ">
														<h6 class="dropdown-list__sub-title">Sarajhon Mccoy</h6>
														<p class="dropdown-list__sub-subtitle">mccoy@example.com</p>
													</div>
												</div>
											</a>
										</li>
										<li class="dropdown-list__divider"></li>
										<li class="dropdown-item">
											<i class="fa fa-envelope-o dropdown-list__icon" aria-hidden="true">&nbsp;</i>Inbox
										</li>
										<li class="dropdown-list__divider"></li>
										<li class="dropdown-item">
											<i class="fa fa-user-o dropdown-list__icon" aria-hidden="true">&nbsp;</i>Account
										</li>
										<li class="dropdown-list__divider"></li>
										<li class="dropdown-item">
											<i class="fa fa-cog dropdown-list__icon" aria-hidden="true">&nbsp;</i>Setting
										</li>
										<li class="dropdown-list__divider"></li>
										<li class="dropdown-item">
											<i class="fa fa-power-off dropdown-list__icon" aria-hidden="true">&nbsp;</i> Logout
										</li>
									</ul>									
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>	


			

		</div>
		<!-- end header -->

		<div class="sidebar">
			<ul class="sidebar__list sidebar--nav">
				<li class="">
					<a class="sidebar__brand-logo" href="#">
						<img class="sidebar__logo-icon" src="images/logo-icon.png" alt="logo">
						<h5 class="sidebar__logo-text">Mintran admin</h5>
					</a>													
				</li>
				<li class="sidebar__item ">
					<a class="sidebar__link sidebar__link--active" href="javascript::void(0)">
						<i class="fas fa-fw fa-tachometer-alt"></i>
						<span class="sidebar__title-page">Dashboards</span>
					</a>
				</li>
				<li class="sidebar__item sidebar__item--dropdown">
					<a class="sidebar__link" href="javascript::void(0)" id="pagesDropdown">
						<i class="fas fa-fw fa-folder"></i>
						<span class="sidebar__title-page">Pages</span>
					</a>
					<div class="sidebar__dropdown-menu" aria-labelledby="pagesDropdown">			
						<a class="dropdown-item" href="login.html">Login</a>
						<a class="dropdown-item" href="register.html">Register</a>					
					</div>
				</li>
				<li class="sidebar__item">
					<a class="sidebar__link" href="javascript::void(0)">
						<i class="fas fa-fw fa-chart-area"></i>
						<span class="sidebar__title-page">Charts</span>
					</a>
				</li>
				<li class="sidebar__item">
					<a class="sidebar__link" href="javascript::void(0)">
						<i class="fas fa-fw fa-table"></i>
						<span class="sidebar__title-page">Tables</span>
					</a>
				</li>
			</ul>
		</div>		
		<!-- end sidebar -->

		<div class="content" id="content">
			<div class="grid no-pad">
				<div class="rows ">							
					<div class="col l-12 mo-12 c-12">
						<h4 class="ad-page-title">Create account new</h4>	
						<ol class="bread-crumb">
							<li class="bread-crumb__item">
								<a class="bread-crumb__link" href="#">Create account</a>
							</li>
							<li class="bread-crumb__item active">Overview</li>
						</ol>						
					</div>							
				</div>

				<div class="rows ">														
					<div class="col l-3 mo-6 c-12">
						<div class="card-box card-box--one">
							<div class="card-box__body">
								<h5 class="card-box__title">9526 
									<span class="card-box__icon">
										<i class="fa fa-shopping-cart"></i>
									</span>
								</h5>
								<div class="card-box__progress" style="height:3px;">
									<div class="card-box__progress-bar" style="width:55%"></div>
								</div>
								<p class="card-box__order small-font">Total Orders 
									<span class="card-box__percent">+4.2% 
										<i class="zmdi zmdi-long-arrows-up"></i>
									</span>
								</p>
							</div>
						</div>						
					</div>

					<div class="col l-3 mo-6 c-12">
						<div class="card-box card-box--two">
							<div class="card-box__body">
								<h5 class="card-box__title">8323 
									<span class="card-box__icon">
										<i class="fa fa-usd"></i>
									</span>
								</h5>
								<div class="card-box__progress" style="height:3px;">
									<div class="card-box__progress-bar" style="width:95%"></div>
								</div>
								<p class="card-box__order small-font">Total Revenue 
									<span class="card-box-percent">+1.2% 
										<i class="zmdi zmdi-long-arrows-up"></i>
									</span>
								</p>
							</div>
						</div>
					</div>

					<div class="col l-3 mo-6 c-12">
						<div class="card-box card-box--three">
							<div class="card-box__body">
								<h5 class="card-box__title">6200 
									<span class="card-box__icon">
										<i class="fa fa-eye"></i>
									</span>
								</h5>
								<div class="card-box__progress" style="height:3px;">
									<div class="card-box__progress-bar" style="width:35%"></div>
								</div>
								<p class="card-box__order small-font">Visitors 
									<span class="card-box-percent">+5.2% 
										<i class="zmdi zmdi-long-arrows-up"></i>
									</span>
								</p>
							</div>
						</div>
					</div>

					<div class="col l-3 mo-6 c-12">
						<div class="card-box card-box--four">
							<div class="card-box__body">
								<h5 class="card-box__title">5630 
									<span class="card-box__icon">
										<i class="fa fa-envira"></i>
									</span>
								</h5>
								<div class="card-box__progress" style="height:3px;">
									<div class="card-box__progress-bar" style="width:55%"></div>
								</div>
								<p class="card-box__order small-font">Messages 
									<span class="card-box-percent">+2.2% 
										<i class="zmdi zmdi-long-arrows-up"></i>
									</span>
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="rows ">
					<div class="col l-12 mo-12 c-12">					
						<div class="card-block">
							<div class="card-block__header border-0">Recent Order Tables
								<!-- <div class="card-table__action">
									<div class="dropdown">
										<a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
											<i class="icon-options"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="javascript:void();">Action</a>
											<a class="dropdown-item" href="javascript:void();">Another action</a>
											<a class="dropdown-item" href="javascript:void();">Something else here</a>
											<div class="dropdown-list__divider"></div>
											<a class="dropdown-item" href="javascript:void();">Separated link</a>
										</div>
									</div>
								</div> -->
							</div>
							<div class="card-block__table table-responsive">
								<table class="table align-items-center table-flush">
									<thead>
										<tr>
											<th>Photo</th>
											<th>Product</th>
											<th>Amount</th>
											<th>Status</th>
											<th>Completion</th>
											<th>Date</th>
										</tr>
									</thead>
									<tbody><tr>
										<td>
											<img alt="Image placeholder" src="images/products/01.png" class="card-block__img-product">
										</td>
										<td>Headphone GL</td>
										<td>$1,840 USD</td>
										<td>
											<span class="u-badge-dot">
												<i class="u-badge-dot__bg-danger"></i> pending
											</span>
										</td>
										<td>
											<div class="u-progress u-progress--shadow" style="height: 4px;">
												<div class="u-progress__bar u-gradient-ibiza" role="progressbar" style="width: 60%"></div>
											</div>
										</td>
										<td>10 July 2018</td>
									</tr>
									<tr>
										<td>
											<img alt="Image placeholder" src="images/products/02.png" class="card-block__img-product">
										</td>
										<td>Clasic Shoes</td>
										<td>$1,520 USD</td>
										<td>
											<span class="u-badge-dot">
												<i class="u-badge-dot__bg-success"></i> completed
											</span>
										</td>
										<td>
											<div class="u-progress u-progress--shadow" style="height: 4px;">
												<div class="u-progress__bar u-gradient-ohhappiness" role="progressbar" style="width: 30%"></div>
											</div>
										</td>
										<td>12 July 2018</td>
									</tr>
									<tr>
										<td>
											<img alt="Image placeholder" src="images/products/03.png" class="card-block__img-product">
										</td>
										<td>Hand Watch</td>
										<td>$1,620 USD</td>
										<td>
											<span class="u-badge-dot">
												<i class="u-badge-dot__bg-warning"></i> delayed
											</span>
										</td>
										<td>
											<div class="u-progress u-progress--shadow" style="height: 4px;">
												<div class="progress-bar u-gradient-orange" role="progressbar" style="width: 70%"></div>
											</div>
										</td>
										<td>14 July 2018</td>
									</tr>
									<tr>
										<td>
											<img alt="Image placeholder" src="images/products/04.png" class="card-block__img-product">
										</td>
										<td>Hand Camera</td>
										<td>$2,220 USD</td>
										<td>
											<span class="u-badge-dot">
												<i class="u-badge-dot__bg-info"></i> on schedule
											</span>
										</td>
										<td>
											<div class="u-progress u-progress--shadow" style="height: 4px;">
												<div class="progress-bar u-gradient-scooter" role="progressbar" style="width: 85%"></div>
											</div>
										</td>
										<td>16 July 2018</td>
									</tr>
									<tr>
										<td>
											<img alt="Image placeholder" src="images/products/05.png" class="card-block__img-product">
										</td>
										<td>Iphone-X Pro</td>
										<td>$9,890 USD</td>
										<td>
											<span class="u-badge-dot">
												<i class="u-badge-dot__bg-success"></i> completed
											</span>
										</td>
										<td>
											<div class="u-progress u-progress--shadow" style="height: 4px;">
												<div class="progress-bar u-gradient-ohhappiness" role="progressbar" style="width: 100%"></div>
											</div>
										</td>
										<td>17 July 2018</td>
									</tr>
									<tr>
										<td>
											<img alt="Image placeholder" src="images/products/06.png" class="card-block__img-product">
										</td>
										<td>Ladies Purse</td>
										<td>$3,420 USD</td>
										<td>
											<span class="u-badge-dot">
												<i class="u-badge-dot__bg-danger"></i> pending
											</span>
										</td>
										<td>
											<div class="u-progress u-progress--shadow" style="height: 4px;">
												<div class="u-progress__bar u-gradient-ibiza" role="progressbar" style="width: 80%"></div>
											</div>
										</td>
										<td>18 July 2018</td>
									</tr>
								</tbody></table>
							</div>
						</div>
					</div>
				</div>

				<div class="rows ">
					<div class="col l-12 mo-12 c-12">					
						<div class="card-block">
							<div class="card-block__header ">Table data
								<!-- <div class="card-table__action">
									<div class="dropdown">
										<a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
											<i class="icon-options"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="javascript:void();">Action</a>
											<a class="dropdown-item" href="javascript:void();">Another action</a>
											<a class="dropdown-item" href="javascript:void();">Something else here</a>
											<div class="dropdown-list__divider"></div>
											<a class="dropdown-item" href="javascript:void();">Separated link</a>
										</div>
									</div>
								</div> -->
							</div>
							<div class="card-block__body">
								<div class="table-responsive">
									<table id="example" class="table table-striped table-bordered" style="width:100%">
										<thead>
											<tr>
												<th>Name</th>
												<th>Position</th>
												<th>Office</th>
												<th>Age</th>
												<th>Start date</th>
												<th>Salary</th>
											</tr>
										</thead>
										<tbody>

											<tr>
												<td>Jenette Caldwell</td>
												<td>Development Lead</td>
												<td>New York</td>
												<td>30</td>
												<td>2011/09/03</td>
												<td>$345,000</td>
											</tr>
											<tr>
												<td>Yuri Berry</td>
												<td>Chief Marketing Officer (CMO)</td>
												<td>New York</td>
												<td>40</td>
												<td>2009/06/25</td>
												<td>$675,000</td>
											</tr>
											<tr>
												<td>Caesar Vance</td>
												<td>Pre-Sales Support</td>
												<td>New York</td>
												<td>21</td>
												<td>2011/12/12</td>
												<td>$106,450</td>
											</tr>

										</tbody>
										<tfoot>
											<tr>
												<th>Name</th>
												<th>Position</th>
												<th>Office</th>
												<th>Age</th>
												<th>Start date</th>
												<th>Salary</th>
											</tr>
										</tfoot>
									</table>
								</div>
								<!-- end table-responsive	 -->
							</div>
						</div>
					</div>
				</div>

				<div class="rows ">
					<div class="col l-12 mo-12 c-12">					
						<div class="card-block">
							<div class="card-block__header ">Horizontal Form
								<!-- <div class="card-table__action">
									<div class="dropdown">
										<a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
											<i class="icon-options"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="javascript:void();">Action</a>
											<a class="dropdown-item" href="javascript:void();">Another action</a>
											<a class="dropdown-item" href="javascript:void();">Something else here</a>
											<div class="dropdown-list__divider"></div>
											<a class="dropdown-item" href="javascript:void();">Separated link</a>
										</div>
									</div>
								</div> -->
							</div>
							<div class="card-block__body">
								<div class="form">
									<form>
										<div class="form-group row">
											<label for="input-21" class="col-sm-2 card-block__body-label">Name</label>
											<div class="col-sm-10">
												<input type="text" class="form-control card-block__form-ctl" id="input-21" placeholder="Enter Your Name">
											</div>
										</div>
										<div class="form-group row">
											<label for="input-22" class="col-sm-2 card-block__body-label">Email</label>
											<div class="col-sm-10">
												<input type="text" class="form-control card-block__form-ctl" id="input-22" placeholder="Enter Your Email Address">
											</div>
										</div>
										<div class="form-group row">
											<label for="input-23" class="col-sm-2 card-block__body-label">Mobile</label>
											<div class="col-sm-10">
												<input type="text" class="form-control card-block__form-ctl" id="input-23" placeholder="Enter Your Mobile Number">
											</div>
										</div>
										<div class="form-group row">
											<label for="input-24" class="col-sm-2 card-block__body-label">Password</label>
											<div class="col-sm-10">
												<input type="text" class="form-control card-block__form-ctl" id="input-24" placeholder="Enter Password">
											</div>
										</div>
										<div class="form-group row">
											<label for="input-25" class="col-sm-2 card-block__body-label">Confirm Password</label>
											<div class="col-sm-10">
												<input type="text" class="form-control card-block__form-ctl" id="input-25" placeholder="Confirm Password">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 card-block__body-label"></label>
											<div class="col-sm-10">
												<div class="icheck-material-primary">
													<input type="checkbox" id="user-checkbox5" checked>
													<label for="user-checkbox5">Remember me</label>
												</div>
											</div>
										</div>
										<div class="form-group row u-margin-bottom-no">
											<label class="col-sm-2 card-block__body-label"></label>
											<div class="col-sm-10">
												<button type="submit" class="btn btn-primary px-5 card-block__register-btn"><i class="icon-lock"></i> Register</button>
											</div>
										</div>
									</form>
								</div>
								<!-- end form	 -->
							</div>
						</div>
					</div>
				</div>

				<div class="rows ">
					<div class="col l-12 mo-12 c-12">					
						<div class="card-block">
							<div class="card-block__header ">Horizontal Form
								<!-- <div class="card-table__action">
									<div class="dropdown">
										<a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
											<i class="icon-options"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="javascript:void();">Action</a>
											<a class="dropdown-item" href="javascript:void();">Another action</a>
											<a class="dropdown-item" href="javascript:void();">Something else here</a>
											<div class="dropdown-list__divider"></div>
											<a class="dropdown-item" href="javascript:void();">Separated link</a>
										</div>
									</div>
								</div> -->
							</div>
							<div class="card-block__body">
								<div class="form-dropzone">
									<form action="#" class="dropzone dz-clickable card-block__dropzone" id="dropzone">
										<div class="dz-default dz-message md-font">
											<span>Drop files here to upload</span>
										</div>
									</form>
								</div>
								
							</div>
						</div>
					</div>
				</div>

				<div class="rows ">
					<div class="col l-6 mo-12 c-12">
						<div class="card-block">
							<div class="card-block__header ">Vertical Form
								<!-- <div class="card-table__action">
									<div class="dropdown">
										<a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
											<i class="icon-options"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="javascript:void();">Action</a>
											<a class="dropdown-item" href="javascript:void();">Another action</a>
											<a class="dropdown-item" href="javascript:void();">Something else here</a>
											<div class="dropdown-list__divider"></div>
											<a class="dropdown-item" href="javascript:void();">Separated link</a>
										</div>
									</div>
								</div> -->
							</div>
							<div class="card-block__body">
								<div class="card-block__form-vertical">
									<form>
										<div class="form-group">
											<label for="input-1">Name</label>
											<input type="text" class="form-control card-block__form-ctl" id="input-1" placeholder="Enter Your Name">
										</div>
										<div class="form-group">
											<label for="input-2">Email</label>
											<input type="text" class="form-control card-block__form-ctl" id="input-2" placeholder="Enter Your Email Address">
										</div>
										<div class="form-group">
											<label for="input-3">Mobile</label>
											<input type="text" class="form-control card-block__form-ctl" id="input-3" placeholder="Enter Your Mobile Number">
										</div>
										<div class="form-group">
											<label for="input-4">Password</label>
											<input type="text" class="form-control card-block__form-ctl" id="input-4" placeholder="Enter Password">
										</div>
										<div class="form-group">
											<label for="input-5">Confirm Password</label>
											<input type="text" class="form-control card-block__form-ctl" id="input-5" placeholder="Confirm Password">
										</div>
										<div class="form-group py-2">
											<div class="icheck-material-primary">
												<input type="checkbox" id="user-checkbox1" checked>
												<label for="user-checkbox1">I Agree Terms &amp; Conditions</label>
											</div>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-primary px-5 card-block__register-btn"><i class="icon-lock"></i> Register</button>
										</div>
									</form>
								</div>
								
							</div>
						</div>
					</div>
					<div class="col l-6 mo-12 c-12">
						<div class="card-block">
							<div class="card-block__header ">Horizontal Form
								<!-- <div class="card-table__action">
									<div class="dropdown">
										<a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
											<i class="icon-options"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="javascript:void();">Action</a>
											<a class="dropdown-item" href="javascript:void();">Another action</a>
											<a class="dropdown-item" href="javascript:void();">Something else here</a>
											<div class="dropdown-list__divider"></div>
											<a class="dropdown-item" href="javascript:void();">Separated link</a>
										</div>
									</div>
								</div> -->
							</div>
							<div class="card-block__body">
								<div class="card-block__form-horizontal">
									<form>
										<div class="form-group">
											<label for="input-1" class="">Name</label>
											<input type="text" class="form-control card-block__form-ctl  card-block__form-ctl--rounded" id="input-1" placeholder="Enter Your Name">
										</div>
										<div class="form-group">
											<label for="input-2">Email</label>
											<input type="text" class="form-control card-block__form-ctl  card-block__form-ctl--rounded" id="input-2" placeholder="Enter Your Email Address">
										</div>
										<div class="form-group">
											<label for="input-3">Mobile</label>
											<input type="text" class="form-control card-block__form-ctl  card-block__form-ctl--rounded" id="input-3" placeholder="Enter Your Mobile Number">
										</div>
										<div class="form-group">
											<label for="input-4">Password</label>
											<input type="text" class="form-control card-block__form-ctl  card-block__form-ctl--rounded" id="input-4" placeholder="Enter Password">
										</div>
										<div class="form-group">
											<label for="input-5">Confirm Password</label>
											<input type="text" class="form-control card-block__form-ctl  card-block__form-ctl--rounded" id="input-5" placeholder="Confirm Password">
										</div>
										<div class="form-group py-2">
											<div class="icheck-material-primary">
												<input type="checkbox" id="user-checkbox2" checked>
												<label for="user-checkbox2">I Agree Terms &amp; Conditions</label>
											</div>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-primary px-5 card-block__register-btn card-block__form-ctl--rounded"><i class="icon-lock"></i> Register</button>
										</div>
									</form>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>	
		<!-- end content -->
		
		<div class="footer">
			<div class="grid">
				<div class="rows">
					<div class="col l-3 mo-3 c-3 l-o-6 mo-o-6 c-o-6">
						<span class="footer__copyright">Copyright © Mintran 2020</span>	
					</div>
				</div>
			</div>
		</div>
		<!-- end footer -->

	</section>
	<!-- end section-wrapper -->

	<script src="js/jquery.min.js"></script>		
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script><script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>		
	<script src="js/dropzone.js"></script>
	<script src="js/script.js"></script>	
</body>
</html>