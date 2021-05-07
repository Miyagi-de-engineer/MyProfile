<?php



?>

<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>My Profile.</title>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.0.5/remodal.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.0.5/remodal-default-theme.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.0.5/remodal.min.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
  <link rel="stylesheet" href="./dist/css/style.css">

</head>

<body>

  <header class="l-header">
    <h1>My Profile.</h1>
    <section class="l-hamburger">
      <a href="#" class="l-nav-button">
        <span></span>
        <span></span>
        <span></span>
      </a>
    </section>
    <nav>
      <ul>
        <li><a href="#">TOP</a></li>
        <li><a href="#">自己紹介</a></li>
        <li><a href="#">スキルセット</a></li>
        <li><a href="#">成果物</a></li>
        <li><a href="#">お問い合わせ</a></li>
      </ul>
    </nav>
  </header>

  <div id="app">
    <main>
      <article class="p-mainvisual">
        <img src="./dist/images/mainvisual.jpg" alt="mainVisual">
        <h2>継続。</h2>
      </article>

      <article class="p-topics">
        <section class="content-wrapper">
          <div class="heading">
            <h2>
              自己紹介
            </h2>
          </div>
          <div class="content">
            <table>
              <tbody>
                <tr>
                  <th>氏名</th>
                  <td>土屋　隼人</td>
                </tr>
                <tr>
                  <th>出身</th>
                  <td>宮城県仙台市</td>
                </tr>
                <tr>
                  <th>勤務経歴</th>
                  <td>[歯科IT業界：営業]、[水族館：営業]</td>
                </tr>
                <tr>
                  <th>趣味</th>
                  <td>早起き、ランニング、筋トレ</td>
                </tr>
                <tr>
                  <th>座右の銘</th>
                  <td>継続は力なり。</td>
                </tr>
              </tbody>
            </table>
            <p class="btn"><a href="#">more</a></p>
          </div>
        </section>
      </article>

      <article class="p-skillset">
        <section class="content-wrapper">
          <div class="content">
            <h2>スキルセット</h2>
            <p>やれる事からコツコツと。<br>積み重ねを大切に。</p>
            <p class="btn">
              <a href="#modal_c" class="btn">more</a>
            </p>
          </div>
        </section>
      </article>


      <article class="p-portfolio">
        <section class="content-wrapper">

          <div class="item">
            <div class="item-image">
              <img src="./dist/images/PF-1.png" alt="">
            </div>
            <div class="item-text">
              <h3>Laravelを用いたメモアプリ</h3>
              <p>
                ユーザー毎に登録したいメモをタグも含めて投稿が可能。 <br>
                タグ別での検索やいいね機能、ソーシャルログインも可能。
              </p>
              <p>
                主な使用技術 <br>
                LN : php(7.3) <br>
                FW : Laravel(7.4),Vue.js <br>
                DB : postgreSQL,nginx <br>
                API : GoogleAPI,VueTagsInput,Sendgrid <br>
                ENV : Docker(laradock)
              </p>
              <div class="item-link">
                <p>
                  <a href="https://github.com/Miyagi-de-engineer/Laravel-sns">Github<i class="fab fa-github" style="margin-left: 5px;"></i></a>
                </p>
                <p>
                  <a href="https://laravel-simple-memo.herokuapp.com/">Web<i class="fas fa-globe-asia" style="margin-left: 5px;"></i></a>
                </p>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="item-image">
              <img src="./dist/images/PF-2.png" alt="">
            </div>
            <div class="item-text">
              <h3>Laravelを用いた仮想フリマアプリ</h3>
              <p>
                画像およびカテゴリを登録可能なフリマアプリ。<br>
                カテゴリ検索や外部APIを用いた決済も可能。
              </p>
              <p>
                主な使用技術 <br>
                LN : php(7.3) <br>
                FW : Laravel(7.25)<br>
                DB : MySQL(+MySQL Workbench) <br>
                API : Mailtrap.io,PAY.JP <br>
                ENV : Docker(laradock)
              </p>
              <div class="item-link">
                <p>
                  <a href="https://github.com/Miyagi-de-engineer/Laravel-sns">Github<i class="fab fa-github" style="margin-left: 5px;"></i></a>
                </p>
                <p>
                  <a href="https://laravel-simple-memo.herokuapp.com/">Web<i class="fas fa-globe-asia" style="margin-left: 5px;"></i></a>
                </p>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="item-image">
              <img src="./dist/images/PF-3.png" alt="">
            </div>
            <div class="item-text">
              <h3>自己紹介サイト</h3>
              <p>
                簡単なプロフィールとスキル・PFの紹介サイト。 <br>
                scss(FLOCSS)にて記載し、レスポンシブ対応。
              </p>
              <p>
                主な使用技術 <br>
                LN : HTML5,CSS3 <br>
                FW : SCSS(FLOCSS記法)<br>
                DB : Firebase <br>
                API : なし<br>
                PM : gulp,npm
              </p>
              <div class="item-link">
                <p>
                  <a href="https://github.com/Miyagi-de-engineer/MyProfile">Github<i class="fab fa-github" style="margin-left: 5px;"></i></a>
                </p>
                <p>
                  <a href="">Web<i class="fas fa-globe-asia" style="margin-left: 5px;"></i></a>
                </p>
              </div>
            </div>
          </div>



        </section>
      </article>

      <article class="p-contact">
        <ul>
          <li><a href="#">お問い合わせ</a></li>
        </ul>
      </article>




    </main>
  </div>

  <footer class="l-footer">
    <section class="content-wrapper">

    </section>
  </footer>

  <div class="remodal" data-remodal-id="modal_c">
    <div>
      <img src="https://125naroom.com/demo/img/itukanokotonokoto01.jpg" alt="125naroom">
      <i class="fab fa-html5 fa-3x logo-html"></i>
      <i class="fab fa-css3-alt fa-3x logo-css"></i>
      <p class="remodal-text">フロントエンド</p>
      <p class="remodal-text">HTML5,CSS3</p>
    </div>
    <button data-remodal-action="cancel" class="remodal-cancel">
      閉じる
    </button>
  </div>


</body>

</html>