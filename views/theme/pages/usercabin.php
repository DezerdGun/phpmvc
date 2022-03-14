<table class="table ad table-bordered border-primary">
  <caption><h1>List of users</h1></caption>
  <thead>
  </thead>
  <tbody> 
    
                  
                 
                  
  </tbody>
</table>
<section id="cart_items">

		<div class="containers">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
          
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart Имя: <?=$cab['name']?></li>
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
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/<?=$row['img']?>" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?=$row['title']?></a></h4>
								<p>Web ID:</p>
							</td>
							<td class="cart_price">
								<p>$ <?=$row['price']?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
    	<div class="modal-footer">
        <a class="btn btn-warning" href="?view=usershop&id=<?=$cab['id']?>">Заказ</a>
        <a class="btn btn-success" href="?view=usershop&id=<?=$cab['id']?>">Добавить товар</a>
        <a class="btn btn-danger" href="?view=usershop&id=<?=$cab['id']?>">Очистка все заказы</a>
		<div class="features_items col"><!--features_items-->
						<div class="col-sm-4" id="title">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="<?=THEME?>images/home/gallery1.jpg" alt="" />
										<h2>$<?=$row['price']?></h2>
										<p><?=$row['name']?></p>
										<a href=""  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>$<?=$row['price']?></h2>
											<p><?=$row['name']?></p>
											<a href="" class="btn btn-default add-ajax add-to-cart" ><i class="fa fa-shopping-cart"></i>Add to cart</a>
											<a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Detail</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="?view=usercabin&id=<?=$row['id']?>" class="fa fa-pencil" ><i class="fa fa-plus-square"></i>Редактировать</a></li>
										<li><a href="?view=usercabin"><i class="fa fa-remove"></i>Удалить</a></li>
									</ul>
								</div>
							</div>
						</div>
					
					</div><!--features_items-->
      </div>
	</section> <!--/#cart_items-->

					




<style>
.ad{
    width:860px;
}
.containers{
  display:relative;
  margin-left:300px;
  width:860px;
}
.modal-footer{
  display:relative;
  margin-left:300px;
  width:860px;

}

</style>




	
            