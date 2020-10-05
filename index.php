<?php
 $error_message = "";
if(isset($_POST["login"])) {
if($_POST["employee"] || $_POST["password"] == "") {
 $error_message = "※入力に誤りがあります。やり直してください。"; }
 }

?>
<?php require 'header.php'; ?>
<style>
  div.wrapper {
    width: 100%
    max-width: 680px;
  }
  img {
    width: 100%;
    height: auto;

  }
  div.container {
    height: 250px;
    width: 50%;
    padding-top: 15px;
    background: #ccc;
    opacity: 0.9;
    display: flex;
    justify-content: center;
    position: absolute;
    top: 50%;
    left: 50%;
    	transform: translate(-50%, -50%);
  }
  div.button {
    text-align: center;
    margin: 20px 20px 0 20px;
  }
  .center {
    text-align: center;
  }
  div.logo {
    margin: 0 auto;
    width: 100px;
    height: auto;
}
    div.kara {
        height: 1.6rem;
    }

</style>
<div class="wrapper">
  <img src="images/topImg2.jpg" alt="TOP">
<div class="container">
  <div class="mx-auto" style="width:400px;">
  <?php
   if(!isset($_POST["login"])) {
   echo '<div class="kara"></div>';
}?>

<?php
    if($error_message) {
       echo $error_message;
    }
  ?>
  <div class="logo">
  <p><img src="images/logo01.png" alt="" class="logo"></p>
  </div>
    <form action="login.php" method="post">
      <input type="text" name="employee" class="form-control" placeholder="名前を入力してください">
      <input type="password" name="password" class="form-control"  placeholder="社員番号を入力してください">
      <div class="button"><input type="submit" name="login" value="ログイン" class="btn btn-primary"></div>
    </form>
    <div class="center"><a href="employee_input.php" class="center primary"><small>登録がお済みでない方はこちらからおすすみ下さい。</small></a></div>
  </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
