<?php
/*
Template Name: My Custom Page
*/
?>

<?php get_header(); ?>
<div id="main">
<!-- <?php get_sidebar(); ?> -->
<div id="archieved-content">
  <section>
  <div class="qwinix">
    <h5>Archieved</h5>
    <ul>
      <?php wp_list_cats(); ?>
    </ul>
    </div>
  </section>
</div>


<?php get_footer(); ?>