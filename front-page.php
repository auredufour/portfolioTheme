<!-- Single page  -->

	<?php get_header();  ?>
<div class="flex-right">
	<header>
		<div class="wrapper">
    	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      		<?php the_content(); ?>
    	<?php endwhile; // end the loop?>
    	</div>
	</header>

	<section class="portfolio">

		<?php $portfolioQuery = new WP_Query(array(
     	 	'posts_per_page' => 5,
   	   	'post_type' => 'portfolio'
  	  )); ?>

    	<div class="wrapper">
    		<div class="portfolio-content">
    			<div class="portfolio-text">

				<?php if( $portfolioQuery -> have_posts()):  ?>
    			<?php while($portfolioQuery -> have_posts()): ?>
       				<?php $portfolioQuery -> the_post();?>

        			<h2><?php the_title(); ?></h2>
         			<?php while(has_sub_field('images')): ?>
			<!--  <p><?php the_sub_field('caption'); ?></p>-->  
				</div>        			
				<div class="portfolio-item-image">
					<?php $image = get_sub_field('image') ?>
         			<img src=" <?php echo $image['sizes']['medium'] ?>" alt="">
         		</div>
       				<?php endwhile; ?>
     			<?php endwhile; ?>
    		<?php wp_reset_postdata(); ?>
    		<?php endif; ?>
    		</div>
		</div>
	</section>

	<section class="about">
			<div class="wrapper">

		<?php if( have_rows('biography') ): ?>
			<?php while ( have_rows('biography') ) : the_row(); ?> 
				<div class="biography-content">
		 			<?php the_sub_field('biography-description-part-1'); ?>
		 			<?php the_sub_field('biography-description-part-2'); ?>
		 		</div>
		 		<div class="biography-quote">
		 			<?php the_sub_field('biography-quote'); ?>
		 			<div class="biography-background">
		 				<?php the_sub_field('biography-quote-background');?>
		 				<?php the_sub_field('biography-quote-background');?>
		 			</div>
		 		</div>
			<?php endwhile; ?> 
		<?php endif; ?>	
		</div>	
	</section>

	<section class="contact">
			<div class="wrapper">

		<?php if( have_rows('form') ): ?>
			<?php while ( have_rows('form') ) : the_row(); ?> 
				<div class="form-text">
		 			<?php the_sub_field('form-title'); ?>
		 			<?php the_sub_field('form-text'); ?>
		 			<?php the_sub_field('form-link-email'); ?>
		 		</div>
		 		<div class="form-container">
		 			<?php the_sub_field('form-form'); ?>
		 		</div>
			<?php endwhile; ?> 
		<?php endif; ?>		
		</div> 
	</section>
	<?php get_footer(); ?>
	</div>
	</div> <!-- END DIV WRAPPER FLEX -->