<?php
	get_header();
?>
<div id="colorlib-main">
       

				<?php
					
			           if(have_posts() ){

					           	while(have_posts() ){
					           		
					           		the_post();
					           		

					           	  get_template_part('template-parts/content','travel');

					           }
			          }
			           	

				?>

    

  <?php 
     get_footer();

  ?>