<?php $__env->startSection('content'); ?>
<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Sản phẩm mới</h2>
						<?php $__currentLoopData = $all_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo e(URL::to('public/upload/product/'.$product->product_image)); ?>" alt="" />
											<h2><?php echo e(number_format($product->product_price).' '.'VNĐ'); ?></h2>
											<p><?php echo e($product->product_name); ?></p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Liên hệ</a>
										</div>
										
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
										
									</ul>
								</div>
							</div>
						</div>
						
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div><!--features_items-->

					


					</div><!--/recommended_items-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/page/home.blade.php ENDPATH**/ ?>