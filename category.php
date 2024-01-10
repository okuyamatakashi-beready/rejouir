<?php include("template/meta.php"); ?>
<body>


<?php get_header(); ?>


    
<section id="news_archive">
    <div class="news_container">
        
        <h1 class="common_ttl">
            <strong>NEWS & TOPICS</strong>
            <span>ニュース＆トピックス</span>
        </h1>
        <ul class="cat_list flex">
            <li><a href="/news">ALL</a></li>
            <?php wp_list_categories('title_li='); ?>
        </ul>
        <ul class="news_line">
            <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
                $cat = get_the_category();
                $cat = $cat[0];
                $cat_id = $cat->cat_ID;
                $args = array(
                    'posts_per_page' => '12', //表示件数。-1なら全件表示
                    'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
                    'paged' => $paged,
                    'cat' => $cat_id,
            );
            ?>
            <?php $my_query = new WP_Query( $args ); ?><!-- クエリの指定 -->

            <?php if ( $my_query->have_posts() ) :

                while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

                <li>
                    <a href="<?php the_permalink(); ?>" class="flex">
                        <time><?php the_time('Y.m.d'); ?></time>
                        <h3><?php the_title(); ?></h3>
                    </a>
                </li>

                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>	
        </ul>

        <a href="javascript:history.back();" class="back_btn">PAGE BACK</a>

    </div>
</section>

<?php get_footer(); ?>
