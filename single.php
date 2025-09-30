<?php get_header(); ?>
<div id="primary">
    <div id="main">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            get_template_part( 'parts/content', 'singel' );
            ?>
            <div class="wpdevs-pagiantion">
                <div class="pages- next">
                    <?php previous_post_link(); ?>
                    </div>
                    </div>
            <?php
            if ( comments_open() || get_comments_number() ){
                comments_template();

}
endwhile;
?>
</div>


            </div>




    </div>

    </div>

</div>
<?php get_footer(); ?>