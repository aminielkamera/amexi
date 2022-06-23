@extends('layouts.main')

@section('content')

<!-- Start of Breadcrumb section
	============================================= -->
	<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="assets/img/bg/bread-bg.jpg">
		<span class="background_overlay"></span>
		<span class="design-shape position-absolute"><img src="assets/img/shape/tmd-sh.png" alt=""></span>
		<div class="container">
			<div class="ft-breadcrumb-content headline text-center position-relative">
				<h2>Blog</h2>
				<div class="ft-breadcrumb-list ul-li">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Blog</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<!-- End of Breadcrumb section
	============================================= -->

<!-- Start of blog post feed section
	============================================= -->
	<section id="ft-blog-post-feed" class="ft-blog-post-feed-section page-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="ft-blog-post-feed-content">
						<div class="ft-blog-post-feed-innerbox">
							<div class="ft-blog-post-feed-img">
								<img src="assets/img/blog/bp1.jpg" alt="">
							</div>
							<div class="ft-blog-post-feed-text-wrapper headline pera-content">
								<div class="blog-meta">
									<a href="#"><i class="fas fa-user"></i> By Admin</a>
									<a href="#"><i class="fas fa-user"></i> 19 Feb/21</a>
									<a href="#"><i class="fas fa-tag"></i> SEO Service</a>
								</div>
								<div class="ft-blog-feed-title-text">
									<h3><a href="{{url('blog-single')}}">How Will You Know Success When it Show Up?</a></h3>
									<p>With over a decade experience, we’ve established ourselves as one of the pioneering agencies in the region. We understand the importance of approaching each work integrally and believe in the power of simple and easy communication. </p>
								</div>
								<div class="ft-btn-2">
									<a href="{{url('blog-single')}}">
										<i class="icon-first flaticon-right-arrow"></i>
										<span>Read More</span>
									</a>
								</div>
							</div>
						</div>
						<div class="ft-blog-post-feed-innerbox">
							<div class="ft-blog-post-feed-img">
								<img src="assets/img/blog/bp2.jpg" alt="">
							</div>
							<div class="ft-blog-post-feed-text-wrapper headline pera-content">
								<div class="blog-meta">
									<a href="#"><i class="fas fa-user"></i> By Admin</a>
									<a href="#"><i class="fas fa-user"></i> 19 Feb/21</a>
									<a href="#"><i class="fas fa-tag"></i> SEO Service</a>
								</div>
								<div class="ft-blog-feed-title-text">
									<h3><a href="{{url('blog-single')}}">How Will You Know Success When it Show Up?</a></h3>
									<p>With over a decade experience, we’ve established ourselves as one of the pioneering agencies in the region. We understand the importance of approaching each work integrally and believe in the power of simple and easy communication. </p>
								</div>
								<div class="ft-btn-2">
									<a href="{{url('blog-single')}}">
										<i class="icon-first flaticon-right-arrow"></i>
										<span>Read More</span>
									</a>
								</div>
							</div>
						</div>
						<div class="ft-blog-post-feed-innerbox">
							<div class="ft-blog-post-feed-img">
								<img src="assets/img/blog/bp3.jpg" alt="">
							</div>
							<div class="ft-blog-post-feed-text-wrapper headline pera-content">
								<div class="blog-meta">
									<a href="#"><i class="fas fa-user"></i> By Admin</a>
									<a href="#"><i class="fas fa-user"></i> 19 Feb/21</a>
									<a href="#"><i class="fas fa-tag"></i> SEO Service</a>
								</div>
								<div class="ft-blog-feed-title-text">
									<h3><a href="{{url('blog-single')}}">How Will You Know Success When it Show Up?</a></h3>
									<p>With over a decade experience, we’ve established ourselves as one of the pioneering agencies in the region. We understand the importance of approaching each work integrally and believe in the power of simple and easy communication. </p>
								</div>
								<div class="ft-btn-2">
									<a href="{{url('blog-single')}}">
										<i class="icon-first flaticon-right-arrow"></i>
										<span>Read More</span>
									</a>
								</div>
							</div>
						</div>
						<div class="ft-blog-post-feed-innerbox">
							<div class="ft-blog-post-feed-img">
								<img src="assets/img/blog/bp4.jpg" alt="">
							</div>
							<div class="ft-blog-post-feed-text-wrapper headline pera-content">
								<div class="blog-meta">
									<a href="#"><i class="fas fa-user"></i> By Admin</a>
									<a href="#"><i class="fas fa-user"></i> 19 Feb/21</a>
									<a href="#"><i class="fas fa-tag"></i> SEO Service</a>
								</div>
								<div class="ft-blog-feed-title-text">
									<h3><a href="{{url('blog-single')}}">How Will You Know Success When it Show Up?</a></h3>
									<p>With over a decade experience, we’ve established ourselves as one of the pioneering agencies in the region. We understand the importance of approaching each work integrally and believe in the power of simple and easy communication. </p>
								</div>
								<div class="ft-btn-2">
									<a href="{{url('blog-single')}}">
										<i class="icon-first flaticon-right-arrow"></i>
										<span>Read More</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="ft-pagination-item  ul-li">
						<ul>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="ft-side-bar-wrapper top-stikcy">
						<div class="ft-side-bar-widget-area">
							<div class="ft-side-bar-widget search-widget-area headline ul-li-block">
								<div class="search-widget position-relative">
									<form action="#">
										<input type="text" placeholder="Search.">
										<button><i class="far fa-search"></i></button>
									</form>
								</div>
							</div>
							<div class="ft-side-bar-widget headline ul-li-block">
								<div class="category-widget">
									<h3 class="widget-title position-relative">Categories</h3>
									<ul>
										<li><a href="blog.html">Ocean Freight <span>3</span></a></li>
										<li><a href="blog.html">Air Freight <span>3</span></a></li>
										<li><a href="blog.html">Rail Project <span>3</span></a></li>
									</ul>
								</div>
							</div>
							<div class="ft-side-bar-widget headline ul-li-block">
								<div class="recent-news-widget">
									<h3 class="widget-title position-relative">Recent News</h3>
									<div class="recent-blog-img-text clearfix">
										<div class="recent-blog-img float-left">
											<img src="assets/img/blog/rec1.jpg" alt="">
										</div>
										<div class="recent-blog-text headline">
											<h3><a href="{{url('blog-single')}}">Zechs Magnesium
											flakes especially...</a></h3>
											<span><i class="far fa-calendar-alt"></i> December 12, 2021</span>
										</div>
									</div>
									<div class="recent-blog-img-text clearfix">
										<div class="recent-blog-img float-left">
											<img src="assets/img/blog/rec2.jpg" alt="">
										</div>
										<div class="recent-blog-text headline">
											<h3><a href="{{url('blog-single')}}">Finding a way to the
											separate ‘work’ ...</a></h3>
											<span><i class="far fa-calendar-alt"></i> December 12, 2021</span>
										</div>
									</div>
									<div class="recent-blog-img-text clearfix">
										<div class="recent-blog-img float-left">
											<img src="assets/img/blog/rec3.jpg" alt="">
										</div>
										<div class="recent-blog-text headline">
											<h3><a href="{{url('blog-single')}}">Hunching over desk
											can cause pain.</a></h3>
											<span><i class="far fa-calendar-alt"></i> December 12, 2021</span>
										</div>
									</div>
								</div>
							</div>
							<div class="ft-side-bar-widget headline ul-li-block">
								<div class="category-widget">
									<h3 class="widget-title position-relative">Archives</h3>
									<ul>
										<li><a href="blog.html">Ocean Freight <span>3</span></a></li>
										<li><a href="blog.html">Air Freight <span>3</span></a></li>
										<li><a href="blog.html">Rail Project <span>3</span></a></li>
									</ul>
								</div>
							</div>
							<div class="ft-side-bar-widget headline ul-li-block">
								<div class="gallery-widget">
									<h3 class="widget-title position-relative">Gallery</h3>
									<ul class="zoom-gallery">
										<li><a href="assets/img/gallery/gl1.jpg" data-source="assets/img/gallery/gl1.jpg"><img src="assets/img/gallery/gl1.jpg" alt=""></a></li>
										<li><a href="assets/img/gallery/gl2.jpg" data-source="assets/img/gallery/gl2.jpg"><img src="assets/img/gallery/gl2.jpg" alt=""></a></li>
										<li><a href="assets/img/gallery/gl3.jpg" data-source="assets/img/gallery/gl3.jpg"><img src="assets/img/gallery/gl3.jpg" alt=""></a></li>
										<li><a href="assets/img/gallery/gl4.jpg" data-source="assets/img/gallery/gl4.jpg"><img src="assets/img/gallery/gl4.jpg" alt=""></a></li>
										<li><a href="assets/img/gallery/gl5.jpg" data-source="assets/img/gallery/gl4.jpg"><img src="assets/img/gallery/gl5.jpg" alt=""></a></li>
										<li><a href="assets/img/gallery/gl6.jpg" data-source="assets/img/gallery/gl4.jpg"><img src="assets/img/gallery/gl6.jpg" alt=""></a></li>
									</ul>
								</div>
							</div>
							<div class="ft-side-bar-widget headline ul-li-block">
								<div class="tag-widget">
									<h3 class="widget-title position-relative">Archives</h3>
									<ul>
										<li><a href="blog.html">Business</a></li>
										<li><a href="blog.html">Cargo</a></li>
										<li><a href="blog.html">Freight</a></li>
										<li><a href="blog.html">Truck</a></li>
										<li><a href="blog.html">Ship</a></li>
									</ul>
								</div>
							</div>
							<div class="ft-side-bar-add headline ul-li-block">
								<a href="contact.html">
									<img src="assets/img/bg/add-bg.png" alt="">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of blog post section
	============================================= -->
@endsection
