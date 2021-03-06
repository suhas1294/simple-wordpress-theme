<?php /* Template Name: mycustom */ ?>

<?php get_header(); ?>

<div id="main">

  <section id="custom-content">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

      <h1><?php the_title(); ?></h1>

      <!-- <?php the_content(); ?> -->
      <div class="archived-custom">
    <!-- <h5>Archieved</h5> -->
    <ul>
      <?php wp_list_cats(); ?>
    </ul>
    </div>

    </article>

    <?php endwhile; endif; ?>

  </section><!-- #content -->

<!-- <?php get_sidebar(); ?> -->

</div><!-- #main -->

<?php get_footer(); ?>