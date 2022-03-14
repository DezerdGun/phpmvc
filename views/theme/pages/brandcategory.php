<div class="features_items cols"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						<? foreach($probrand as $item){?>
						<div class="col-sm-4" id="title">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="<?=THEME?>images/home/<?=$item['img']?>" alt="" />
										<h2>$<?=$item['price'];?></h2>
										<p><?=$item['name'];?></p>
										<a href=""  class="btn btn-default add-to-cart" data-id="<?=$item['id']?>"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>$<?=$item['price'];?></h2>
											<p><?=$item['name'];?></p>
											<a href="" class="btn btn-default add-ajax add-to-cart"  data-id="<?=$item['id']?>"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											<a href="?view=details&id=<?=$item['id']?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Detail</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="" class="add-wishlist_ajax"  data-id="<?=$item['id']?>"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						<?}?>
					</div><!--features_items-->