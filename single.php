<?php
/**
 * The Template for displaying all single posts
 *
 * @package alkimia
 * @since alkimia 1.1
 */

get_header();
?>
  <!-- main section -->
  <section class="column-group gutters">
    <!-- main content -->
    <main class="large-75 medium-70 small-100">
    <?php get_template_part('breadcrumb'); ?>
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            get_template_part('content', 'single');
            ?>
            <nav class="ink-navigation prev-next">
              <ul class="pills rounded flat shadowed pull-left">
                <li class="previous"><?php previous_post_link('%link', '&laquo; %title');?></li>
              </ul>
              <ul class="pills rounded flat shadowed pull-right">
                <li class="next"><?php next_post_link('%link', '%title &raquo;');?></li>
              </ul>
            </nav>
            <?php
            if (comments_open() || get_comments_number()):
                comments_template();
            endif;
        endwhile;
    endif;
    ?>
    </main>
    <!-- right widgets sidebar -->
    <?php get_sidebar(); ?>
  </section>
<?php get_footer(); ?>
