<?php
// var_dump($_POST);

//　変数の初期化
$page_flg = 0;
$clean = array();
$error = array();

// サニタイズ
if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
        $clean[$key] = htmlspecialchars($value, ENT_QUOTES);
    }
}


if (!empty($clean['btn_confirm'])) {

    $error = validation($clean);

    if (empty($error)) {
        $page_flg = 1;

        // セッションの書き込み
        session_start();
        $_SESSION['page'] = true;
    }
} elseif (!empty($clean['btn_submit'])) {
    session_start();
    if (!empty($_SESSION['page']) && $_SESSION['page'] === true) {

        // セッションの削除
        unset($_SESSION['page']);
        $page_flg = 2;

        // メールの自動返信
        // 変数とタイムゾーンを初期化
        $header = null;
        $auto_reply_subject = null;
        $auto_reply_text = null;
        $admin_reply_subject = null;
        $admin_reply_text = null;
        date_default_timezone_set('Asia/Tokyo');

        // ヘッダー情報を設定
        $header = "MIME-Version:1.0 \n";
        $header .= "From: Miyagi_de_engineer <noreply@gmail.com>\n";
        $header .= "Reply-To: Miyagi_de_engineer <noreply@gmail.com>\n";
        // 件名を設定
        $auto_reply_subject = "お問合せありがとうございます";

        // 本文を設定
        $auto_reply_text = 'この度はお問合せいただきありがとうございます。下記の内容でお問合せを受け付け致しました。\n\n';
        $auto_reply_text .= "お問合せ日時：" . date("Y-m-d H:i") . "\n";
        $auto_reply_text .= "氏名：" . $clean['your_name'] . "\n";
        $auto_reply_text .= "メールアドレス" . $clean['email'] . "\n";
        $auto_reply_text .= "内容：" . $clean['message'] . "\n";
        $auto_reply_text .= "Miyagi_de_engineer";

        // メール送信
        mb_send_mail($clean['email'], $auto_reply_subject, $auto_reply_text);

        // 運営側へ送るメールの件名
        $admin_reply_subject = "お問合せを受け付けました";

        // 本文を設定
        $admin_reply_text = "下記の内容でお問い合わせがありました。\n\n";
        $admin_reply_text .= "お問合せ日時：" . date("Y-m-d H:i") . "\n";
        $admin_reply_text .= "氏名：" . $clean['your_name'] . "\n";
        $admin_reply_text .= "メールアドレス：" . $clean['email'] . "\n";
        $admin_reply_text .= "内容：" . $clean['message'] . "\n";
        $admin_reply_text .= "Miyagi_de_engineer";

        //　運営側へメール送信
        mb_send_mail('webmaster@gmail.com', $admin_reply_subject, $admin_reply_text, $header);
    } else {
        $page_flg = 0;
    }
}


// バリデーション
function validation($data)
{
    $error = array();

    // 氏名のバリデーション
    if (empty($data['your_name'])) {
        $error[] = "氏名は必ず入力してください";
    } elseif (20 < mb_strlen($data['your_name'])) {
        $error[] = "名前は20文字以内で入力してください";
    }

    // メールアドレスのバリデーション
    if (empty($data['email'])) {
        $error[] = "メールアドレスは必ず入力してください";
    } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $error[] = "メールアドレス形式で入力してください";
    }
    // 内容のバリデーション
    if (empty($data['message'])) {
        $error[] = "内容は必ず入力してください";
    } elseif (300 < mb_strlen($data['message'])) {
        $error[] = "内容は300文字以内で入力してください。";
    }

    return $error;
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="./dist/css/style.css">

    <title>お問い合わせ</title>
</head>

<body>
    <main class="wrapper">
        <div class="main-content">

            <?php if ($page_flg === 1) : ?>
                <!-- 確認画面 -->
                <?php
                // POSTでcsrf_tokenの項目名でパラメータが送信されていること且つ、
                // セッションに保存されている値と一致している場合は正常なリクエストとして処理する
                if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) : ?>
                    <form action="" method="post">
                        <h3>お問合せフォーム</h3>
                        <!-- Name -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="your_name">お名前</label>
                            <p><?php echo $clean['your_name']; ?></p>
                        </div>
                        <!-- Email -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">メールアドレス</label>
                            <p><?php echo $clean['email']; ?></p>
                        </div>
                        <!-- Message-->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="message">内容</label>
                            <p><?php echo $clean['message']; ?></p>
                        </div>
                        <!-- back -->
                        <input type="submit" class="btn btn-warning" name="btn_back" value="戻る">
                        <!-- OK -->
                        <input type="submit" class="btn btn-primary" name="btn_submit" value="送信">
                        <input type="hidden" name="your_name" value="<?php echo $clean['your_name']; ?>">
                        <input type="hidden" name="email" value="<?php echo $clean['email']; ?>">
                        <input type="hidden" name="message" value="<?php echo $clean['message']; ?>">

                    </form>
                <?php else : ?>
                    <?php
                    $_SESSION['msg'] = "不正な値が入力されました";
                    header('Location:contact.php');
                    exit();
                    ?>
                <?php endif; ?>

                <!--　送信完了画面 -->
            <?php elseif ($page_flg === 2) : ?>
                <div class="submit_page">
                    <p>送信が完了しました</p>
                    <p>
                        <a href="index.php">サイトに戻る</a>
                    </p>
                </div>
            <?php else : ?>
                <!-- 入力画面 -->
                <?php
                // CSRF対策用
                session_start();
                // ランダムバイナリデータを生成。16進数に変換しASCII文字列へ
                $token = openssl_random_pseudo_bytes(16);
                $csrf_token = bin2hex($token);
                // 生成したトークンをセッションへ保存
                $_SESSION['csrf_token'] = $csrf_token;

                ?>
                <form action="#" method="POST">
                    <h3>お問合せフォーム</h3>

                    <!-- エラー表示位置 -->
                    <?php if (!empty($error)) : ?>
                        <ul class="error_list">
                            <?php foreach ($error as $value) : ?>
                                <li class="text-danger"><?php echo $value; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <!-- エラー表示位置 -->

                    <?php endif; ?>
                    <!-- Name -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="your_name">お名前</label>
                        <input type="text" id="your_name" name="your_name" class="form-control" value="<?php if (!empty($clean['your_name'])) {
                                                                                                            echo $clean['your_name'];
                                                                                                        } ?>">
                    </div>
                    <!-- Email -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">メールアドレス</label>
                        <input type="text" id="email" name="email" class="form-control" value="<?php if (!empty($clean['your_name'])) {
                                                                                                    echo $clean['email'];
                                                                                                } ?>">
                    </div>
                    <!-- Message-->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="message">内容</label>
                        <textarea class="form-control" id="message" name="message" rows="10" required><?php if (!empty($clean['message'])) {
                                                                                                            echo $clean['message'];
                                                                                                        } ?></textarea>
                    </div>
                    <!-- Submit -->
                    <input type="hidden" name="csrf_token" value="<?= $csrf_token ?>">
                    <input type="submit" name="btn_confirm" class="btn btn-success" value="入力内容を確認する">
                </form>
            <?php endif; ?>
        </div>
    </main>
</body>

</html>
