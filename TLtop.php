<?php

// db access
try {
    // MySQLへの接続
    $dbh = new PDO('mysql:host=localhost;dbname=tc2019', 'root', 'NupK8rqxlOrX');

    // 接続を使用する
    $sth = $dbh->query('SELECT * from posts');
    echo "<pre>";
    foreach($sth as $row) {
        print_r($row);
    }
    echo "</pre>";

    // 接続を閉じる
    $sth = null;
    $dbh = null;

} catch (PDOException $e) { // PDOExceptionをキャッチする
    print "エラー!: " . $e->getMessage() . "<br/gt;";
    die();
}

?>




<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/search.css">
<link rel="stylesheet" href="css/side.css">
<link rel="stylesheet" href="css/font.css">
<link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="css/button.css">
<link rel="stylesheet" href="css/button1.css">
<link rel="stylesheet" href="css/textwaku.css">
<title>Hello,Jokenhub</title>
</head>
<body>
<!--ヘッダあああ -->
<div class="site-header">
    <div class="site-logo">
    <img src="img/logo.png">
    </div>
    <form id="form4" action="自分のサイトURL" method="get">
            <input id="sbox4"  id="s" name="s" type="text" placeholder="これは便利なサイトです" />
            <button id="sbtn4" type="submit"><i class="fas fa-search"></i></button>
            </form><br>
<div class="header-str">
    新規登録
    </div>
<div class="header-str2">
    ログイン
</div>
     
</div>
<!--ヘッダーおわり-->
<!--サイドメニュー-->
<div class="left">
おなまえ<br>
ステータス<br>
ランキング<br>
</div>
<!--サイドメニューおわり-->

<?php
    echo "投稿内容の確認<br>名前：".$_POST["name"];
    echo "ジャンル：".$_POST["genre"];
    echo "タグ：".$_POST["tag"]."<br>";
    echo "質問内容：".$_POST["coment"]."<br>";
    echo "追加ファイル：".$_POST["picture"];
?>


</body>

</html>

