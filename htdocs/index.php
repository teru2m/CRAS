
<?php
$title = 'CRAS';
$description = '説明(トップページ) ';
$is_home = true;
include 'inc/head.php';
?>

</head>
<body>
<div class="wrapper">
  <?php include 'inc/header.php'; ?> <!-- header.php の読み込み -->
  <div class="container">
    <main>
      <section>
     
<form action="register.php" method="post">
<div>
    <center><img src=CRAS.png width=200><br><br>
    <br><textarea class="textlines" placeholder="Googleで続行"></textarea><br></center>
</div>
<div>
<center><p>-----------------------------または-----------------------------</p></center>



    
</div>
    <center><br><textarea class="textlines" placeholder="メールアドレス"></textarea><br>
<div>
</div>

    <br><textarea class="textlines" placeholder="パスワード"></textarea><br></center></center>

<div>



    
</div>
</form>
<center><a href="src/continue.php"><FONT COLOR="BLUE">続行</FONT></a>

<p>アカウントをお持ちではございませんか？</p> 
<p><a href="src/login.php"><FONT COLOR="BLUE">アカウント作成</FONT></a></center></p>
      </section>

      <section>
        
    
</div>
<?php include 'inc/footer.php'; ?> <!-- footer.php の読み込み -->
</body>
</html>