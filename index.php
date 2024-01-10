<?php include("template/meta.php"); ?>
<body>


	<?php get_header(); ?>


	<main id="main">
		<div id="mv">
			<div class="mv_wrap">
				<div class="flex">
					<div class="mv_text_wrap">
						<div class="mv_text">
							<h1><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.svg" alt=""></h1>
							<p><img src="<?php echo get_template_directory_uri(); ?>/images/mv_catch.svg" alt=""></p>
						</div>

						<div class="mv_text_bottom">
							<div class="flex">
								<p>
								1-3-3, Noritake shinmachi,<br>Nishi-Ku, Nagoya-Shi, Aichi<br>451-0051, Japan<br>.

								<span class="copyright">©️REJOUIR All Rights Reserved</span>
								</p>

								<ul class="flex">
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/images/common/mv_logo01.svg" alt="">
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/images/common/mv_logo02.svg" alt="">
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/images/common/mv_logo03.svg" alt="">
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/images/common/mv_logo04.svg" alt="">
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/images/common/mv_logo05.svg" alt="">
									</li>
									<li>
										<img src="<?php echo get_template_directory_uri(); ?>/images/common/mv_logo06.svg" alt="">
									</li>
								</ul>
							</div>
							<!-- //flex -->
						</div>
					</div>
					<!-- //mv_text_wrap -->

					<div class="mv_img_wrap"></div>
				</div>
			</div>
			<!-- //mv_wrap -->
		</div>
		<!-- //mv -->

		<div class="page_nav_wrap">
			<div class="container">
				<ul class="flex">
					<li>
						<a href="/recruit-hair-new">
							<img src="<?php echo get_template_directory_uri(); ?>/images/hair_shinsotsu_pc.jpg" alt="" class="pc">
							<img src="<?php echo get_template_directory_uri(); ?>/images/hair_shinsotsu_sp.jpg" alt="" class="sp">
						</a>
					</li>
					<li>
						<a href="/recruit-hair-chuto">
							<img src="<?php echo get_template_directory_uri(); ?>/images/hair_chuto_pc.jpg" alt="" class="pc">
							<img src="<?php echo get_template_directory_uri(); ?>/images/hair_chuto_sp.jpg" alt="" class="sp">
						</a>
					</li>
				</ul>
				<ul class="flex">
					<li>
						<a href="/recruit-nail-eye-new">
							<img src="<?php echo get_template_directory_uri(); ?>/images/nail_shinsotsu_pc.jpg" alt="" class="pc">
							<img src="<?php echo get_template_directory_uri(); ?>/images/nail_shinsotsu_sp.jpg" alt="" class="sp">
						</a>
					</li>
					<li>
						<a href="/recruit-nail-eye-chuto">
							<img src="<?php echo get_template_directory_uri(); ?>/images/nail_chuto_pc.jpg" alt="" class="pc">
							<img src="<?php echo get_template_directory_uri(); ?>/images/nail_chuto_sp.jpg" alt="" class="sp">
						</a>
					</li>
				</ul>
			</div>
			<!-- //container -->
		</div>
		<!-- //page_nav_wrap -->

		<div class="welcome">
			<div class="right_container">
				<div class="flex">
					<div class="welcome_text_wrap">
						<strong>
							<img src="<?php echo get_template_directory_uri(); ?>/images/welcome_catch.svg" alt="">
						</strong>
						<p>
							REJOUIRは楽しませる、<br>
							喜ばせるって意味の会社名なんだよ。<br>
							お客様はもちろん、スタッフを楽しませる、<br>
							喜ばせる会社にしたくて付けた名前なんだ。<br>
							だから僕にはああしたい、こうしたい、<br>
							そんなこだわりがなくてスタッフが楽しいこと、<br>
							やりたいことを応援していたら色々なブランドが<br>
							できて今のかたちになったんだ。<br>
							だからこれからも、フラットな関係でありたい。<br>
							みんな違っていてもいい。<br>
							そこには認め合える関係性がある。<br>
							これがREJOUIRの強さなんだ。
						</p>

						<img src="<?php echo get_template_directory_uri(); ?>/images/welcome.svg" alt="">
					</div>
					<!-- //welcome_text_wrap -->

					<div class="welcome_img_wrap">
						<img src="<?php echo get_template_directory_uri(); ?>/images/welcome_img_pc.png" alt="" class="pc">
						<img src="<?php echo get_template_directory_uri(); ?>/images/welcome_img_sp.png" alt="" class="sp">
					</div>
				</div>
			</div>
			<!-- //welcome_container -->

			
		</div>
		<!-- //welcome -->

		<?php include("template/ourbrand.php"); ?>

		<section id="news">
			<div class="news_container">
				<div class="flex">
					<h2 class="sec_ttl">
						<strong>NEWS & TOPICS</strong>
						<span>新着情報</span>
					</h2>

					<a href="/news" class="more">and more</a>
				</div>

				<ul class="news_line">
					<?php
					$paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
					$args = array(
						'posts_per_page' => '3', //表示件数。-1なら全件表示
						'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
						'paged' => $paged,

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
			</div>
			<!-- //news_container -->
		</section>
		<!-- //news -->

		<section id="instagram">
			<div class="container">
				<h2 class="sec_ttl">
					<strong>INSTAGRAM</strong>
					<span>公式インスタグラム</span>
				</h2>
			</div>

			<div class="rejouir_group">
				<div class="right_container">
					<div class="insta_link flex">
						<img src="<?php echo get_template_directory_uri(); ?>/images/insta_rejouir.svg" alt="" class="">
						<a href="https://www.instagram.com/rejouir.group/" class="flex" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/images/insta_icon.svg" alt="">
							<span>rejouir.group</span>
						</a>
					</div>
					<?php echo do_shortcode('[instagram-feed feed=1]'); ?>
				</div>
			</div>

			<div class="favori">
				<div class="right_container">
					<div class="insta_link flex">
						<img src="<?php echo get_template_directory_uri(); ?>/images/insta_favori.svg" alt="" class="">
						<a href="https://www.instagram.com/favori_official_account/?ref=badgeg" class="flex" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/images/insta_icon.svg" alt="">
							<span>favori_official_account</span>
						</a>
					</div>
					<?php echo do_shortcode('[instagram-feed feed=2]'); ?>
				</div>
			</div>
			
		</section>
		<!-- //instagram -->

	</main>

		
	


<?php get_footer(); ?>