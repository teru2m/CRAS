<link rel="stylesheet" href="../css/style_continue.css">
<?php
$title = 'CRAS';
$description = '説明(トップページ) ';
$is_home = true;
include '../inc/head.php';
?>

</head>
<body>
<div class="wrapper">
  <?php include '../inc/header3.php'; ?> <!-- header.php の読み込み -->
  <div class="container">
    <main>
      <section>
       
<form action="register.php" method="post">
<div>
    <b1><img src= ../images/users.png width=250　alt="" 
style="border:solid 2px #F2F2F2"><br><br></b1> 

    <b2><a href="analysis.php"><img src= ../images/analysis.png width=300　alt="" 
style="border:solid 2px #F2F2F2"><br><br></a></b2>

    <b3><img src= ../images/user.png width=300 alt="" 
style="border:solid 2px #F2F2F2"><br><br></b3>

    <b4><img src= ../images/Weather.png width=300　alt="" 
style="border:solid 2px #F2F2F2"><br><br></b4>

    <b5><a href="course.php"><img src= ../images/course.png width=300　alt="" 
style="border:solid 2px #F2F2F2"><br><br></a></b5>

    <b6><img src= ../images/compared.png width=250　alt="" 
style="border:solid 2px #F2F2F2"><br><br></b6>

    <b7><a href="map.php"><img src= ../images/map.png width=620　alt="" 
style="border:solid 2px #F2F2F2"><br><br></a></b7>
       
</div>
<?php include '../inc/footer.php'; ?> <!-- footer.php の読み込み -->
</body>
</html>