<?php
/*
try {
    // MySQLへの接続
   $dbh = new PDO('mysql:host=localhost;dbname=tc2019', 'root', 'NupK8rqxlOrX'); 
   $dbh ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh ->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) { // PDOExceptionをキャッチする
    print "エラー!: " . $e->getMessage() . "<br/gt;";
    die();
}
*/
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
        <button class="button2">ログイン</button></a>
        </div>
     </div>
</div>
</div>
<!--ヘッダーおわり-->
<!--サイドメニュー-->
<div class="left">
    <div class="font_side1">
Jo Kentaro<br>
</div>
<script>
function ChangeImage( imgid , newimg ) {
    document.getElementById(imgid).src = newimg;
 }
 </script>
 <img src="img/ava.png" id="Orange" width="130" height="220" alt="初期アバターのばしょ">
<p>
	<input type="button" value="初期アバター(男)" onclick="document.getElementById('Orange').src = 'img/ava.png';">
	<input type="button" value="初期アバター(女)" onclick="document.getElementById('Orange').src = 'img/ava2.png';">
	<input type="button" value=" Avatar(¥10000)  " onclick="document.getElementById('Orange').src = 'img/ava3.png';">
<br>
</p>
ステータス
<div class="graph">
        <div class="bar bar1">Level334 80%</div>
        </div>
        実績一覧<br>
        <i class="fas fa-medal"></i>HTML完全に理解した<br>
</div>
<!--サイドメニューおわり-->
<a href="TLshitumon2.html" class="fixed_btn">質問する！</a>
<div style="position:absolute; top:100px; left:250px">
    <h1>
        <p>投稿一覧<br></p>
    </h1>
    <div class="textbox">
        <div class="box_inner">
    <h2>
        <?php 
        try {
            // MySQLへの接続
           $dbh = new PDO('mysql:host=localhost;dbname=tc2019', 'root', 'NupK8rqxlOrX'); 
           $dbh ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dbh ->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $e) { // PDOExceptionをキャッチする
            print "エラー!: " . $e->getMessage() . "<br/gt;";
            die();
        }

        try{
            $sql = 'SELECT * FROM tc2019.posts' ;
            $sth = $dbh -> prepare($sql);
            $sth ->execute();
        } catch (PDOException $e) { // PDOExceptionをキャッチする
            print "エラー!: " . $e->getMessage() . "<br/gt;";
            die();
        }

        while($row = $sth -> fetch(PDO::FETCH_ASSOC)){
        
              echo '名前:' . $row[name] . '<br>';
              echo 'ジャンル:' . $row[genre] . '<br>';
              echo 'タグ:' . $row[tag] . '<br>';
              echo '内容:' . $row[contents] . '<br>';
              echo '追加ファイル:' . $row[imgpath] . '<br><br>';
        }
        ?>
    </h2>
        </div>
    </div>
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

