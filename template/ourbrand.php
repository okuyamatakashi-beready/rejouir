<section id="ourbrand">
			<h2 class="sec_ttl">
				<strong>OUR BRAND</strong>
				<span>サロン一覧</span>
			</h2>



			<?php
			$args = array(
				'post_type' => 'tenpo',
				'posts_per_page' => -1, // 6件表示する例
				'orderby' => 'date',
    			'order' => 'ASC',
			);

			$query = new WP_Query($args);
			

			$count = 0; // カウンター変数初期化

			if ($query->have_posts()) :
			?>

			<div class="salon_list_wrap container">

				<?php while ($query->have_posts()) : $query->the_post(); ?>

					<?php
					if ($count % 3 === 0) :
						// 3の倍数の時は sp_slide 開始
				?>

				<div class="sp_slide flex">

					<?php endif; ?>
					<?php
					$logo = get_field('logo');
					$address = get_field('address');
					$reserve = get_field('reserve');
					?>

					<div class="salon">
						<div class ="salon_thumbnail" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)"></div>
						<div class="salon_info">
							<dl>
								<dt><?php the_title(); ?></dt>
								<dd><?php echo $address;?></dd>
							</dl>
							<ul class="flex">
								<li><a href="<?php echo $reserve;?>">> WEB予約</a></li>
								<li><a href="<?php the_permalink(); ?>">> 詳細を見る</a></li>
							</ul>
						</div>
						<img src="<?php echo $logo;?>" alt="" class="flt_img">
					</div>
					<!-- //salon -->

					<?php $count++; ?>

					<?php
					if ($count % 3 === 0 || $count === $query->post_count) :
						// 3の倍数の時 or 最後の記事の時は sp_slide 終了
						if ($count % 3 !== 0) :
							// 最後の記事が3の倍数でない場合は空白で埋める
							echo str_repeat('<div class="salon"></div>', 3 - ($count % 3));
						endif;
				?>

				</div>
				<!-- //sp_slide -->

				<?php endif; ?>

				<?php endwhile; ?>

			</div>
			<!-- //salon_list_wrap container -->

			<?php endif; wp_reset_postdata(); ?>

		</section>
		<!-- //ourbrand -->