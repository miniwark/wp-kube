<?php
/**
 * The template used for displaying page content
 *
 * @package alkimia
 * @since alkimia 1.1
 */

// pages do not display, date, authors, comments, categories and tags
// they are suposed to be used for corporate stuff

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <?php if (has_post_thumbnail()): ?>
      <div class="entry-thumbnail"><?php the_post_thumbnail(); ?></div>
    <?php endif; ?>
    <h2 class="entry-title"><?php the_title(); ?></h2>
  </header>
  <section>
    <?php the_content(); ?>
  </section>
  <footer>
    <?php wp_link_pages(); ?>
    <?php if (is_user_logged_in()): ?>
        <i class="icon-pencil"></i>&nbsp;
    <?php edit_post_link(__('Edit', 'alkimia'));
    endif;
    ?>
  </footer>
</article>
