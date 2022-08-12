<?php
$title = 'CRAS';
$description = '説明(トップページ) ';
$is_home = true;
include '../inc/head.php';
?>

</head>
<body>
<div class="wrapper">
  <?php include '../inc/header2.php'; ?> <!-- header.php の読み込み -->
  <div class="container">
    <main>
      <section>
      
<form action="register.php" method="post">
<div>
 <center><img src=../images/CRAS.png width=200><br><br>
</div>
<div>




    
</div>
    <center><br><textarea class="textlines" placeholder="メールアドレス"></textarea><br>
<div>
</div>

    <br><textarea class="textlines" placeholder="パスワード"></textarea><br></center></center>

<div>

<center><a href="continue.php"><FONT COLOR="BLUE">続行</FONT></a></center>


    
</div>
</form>




  
        
    
</div>
<?php include '../inc/footer.php'; ?> <!-- footer.php の読み込み -->
</body>
</html>