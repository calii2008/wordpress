<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        <div class="entry-meta">
            <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?>
            <?php if(has_category()) : ?>
                <span class="category-links"><?php the_category(', '); ?></span>
            <?php endif; ?>
            <?php if(has_tag()) : ?>
                <span class="tag-links"><?php the_tags('', ', '); ?></span>-
                <?php endif; ?>
        </div>
                </header>
                <?php the_content(); ?>
                <?php wp_link_pages_pages(); ?>
 
        </article>