<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Yunoshev_lab4</title>
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <div class="body">

    <?php include('header.php'); ?>
    <div class="contentLeft">
      <div class="contentLeftRight">
        <div id="Link1">
          <hr class="hr1">
          <hr class="hr6">
          <hr class="hr7">
          <hr class="hr8">
          <a href="lab4_index.php" class="linka" id="linka">Главная</a>
        </div>

        <div class="linkDiv">
          <hr class="hr2">
          <hr class="hr3">
          <hr class="hr4">
          <hr class="hr5">
          <a href="lab4_form.php" class="linka">Регистрация</a>
        </div>

        <div class="linkDiv">
          <hr class="hr2">
          <hr class="hr3">
          <hr class="hr4">
          <hr class="hr5">
          <a href="lab4_methods.php" class="linka">Методы</a>
        </div>

        <?php include('footer.php'); ?>


      </div>
    </div>

    <div class="contentRight">
      <div class="contentRightTop">
        <p class="CRTlabel">Методы</p>
      </div>
      <div style="overflow-x: scroll; width: 558px; margin: auto;">
        <div>
          <p style="color: green">$_SERVER</p>
          <?php
          foreach ($_SERVER as $key => $var) {
            echo "<p>$key = $var<p>";
            echo "<hr/>";
          }
          echo "<br/>";
          echo "<hr/>";
          ?>
        </div>
        <div>
          <p style="color: green">$_GET</p>
          <?php
          foreach ($_GET as $key => $var) {
            echo "<p>$key = $var<p>";
            echo "<hr/>";
          }
          echo "<br/>";
          echo "<hr/>";
          ?>
        </div>
        <div>
          <p style="color: green">$_POST</p>
          <?php
          foreach ($_POST as $key => $var) {
            echo "<p>$key = $var<p>";
            echo "<hr/>";
          }
          echo "<br/>";
          echo "<hr/>";
          ?>
        </div>
      </div>



    </div>

</body>

</html>