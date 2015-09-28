<?php
/**
 * Template Name: Post Detail Page
 */

get_header();
?>

	<div class="site-wrapper">
		
		<div class="container">
			<div class="row" id="primary">
				<div id="content" class="col-sm-8">
					<article class="single-post">
						<header>
							<h1>Blog title here</h1>
							<div class="post-details">
								<i class="fa fa-user"></i> Khuonggau
								<i class="fa fa-clock-o"></i> <time>August 24, 2015</time>
								<i class="fa fa-folder"></i> <a href="">Tutorials</a>, <a href="">Coding</a>
								<i class="fa fa-tags"></i> Tagged <a href="">wordpress</a>, <a href="">premium</a>, <a href="">another tag</a>, <a href="">yadda yadda</a>
							</div><!-- post-details -->
						</header>
						<div class="post-image">
							<img src="http://localhost/pixelwebsource/wp-content/uploads/2015/09/post-example.jpg" alt="Hero image">
						</div><!-- post-image -->
						<div class="post-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur adipisci dolor aperiam ad. Aliquid saepe perferendis optio ab reiciendis beatae ratione dicta maiores suscipit. Unde enim doloribus quo ea minus.</p>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur adipisci dolor aperiam ad. Aliquid saepe perferendis optio ab reiciendis beatae ratione dicta maiores suscipit. Unde enim doloribus quo ea minus.</p>

							<h3>Subtitle</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur adipisci dolor aperiam ad. Aliquid saepe perferendis optio ab reiciendis beatae ratione dicta maiores suscipit. Unde enim doloribus quo ea minus.</p>

							<h4>Another Subtitle</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur adipisci dolor aperiam ad. Aliquid saepe perferendis optio ab reiciendis beatae ratione dicta maiores suscipit. Unde enim doloribus quo ea minus.</p>
						</div><!-- post-body -->
					</article><!-- post -->

					<div id="comments">
						<div class="comments-wrap">
							<h3>4 comments</h3>

							<!-- These comments will have an image and more information when we use WordPress -->
							<ol class="comments-list">
								<li class="comment">
									<h4>John Smith <small>&bull; Aug 27, 2015</small></h4>

									<div class="comment-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus ipsa impedit minima laudantium! Quam cupiditate enim, magnam sapiente doloremque nemo excepturi, tempora aspernatur delectus sint deleniti animi. Voluptas, corporis, consequatur!</p>
									</div><!-- comment-body -->

									<ol class="children">
										<li class="comment">
											<h4>Khuong Le <small>&bull; Aug 27, 2015</small></h4>
											
											<div class="comment-body">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus ipsa impedit minima laudantium! Quam cupiditate enim, magnam sapiente doloremque nemo excepturi, tempora aspernatur delectus sint deleniti animi. Voluptas, corporis, consequatur!</p>
											</div><!-- comment-body -->

											<ol class="children">
												<li class="comment">
													<h4>khuonggau <small>&bull; Aug 27, 2015</small></h4>
													
													<div class="comment-body">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus ipsa impedit minima laudantium! Quam cupiditate enim, magnam sapiente doloremque nemo excepturi, tempora aspernatur delectus sint deleniti animi. Voluptas, corporis, consequatur!</p>
													</div><!-- comment-body -->
												</li><!-- comment -->
											</ol><!-- children -->

										</li><!-- comment -->
									</ol><!-- children -->

								</li><!-- comment -->
								<li class="comment">
									<h4>Ray Nguyen <small>&bull; Aug 27, 2015</small></h4>

									<div class="comment-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus ipsa impedit minima laudantium! Quam cupiditate enim, magnam sapiente doloremque nemo excepturi, tempora aspernatur delectus sint deleniti animi. Voluptas, corporis, consequatur!</p>
									</div><!-- comment-body -->
								</li><!-- comment -->
							</ol><!-- comments-list -->

							<div id="leave-comment">
								<h3>Leave a comment</h3>
								
								<form action="">
									<p>Your email address will not be published. Required fields are marked <span class="required">*</span></p>

									<p class="comment-form-author">
										<label for="author">Name *</label>
										<input type="text" id="author">
									</p>

									<p class="comment-form-email">
										<label for="email">Email *</label>
										<input type="email" id="email">
									</p>

									<p class="comment-form-url">
										<label for="url">Website</label>
										<input type="url" id="url">
									</p>

									<p class="comment-form-comment">
										<label for="comment">Comment *</label>
										<textarea name="" id="comment" cols="45" rows="8"></textarea>
									</p>

									<p class="form-submit">
										<input type="submit" name="submit">
									</p>
								</form>
							</div><!-- leave-comment -->
						</div><!-- comments-wrap -->
					</div><!-- comments -->
				</div><!-- col -->

				<!-- SIDEBAR
				===================================================== -->
				<aside class="col-sm-4">

					<div class="widget">
						<form role="form" class="search-form" action="">
							<label for="sidebar-search" class="sr-only">Search the blog</label>
							<input type="text" id="sidebar-search" placeholder="Search the blog...">
						</form>
					</div><!-- widget -->

					<div class="widget">
						<h4>About Bootstrap to WordPress</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis inventore sequi, quaerat sapiente ipsum quas velit sint voluptas eos odio id fugiat quis doloribus consequatur illo laborum tempore itaque! Ad.</p>
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
				</aside><!-- col -->

			</div><!-- row -->
	</div><!-- container -->

	</div><!-- site-wrapper -->
</div><!-- main-wrapper -->

<?php get_footer(); ?>