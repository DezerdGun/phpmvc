<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
							<? foreach($category as $item){?>
								<div class="panel-heading">
									<h4 class="panel-title">
										<a style="cursor:pointer"  onclick="category(<?=$item['id']?>)"><?=$item['title']?></a>
									</h4>
								</div>
								<?}?>
							</div>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
							<? foreach($brand as $item){?>
								<ul class="nav nav-pills nav-stacked">
									<li><a style="cursor:pointer" onclick="brand(<?=$item['id']?>)"> <span class="pull-right"></span><?=$item['title']?></a></li>
								</ul>
								<?}?>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="<?=THEME?>images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>

		
			


			<!--- skajem esli id budet vdrugom file shto nado delat togda -->