<div id="splash">
		<div id="splash_logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="" class="fadeUp"></div><!--画像部分は適宜差し換えてください-->
	</div>
	<header id="header">
		<p class="flt_text"><img src="<?php echo get_template_directory_uri(); ?>/images/common/catch.svg" alt="" class="fadeUp"></p>
		<div class="header_wrap flex">
			<div class="header_left_content">
				<ul class="nav">
					<li>
						<a href="/">
							<strong>TOP</strong>
							<span>サイトトップ</span>
						</a>
					</li>
					<li>
						<a href="/requirements-hair-new">
							<strong>RECRUIT</strong>
							<span>リクルート</span>
						</a>
						<ul class="requirement_nav flex">
							<li>
								<a href="/recruit-hair-new">
									<strong>HAIR</strong>
									<span>新卒採用</span>
								</a>
							</li>
							<li>
								<a href="/recruit-hair-chuto">
									<strong>HAIR</strong>
									<span>中途採用</span>
								</a>
							</li>
							<li>
								<a href="/recruit-nail-eye-new">
									<strong>NAIL & EYE</strong>
									<span>新卒採用</span>
								</a>
							</li>
							<li>
								<a href="/recruit-nail-eye-chuto">
									<strong>NAIL & EYE</strong>
									<span>中途採用</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="/voice">
							<strong>STAFF VOICE</strong>
							<span>スタッフの声</span>
						</a>
					</li>
					<li>
						<a href="/#ourbrand">
							<strong>BRAND SALON</strong>
							<span>サロン一覧</span>
						</a>
					</li>
					<li>
						<a href="/news">
							<strong>NEWS & TOPICS</strong>
							<span>新着情報</span>
						</a>
					</li>
					<li>
						<a href="/#instagram">
							<strong>INSTAGRAM</strong>
							<span>公式インスタグラム</span>
						</a>
					</li>
					<li>
						<a href="/guidance">
							<strong>ONLINEGUIDANCE</strong>
							<span>オンライン見学</span>
						</a>
					</li>
					<li>
						<a href="/company">
							<strong>COMPANY</strong>
							<span>会社概要</span>
						</a>
					</li>
					<li class="flex">
						<a href="" style="pointer-events: none;">
							<strong>CONTACT</strong>
							<span>お問い合わせ</span>
						</a>
						<ul class="flex">
							<li>
								<a href="https://line.me/R/ti/p/@ent9134c?from=page&accountId=ent9134c" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/images/common/line.png" alt="">
								</a>
							</li>
							<li>
								<a href="https://www.instagram.com/rejouir.group/" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/images/common/insta_hair.png" alt="">
								</a>
							</li>
							<li>
								<a href="https://www.instagram.com/favori_official_account/" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/images/common/insta_eye.png" alt="">
								</a>
							</li>
							<li>
								<a href="tel:0525821098">
									<img src="<?php echo get_template_directory_uri(); ?>/images/common/tel.png" alt="">
								</a>
							</li>
						</ul>
					</li>
				</ul>
				<!-- //nav -->
			</div>
			<!-- //header_left_content -->

			<div class="header_right_img">
				
			</div>
		</div>
		<!-- //header_wrap -->
	</header>
	<div class="top_border"></div>
	<div class="right_border"></div>
	<div class="bottom_border"></div>
	<div class="left_border"></div>


	<div id="toggle">
		<div>
			<span></span>
			<span></span>
		</div>
	</div>

	<div class="flt_line_btn">
		<a href="https://line.me/R/ti/p/@ent9134c?from=page&accountId=ent9134c" target="_blank">
			<img src="<?php echo get_template_directory_uri(); ?>/images/common/flt_line_btn.png" alt="" class="pc">
			<img src="<?php echo get_template_directory_uri(); ?>/images/common/flt_line_btn_sp.png" alt="" class="sp">
		</a>
	</div>
	
	<div id="popup">
    <div class="popup_wrap">
        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
        $args = array(
            'posts_per_page' => '1', // 表示件数。-1なら全件表示
            'post_status' => 'publish', // 取得するステータス。publishなら一般公開のもののみ
            'paged' => $paged,
            'meta_query' => array(
                array(
                    'key' => 'onoff',
                    'value' => '1',
                    'compare' => '='
                )
            )
        );
        ?>

        <?php $my_query = new WP_Query( $args ); ?><!-- クエリの指定 -->

        <?php
        $has_posts = false;
        if ( $my_query->have_posts() ) :
            $has_posts = true;
            while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                <div class="popup_content">
                    <div class="popup_thumb" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)"></div>
                    <div class="popup_text_content">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/common/popup_new.png" alt="">
                        <h1><?php the_title(); ?></h1>
                        <div class="text">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>">VIEW MORE</a>
                    </div>
                </div>
            <?php endwhile;
        endif;
        ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>

<script>
    // Cookie名を設定
    const cookieName = "popupShown";
    const expirationDays = 1; // Cookieの有効期限（日数）

    // Cookieを取得し、すでに表示済みの場合はポップアップを表示しない
    function checkCookie() {
        const cookies = document.cookie.split("; ");
        for (let i = 0; i < cookies.length; i++) {
            if (cookies[i].split("=")[0] === cookieName) {
                return false;
            }
        }
        return true;
    }

    // Cookieを設定
    function setCookie() {
        const date = new Date();
        date.setTime(date.getTime() + expirationDays * 24 * 60 * 60 * 1000); // Cookieの有効期限を設定
        const expires = "expires=" + date.toUTCString();
        document.cookie = cookieName + "=true;" + expires + ";path=/";
    }

    // ポップアップを表示する
    function showPopup() {
        const popup = document.getElementById("popup");
        popup.style.display = "block";
        setCookie();
    }

    // ページ読み込み時にCookieをチェックし、ポップアップを表示する
    window.onload = function() {
        if (checkCookie() && <?php echo $has_posts ? 'true' : 'false'; ?>) {
            showPopup();
        } else {
            const cookies = document.cookie.split("; ");
            for (let i = 0; i < cookies.length; i++) {
                if (cookies[i].split("=")[0] === cookieName) {
                    const cookieValue = cookies[i].split("=")[1];
                    const lastVisit = new Date(cookieValue); // Dateオブジェクトに変換
                    const today = new Date();
                    if ((today - lastVisit) >= expirationDays * 24 * 60 * 60 * 1000) {
                        // 1日以上経過している場合はCookieを再設定し、ポップアップを表示する
                        setCookie();
                        showPopup();
                    }
                    break;
                }
            }
        }
    };

    const beforeElm = document.querySelector('#popup .popup_wrap,img.close_btn,#popup .popup_wrap .popup_content::before');
    beforeElm.addEventListener('click', function(event) {
        if (!event.target.closest('#popup .popup_wrap .popup_content .popup_thumb,#popup .popup_wrap .popup_content .popup_text_content')) { // popup_content内の要素をクリックした場合は処理を中止する
            const popup = document.getElementById('popup');
            popup.style.display = 'none';
        }
    });
</script>
