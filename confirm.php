<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>サンプルページ</title>
  </head>
  <body>
 
    <h1>確認画面</h1>
    <form action="send.php" method="post">
      名前<br>
      <input type="text" name="Dname" value="<?php echo $_POST['Dname']; ?>" disabled><br>
      
      メールアドレス<br>
      <input type="email" name="Mname" value="<?php echo $_POST['Mname']; ?>" disabled><br>
      
      お問い合わせ内容<br>
      <textarea name="naiyou" rows="8" cols="80" disabled><?php echo $_POST['naiyou']; ?></textarea><br>
      <input type="submit" value="送信">
    </form>
  </body>
</html>