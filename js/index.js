$(function(){
  $('.js-hamburger-menu').on('click', function () {
    $('.header_nav').slideToggle(500);
    $('.hamburger-menu').toggleClass('hamburger-menu--open');
  });

  if ($(window).width() <= 550) {
    $('.header_nav').on('click', function () {
      $('.header_nav').slideUp(500); // ナビゲーションメニューを閉じる
      $('.hamburger-menu').removeClass('hamburger-menu--open'); // ハンバーガーメニューのアイコンを閉じた状態にする
    });
  } 
});

$(function(){
  $(".schedule_list").click(function(){
    let id = $(this).attr("id");                    //クリックした要素のidを取得する

    //背景色を変更する。他のリストをクリックされたら戻す。
    $(".schedule_list").removeClass("active");       //.service_listをクリックされたらactiveクラスを削除する
    $(this).addClass("active");                     //.クリックした要素にactiveクラスを付与する
    
    //サービスリストボタンがクリックされたら、下のボックスにテキストを表示する
    $(".schedule_text").removeClass("active");       //.service_listをクリックされたらactiveクラスを削除する
    $("#"+id+"_text").addClass("active");           //.クリックした要素にactiveクラスを付与する
  });

  function clickweb() {
    $("#1st").click(); // 関数内でクリックする
  }
  clickweb(); // ロード後すぐに関数を呼び出す

});

$(function(){
  function validateForm() {
    let isValid = true;
    $('form input[required], form select[required]').each(function() {
        if ($(this).val() === '' || $(this).val() === '---') {
            isValid = false;
        }
    });
    if (isValid) {
        $('.submit-btn').removeClass('disabled');
    } else {
        $('.submit-btn').addClass('disabled');
    }
}

$('form input[required], form select[required]').on('input change', function() {
    validateForm();
});

validateForm();
});


    

