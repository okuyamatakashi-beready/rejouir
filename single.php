<?php include("template/meta.php"); ?>
<body>


<?php get_header(); ?>
<?php 
    $single_slider = get_field('single_slider');
    $single_img = get_field('single_img');

    ?>
<div class="post">
    <div class="post_container">
        
        <div class="post_wrap flex">
            <div class="post_slider">

                <div class="slider-for">
                    <?php if( have_rows('single_slider') ): ?>
                        <?php while( have_rows('single_slider') ): the_row();
                                $single_img = get_sub_field('single_img');
                            ?>
                            <div class="post_slider_for_img" style="background-image: url(<?php echo $single_img;?>);"></div>
                        <?php endwhile;?>
                    <?php endif; ?>
                </div>
                <!-- //slider-for -->

                <div class="slider-nav">
                    <?php if( have_rows('single_slider') ): ?>
                        <?php while( have_rows('single_slider') ): the_row();
                                $single_img = get_sub_field('single_img');
                            ?>
                            <div class="post_slider_nav_img" style="background-image: url(<?php echo $single_img;?>);"></div>
                        <?php endwhile;?>
                    <?php endif; ?>
                </div>
                <!-- //slider-nav -->
            </div>
            <!-- //post_slider -->

            <div class="post_content">
                <div class="post_ttl">
                    <span>NEWS & TOPICS</span>
                    <div class="flex">
                        <h2><?php the_title(); ?></h2>
                        <time><?php the_time('Y.m.d'); ?></time>
                        
                    </div>
                </div>

                <div class="post_text">
                    <?php the_content(); ?>
                </div>
            </div>
            <!-- //post_content -->
        </div>
        <!-- //post_wrap -->

        <a href="/" class="page_back">PAGE BACK</a>
        
    </div>
    <!-- //container -->
</div>





<?php get_footer(); ?>