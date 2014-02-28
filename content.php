<?php
/**
 * The default template for displaying content
 *
 * @package wp-kube
 * @since wp-kube 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <?php if (has_post_thumbnail()): ?>
      <div class="entry-thumbnail"><?php the_post_thumbnail(); ?></div>
    <?php
    endif;
    if (is_single()):
        the_title('<h1>', '</h1>');
    else:
        the_title('<h1><a href="'.esc_url(get_permalink()).'" rel="bookmark">', '</a></h1>');
    endif;
    ?>
    <div>
      <?php if (is_single()): ?>
        <i class="icon-calendar"></i>&nbsp;<?php the_time(get_option('date_format')); ?>&nbsp;&nbsp;
      <?php else: ?>
        <i class="icon-calendar"></i>&nbsp;<a href="<?php the_permalink(); ?>"><?php the_time(get_option('date_format')); ?></a>&nbsp;&nbsp;
      <?php endif ?>
      <i class="icon-user"></i>&nbsp;<?php the_author_posts_link(); ?>&nbsp;&nbsp;
      <?php if (!post_password_required() && (comments_open() || get_comments_number())): ?>
        <i class="icon-comment"></i>&nbsp;
        <?php comments_popup_link(__('Leave a comment', 'wp-kube'), __('1 Comment', 'wp-kube'), __('% Comments', 'wp-kube'));
      endif; ?>
    </div>
    <div>
      <i class="icon-sitemap"></i>&nbsp;<?php the_category(', '); ?>
      &nbsp;&nbsp;
      <?php if (has_tag()): ?>
        <i class="icon-tag"></i>&nbsp;<?php the_tags(''); ?>
      <?php endif; ?>
    </div>
  </header>
  <section>
    <?php
    if (is_single()):
        the_content();
    else:
        the_excerpt();
    endif;
    ?>
  </section>
  <footer>
    <?php
    wp_link_pages();
    if (is_user_logged_in()): ?>
        <i class="icon-pencil"></i>&nbsp;
    <?php edit_post_link(__('Edit', 'wp-kube'));
    endif;
    ?>
  </footer>
</article>
