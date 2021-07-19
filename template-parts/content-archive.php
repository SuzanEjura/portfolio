
<div class="col-md-4">
    				<div class="blog-entry ftco-animate">
							<a href="<?php the_permalink();?>" class="img img-2" style="background-image: url(<?php the_post_thumbnail_url('thumbnail'); ?>" ></a>
							<div class="text text-2 pt-2 mt-3">
								<span class="category mb-3 d-block"><a href="<?php the_permalink();?>"><?php the_tags();?></a></span>
	              <h3 class="mb-4"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
	              <p class="mb-4"><?php the_excerpt();?></p>
	              <div class="author mb-4 d-flex align-items-center">
	            		<a href="<?php the_permalink();?>" class="img" style="background-image: url(<?php the_post_thumbnail_url('thumbnail'); ?>"></a>
	            		<div class="ml-3 info">
	            			<span>Written by</span>
	            			<h3><a href="<?php the_permalink();?>">Dave Lewis</a>, <span><?php the_date();?></span></h3>
	            		</div>
	            	</div>
	              <div class="meta-wrap align-items-center">
	              	<div class="half order-md-last">
		              	<p class="meta">
		              		<span><i class="icon-heart"></i>3</span>
		              		<span><i class="icon-eye"></i>100</span>
		              		<span><i class="icon-comment"></i>5</span>
		              	</p>
	              	</div>
	              	<div class="half">
		              	<p><a href="<?php the_permalink();?>" class="btn py-2">Continue Reading <span class="ion-ios-arrow-forward"></span></a></p>
	              	</div>
	              </div>
	            </div>
	          </div>
	        </div>



