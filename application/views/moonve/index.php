<!-- --------------Main-Section--------------- -->
<main class="index">

	<!-- --------Collections--------- -->
	<section class="collections">
		<div class="container">
			<h3 class="content-title">Collections</h3>
			<div class="grid-3">	
				<div class="collection-card">
					<img src="<?= img('camera-collection.jpg'); ?>">
					<div class="info">
						<h1>Lorem Collections</h1>
						<a href="#">Shop Now <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="collection-card">
					<img src="<?= img('laptop-collection.jpg'); ?>">
					<div class="info">
						<h1>Lorem Collections</h1>
						<a href="#">Shop Now <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="collection-card">
					<img src="<?= img('handphone1.jpg'); ?>">
					<div class="info">
						<h1>Lorem Collections</h1>
						<a href="#">Shop Now <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="collection-card">
					<img src="<?= img('computer1.jpg'); ?>">
					<div class="info">
						<h1>Lorem Collections</h1>
						<a href="#">Shop Now <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="new-products mt-5">
		<div class="container">
			<h1 class="content-title">New Products</h1>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-6 my-2">
					<div class="product-card">
						<div class="product-img">
							<a href="#">
								<img src="<?= img('tv1.jpg'); ?>">
							</a>
							<div class="product-label">
								<span class="sale">-30%</span>
								<span class="new">NEW</span>
							</div>
						</div>
						<div class="product-body">
							<p class="product-category">Category</p>
							<a class="product-name" href="#">Product Name Goes Here</a>
							<h4 class="product-price">Rp.2.000.000 <del class="old-price">Rp.3.000.000</del></h4>
							<div class="product-rating">
								<p class="like">
									<i class="fas fa-thumbs-up"></i>
									<span>120</span>
								</p>
								<p class="dislike">
									<i class="fas fa-thumbs-down"></i>
									<span>20</span>
								</p>
							</div>
							<div class="product-btns">
								<a class="btn-add-to-cart" href="#">Add To Cart</a>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</section>

	<!-- --------------Top-Products--------------- -->
	<section class="top-products mt-5">
		<div class="container">
			<h1 class="content-title">Top Products</h1>
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-6 my-2">
					<div class="product-card">
						<div class="product-img">
							<a href="#">
								<img src="<?= img('computer2.jpg'); ?>">
							</a>
							<div class="product-label">
								<span class="sale">-30%</span>
								<span class="new">NEW</span>
							</div>
						</div>
						<div class="product-body">
							<p class="product-category">Category</p>
							<a class="product-name" href="#">Product Name Goes Here</a>
							<h4 class="product-price">Rp.2.000.000 <del class="old-price">Rp.3.000.000</del></h4>
							<div class="product-rating">
								<p class="like">
									<i class="fas fa-thumbs-up"></i>
									<span>120</span>
								</p>
								<p class="dislike">
									<i class="fas fa-thumbs-down"></i>
									<span>20</span>
								</p>
							</div>
							<div class="product-btns">
								<a class="btn-add-to-cart" href="#">Add To Cart</a>
							</div>
						</div>
					</div>	
				</div>
				
			</div>
		</div>
	</section>

	<!-- ------------------Banner-------------------- -->
	<section class="opening-banner">
		<div class="banner" style="background-image: url(<?= img('banner.jpg'); ?>);">
			<div class="banner-text">		
				<h1>Wanna See Another Products?</h1>
				<a href="#">Click Here</a>
			</div>
		</div>
	</section>

</main>
