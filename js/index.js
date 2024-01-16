
$('.pull_dl dt.pull_down').click(function() {
  $(this).next('dd').slideToggle();
});


$('.pull_dl').on('click',function(){
	$(this).toggleClass('open');
});







$('#toggle').on('click',function(){
	$("body").toggleClass('open');
});

$('#header .header_wrap .header_left_content ul.nav li a').on('click',function(){
	$("body").removeClass('open');
});

$('a[href^="#"]').on('click', function(event) {
  var target = $(this.getAttribute('href'));
  if( target.length ) {
    event.preventDefault();
    $('html, body').stop().animate({
      scrollTop: target.offset().top
    }, 1000);
  }
});



$(document).ready(function(){
  $('.staff_slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrow: true,
    responsive: [

      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
    ]
  });
});


$(document).ready(function() {
  $('dt.menu_toggle').click(function() {
    $(this).next('dd').slideToggle();
    $(this).toggleClass('open');
  });
});


// $(document).ready(function() {
//   $('.date_slider').slick({
//     slidesToShow: 1,
//     autoplay: true,
//     slidesToScroll: 1,
//     dots: true,
//     arrows: false
//   });
// });


$(document).ready(function() {
  if ($(window).width() < 768) { // スマホ幅以下の場合にSlickスライダーを実行
    $('.salon_list_wrap').slick({
      slidesToShow: 1, // 1枚表示
      arrow: true,
      infinite: true,
      dots: true, // ページネーションドットを表示
      appendDots: $('.salon_list_wrap'), // ページネーションドットを.salon_list_wrapに表示
      customPaging: function(slider, i) {
        return (i + 1) + '';
      }
    });
  }
});

$(document).ready(function() {
  if ($(window).width() < 768) { // スマホ幅以下の場合にSlickスライダーを実行
    $('.ft_menu_slide').slick({
      arrow: true,
      infinite: true,
      centerMode: true,
      centerPadding: "0",
      slidesToShow: 1,
      slidesToScroll: 1,
    });
  }
});

$(document).ready(function() {
  if ($(window).width() < 768) { // スマホ幅以下の場合にSlickスライダーを実行
    $('.point_slider').slick({
      arrow: true,
      infinite: true,
      dots: true,
      slidesToShow: 1.05,
      slidesToScroll: 1,
    });
  }
});

$(document).ready(function(){
  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    focusOnSelect: true,
    variableWidth: true
  });
});


document.getElementById("jobSelect").addEventListener("change", function() {
  var link = this.value;
  if (link !== "") {
    window.location.href = link;
  }
});


/*********************************
	salon タブ切り替え
*********************************/

function openTab(evt, tabName) {
  var i, tabcontent, tablinks;

  // タブコンテンツを非表示にする
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // タブボタンのアクティブ状態を解除する
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // 選択されたタブコンテンツを表示する
  document.getElementById(tabName).style.display = "block";

  // クリックされたタブボタンをアクティブにする
  evt.currentTarget.className += " active";
}

const elements = document.querySelectorAll('[class*=\\&]'); // ＆を含むクラス名を持つ要素を取得
  elements.forEach((element) => {
    const newClassName = element.className.replace(/\&/g, '-'); // ＆を-に置換する
    element.className = newClassName; // 新しいクラス名に置き換える
  });

  $(document).ready(function() {
    $('ul.cat_list > li.cat-item').hover(function() {
      $(this).find('.children').stop().slideDown();
    }, function() {
      $(this).find('.children').stop().slideUp();
    });
  });
  










