<?php

$name = $_POST['name'];
$choice = $_POST['choice'];
$tag = $_POST['tag'];
$coment = $_POST['coment'];
$picture = './upload/' . $_FILES ['picture'] ['name'];
//$picture = $_POST['picture'];
$file = 'upload/' . basename ( $_FILES ['picture'] ['name'] );
move_uploaded_file ( $_FILES ['picture'] ['tmp_name'], $file );
// db access
try {
    // MySQLへの接続
    $dbh = new PDO('mysql:host=localhost;dbname=tc2019', 'root', 'NupK8rqxlOrX');

    //$sql = 'INSERT INTO posts VALUES(' . $coment . ', ' . $name . ',' . $tag . ',' . $picture . ',' . $choice . ')';
    $sql = "INSERT INTO posts(contents, name, tag, imgpath, genre) VALUES('$coment', '$name', '$tag', '$picture', '$choice')";
    //$sql = 'INSERT INTO posts VALUES ($coment,$name,$tag,$picture,$choice)';

    // 接続を使用する
    $sth = $dbh->query($sql);
    // INSERT INTO posts VALUES ($coment,$name,$tag,$picture,$choice);

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
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="css/button.css">
<link rel="stylesheet" href="css/button1.css">
<link rel="stylesheet" href="css/textwaku.css">
<link rel="stylesheet" href="css/midashi1.css">
<link rel="stylesheet" href="css/anime.css">
<link rel="stylesheet" href="http://jaysalvat.github.io/vegas/releases/latest/vegas.min.css">
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="http://jaysalvat.github.io/vegas/releases/latest/vegas.js"></script>
<title>投稿内容の確認</title>
</head>
<body>
<!--ヘッダあああ -->
<div class="site-header">
    <div class="site-logo">  
<a href="main.html"><img src="img/logo.png"></a>
    </div>
    <form id="form4" action="自分のサイトURL" method="get">
            <input id="sbox4"  id="s" name="s" type="text" placeholder="これは便利なサイトです" />
            <button id="sbtn4" type="submit"><i class="fas fa-search"></i></button>
            </form><br>
<div class="header-str">
        <div class="wrap">
            <a href="signup.html">
                <div style="margin-right:150px">
                <button class="button2">新規登録</button></a>
                </div>
        </div>
</div>
<div class="wrap">
<a href="signin.html">
    <div style="margin-right:50px">
        <div style="margin-top:15px">
        <button class="button2">ログイン</button>
        </div>
    </div>
</a>
</div>
<!--ヘッダーおわり-->
<!--サイドメニュー-->
<div class="left">
    <div class="font_side1">
Jo Kentaro<br>
</div>
<div style="margin-left:5px">
<img src="img/ava.png" width="100px" height="180px">
</div>
ステータス
<div class="graph">
        <div class="bar bar1">Level</div>
        </div>
 
</div>
<!--サイドメニューおわり-->

<div style="position:absolute; top:100px; left:250px">
    <h1>
        <p>投稿が完了しました。<br></p>
    </h1>
    <h2>
        <a href="TLsitumon1.php">投稿一覧ページに戻ります。</a>
    </h2>
</div>
<script>
    $(function(){
        $('#example, body').vegas({
          slides: [
            { src: 'img/bg2_1.jpg' },
          ],
          delay: 4000,
          timer: false,
          firstTransition: 'fade2',
          overlay: 'https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.0/overlays/01.png',
        });
      });
      </script>
</body>

</html>

