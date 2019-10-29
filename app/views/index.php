<?php include 'global/navbar.php'; ?>


			<!--		latest Post-->
			<div class="container">
				<div class="row">
					<div class="col-md-12 mt-5 pb-4">
						<h2 class="mt-5 display-4 text-center mb-4 rndmBgClr">Latest Post</h2>
						<div class="row">
							<?php foreach ($data['post'] as $post): ?>
								<div class="col-md-4 text-center border-right pt-4 borderRemove pb-3">
								<h1 class="text-primary text-center"><a href="post.html"><?php echo $post->post_title; ?></a></h1>
								<p><span><i class="fa fa-clock-o text-primary"></i></span><?php echo $post->created_at; ?></p>
								<img src="<?php echo $post->post_header_image; ?>" alt="Post Image" class="img-fluid">
								<div class="pt-4">
									<p class="text-justify"><?php echo substr($post->post_body,0,200) .'....'; ?></p>
								</div>
								<a href="<?php echo URLROOT.'/posts/viewpost/'.$post->post_id; ?>" class="btn btn-primary p-2"> Read More <i class="p-2 fa fa-chevron-right"></i></a>
							</div>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</div>
			
			<!--	end latest post-->
			<hr>
			
			<!--			Our Authors-->
			<div class="container">
				<h2 class="mt-5 display-4 text-center rndmBgClr">Our Authors</h2>
				<div class="row justify-content-center">
					<?php foreach ($data['user'] as $user): ?>
						<div class="col-md-4 mt-5 mb-4">
							<div class="card">
								<img src="<?php echo $user->user_image; ?>" alt="Author" class="img-fluid card-img-top">
								<div class="card-body">
									<div class="card-title"><h3 class="text-muted"><?php echo $user->user_name; ?></h3></div>
									<div class="card-subtitle"><p class="lead"><?php echo $user->user_bio; ?></p></div>
									<div class="text-right">
										<a href=""><i class="fab fa-facebook fa-2x mx-2 text-primary"></i></a>
										<a href=""><i class="fab fa-twitter fa-2x mx-2 text-info"></i></a>
										<a href=""><i class="fab fa-youtube fa-2x mx-2 text-danger"></i></a>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>
			<!--			End Our Authors-->
			
			
			<!-- post -->
			<div class="container">
				<!--			<div class="row">-->
				<h2 class="mt-5 display-4 text-center rndmBgClr">Top Posts</h2>
				<div class="col-md-9 mt-5 p-3">
					<h1 class="text-primary"><a href="">Post One </a></h1>
					<h5 class="text-primary">By - <a href="#">Author Name</a></h5>
					<div class="text-primary font-italic mb-2">
						<i class="fa fa-tags p-1"> Python</i>
						<i class="fa fa-tags p-1"> Python</i>
					</div>
					<img src="http://www.zem.com.my/images/wp-content/global/uploads/2014/01/placeholders/765x255.gif" alt="" class="img-fluid">
					<div class="pt-4">
						<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quibusdam doloremque quasi laborum doloribus blanditiis laboriosam ducimus, officia debitis distinctio. Eaque, quas, illum. Aliquid molestiae, atque eaque omnis voluptatem voluptate?</p>
					</div>
					<a href="#" class="btn btn-primary p-2"> Read More <i class="p-2 fa fa-chevron-right"></i></a>
					<hr>
				</div>
				
				<!--			</div>-->
			</div>
			
			<!--End post -->
		<?php include 'global/footer.php'; ?>