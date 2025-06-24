<?php get_header(); ?>
<div id="container">
    <div id="inner_container">
        <div class="imgs_container">
            <div class="img_container">
                <img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" >
            </div>
            <div class="img_container">
                <img src="<?php echo get_template_directory_uri(); ?>/images/2.jpg" >
            </div>
            <div class="img_container">
                <img src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" >
            </div>

            </div>
        <div id="overlay">
            <div= id="left_button" class="overlay_button" onclick="onlleftbutton()">
              <div= id="left_button" class="overlay_button" onclick="onlleftbutton()">
              

<div style="text-align:center"></div>
    <span class="dot" onelicik="currentSlide(1)"></span>
 <span class="dot" onelicik="currentSlide(2)"></span>
  <span class="dot" onelicik="currentSlide(3)"></span>
        </div>
    <div id="content" class="site-content">
      <div id="primery" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    get_template_part('template-parts/content', get_post_format());
                endwhile;
            else :
                get_template_part('template-parts/content', 'none');
            endif;
            ?>
        </main>


      </div>      



</div>


</div>  
