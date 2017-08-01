<?php
/**
 * Template Name: Blog Pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hiking_Blog
 */

get_header(); 

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

?>



	<!--Sidebar-->
	        <div id="wrapper">
	            <div id="sidebar-wrapper">

	                <ul class="sidebar-nav">
	                    <li class="sidebar-brand">
	                        <a href="index.html">Hiking Site</a>
	                    </li>
	                    <li>
	                        <a href="plantrip.html">Plan Trip</a>
	                    </li>
	                    <li>
	                        <a href="history.html">History</a>
	                    </li>
	                    <li>
	                        <a href="hikingadvice.html">Hiking Advice</a>
	                    </li>
	                    <li>
	                        <a href="blog.html">Blog</a>
	                    </li>
	                    <li>
	                        <a href="views/createaccount.html">Create Account</a>
	                    </li>
	                </ul>
	            </div><!-- sidebar-wrapper -->
	    <div id="page-content-wrapper">

		<?php
		if ( has_post_thumbnail() ) { ?> <!--check for feature image -->

			<section class="feature-image" style="background:url('<?php echo  $thumbnail_url  ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
				<h1 class="page-title">Blog</h1>
			</section>

		<?php } else { ?> <!--fallback img-->

		<?php } ?>


	
		<!-- Blog Content
		===================================================== -->
		<div class="container">
			<div class="row" id="primary">
				
				<main id-"content" class="col-sm-8" role="main">
					
				<article class="post">
					<header>
						<h3><a href="posts.html">Blog title here</a></h3>
						<div class="post-details">
							<i class="fa fa-user"></i> Michael Chen
							<i class="fa fa-clock-o"></i><time>October 13, 1995</time>
							<i class="fa fa-folder"></i> <a href="">Tutorials</a>, <a href="">Coding</a>
							<i class="fa fa-tags"></i> Tagged <a href="">wordpress</a>, <a href="">premium</a>, <a href="">another tag</a>, <a href="">etc</a>

							<div class="post-comments-badge">
								<a href=""><i class="fa fa-comments"></i> 168</a>
							</div><!-- post comment badge -->
						</div><!-- post details -->
					</header>
					<div class="post-image">
						<img src="#" alt="image">
					</div><!-- post image -->
					<div class="post-excerpt">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt... <a href="post.html">continue reading &raquo;</a></p>
					</div><!-- post-excerpt -->
				</article><!-- post -->

				<article class="post">
					<header>
						<h3><a href="posts.html">Blog title here</a></h3>
						<div class="post-details">
							<i class="fa fa-user"></i> Michael Chen
							<i class="fa fa-clock-o"></i><time>October 13, 1995</time>
							<i class="fa fa-folder"></i> <a href="">Tutorials</a>, <a href="">Coding</a>
							<i class="fa fa-tags"></i> Tagged <a href="">wordpress</a>, <a href="">premium</a>, <a href="">another tag</a>, <a href="">etc</a>

							<div class="post-comments-badge">
								<a href=""><i class="fa fa-comments"></i> 168</a>
							</div><!-- post comment badge -->
						</div><!-- post details -->
					</header>
					<div class="post-image">
						<img src="#" alt="image">
					</div><!-- post image -->
					<div class="post-excerpt">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt... <a href="post.html">continue reading &raquo;</a></p>
					</div><!-- post-excerpt -->
				</article><!-- post -->

				<article class="post">
					<header>
						<h3><a href="posts.html">Blog title here</a></h3>
						<div class="post-details">
							<i class="fa fa-user"></i> Michael Chen
							<i class="fa fa-clock-o"></i><time>October 13, 1995</time>
							<i class="fa fa-folder"></i> <a href="">Tutorials</a>, <a href="">Coding</a>
							<i class="fa fa-tags"></i> Tagged <a href="">wordpress</a>, <a href="">premium</a>, <a href="">another tag</a>, <a href="">etc</a>

							<div class="post-comments-badge">
								<a href=""><i class="fa fa-comments"></i> 168</a>
							</div><!-- post comment badge -->
						</div><!-- post details -->
					</header>
					<div class="post-image">
						<img src="#" alt="image">
					</div><!-- post image -->
					<div class="post-excerpt">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt... <a href="post.html">continue reading &raquo;</a></p>
					</div><!-- post-excerpt -->
				</article><!-- post -->


				</main><!-- content -->


				<!-- SIDEBAR -->
				<aside class="col-sm-4">

					<div class="widget">
						<h4>Create Your Own Account</h4>
						<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
							Click to create an account
						</button>
					</div><!-- widget -->

					<div class="widget">
						<form role="form" class="search-form">
							<label for="sidebar-search" class="sr-only">Search the blog</label>
							<input type="text" id="sidebar-search" placeholder="Search the block...">
						</form>
					</div><!-- widget -->

					<div class="widget">
						<h4>Recent Posts</h4>
						<ul>
							<li><a href="">Blog post #1</a></li>
							<li><a href="">Blog post #2</a></li>
							<li><a href="">Blog post #3</a></li>
							<li><a href="">Blog post #4</a></li>
							<li><a href="">Blog post #5</a></li>
						</ul>
					</div><!-- widget -->
					
					<div class="widget">
						<h4>Categories</h4>
						<ul>
							<li><a href="">Category #1</a></li>
							<li><a href="">Category #2</a></li>
							<li><a href="">Category #3</a></li>
							<li><a href="">Category #4</a></li>
							<li><a href="">Category #5</a></li>
							<li><a href="">Category #6</a></li>
						</ul>
					</div><!-- widget -->
				</aside>


			</div><!-- row -->
		</div><!-- container -->

		</div><!--  wrapper !-->
		</div>

<?php get_footer(); ?>
