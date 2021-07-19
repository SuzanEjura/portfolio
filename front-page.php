<?php
	get_header();
?>
   <div id="colorlib-main">
			<div class="hero-wrap js-fullheight" style="background-image: url(wp-content/themes/portfoliotheme/assets/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="js-fullheight d-flex justify-content-center align-items-center">
					<div class="col-md-8 text text-center">
						<div class="img mb-4" style="background-image: url(wp-content/themes/portfoliotheme/assets/images/author.jpg);"></div>
						<div class="desc">
							<h2 class="subheading">Hello I'm</h2>
							<h1 class="mb-4"><?php echo get_bloginfo();?></h1>
							<p class="mb-4"><?php the_content(); ?></p>
							<p><a href="#" class="btn-custom">More About Me <span class="ion-ios-arrow-forward"></span></a></p>
						</div>
					</div>
				</div>
			</div>
			<section class="ftco-section">
				<div class="container">
		    		<div class="row justify-content-center mb-5 pb-2">
			          <div class="col-md-7 heading-section text-center ftco-animate">
			            <h2 class="mb-4">Articles</h2>
			            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
			          </div>
			            </div>

			            <?php 


			            get_template_part('template-parts/content', 'recentpost');


			            ?>


		       </div>
	      </section>
    

  <?php 
     get_footer();

  ?>