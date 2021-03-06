<!-- Single page  -->

	<?php get_header();  ?>
	<header>
		<div class="wrapper">
		<div class="header-position">
    	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      		<?php the_content(); ?>
    	<?php endwhile; // end the loop?>
    	</div>
    	<div class="animate">
    		<img class="animate-flicker-one" src=" <?php bloginfo('template_directory')?>/images/lego.svg" alt="">
    		<img class="animate-flicker-two" src=" <?php bloginfo('template_directory')?>/images/lightbulb.svg" alt="">
    		<img class="animate-flicker-three" src=" <?php bloginfo('template_directory')?>/images/polaroid.svg" alt="">
    		<img class="animate-flicker-four" src=" <?php bloginfo('template_directory')?>/images/globe.svg" alt="">
    		<img class="animate-flicker-five" src=" <?php bloginfo('template_directory')?>/images/tea.svg" alt="">
    		<img class="animate-flicker-six" src=" <?php bloginfo('template_directory')?>/images/pen.svg" alt="">
    		<img class="animate-flicker-seven" src=" <?php bloginfo('template_directory')?>/images/donut.svg" alt="">
    	</div>
	</header>

<div class="flex-right">

	<section class="portfolio" id="work">
		<?php $portfolioQuery = new WP_Query(array(
     	 	'posts_per_page' => 5,
   	   		'post_type' => 'portfolio',
   	   		'order' => 'ASC'
  	  	)); ?>

		<?php if( $portfolioQuery -> have_posts()):  ?>
    		<?php while($portfolioQuery -> have_posts()): ?>
       			<?php $portfolioQuery -> the_post();?>
         		<?php while(has_sub_field('project_item')): ?> 


    		<div class="portfolio-content">
    			<div class="wrapper portfolio-skew">
    				<div class="flex-text">
        				<h4 data-stellar-ratio="0.85"><?php the_sub_field('project_number') ?></h4>
    					<div class="portfolio-text">
        					<h2><?php the_title(); ?></h2>
							<p class="skills"><?php the_sub_field('project_caption'); ?></p>
							<?php the_content(); ?>
							<div class="flex">
								<a class="button-live" href="<?php the_sub_field('project_button_live');  ?>" target="_blank"><div class="live">View project <img src="<?php bloginfo('template_directory')?>/images/arrow.png" alt=""></div></a>
								<?php $logo = get_sub_field('project_logo_github') ?>
							<div class="github">
							<a href="<?php the_sub_field('project_button_github');?>" target="_blank" ><img src="<?php echo $logo['sizes']['large'];?>"></a>
							</div>
						</div>
					</div>  
					</div>      			
					<div class="portfolio-item-image" >
						<?php $image = get_sub_field('project_image') ?>
         				<img src=" <?php echo $image['sizes']['large'] ?>" alt="">
         			</div>
         		</div>
			</div>
       			<?php endwhile; ?>
     		<?php endwhile; ?>
    		<?php wp_reset_postdata(); ?>
    		<?php endif; ?>
	</section>

	<section class="about" id="about">
			<div class="wrapper about-flex clearfix">

		<?php if( have_rows('biography') ): ?>
			<?php while ( have_rows('biography') ) : the_row(); ?> 
		 		<div class="biography-quote" data-stellar-ratio="1.3" >
		 			<?php the_sub_field('biography-quote'); ?>
		 			<div class="biography-background">
		 				<span><?php the_sub_field('biography-quote-background');?></span>
		 				<span><?php the_sub_field('biography-quote-background');?></span>
		 			</div>
		 		</div>
				<div class="biography-content">
		 			<?php the_sub_field('biography-description-part-1'); ?>
		 			<?php the_sub_field('biography-description-part-2'); ?>
		 		</div>
			<?php endwhile; ?> 
		<?php endif; ?>	
		</div>	
	</section>


	<section class="contact" id="contact">
			<div class="wrapper contact-flex">

		<?php if( have_rows('form') ): ?>
			<?php while ( have_rows('form') ) : the_row(); ?> 
				<div class="form-text" >
		 			<h3><?php the_sub_field('form-title'); ?></h3>
		 			<div class="line"></div>
		 			<?php the_sub_field('form-text'); ?><a href="mailto:<?php the_sub_field('form-link-email'); ?>"><?php the_sub_field('form-link-email'); ?></a> 
		 		</div>
		 		<div class="form-container">
		 			<?php the_sub_field('form-form'); ?>
		 		</div>
			<?php endwhile; ?> 
		<?php endif; ?>		
		</div> 
	</section>
	</div>
</div> <!-- END DIV WRAPPER FLEX -->
<?php get_footer(); ?>