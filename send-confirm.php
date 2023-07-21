<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>送信内容の確認画面</title>
</head>

<body>

  <?php
  require_once("lib/util.php");
  // 文字エンコード検証
  if (!cken($_POST)) {
    $encoding = mb_internal_encoding();
    $err = "Encoding Error: The Expeted Encoding is: " . $encoding;
    exit($err);
  }
  $_POST = es($_POST);

  $errors = [];
  // お名前の入力チェック
  if (isset($_POST['name'])) {
    $name = trim($_POST['name']);
    if ($name === "") {
      $errors = "お名前を入力してください";
    }
  } else {
    $errors = "お名前を入力してください";
  }
  // 件名の入力チェック
  if (isset($_POST['subject'])) {
    $subject = trim($_POST['subject']);
    if ($subject === "") {
      $errors = "件名を入力してください";
    }
  } else {
    $errors = "件名の入力が不正です";
  }
  // メールの入力チェック
  if (isset($_POST['mail'])) {
    $mail = trim($_POST['mail']);
    if ($mail === "") {
      $errors = "メールアドレスを入力してください";
    }
  } else {
    $errors = "メールアドレスを入力してください";
  }
  //　お問い合わせ内容の入力チェック
  if (isset($_POST['text'])) {
    $text = trim($_POST['text']);
    if ($text === "") {
      $errors = "お問い合わせ内容を入力してください";
    }
  } else {
    $errors = "お問い合わせ内容を入力してください";
  }

  ?>

  <?php if (count($errors) > 0) { ?>
    <ol class="error">
      <?php foreach ($errors as $value) { ?>
        <li><?= $value ?></li>
      <?php } ?>
    </ol>
  <?php } else { ?>
    <!-- 登録内容確認・メッセージ -->
    <p>送信内容をご確認ください。</p>
    <table class="confirm">
      <tr>
        <th>お問い合わせの種類</th>
        <td><?= $subject ?></td>
      </tr>
      <tr>
        <th>お名前</th>
        <td><?= $name ?></td>
      </tr>
      <tr>
        <th>お問い合わせ内容</th>
        <td><?= $text ?></td>
      </tr>
      <tr>
        <th>連絡先メールアドレス</th>
        <td><?= $mail ?></td>
      </tr>
    </table>
    <form action="contact.php" method="post">
      <input type="hidden" name="subject" value="<?= $subject ?>">
      <input type="hidden" name="name" value="<?= $name ?>">
      <input type="hidden" name="text" value="<?= $text ?>">
      <input type="hidden" name="mail" value="<?= $mail ?>">
      <input class="return-btn" type="submit" value="戻る">
    </form>
    <form action="send.php" method="post">
      <input type="hidden" name="subject" value="<?= $subject ?>">
      <input type="hidden" name="name" value="<?= $name ?>">
      <input type="hidden" name="text" value="<?= $text ?>">
      <input type="hidden" name="mail" value="<?= $mail ?>">
      <input class="submit-btn" type="submit" value="送信する">
    </form>

  <?php } ?>

</body>

</html>