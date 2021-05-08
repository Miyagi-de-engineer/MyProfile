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
    <h1 id="top">My Profile.</h1>
    <section class="l-hamburger">
      <a href="#" class="l-nav-button">
        <span></span>
        <span></span>
        <span></span>
      </a>
    </section>
    <nav>
      <ul>
        <li><a href="#top">TOP</a></li>
        <li><a href="#profile">自己紹介</a></li>
        <li><a href="#skillset">スキルセット</a></li>
        <li><a href="#portfolio">成果物</a></li>
        <li><a href="#contact">お問い合わせ</a></li>
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
            <h2 id="profile">
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
            <p class="btn"><a href="#modal_b">more</a></p>
          </div>
        </section>
      </article>

      <article id="skillset" class="p-skillset">
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


      <article id="portfolio" class="p-portfolio">
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
                FW : SCSS(FLOCSS記法),jQuery(remodal.js)<br>
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

      <article id="contact" class="p-contact">
        <ul>
          <li><a href="#">お問い合わせ</a></li>
        </ul>
      </article>




    </main>
  </div>

  <footer class="l-footer">
    <section class="content-wrapper">
      <div class="high">
        <h1>
          <a href="#top">
            My Profile.
          </a>
        </h1>
        <ul>
          <li><a href="#profile">自己紹介</a></li>
          <li><a href="#skillset">スキルセット</a></li>
          <li><a href="#portfolio">制作物</a></li>
        </ul>
      </div>
      <p>&copy;Miyagi_de_engineer</p>
    </section>
  </footer>


  <!-- Modal -->
  <div class="remodal" data-remodal-id="modal_b">
    <div class="modal-b">
      <table class="modal-table">
        <tbody>
          <tr>
            <th>誕生年</th>
            <td>1990年生まれ</td>
          </tr>
          <tr>
            <th>強み</th>
            <td>提案力・素直さ...営業経験年数(約8年),継続学習：160日突破</td>
          </tr>
          <tr>
            <th>弱み</th>
            <td>慎重・細かい...最適解を求めてしまい、時間がかかる</td>
          </tr>
          <tr>
            <th>夢</th>
            <td>たくさんのペット達が過ごせる家を作る(犬とインコが大好き!)</td>
          </tr>
          <tr>
            <th>抱負</th>
            <td>日本のDX化に貢献し、課題解決できるエンジニアになる！</td>
          </tr>
          <tr>
            <th>経歴①：歯科IT営業</th>
            <td>個人・大型のクリニック・医療法人に対し、デジタルソリューションを提案</td>
          </tr>
          <tr>
            <th>経歴②：水族館営業</th>
            <td>旅行会社との企画商品造成、教育旅行誘致、官民連携施策の企画・調整</td>
          </tr>
        </tbody>
      </table>
    </div>
    <button data-remodal-action="cancel" class="remodal-cancel">
      閉じる
    </button>
  </div>

  <div class="remodal" data-remodal-id="modal_c">

    <div class="remodal-area">
      <p class="remodal-text">コーディング</p>
      <div class="remodal-logos">
        <div class="logo">
          <i class="fab fa-html5 fa-2x logo-html"></i>
          <p class="logo-text">HTML5</p>
        </div>
        <div class="logo">
          <i class="fab fa-css3-alt fa-2x logo-css"></i>
          <p class="logo-text">CSS3</p>
        </div>
        <div class="logo">
          <i class="fab fa-sass fa-2x logo-sass"></i>
          <p class="logo-text">sass</p>
        </div>
      </div>
      <p class="remodal-text">
        サイトの模写や自作WEBサービスなどのコーディングが可能です。
        CSSフレームワークはBootstrapが使用可能。
        CSS設計はSMACS、FLOCSSを使用します。
      </p>
    </div>

    <div class="remodal-area">
      <p class="remodal-text">フロントエンド</p>
      <div class="remodal-logos">
        <div class="logo">
          <i class="fab fa-js fa-2x logo-js"></i>
          <p class="logo-text">javascript</p>
        </div>
        <div class="logo">
          <i class="fab fa-vuejs fa-2x logo-vue"></i>
          <p class="logo-text">vue.js</p>
        </div>
      </div>
      <p class="remodal-text">
        JavascriptはES5、ES6について学習しています。
        実務に直結させるために、Vue.jsを習得中で、
        今後は、Node.js,TypeScriptの習得を目指しています。
      </p>
    </div>

    <div class="remodal-area">
      <p class="remodal-text">バックエンド</p>
      <div class="remodal-logos">
        <div class="logo">
          <i class="fab fa-php fa-2x logo-php"></i>
          <p class="logo-text">php</p>
        </div>
        <div class="logo">
          <i class="fab fa-laravel fa-2x logo-laravel"></i>
          <p class="logo-text">Laravel</p>
        </div>
      </div>
      <p class="remodal-text">
        php5及び7を中心に学習しています。
        言語の理解をまずは行うために、フルスクラッチによるアウトプット制作後、
        Laravelを用いた学習を行っています。※以下制作物参照
      </p>
    </div>

    <div class="remodal-area">
      <p class="remodal-text">データベース</p>
      <div class="remodal-logos">
        <div class="logo">
          <i class="fas fa-database fa-2x"></i>
          <p class="logo-text">MySQL</p>
        </div>
      </div>
      <p class="remodal-text">
        phpMyAdminの操作をはじめ、基本としたSQLコマンドの操作ができます。
        DB設計はアウトプットによる経験を通し積み、正規化を行ったうえで開発を進めています。
      </p>
    </div>

    <div class="remodal-area">
      <p class="remodal-text">インフラ</p>
      <div class="remodal-logos">
        <div class="logo">
          <i class="fab fa-aws fa-2x logo-aws"></i>
          <p class="logo-text">AWS</p>
        </div>
      </div>
      <p class="remodal-text">
        AWSやHerokuを用いたデプロイを行っています。
        AWS認定資格取得の勉強を、上記の技術取得と並行して行っています。
      </p>
    </div>

    <div class="remodal-area">
      <p class="remodal-text">その他</p>
      <div class="remodal-logos">
        <div class="logo">
          <i class="fab fa-linux fa-2x logo-linux"></i></i>
          <p class="logo-text">Linux</p>
        </div>
        <div class="logo">
          <i class="fab fa-github fa-2x logo-github"></i>
          <p class="logo-text">Github</p>
        </div>
        <div class="logo">
          <i class="fab fa-gulp fa-2x logo-gulp"></i>
          <p class="logo-text">gulp</p>
        </div>
        <div class="logo">
          <i class="fab fa-npm fa-2x logo-npm"></i>
          <p class="logo-text">npm</p>
        </div>
      </div>
      <p class="remodal-text">
        基本的なコマンドラインの操作が可能です。
        アウトプット制作時はGithubにてソースコードの管理を行なっています。
        パッケージ管理ツールの操作を取得し、開発環境整備を迅速に行います。
      </p>
    </div>

    <button data-remodal-action="cancel" class="remodal-cancel">
      閉じる
    </button>
  </div>


</body>

</html>
