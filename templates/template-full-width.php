<?php 
/**
 * Template Name: Full Width Page
 * 
 * @package Portfolio
 * @subpackage Portfoliotheme
 * @since Portfolio Theme 1.0
 */

	get_header();
?>

<div id="colorlib-main">

	<section class="ftco-section">
		<div class="container">
    		
       

				<?php
					
			           if(have_posts() ){

					           	while(have_posts() ){
					           		
					           		the_post();
					           		

					           	  get_template_part('template-parts/content', 'page');

					           }
			          }
			           	

				?>


     </div>
    </section>
    

  <?php 
     get_footer();

  ?>