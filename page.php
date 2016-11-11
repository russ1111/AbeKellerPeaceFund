<!--Get Header Function-->

<?php get_header(); ?>
	    
    <!-- Start Content -->
<div id="content" class="page">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="page-content-<?php the_ID(); ?>" class="page-content">
    <h2><?php the_title(); ?></h2>
    <?php the_content(''); // get written page content ?>
     </article>
	<?php endwhile; endif; ?>
    <?php get_child_pages(); ?>
        
</div>
<!-- End Content -->

<!-- Apply & Donate Buttons -->
<a href="http://www.abekeller.tzaccara.com/grants/apply/" class="alignright"><img src="http://www.abekeller.tzaccara.com/wp-content/themes/abekeller/images/apply_button.png" alt="apply" id="apply" /></a>

<a href="http://www.abekeller.tzaccara.com/donate/" class="alignright"><img src="http://www.abekeller.tzaccara.com/wp-content/themes/abekeller/images/donate_button.png" alt="donate" id="donate" /></a>

<!--Get Sidebar Function-->
<?php get_sidebar(); ?>

<!--Get Footer Function-->
<?php get_footer(); ?> 