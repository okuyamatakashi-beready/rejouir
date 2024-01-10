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
        <?php
$categories = get_categories();
?>

<div class="select_sp sp">
  <select id="jobSelect" name="category">
    <option value="<?php echo esc_attr( home_url() ); ?>">選択してください</option>
    <option value="<?php echo esc_attr( get_category_link( 0 ) ); ?>">ALL</option>
    <?php foreach ( $categories as $category ) : ?>
      <option value="<?php echo esc_attr( get_category_link( $category->term_id ) ); ?>">
        <?php echo esc_html( $category->name ); ?>
      </option>
    <?php endforeach; ?>
  </select>
</div>

        <ul class="news_line">

            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
            $args = array(
                'posts_per_page' => '10', //表示件数。-1なら全件表示
                'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
                'paged' => $paged,

            );
            ?>
            <?php $wp_query = new WP_Query( $args ); ?><!-- クエリの指定 -->

            <?php if ( $wp_query->have_posts() ) :

                while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

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

        <div class="pagination_wrap">
			<?php
			if ( function_exists( 'pagination' ) ) :
                pagination( $wp_query->max_num_pages, get_query_var( 'paged' ) );
			endif;
				?>
		</div>

        <a href="javascript:history.back();" class="back_btn">PAGE BACK</a>

    </div>
</section>

<?php get_footer(); ?>