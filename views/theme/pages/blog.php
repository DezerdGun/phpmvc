<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<div class="blog-post-area">
						<h2 class="title text-center">Latest From our Blog</h2>
                        <? foreach($blog_posts as $item){?>
						<div class="single-blog-post">
							<h3><?=$item['title']?></h3>
							<div class="post-meta">
								<ul>
									<li><i class="fa fa-user"></i><?=$item['user']?></li>
									<li><i class="fa fa-clock-o"></i><?echo date('H:i:s');?></li>
									<li><i class="fa fa-calendar"></i><? echo date('Y-m-d');?></li>
								</ul>
								<span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
								</span>
							</div>
							<a href="">
								<img src="<?=THEME?>images/blog/<?=$item['img']?>" alt="">
							</a>
							<p><?=$item['text']?></p>
							<a  class="btn btn-primary" href="?view=blog_single&id=<?=$item['id']?>">Read More</a>
						</div>
                        <?}?>
						<div class="pagination-area">
							<ul class="pagination">
								<?
								$pagination = mysqli_query($conn,"SELECT * FROM `blog_post`");
								$count = mysqli_num_rows($pagination);
								$a = $count/2;
								for($b = 1; $b <= $a; $b++){?>
								<li><a href="?view=blog&id=<? echo $b; ?>" class="<? if($i == 0){echo 'active';}?>"><? echo $b."";?></a></li>
								<?}?>
								<li><a href="?view=blog&id=<? echo $b++; ?>"><i class="fa fa-angle-double-left"></i></a></li>
								<li><a href="?view=blog&id=<? echo $b++; ?>"><i class="fa fa-angle-double-right"></i></a></li>
                                
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <hr>