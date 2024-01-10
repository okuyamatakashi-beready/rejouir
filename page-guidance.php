<?php include("template/meta.php"); ?>
<body>
<?php get_header(); ?>

<div class="online_mv">
    <div class="online_container">
        <div class="flex">
            <h1 class="common_ttl">
                <strong>ONLINE<br>GUIDANCE</strong>
                <span>オンラインサロン見学</span>
            </h1>

            <p>
            リジェールでは遠方で直接のサロン見学がなかなか出来ない学生さんや、コロナ禍で心配な方向けにオンラインでの相談会やサロン見学体験を開催しています。ご希望の日時を合わせて一人一人対応させていただきますのでご連絡お待ちしております。
            </p>
        </div>
    </div>
    <!-- //online_container -->

    <div class="online_mv_img_wrap">
        <div class="flex">
            <div class="left_img"></div>
            <div class="right_img"></div>
        </div>
    </div>
</div>
<!-- //online_mv -->

<section id="flow">
    

    <div class="flow_container">
        <div class="flex">
            <h2 class="sec_ttl">
                <strong>FLOW</strong>
                <span>オンライン見学ご利用の流れ</span>
            </h2>
            <div>
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/guidance/flow.png" alt="" class="pc">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/guidance/flow_sp.png" alt="" class="sp">
                </figure>

                


                <p>
                    [ 注意事項 ]<br>
                    ※ 上記はおおよその流れとなります。<br>
                    ※ ZOOMでの開催を予定しております。<br>
                    ※ ご応募いただく時期や店舗により、個別での対応、複数人での対応が異なります。
                </p>
            </div>
        </div>
    </div>
</section> 

<section id="flow_contact">
    <div class="flow_container">
        <div class="flow_contact_ttl flex">
            <h1 class="common_ttl">
                <strong>CONTACT</strong>
                <span>オンラインサロン見学のご予約・お問い合わせ</span>
            </h1>

            <p>
            下記より見学希望店舗とご希望日時をお伝え下さい。<br>
            こちらからの返信をもってご予約確定とさせていただいております。
            </p>
        </div>

        <ul class="ft_contact_list flex">
            <li>
                <dl>
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/common/ft_line.svg" alt="" class="">
                        <p>LINEからお問い合わせ</p>
                    </dt>
                    <dd>
                        <p>お友だち追加後<br>メッセージにてご連絡ください。</p>
                        <a href="" class="ft_btn">LINE</a>
                    </dd>
                </dl>
            </li>
            <li>
                <dl>
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/common/ft_insta.svg" alt="" class="">
                        <p>INSTAGRAMのDMからお問い合わせ</p>
                    </dt>
                    <dd>
                        <p>下記アカウントへDMでご連絡ください。</p>
                        <a href="" class="ft_btn">HAIR<span>@rejouir.group</span></a>
                        <a href="" class="ft_btn">EYE&NAIL<span>@favori_official_account</span></a>
                    </dd>
                </dl>
            </li>
            <li>
                <dl>
                    <dt>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/common/ft_tel.svg" alt="" class="">
                        <p>お電話でのお問い合わせ</p>
                    </dt>
                    <dd>
                        <p><b>052-582-1098</b>（受付時間｜平日 9:00-17:00）</p>
                        <a href="" class="ft_btn">TEL</a>
                    </dd>
                </dl>
            </li>
        </ul>
    </div>
</section>
<!-- //flow -->
<?php get_footer(); ?>