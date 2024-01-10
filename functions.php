<?php

// アイキャッチ画像の設定
add_theme_support('post-thumbnails');
the_post_thumbnail('thumbnail');
the_post_thumbnail('medium');
the_post_thumbnail('large');

function my_styles()  {
    // page-sample用のCSS
    if ( is_page('recruit-hair-new') ) {
      wp_enqueue_style( 'recruit-hair-new_css', get_template_directory_uri() . '/scss/recruit/recruit.css');
      }
    if ( is_page('recruit-hair-chuto') ) {
      wp_enqueue_style( 'recruit-hair-chuto_css', get_template_directory_uri() . '/scss/recruit/recruit.css');
      }
    if ( is_page('recruit-nail-eye-new') ) {
      wp_enqueue_style( 'recruit-nail-eye-new_css', get_template_directory_uri() . '/scss/recruit/recruit.css');
      }
    if ( is_page('recruit-nail-eye-chuto') ) {
      wp_enqueue_style( 'recruit-nail-eye-chuto_css', get_template_directory_uri() . '/scss/recruit/recruit.css');
      }
    if ( is_page('requirements-hair-new') ) {
      wp_enqueue_style( 'requirements-hair-new_css', get_template_directory_uri() . '/scss/requirements/requirements.css');
      }
    if ( is_page('requirements-hair-chuto') ) {
      wp_enqueue_style( 'requirements-hair-chuto_css', get_template_directory_uri() . '/scss/requirements/requirements.css');
      }
    if ( is_page('requirements-nail-eye-new') ) {
      wp_enqueue_style( 'requirements-nail-eye-new_css', get_template_directory_uri() . '/scss/requirements/requirements.css');
      }
    if ( is_page('requirements-nail-eye-chuto') ) {
      wp_enqueue_style( 'requirements-nail-eye-chuto_css', get_template_directory_uri() . '/scss/requirements/requirements.css');
      }
    if ( is_page('news') ) {
      wp_enqueue_style( 'news_css', get_template_directory_uri() . '/scss/news/news.css');
      }
    if ( is_page('guidance') ) {
      wp_enqueue_style( 'guidance_css', get_template_directory_uri() . '/scss/guidance/guidance.css');
      }
    if ( is_page('company') ) {
      wp_enqueue_style( 'company_css', get_template_directory_uri() . '/scss/company/company.css');
      }
    if ( is_category() ) {
      wp_enqueue_style( 'news_css', get_template_directory_uri() . '/scss/news/news.css');
      }
    if ( is_single() ) {
      wp_enqueue_style( 'single_css', get_template_directory_uri() . '/scss/single/single.css');
      }
    if ( is_singular('tenpo') ) {
      wp_enqueue_style( 'tenpo_css', get_template_directory_uri() . '/scss/tenpo/tenpo.css');
      }

    }
  add_action( 'wp_enqueue_scripts', 'my_styles' );


  /*------------------------------------*\
    pagenation
\*------------------------------------*/
/**
* ページネーション出力関数
* $paged : 現在のページ
* $pages : 全ページ数
* $range : 左右に何ページ表示するか
* $show_only : 1ページしかない時に表示するかどうか
*/
function pagination( $pages, $paged, $range = 2, $show_only = false ) {

  $pages = ( int ) $pages;    //float型で渡ってくるので明示的に int型 へ

  //表示テキスト
  $text_first   = "";
  $text_before  = "←";
  $text_next    = "→";
  $text_last    = "";

  if ( $show_only && $pages === 1 ) {
      // １ページのみで表示設定が true の時
      echo '<div class="pagination flex flex_start"><span class="current pager">1</span></div>';
      return;
  }

  if ( $pages === 1 ) return;    // １ページのみで表示設定もない場合

  if ( 1 !== $pages ) {
      //２ページ以上の時
      echo '<div class="pagination flex"><span class="page_num">', $paged ,'  ', $pages ,'</span>';
      if ( $paged > $range + 1 ) {
          // 「最初へ」 の表示
          echo '<a href="', get_pagenum_link(1) ,'" class="first">', $text_first ,'</a>';
      }
      if ( $paged > 1 ) {
          // 「前へ」 の表示
          echo '<a href="', get_pagenum_link( $paged - 1 ) ,'" class="prev">', $text_before ,'</a>';
      }
      for ( $i = 1; $i <= $pages; $i++ ) {

          if ( $i <= $paged + $range && $i >= $paged - $range ) {
              // $paged +- $range 以内であればページ番号を出力
              if ( $paged === $i ) {
                  echo '<a class="current pager">', $i ,'</a>';
              } else {
                  echo '<a href="', get_pagenum_link( $i ) ,'" class="pager">', $i ,'</a>';
              }
          }

      }
      if ( $paged < $pages ) {
          // 「次へ」 の表示
          echo '<a href="', get_pagenum_link( $paged + 1 ) ,'" class="next">', $text_next ,'</a>';
      }
      // if ( $paged + $range < $pages ) {
      //     // 「最後へ」 の表示
      //     echo '<a href="', get_pagenum_link( $pages ) ,'" class="last">', $text_last ,'</a>';
      // }
      echo '</div>';
  }
}


/* ===============================================
# 
=============================================== */

function add_posts_columns( $columns ) {
  $columns['salon_name'] = 'サロン';
  return $columns;
}
add_filter( 'manage_posts_columns', 'add_posts_columns' );

function staff_info_columns_content($column_name, $post_id) {
  if( $column_name == 'salon_name' ) {
    $metas = get_post_meta($post_id);
    $stitle = $metas['salon_name'][0];
  }
 
  if ( isset($stitle) && $stitle ) {
    echo esc_attr($stitle);
  }
}
add_action( 'manage_staff_info_posts_custom_column', 'staff_info_columns_content', 10, 2 );


//カスタムフィールドによるソートを可能にする
function posts_sortable_columns($sortable_column) {
  $sortable_column['salon_name'] = 'salon_name';
  return $sortable_column;
}
//add_filter('manage_edit-post_sortable_columns', 'posts_sortable_columns');
//カスタム投稿タイプの場合
add_filter('manage_edit-staff_info_sortable_columns', 'posts_sortable_columns');


//カスタムフィールドでソートする際のパラメータ
function posts_columns_sort_param($vars){
  if(isset($vars['orderby']) && 'salon_name' === $vars['orderby'] ) {
      $vars = array_merge(
          $vars,
          array(
              'meta_key' => 'salon_name',
              'orderby' => 'meta_value', //対象が文字列の場合は「meta_value」を指定
          )
      );
  }
  return $vars;
}
add_filter('request', 'posts_columns_sort_param');

