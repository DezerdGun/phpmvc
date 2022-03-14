<?
session_start();
?>


	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								
								<img src="<?=THEME?>images/home/<?=$detail['img']?>" alt="" />
								
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner"><? $i = 0;
									foreach($slider_details as $item){?>
										<div class="item <? if($i == 0){ echo 'active';}?>">
										  <a href=""><img src="<?=THEME?>images/product-details/<?=$item['img']?>" alt=""></a>
										  <a href=""><img src="<?=THEME?>images/product-details/<?=$item['img']?>" alt=""></a>
										  <a href=""><img src="<?=THEME?>images/product-details/<?=$item['img']?>" alt=""></a>
										</div>
										<?$i++;}?>
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
                        
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="<?=THEME?>images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?=$detail['name']?></h2>
								<p>Web ID: 1089772</p>
								<img src="<?=THEME?>images/product-details/rating.png" alt="" />
								<span>
									<span>US $<?=$detail['price']?></span>
									<label>Quantity:</label>
									<input type="text" value="3" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p>
								<p><b>Brand:</b> E-SHOPPER</p>
								<a href=""><img src="<?=THEME?>images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
								
					</div><!--/product-details-->
				
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
							<? foreach($details_details as $item){?>
								<li><a href="#<?=$item['href']?>" data-toggle="tab"><?=$item['title']?></a></li>
								<?}?>
								<!--<li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
								<li><a href="#tag" data-toggle="tab">Tag</a></li>
								<li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>-->
							</ul>
							
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
								<? foreach($tab_content_detail as $item){?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?=THEME?>images/home/<?=$item['img']?>" alt="" />
												<h2>$<?=$item['price']?></h2>
												<p><?=$item['name']?></p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<?}?>
							</div>
							
							<div class="tab-pane fade" id="companyprofile" >
								<? foreach($tab_pane_detail as $item){?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?=THEME?>images/home/<?=$item['img']?>" alt="" />
												<h2>$<?=$item['price']?></h2>
												<p><?=$item['name']?></p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<?}?>
							</div>
							
							<div class="tab-pane fade" id="tag" >
								<? foreach($tab_tag_detail as $item){?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?=THEME?>images/home/<?=$item['img']?>" alt="" />
												<h2>$<?=$item['price']?></h2>
												<p><?=$item['name']?></p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<?}?>
							</div>
							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
								<? foreach($comments  as $item){?>
									<ul>
										<li><a href=""><i class="fa fa-user"></i><?=$item['name']?></a></li>
										<li><a href=""><i class="fa fa-clock-o "></i><? echo date('Y-m-d');?></a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i><? echo date('H:i:s');?> </a></li>
									</ul>
									<p><b>Your Message:</b> <?=$item['textarea']?></p>
									<p><b>Email:</b> <?=$item['email']?></p>
									<p><b>Write Your Review</b></p>
									<?}?>
									<form action="" method="post">
										<span>
										<input type="hidden" name="id" value="<? echo $id;?>" >
											<input type="text" name="name" placeholder="Your Name" required>
											<input type="email" name="email" placeholder="Email Address" required/>
										</span>
										<textarea name="textarea" ></textarea>
										<b>Rating: </b> <img src="<?=THEME?>images/product-details/rating.png" alt="" />
										<button type="submit" name="submit" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner"><? $i = 0;
							foreach($slider_detail_item as $item){?>
								<div class="item <?if($i == 0){echo 'active';}?>">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?=THEME?>images/home/<?=$item['img']?>" alt="" />
													<h2>$<?=$item['price']?></h2>
													<p><?=$item['name']?></p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?=THEME?>images/home/<?=$item['img']?>" alt="" />
													<h2>$<?=$item['price']?></h2>
													<p><?=$item['name']?></p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?=THEME?>images/home/<?=$item['img']?>" alt="" />
													<h2>$<?=$item['price']?></h2>
													<p><?=$item['name']?></p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?$i++;}?>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
