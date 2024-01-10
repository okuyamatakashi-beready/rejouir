<?php include("template/meta.php"); ?>
<body>


<?php get_header(); ?>

<section id="requirements">
    <h1 class="common_ttl">
        <strong>REQUIREMENTS</strong>
        <span>募集要項</span>
    </h1>
    
    <div class="require_container">
        <ul class="flex require_tab pc_flex">
            <li>
                <a href="/requirements-hair-new">HAIR｜新卒採用</a>
            </li>
            <li>
                <a href="/requirements-hair-chuto">HAIR｜中途採用</a>
            </li>
            <li>
                <a href="/requirements-nail-eye-new" class="active">NAIL&EYE｜新卒採用</a>
            </li>
            <li>
                <a href="/requirements-nail-eye-chuto">NAIL&EYE｜中途採用</a>
            </li>
        </ul>

        <div class="select_sp sp">
            <select id="jobSelect" name="category">
                <option value="">選択してください</option>
                <option value="/requirements-hair-new">HAIR｜新卒採用</option>
                <option value="/requirements-hair-chuto">HAIR｜中途採用</option>
                <option value="/requirements-nail-eye-new">NAIL&EYE｜新卒採用</option>
                <option value="/requirements-nail-eye-chuto">NAIL&EYE｜中途採用</option>

            </select>
        </div>
        <dl class="flex">
            <dt>職種</dt>
            <dd>（新卒）ネイリスト & アイリスト</dd>
        </dl>
        <dl class="flex">
            <dt>会社名</dt>
            <dd>株式会社リジェール</dd>
        </dl>
        <dl class="flex">
            <dt>雇用区分</dt>
            <dd>正社員 / パート / 業務委託</dd> 
        </dl>
        <dl class="flex">
            <dt>勤務地</dt>
            <dd>愛知県 名古屋市・清須市</dd>
        </dl>
        <dl class="flex">
            <dt>給与</dt>
            <dd>
                新卒ネイリスト<br>
                月給 ¥195,000~（基本給 ¥180,000）<br><br>

                新卒アイリスト<br>
                月給 ¥205,000~（基本給 ¥190,000）<br><br>

                ※みなし残業手当 ¥15,000~を含む。超過分は別途支給<br>
                ※試用期間3~6ヶ月（期間中：条件変更なし）<br>
                ・昇給あり<br>
                ・賞与年2回支給<br>
                ・交通費支給あり（上限¥15,000~20,000/月）
            </dd>
        </dl>
        <dl class="flex">
            <dt>勤務時間</dt>
            <dd>実働8時間 （休憩2時間）<br>
                シフト勤務制<br>
                営業時間は店舗によって異なります</dd>
        </dl>
        <dl class="flex">
            <dt>休日休暇</dt>
            <dd>月8日休み<br>
            年間休暇 110日以上<br>
            ・夏季・年末年始休み<br>
            ・有給休暇あり<br>
            ・土日祝休みあり<br>
            ・半休制度あり<br>
            ・産休（産休取得/復帰実績多数）</dd>
        </dl>
        <dl class="flex">
            <dt>待遇</dt>
            <dd>・社会保険完備<br>
            ・マイカー通勤可<br>
            ・社員寮あり（女子寮2ヶ所、男子寮1ヶ所）<br>
            ・家賃補助制度あり（¥10,000）<br>
            ・副業OK（店舗による）</dd>
        </dl>
        <dl class="flex">
            <dt>応募方法</dt>
            <dd>まずはお気軽にお問い合わせください。<br>
            公式LINE、インスタグラム、お電話で随時受付中。</dd>
        </dl>
    </div>
</section>

<div class="page_nav_wrap requirement_nav">
    <h2>▼ 詳しい採用情報はこちら</h2>
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

<?php include("template/recruit-flow-blue.php"); ?>

<?php include("template/staffslide.php"); ?>

<?php include("template/ourbrand.php"); ?>

<?php get_footer(); ?>