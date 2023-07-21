<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow">
  <title>森と風</title>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
</head>

<body>
  <header class="contents">
    <h1 class="contents-logo"><a href="index.html"><img src="img/contents-logo.png" alt="森と風"></a></h1>
    <nav>
      <ul>
        <li><a href="about.html">
            <p>About</p><span>紫微斗数とは</span>
          </a></li>
        <li><a href="profile.html">
            <p>Profile</p><span>森と風について</span>
          </a></li>
        <li><a href="faq.html">
            <p>Q&A</p><span>よくある質問</span>
          </a></li>
        <li><a href="contact.php">
            <p>Contact</p><span>お問い合わせ</span>
          </a></li>
      </ul>
    </nav>
  </header>
  <main>
    <article class="consept">
      <img src="img/contact.png" alt="consept">
      <div class="wrapper">
        <h2>お問い合わせ・ご依頼について</h2>

      </div>
    </article>
    <section class="wrapper">
      <!--フォームここから-->

      <form action="send-confirm.php" method="post" class="needs-validation" novalidate>
        <div class="row g-3">

          <div class="col-12">
            <h5>お問い合わせの種類を選んでください</h5>
            <select class="form-select" name="subject" required>
              <option value="未選択">選択してください</option>
              <option value="鑑定方法について">鑑定方法について</option>
              <option value="依頼について">鑑定のご依頼について</option>
              <option value="相談">鑑定後のご相談</option>
              <option value="支払い">お支払いについて</option>
              <option value="その他">その他お問い合わせ</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="col">
            <h5><label for="aisatsubun" class="form-label"><span class="badge bg-danger me-2">必須</span>お問い合わせ内容</label>
            </h5>
            <textarea class="form-control" placeholder="こちらにお問い合わせ内容を記載してください" name="text" style="height: 250px"></textarea>
            <label for="textarea"></label>
          </div>
        </div>
        <div class="col-12">
          <h5>お名前</h5>
          <input type="text" class="form-control" name="name" placeholder="テスト花子">
        </div>

        <div class="col-12">
          <h5><label for="email" class="form-label"><span class="badge bg-danger me-2">必須</span>連絡先メールアドレス</label></h5>
          <input type="email" class="form-control" name="mail" placeholder="例）toiawase@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>
        <p>
        <div class="btn btn-secondary" data-bs-toggle="collapse" href="#jushin" role="button" aria-expanded="false" aria-controls="jushin">
          <i class="bi bi-exclamation-triangle-fill lead"></i> 【ご注意】メール受信設定について
        </div>
        </p>
        <div>
          事前に当サイトからのメールを受信する設定をお願いします。<b class="text-danger">各携帯会社のドメイン指定受信設定方法にて下記のアドレスを受信可能にしてください。</b>セキュリティ設定を強化されている方は、当方からのメールを受信できない場合がございます。
          <div class="p-3 my-2 border rounded-pill text-center"><i class="bi bi-envelope me-2"></i>こちらのアドレスの受信設定をお願いします
          </div>
        </div>

        <div class="submit-btn">
          <button type="submit" class="btn btn-warning px-5 py-3 btn-lg ">お問い合わせを送信する</button>
        </div>
        <hr class="my-4">

        <!--
          <div class="col-12">
                  <h4 class="p-2 graybd mb-3">★ご依頼の方は、以下もご確認ください</h4>
          </div>

            <div class="row col-12">
		<label for="date" class="form-label"><span class="badge bg-primary me-2">ご依頼の方</span>生年月日</label>
		<div class="col-4"> <input type="date" id="datepicker" class="form-control" placeholder="年/月/日"></div>
		<p class="col-1 lh-lg"></p>
		<div class="col-3">
			<select class="form-select" id="state" required>
			<option value="">午前/午後</option>
			<option>午前</option>
			<option>午後</option>
			<option>不明</option>
			</select>
		</div>
		<p class="col-3 lh-lg">AM/PM</p>
            </div>
           <div class="row col-12">
		<div class="col-3">
			<select class="form-select" id="state" required>
			<option value="">時間を選択</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
			<option>不明</option>
			</select>
		</div>
		<p class="col-1 lh-lg">時</p>
		<div class="col-3">
			<select class="form-select" id="state" required>
			<option value="">分を選択</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
			<option>不明</option>
			</select>
		</div>
		<p class="col-3 lh-lg">分</p>
            </div>

 </div>

          <hr class="my-4">
          <div class="col-12">
                  <h4 class="p-2 graybd mb-3">鑑定書のお届けについて</h4>
          <div class="col form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">鑑定書の郵送を希望する</label>
          </div>
          </div>
         <div class="col-12 mt-4">
          </div>

          <div class="col-12 mt-4">
            <h5><i class="bi bi-truck"></i> お届け先のご住所</h5>
          </div>

             <div class="col-md-3">
              <label for="country" class="form-label"><span class="badge bg-danger me-2">必須</span>郵便番号</label>
              <input type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
            <div class="col-md-4">
              <label for="state" class="form-label"><span class="badge bg-danger me-2">必須</span>都道府県</label>
              <select class="form-select" id="state" required>
                <option value="">選択してください</option>
                <option>北海道</option>
                <option>沖縄県</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-5">
              <label for="zip" class="form-label"><span class="badge bg-danger me-2">必須</span>市区町村</label>
              <input type="text" class="form-control" id="zip" placeholder="例）中央区" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
            <div class="col-12">
              <label for="address" class="form-label"><span class="badge bg-danger me-2">必須</span>町・番地</label>
              <input type="text" class="form-control" id="address" placeholder="例）銀座1-2-3" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">マンション・ビル名 <span class="text-muted">(任意)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="例）サンプルビル2階">
            </div>
            <div class="col-12">
              <label for="address2" class="form-label"><span class="badge bg-danger me-2">必須</span>電話番号</label>
              <input type="text" class="form-control" id="address2" placeholder="例）012-345-6789">
            </div>
            <div class="col-12">
              <label for="address2" class="form-label">※お届け先の宛名が異なる場合はご記入ください</label>
              <input type="text" class="form-control" id="address2" placeholder="">
            </div>
 
        <div class="col-12 mt-4">
            <h5><i class="bi bi-cart4"></i> お支払方法</h5>
          </div>
          <div class="my-3">
 		<div class="btn-group d-flex justify-content-between" role="group" aria-label="Basic radio toggle button group">
			<input type="radio" class="btn-check" name="futo" id="btnradio3" autocomplete="off" checked>
			<label class="btn btn-primary p-2" for="btnradio3"><i class="bi bi-box-seam fs-2"></i><p class="">代引き(手数料別途）</p></label>
			<input type="radio" class="btn-check" name="futo" id="btnradio4" autocomplete="off">
			 <label class="btn btn-primary p-2" for="btnradio4"><i class="bi bi-calculator-fill fs-2"></i><p class="">銀行振込(先払い)</p></label>

		</div>
            </div>


          </div>

          <hr class="my-4">
         <label for="address2" class="form-label"><span class="badge bg-danger me-2">必須</span>個人情報の取り扱いについて</label>
<div class="p-3 mb-3 border bg-light text-secondary rounded small overflow-auto" style="height: 150px;">
＊個人情報の取り扱いについて＊<br/>
何か必要であれば説明を入れる感じもいけます。							
何か必要であれば説明を入れる感じもいけます。							
何か必要であれば説明を入れる感じもいけます。							
何か必要であれば説明を入れる感じもいけます。							
何か必要であれば説明を入れる感じもいけます。							
何か必要であれば説明を入れる感じもいけます。							
何か必要であれば説明を入れる感じもいけます。							
何か必要であれば説明を入れる感じもいけます。							
何か必要であれば説明を入れる感じもいけます。							
</div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">確認しました</label>
          </div>
 		<div class="submit-btn">
            <button type="button" class="btn btn-warning px-5 py-3 btn-lg ">送信する</button>
        </div>
          <hr class="my-4">
    -->
        <!--フォームここまで-->

      </form>
    </section>
    <section class="banner wrapper">
      <div>
        <a href="https://coconala.com/users/224556"><img src="img/coconara-bn.jpg" alt="コンタクト"></a>
        <p>ご依頼は【ココナラ】へ</p>
      </div>
      <div>
        <a href=""><img src="img/blog-bn.jpg" alt="ブログを見る"></a>
        <p>森と風の【●●ブログ】へ</p>
      </div>
    </section>

  </main>
  <footer>
    <small>Copy Right &copy; 2023 森と風</small>
  </footer>
  <div>
    <!--pagetopボタン -->
    <div id="page-top" class="page-top"><a id="move-page-top" class="move-page-top"></a></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/to-top.js" type="text/javascript"></script>
  </div>
</body>

</html>