<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package wp-kube
 * @since wp-kube 1.0
 */

get_header(); ?>
  <!-- main section -->
  <section class="column-group gutters">
    <!-- main content -->
    <article class="large-75">
      <?php get_template_part('breadcrumb'); ?>
      <header>
        <h1><?php _e('Not Found', 'wp-kube'); ?></h1>
      </header>
      <section>
        <p><?php _e('It looks like nothing was found at this location. Maybe try a search?', 'wp-kube'); ?></p>
        <div class="large-45 push-center vertical-space">
        <?php get_search_form(); ?>
        </div>
      </section>
    </article>
    <!-- right widgets sidebar -->
    <?php get_sidebar(); ?>
  </section>
<?php get_footer(); ?>
