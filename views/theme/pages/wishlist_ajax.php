
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="?view=index">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
							<?
							if($_SESSION['wishlist_ajax']){
								foreach($_SESSION['wishlist_ajax']  as $id =>$qty){
									$detail = feature_items($id);
							?>
						<tr>
							<td class="cart_product">
								<a href="?view=details&id=<?=$detail['id']?>"><img src="<?=THEME?>images/home/<?=$detail['img'];?>" width="100" height="80" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?=$detail['name']?></a></h4>
								<p>Web ID: <?=$detail['id']?></p>
							</td>
							<td class="cart_price">
								<p>$<?=$detail['price']?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<button class="cart_quantity_down" onclick="minus(<?=$id?>)">-</button>
									<input  type="text"  value="<? echo $qty ?>"  size="1">
								<button class="cart_quantity_up" onclick="plus(<?=$id?>)">+</button>
								</div>
							<td class="cart_total">
								<p class="cart_total_price">$<?=$detail['price'] * $qty?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" onclick="dell_wishlist(<?=$id?>)"><i class="fa fa-times"></i></a>
							</td>							
						</tr>
						<?} } else{
							echo "Очистка все корзины";
						}?>
					</tbody>
				</table>
				<table class="table  total-result">
					<tr>
						<td>Total:</td>
						<td>$<?=$detail['price'] * $qty?></td>
					</tr>								
				</table>
			</div>
		</div>
	</section>
			

