<article class="latest-news">
    <?php if(has_post_thumbnail()): ?>
        <div class="latest-news-thumbnail">
            <?php the_post_thumbnail('large'); ?>
        </div>
        <div>class</div>
        <p>
         <?php if ("post"==get_post_tybe()):?>
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            <div class="entry-meta">
                <p>posted in <?php echo get_the_date();?> by <?php the_author_posts_link();?></p>


    </article>