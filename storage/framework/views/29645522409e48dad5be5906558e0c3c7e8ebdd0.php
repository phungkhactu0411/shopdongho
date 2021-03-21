<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Hublot-Montres de Luxe pour Homme et Femme</title>
    <link rel="shortcut icon" type="images/png" href="public/frontend/images/icon.png">
    <link href="<?php echo e(asset('public/frontend/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/frontend/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/frontend/css/prettyPhoto.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/frontend/css/price-range.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/frontend/css/animate.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('public/frontend/css/main.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('public/frontend/css/responsive.css')); ?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="<?php echo e(('public/frontend/images/logo.png')); ?>" style="width: ; height: 30px" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-star"></i> Yêu thích</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
								<li><a href="<?php echo e(URL::to('/login')); ?>" ><i class="fa fa-lock"></i>Đăng nhập</a></li>
								<li><div class="search_box pull-right">
								<input type="text" placeholder="Tìm kiếm"/>
									</div></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner" style="background: #677a59">
							<div class="item active">
								<div class="col-sm-6">
									<h1>HUBLOT</h1>
									<h1><span>ONE CLICK</span></h1>
									<h2>KING GOLD</h2>
									<h2>WHITE</h2>
									<h2>DIAMONDS</h2>
									<button type="button">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo e(('public/frontend/images/HUBLOT2.png')); ?>" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
								<h1><span>HUBLOT</span></h1>
									<h2>ONE CLICK</h2>
									<h2>KING GOLD</h2>
									<h2>WHITE</h2>
									<h2>DIAMONDS</h2>
									<button type="button">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo e(('public/frontend/images/HUBLOT.png')); ?>" class="girl img-responsive" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>HUBLOT</span></h1>
									<h2>ONE CLICK</h2>
									<h2>KING GOLD</h2>
									<h2>WHITE</h2>
									<h2>DIAMONDS</h2>
									<button type="button">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo e(('public/frontend/images/HUBLOT1.png')); ?>" class="girl img-responsive" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh mục của sản phẩm</h2>
						
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->	
							<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo e(URL::to('/danh-muc-san-pham/'.$cate->category_id)); ?>"><?php echo e($cate->category_name); ?></a></h4>
								</div>
						</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Thương hiệu sản phẩm</h2>
							
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li><a href="<?php echo e(URL::to('/thuong-hieu-san-pham'.$brand->brand_id)); ?>"> <span class="pull-right"></span><?php echo e($brand->brand_name); ?></a></li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
								
							</div>
						</div><!--/brands_products-->
						
						
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					
					<?php echo $__env->yieldContent('content'); ?>
					
					
				</div>
			</div>
		</div>
	</section>
	
	<footer><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
												</div>
					</div>
					<h2 style="color: #94c3dc"><span>ME TENIR INFORMÉ(E)</span><br> Je souhaite recevoir les dernières actualités Hublot.</h2>

					</div>
					<img src="<?php echo e(('public/frontend/images/bigbang.jpg')); ?>" width="1160px">
				</div>
				
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Cskh</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Liên Hệ Chúng Tôi</a></li>
								<li><a href="#">Dịch Vụ Sang Trọng</a></li>
								<li><a href="#">Thông Tin Giao Hàng</a></li>
								<li><a href="#">Chính Sách Hoàn Trả</a></li>
								<li><a href="#">Các Câu Hỏi Thường Gặp</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2> Thông tin</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Bảo Mật Của Bạn</a></li>
								<li><a href="#">Điều Khoản Dịch Vụ</a></li>
								<li><a href="#">Chính Sách Bảo Mật</a></li>
								<li><a href="#">Chính Sách Cookie</a></li>
								<li><a href="#">Trách Nhiệm Xã Hội</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Giới thiệu</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Về Chúng Tôi</a></li>
								<li><a href="#">Phòng Báo Chí</a></li>
								<li><a href="#"> Nghề Nghiệp</a></li>
								<li><a href="#">Bản Tin Đăng Ký</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Thể loại</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Xem</a></li>
								<li><a href="#">Nhãn Hiệu</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div>
			<div class="container" style="height: 30px; line-height: 30px" >
					<p class="pull-left">Copyright © tuandtien</p>		
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="<?php echo e(asset('public/frontend/js/jquery.js')); ?>"></script>
	<script src="<?php echo e(asset('public/frontend/js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/frontend/js/jquery.scrollUp.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/frontend/js/price-range.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/js/jquery.prettyPhoto.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/js/main.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\shop\blog\resources\views/welcome.blade.php ENDPATH**/ ?>