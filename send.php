<?php
try {
  //DB名、ユーザー名、パスワードを変数に格納
  $dsn = 'mysql:dbname=LAA1542338-testdb;host=mysql215.phy.lolipop.lan;charset=utf8';
  $user = 'LAA1542338';
  $password = 'chani1003';
  
  $PDO = new PDO($dsn, $user, $password); //PDOでMySQLのデータベースに接続
  $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //PDOのエラーレポートを表示

  //input.phpの値を取得
  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $subject = $_POST['subject'];
  $text = $_POST['text'];

  //タイムゾーン初期化、現在時刻を取得
  date_default_timezone_set('Asia/Tokyo');
  $time = date("Y-m-d H:i");
  $status = 0;
  
  $sql = "INSERT INTO mails (name, mail, subject, text, time, status) VALUES (:name, :mail, :subject, :text, :time, :status)"; // テーブルに登録するINSERT INTO文を変数に格納　VALUESはプレースフォルダーで空の値を入れとく
  $stmt = $PDO->prepare($sql); //値が空のままSQL文をセット
  $params = array(':name' => $name, ':mail' => $mail, ':subject' => $subject, ':text' => $text, ':time' => $time, ':status' => $status); // 挿入する値を配列に格納
  $stmt->execute($params); //挿入する値が入った変数をexecuteにセットしてSQLを実行
  
  // 登録内容確認・メッセージ
  echo "<p>名前: " . $name . "</p>";
  echo "<p>メールアドレス: " . $mail . "</p>";
  echo "<p>件名: " . $subject . "</p>";
  echo "<p>メッセージ: " . $text . "</p>";
  echo "<p>受信時刻: " . $time . "</p>";
  echo '<p>上記の内容をデータベースへ登録しました。</p>';
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。' . $e->getMessage());
}
?>