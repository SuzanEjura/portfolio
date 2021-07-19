<?php
	get_header();
?>
<div id="colorlib-main">

	<section class="ftco-section">
		<div class="container">
    		
       

				<?php
					
			           if(have_posts() ){

					           	while(have_posts() ){
					           		
					           		the_post();
					           		

					           	  get_template_part('template-parts/content', 'travel');

					           }
			          }
			           	

				?>


     </div>
    </section>
    

  <?php 
     get_footer();

  ?>