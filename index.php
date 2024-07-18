<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/style.css">

    <style>
    .swiper {
        padding-top:50px;
    }

    .swiper-pagination-bullet {
        background-color: #bea474;
        height: 16px;
        width: 16px;
        margin: 0 12px !important;
    }

        /* 前へ次への矢印カスタマイズ */
    .swiper-button-prev,
    .swiper-button-next {
        height: 50px;
        width: 150px;
    }
    /* 前へ次への矢印カスタマイズ */
    .swiper-button-prev::after,
    .swiper-button-next::after {
        background-repeat: no-repeat;
        background-size: contain;
        content: "";
        height: 50px;
        margin: auto;
        width: 50px;
    }
    /* 前への矢印カスタマイズ */
    .swiper-button-prev::after {
        background-image: url(./img/slide-btn-prev.svg);
    }
    /* 次への矢印カスタマイズ */
    .swiper-button-next::after {
        background-image: url(./img/slide-btn-next.svg);
    }
    /* 画像サイズ調整 */
    .swiper-slide img {
        height: auto;
        width: 100%;
    }

    @media screen and (max-width: 850px){
        .swiper-button-prev,
        .swiper-button-next {
            height: 50px;
            width: 50px;
        }
    }

    @media screen and (max-width: 550px){
        .swiper-button-prev,
        .swiper-button-next {
            height: 50px;
            width: 50px;
        }
    }

    @media screen and (max-width: 450px){
        .swiper-button-prev,
        .swiper-button-next {
            height: 50px;
            width: 50px;
        }
    }

    </style>
</head>
<body>
    <?php include(dirname(__FILE__) . "/header.php"); ?>

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img class="swipe_image" src="./img/slide_1.jpg"></div>
            <div class="swiper-slide"><img class="swipe_image" src="./img/slide_2.jpg"></div>
            <div class="swiper-slide"><img class="swipe_image" src="./img/slide_3.jpg"></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>

    <div class="festival content">
        <p>今年も始まる<span>夏祭り</span></p>
    </div>

    <div id="schedule" class="content">
        <p class="list_top">スケジュール</p>

        <ul>
            <li class="schedule_list" id="1st">9月1日</li>
            <li class="schedule_list" id="2nd">9月2日</li>
            <li class="schedule_list" id="3rd">9月3日</li>
        </ul>

        <div class="schedule_box">
            <p class="schedule_text" id="1st_text">9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容</p>
            <p class="schedule_text" id="2nd_text">9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容</p>
            <p class="schedule_text" id="3rd_text">9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容</p>
        </div>
    </div>

    <div id="access" class="content">
        <p class="list_top">アクセス</p>
        <p class="address">〒771-1154 徳島県徳島市応神町東貞方南川淵</p>
        <div class="access_map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3303.541302839727!2d134.5195130466612!3d34.10688945282224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355373f11891368d%3A0x1a09139d44dc859f!2z5ZCJ6YeO5bed5YyX5bK46YGL5YuV5bqD5aC044K944OV44OI44Oc44O844Or5aC0Qemdog!5e0!3m2!1sja!2sjp!4v1720866920651!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div id="reserve"class="content">
        <p class="list_top">席予約</p>
        <form method="POST" action="./confirm.php">
            <div class="form_item">
                <label>お名前<span class="required">*必須</span></label><br>
                <input id="name" type="text" name="name" placeholder="例）田中 太郎" required>
            </div>
            <div class="form_item">
                <label>席の場所<span class="required" required>*必須</span></label><br>
                <select id="seat" name="seat">
                    <option value="---" selected>---</option>
                    <option value="SS席">SS席</option>
                    <option value="S席">S席</option>
                    <option value="A席">A席</option>
                    <option value="B席">B席</option>
                    <option value="C席">C席</option>
                </select>
            </div>
            <div class="form_item">
                <label>メールアドレス<span class="required">*必須</span></label><br>
                <input id="email" type="text" name="email" placeholder="例）abcd123@example.com" required>
            </div>
            <div class="form_item">
                <label class="form_item">電話番号<span class="optional">*任意</span></label><br>
                <input id="tel" type="text" name="tel" placeholder="例）09012345678"  pattern="^\d{2,4}-?\d{2,4}-?\d{3,4}$" title="電話番号の形式で入力してください">
            </div>
            <div class="form_item send">
                <input type="submit" value="送信" class="submit-btn disabled">
            </div>
        </form> 

    </div>

    <?php include(dirname(__FILE__) . "/footer.php"); ?>



  <!-- Swiper JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="./js/index.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
    slidesPerView:1.2,//画像を何枚表示するか
    spaceBetween: 10,//何ピクセル画像の間隔をあけるか
    centeredSlides : true,//見切らせたい場合メイン画像をセンターにもってくるか
    loop: true,//最後の画像までいったらループする
    //ページネーションをつける場合
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
    },
    //左右のナビゲーションをつける場合
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    }
});
  </script>
</body>

</html>
