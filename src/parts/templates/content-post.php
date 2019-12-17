<?php

$authors = get_field('post_authors');
if ($authors && count($authors)) {
  $author_objs = get_users(array(
  	'include'      => $authors,
  ) );
}

$terms = get_the_terms( get_the_ID(), 'category' );
$term_ids = array_map( function($term) { return $term->term_id; }, $terms);

$keep_reading_query = new WP_Query( array(
  'posts_per_page'    => 3,
  'post__not_in'      => [get_the_ID()],
  'category__in'      => $term_ids
) );

?>

<div class="post-main <?php echo $keep_reading_query->have_posts() ? 'has-sidebar' : ''; ?>" >
  <div class="post-content">

    <div class="the-content" >
      <?php the_content(); ?>
    </div>

    <?php get_template_part('/parts/elements/pagination/pagination-buttons-single'); ?>
  </div>

  <?php  if ( $keep_reading_query->have_posts() ) { ?>
    <div class="post-keep-reading" >
      <div class="keep-reading-title">Keep Reading</div>
      
      <div class="posts-wrapper">
        <?php while ( $keep_reading_query->have_posts() ) { $keep_reading_query->the_post();
          get_template_part('parts/shared/loop-blog');
        } ?>
      </div>
    </div>

  <?php
  wp_reset_postdata();
  } ?>
</div>
