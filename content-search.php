<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if ("post"==get_post_tybe()):?>
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            <div class="entry-meta">
                <p>posted in <?php echo get_the_date();?> by <?php the_author_posts_link();?></p>

       <?php if ("post"==get_post_tybe()):?>
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            <div class="entry-meta">
                <p>posted in <?php echo get_the_date();?> by <?php the_author_posts_link();?></p>

       </div class="content">
          <?php the_excerpt(); ?> 
          </div>