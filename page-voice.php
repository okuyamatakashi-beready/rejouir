<?php include("template/meta.php"); ?>
<body>


<?php get_header(); ?>


    
<section id="staff_voice_archive">
    <div class="staff_voice_container">
        
        <h1 class="common_ttl">
            <strong>STAFF VOICE</strong>
            <span>スタッフの声</span>
        </h1>
        <?php
        $terms = get_terms( array(
            'taxonomy' => 'job',
            'hide_empty' => false,
        ) );
        
        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
            echo '<ul class="cat_list flex">';
            echo '<li><a href="' . esc_url( home_url( '/voice/' ) ) . '">ALL</a></li>';
            foreach ( $terms as $term ) {
                $term_link = get_term_link( $term );
                if ( is_wp_error( $term_link ) ) {
                    continue;
                }
                echo '<li><a href="' . esc_url( $term_link ) . '">' . esc_html( $term->name ) . '</a></li>';
            }
            echo '</ul>';
        }
        ?>
        <?php
        $terms = get_terms( array(
            'taxonomy' => 'job',
            'hide_empty' => true,
        ) );
        ?>
        <div class="select_sp sp">
            <select id="jobSelect" name="category">
                <option value="<?php echo get_template_directory_uri(); ?>/voice">選択してください</option>
                <option value="<?php echo get_template_directory_uri(); ?>/voice">ALL</option>
                <?php foreach ( $terms as $term ) : ?>
                    <option value="<?php echo esc_attr( get_term_link( $term ) ); ?>">
                        <?php echo esc_html( $term->name ); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>


        
        <div class="page_voice_list flex">
            
        <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
            $args = array(
                'posts_per_page' => '-1', //表示件数。-1なら全件表示
                'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
                'paged' => $paged,
                'order' => 'ASC',
                'post_type' => 'staff_info',
                'meta_query' => [
                    [
                        'key' => 'interview_or',
                        'value' => '1',
                        'compare' => '='
                    ]
                ],
                );
        ?>
        <?php $my_query = new WP_Query( $args ); ?><!-- クエリの指定 -->

        <?php if ( $my_query->have_posts() ) :

            while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
            

            <?php 
                $catch = get_field('catch');
                $type = get_field('type');
                $job = get_field('job');
                $year = get_field('year');
                $staff_slider = get_field('staff_slider');
                ?>

            <div class="staff_item">
                <a href="<?php the_permalink(); ?>">
                    <figure>
                        <img src="<?php echo $staff_slider;?>" alt="">
                        <figcaption class="<?php echo $type;?>"><?php echo $type;?></figcaption>
                    </figure>
                    <div class="staff_text">
                        <p><?php echo $catch;?></p>
                        <span><?php echo $job;?>/ <?php echo $year;?>年入社</span>
                        <span><?php the_title(); ?></span>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
        
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

        </div>
        <!-- //staff_slider -->

    </div>
</section>

<?php get_footer(); ?>