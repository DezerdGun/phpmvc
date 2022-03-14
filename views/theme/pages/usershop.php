  
    <section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Выберите товар</h2>
						<form action="" method="post" enctype="multipart/form-data">
							<input type="text" name="title" placeholder="имя" />
							<input type="text" name="price" placeholder="цена" />
							<input type="hidden" name="shop_id" value="1" />
                            <input type="file" name="img" required/>
							<button type="submit" name="zakaz" class="btn btn-default">Делать товар</button>
						</form>
					</div><!--/login form-->
				</div>
	</section><!--/form-->