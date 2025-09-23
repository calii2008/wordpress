<?php get_error_header();?>

<div id="primary">
    <div class="main">
        <div class="conntainer">
            <h1> search results for:<?php echo get_search_query();?></h1>

            <?php get_search_form();?>
         wile(have_posts()):
            the_post();
            get_template_part('template-parts/content', 'search');
            endwhile;
            the_posts_navigation();
            if(!have_posts()):
                ?>
                <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'wordpress');?></p>
                <?php
            endif;
            ?>
        </div>






    </div>






</div>
