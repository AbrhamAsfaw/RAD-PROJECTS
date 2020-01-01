<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ABTheme
 */

get_header();

while (have_posts()) {
  the_post();

 ?>    

    <h2 class="page-heading"><?php the_title(); ?></h2>
    <div id="post-container">
      <section id="blogpost">
        <div class="card">
          <?php if(has_post_thumbnail()) {  ?>
          <div class="card-image">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
          </div>
          <?php } ?>
          <div class="card-description">
            <?php the_content(); ?>
          </div>
        </div>

      </section>
      <?php } ?>

      <br>

      <aside id="sidebar">
        <?php dynamic_sidebar('sidebar-1'); ?>
      </aside>
    </div>

<?php get_footer(); ?>    