<?php /*Template Name: Portfolio */
get_header();
?>
<div class="main-wrapper <?php echo esc_attr( meditation_get_theme_mod('layout_page') ); ?> ">

	<div class="site-content"> 
		<div class="content">
<?php
	if ( have_posts() ) : 
		while ( have_posts() ) : the_post();

			get_template_part( 'content', 'page' );	
			
			
		endwhile; 

		meditation_paging_nav();
		
	else : 
		
		get_template_part( 'content', 'none' );
	endif;
?>		
		</div><!-- .content -->
	</div><!-- .site-content -->
	
</div> <!-- .main-wrapper -->

<?php
get_footer();
