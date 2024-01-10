<?php include("template/meta.php"); ?>
<body>


<?php get_header(); ?>

<?php 
    $mv_left_img = get_field('mv_left_img');
    $mv_right_img = get_field('mv_right_img');
    $catch = get_field('catch');
    $type = get_field('type');
    $job = get_field('job');
    $year = get_field('year');
    $q_01 = get_field('q_01');
    $q_02 = get_field('q_02');
    $q_03 = get_field('q_03');
    $q_04 = get_field('q_04');
    $q_05 = get_field('q_05');
    $salon_name = get_field('salon_name');
    $terms = get_the_terms(get_the_ID(), 'salon');
        if ($terms && !is_wp_error($terms)) {
        $term_slug = $terms[0]->slug;
        }
    ?>

<div class="staff_mv flex">
    <div class="staff_left" style="background-image: url(<?php echo $mv_left_img;?>);"></div>
    <div class="staff_right" style="background-image: url(<?php echo $mv_right_img;?>);"></div>
    <div class="staff_ttl sp">
        <h1 class="ttl">
            <strong>STAFF VOICE</strong>
            <span>スタッフの声</span>
        </h1>

    </div>
</div>

<div class="staff_ttl_wrap right_container flex">
    <div class="staff_ttl">
        <h1 class="ttl">
            <strong>STAFF VOICE</strong>
            <span>スタッフの声</span>
        </h1>

        <small>©️REJOUIR All Rights Reserved</small>
    </div>
    
    <div class="staff_info">
        <p>
            <span><?php echo $salon_name;?></span>
            <?php echo $catch;?>
        </p>
        <div class="flex">
            <span class="type <?php echo $type;?>"><?php echo $type;?></span>
            <p><?php echo $job;?> / <?php echo $year;?>年入社</p>
        </div>
        <b><?php the_title(); ?></b>
    </div>
</div>
<!-- //staff_ttl_wrap -->

<div class="interview_wrap">
    <div class="origin_container right_container flex">
        <div class="interview_img01 interview_image" style="background-image: url(<?php echo $q_01['q_01_img']; ?>);"></div>

        <div class="interview_content">
            <span>INTERVIEW.01</span>
            <strong><?php echo $q_01['q_01_content']; ?></strong>
            <p><?php echo $q_01['q_01_answer']; ?></p>
        </div>
    </div>
    <!-- //origin_container -->

    <div class="interview_container">

        <div class="faq flex faq02">
            <div class="interview_content">
                <span>INTERVIEW.02</span>
                <strong><?php echo $q_02['q_02_content']; ?></strong>
                <p><?php echo $q_02['q_02_answer']; ?></p>
            </div>

            <div class="interview_img02 interview_image" style="background-image: url(<?php echo $q_02['q_02_img']; ?>);"></div>
        </div>
        <!-- //faq02 -->

        <div class="faq flex faq03">
            <div class="interview_img03 interview_image" style="background-image: url(<?php echo $q_03['q_03_img']; ?>);"></div>

            <div class="interview_content">
                <span>INTERVIEW.03</span>
                <strong><?php echo $q_03['q_03_content']; ?></strong>
                <p><?php echo $q_03['q_03_answer']; ?></p>
            </div>

        </div>
        <!-- //faq03 -->
        <?php if($q_04_content): ?>
        <div class="faq flex faq04">
            <div class="interview_content">
                <span>INTERVIEW.04</span>
                <strong><?php echo $q_04['q_04_content']; ?></strong>
                <p><?php echo $q_04['q_04_answer']; ?></p>
            </div>

            <div class="interview_img04 interview_image" style="background-image: url(<?php echo $q_04['q_04_img']; ?>);"></div>

        </div>
        <!-- //faq04 -->
        <?php endif; ?>

        <?php if($q_05_content): ?>
        <div class="faq flex faq05">
            <div class="interview_content">
                <span>INTERVIEW.05</span>
                <strong><?php echo $q_05['q_05_content']; ?></strong>
                <p><?php echo $q_05['q_05_answer']; ?></p>
            </div>

            <div class="interview_img05 interview_image" style="background-image: url(<?php echo $q_05['q_05_img']; ?>);"></div>

        </div>
        <!-- //faq05 -->
        <?php endif; ?>

    </div>
</div>
<!-- //interview_wrap -->

<?php include("template/staffslide.php"); ?>


<?php get_footer(); ?>