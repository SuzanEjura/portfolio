<?php
	get_header();
?>
<div id="colorlib-main">

	<section class="ftco-section">
		<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
	          <div class="col-md-7 heading-section text-center ftco-animate">
	            <h2 class="mb-4">Articles</h2>
	            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
	          </div>
            </div>
              

				<?php
					
			           if(have_posts() ){

					           	while(have_posts() ){
					           		
					           		the_post();
					           		

					           	  get_template_part('template-parts/content', 'archive');

					           }
			          }
			           	

				?>

				<?php
				   the_posts_pagination()


				?>

     </div>
    </section>
    

  <?php 
     get_footer();

  ?>