<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="entry-content">
        <?php the_content(); ?>
        <?php $phone_number = get_option('basic_info_phone_number');  echo $phone_number; ?>
        <div class="entry-links"><?php wp_link_pages(); ?></div>
    </section>
    </article>
<?php endwhile; endif; ?>
</section>
<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>