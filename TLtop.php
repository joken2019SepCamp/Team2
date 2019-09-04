<?php

// db access
try {
    // MySQLへの接続
    $dbh = new PDO('mysql:host=localhost;dbname=tc2019', 'root', 'NupK8rqxlOrX');

    // 接続を使用する
    $sth = $dbh->query('SELECT * from posts');


} catch (PDOException $e) { // PDOExceptionをキャッチする
    print "エラー!: " . $e->getMessage() . "<br/gt;";
    die();
}

$result = $sth->fetch(PDO::FETCH_ASSOC);

// print($result['id']);
// print($result['name']);
// print($result['genre']);
// print($result['tag']);
// print($result['coment']);
// print($result['picture']);


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
    </form>
    <br>
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

<div style="position:absolute; top:100px; left:250px">
    <?php
        echo "投稿内容の確認<br>名前：".$result["name"];
        echo "ジャンル：".$result["genre"];
        echo "タグ：".$result["tag"];
        echo "質問内容：".$result["contents"]."<br>";
        echo "追加ファイル：".$result["imgpath"];
    ?>
</div>



</body>

</html>

