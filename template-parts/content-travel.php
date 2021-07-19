
        <section class="home-slider js-fullheight owl-carousel">
	      <div class="slider-item js-fullheight" style="background-image:url(/portfolio/wp-content/uploads/2021/06/bg_2.jpg);">
	      	<div class="overlay"></div>
	        <div class="container-fluid">
	          <div class="row no-gutters slider-text slider-text-2 js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Discover the Place</h1>
	            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to stay, eat, shop, or visit from local experts</p>
	          </div>
	        </div>
	        </div>
	      </div>

	      <div class="slider-item js-fullheight" style="background-image:url(/portfolio/wp-content/uploads/2021/06/bg_3.jpg);">
	      	<div class="overlay"></div>
	        <div class="container-fluid">
	          <div class="row no-gutters slider-text slider-text-2 js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Explore and travel</h1>
	            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to stay, eat, shop, or visit from local experts</p>
	          </div>
	        </div>
	        </div>
	      </div>
	    </section>
			<section class="ftco-section">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-lg-8">
	    				<div class="row">

						<?php 
						// Define our WP Query Parameters
						$the_query = new WP_Query( 'posts_per_page=5' ); ?>
						 

							<?php 
							// Start our WP Query
							while ($the_query -> have_posts()) : $the_query -> the_post(); 
							// Display the Post Title with Hyperlink
							?>

	    					<div class="col-md-12">
	    						<div class="blog-entry ftco-animate">
	    							<a href="<?php the_permalink();?>" class="img" style="background-image: url(<?php the_post_thumbnail_url('thumbnail'); ?>);"></a>
	    							<div class="text pt-2 mt-3">
					          	<span class="category mb-1 d-block"><a href="#"><?php the_title();?></a></span>
				              <h3 class="mb-4"><a href="<?php the_permalink();?>"><?php the_excerpt();?></p>
				              <div class="author mb-4 d-flex align-items-center">
				            		<a href="<?php the_permalink();?>" class="img" style="background-image: url(<?php the_post_thumbnail_url('thumbnail'); ?>);"></a>
				            		<div class="ml-3 info">
				            			<span>Written by</span>
				            			<h3><a href="<?php the_permalink();?>">Dave Lewis</a>, <span>Nov 28, 2018</span></h3>
				            		</div>
				            	</div>
				              <div class="meta-wrap d-md-flex align-items-center">
				              	<div class="half order-md-last text-md-right">
					              	<p class="meta">
					              		<span><i class="icon-heart"></i>3</span>
					              		<span><i class="icon-eye"></i>100</span>
					              		<span><i class="icon-comment"></i>5</span>
					              	</p>
				              	</div>
				              	<div class="half">
					              	<p><a href="<?php the_permalink();?>" class="btn btn-primary p-3 px-xl-4 py-xl-3">Continue Reading</a></p>
				              	</div>
				              </div>
				            </div>
	    						</div>
	    					</div>


							<?php 
							// Repeat the process and reset once it hits the limit
							endwhile;
							wp_reset_postdata();
							?>	

	    			
	    				</div>
	    				<div class="row mt-5">
			          <div class="col">
			            <div class="block-27">
			              <ul>
			                <li><a href="#">&lt;</a></li>
			                <li class="active"><span>1</span></li>
			                <li><a href="#">2</a></li>
			                <li><a href="#">3</a></li>
			                <li><a href="#">4</a></li>
			                <li><a href="#">5</a></li>
			                <li><a href="#">&gt;</a></li>
			              </ul>
			            </div>
			          </div>
			        </div>
	    			</div><!-- END-->
	    			<div class="col-lg-4 sidebar ftco-animate">
	            <div class="sidebar-box">
	              <form action="#" class="search-form">
	                <div class="form-group">
	                  <span class="icon icon-search"></span>
	                  <?php dynamic_sidebar('sidebar-1');?>
	                </div>
	              </form>
	            </div>
	            <div class="sidebar-box ftco-animate">
	            	<h3 class="sidebar-heading">Categories</h3>
	              <ul class="categories">
	                <li><a href="#">Fashion <span>(6)</span></a></li>
	                <li><a href="#">Technology <span>(8)</span></a></li>
	                <li><a href="#">Travel <span>(2)</span></a></li>
	                <li><a href="#">Food <span>(2)</span></a></li>
	                <li><a href="#">Photography <span>(7)</span></a></li>
	              </ul>
	            </div>

	            <div class="sidebar-box ftco-animate">
	              <h3 class="sidebar-heading">Popular Articles</h3>
	              <div class="block-21 mb-4 d-flex">
	                <a class="blog-img mr-4" style="background-image: url(/portfolio/wp-content/uploads/2021/06/image_1.jpg);"></a>
	                <div class="text">
	                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control</a></h3>
	                  <div class="meta">
	                    <div><a href="#"><span class="icon-calendar"></span> Oct. 04, 2018</a></div>
	                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
	                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
	                  </div>
	                </div>
	              </div>
	              <div class="block-21 mb-4 d-flex">
	                <a class="blog-img mr-4" style="background-image: url(/portfolio/wp-content/uploads/2021/06/image_2.jpg);"></a>
	                <div class="text">
	                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control</a></h3>
	                  <div class="meta">
	                    <div><a href="#"><span class="icon-calendar"></span> Oct. 04, 2018</a></div>
	                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
	                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
	                  </div>
	                </div>
	              </div>
	              <div class="block-21 mb-4 d-flex">
	                <a class="blog-img mr-4" style="background-image: url(/portfolio/wp-content/uploads/2021/06/image_3.jpg);"></a>
	                <div class="text">
	                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control</a></h3>
	                  <div class="meta">
	                    <div><a href="#"><span class="icon-calendar"></span> Oct. 04, 2018</a></div>
	                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
	                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
	                  </div>
	                </div>
	              </div>
	            </div>

	            <div class="sidebar-box ftco-animate">
	              <h3 class="sidebar-heading">Tag Cloud</h3>
	              <ul class="tagcloud">
	                <a href="#" class="tag-cloud-link">animals</a>
	                <a href="#" class="tag-cloud-link">human</a>
	                <a href="#" class="tag-cloud-link">people</a>
	                <a href="#" class="tag-cloud-link">cat</a>
	                <a href="#" class="tag-cloud-link">dog</a>
	                <a href="#" class="tag-cloud-link">nature</a>
	                <a href="#" class="tag-cloud-link">leaves</a>
	                <a href="#" class="tag-cloud-link">food</a>
	              </ul>
	            </div>

							<div class="sidebar-box subs-wrap img" style="background-image: url(/portfolio/wp-content/uploads/2021/06/bg_1.jpg);">
								<div class="overlay"></div>
								<h3 class="mb-4 sidebar-heading">Newsletter</h3>
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia</p>
	              <form action="#" class="subscribe-form">
	                <div class="form-group">
	                  <input type="text" class="form-control" placeholder="Email Address">
	                  <input type="submit" value="Subscribe" class="mt-2 btn btn-white submit">
	                </div>
	              </form>
	            </div>

	            <div class="sidebar-box ftco-animate">
	            	<h3 class="sidebar-heading">Archives</h3>
	              <ul class="categories">
	              	<li><a href="#">October 2018 <span>(10)</span></a></li>
	                <li><a href="#">September 2018 <span>(6)</span></a></li>
	                <li><a href="#">August 2018 <span>(8)</span></a></li>
	                <li><a href="#">July 2018 <span>(2)</span></a></li>
	                <li><a href="#">June 2018 <span>(7)</span></a></li>
	                <li><a href="#">May 2018 <span>(5)</span></a></li>
	              </ul>
	            </div>


	            <div class="sidebar-box ftco-animate">
	              <h3 class="sidebar-heading">Paragraph</h3>
	              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut.</p>
	            </div>
	          </div><!-- END COL -->
	    		</div>
	    	</div>
	    </section>