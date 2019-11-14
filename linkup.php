<?php  include('config.php'); ?>
<?php  include('includes/registration_login.php'); ?>
<?php  include('includes/head_section.php'); ?>
<?php
$posts = getPublishedPosts();
?>

	<title>Link-Up CurrencyCops</title>
	</head>
	<body>
		<!-- container - wraps whole page -->
		<div class="container">
			<!-- navbar -->
			<?php include 'includes/navbar.php'; ?>
			<!-- // navbar -->

			<!-- banner -->
			<?php include 'includes/banner.php'; ?>
			<!-- // banner -->

			<!-- Page content -->
			<div class="content">
					<h2 class="content-title">Recent Articles</h2>
					<!-- more content still to come here ... -->
					
					<!-- Add this ... -->
				<?php foreach ($posts as $post) { ?>
					<div class="post" style="margin-left: 0px;">
						<img src="<?php echo BASE_URL . 'static/images/' . $post['image']; ?>" class="post_image" alt="">
						<?php if (isset($post['topic']['name'])) { ?>
						<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
							<div class="post_info">
								<h3><?php echo $post['title']; ?></h3>
								<div class="info">
									<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
									<span class="read_more">Read more...</span>
								</div>
							</div>
						</a>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		
		<!--</div> -->
			<!-- // Page content -->

			<!-- footer -->
		<?php include 'includes/footer.php'; ?>
			<!-- // footer -->