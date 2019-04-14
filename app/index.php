<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>POSTのサンプル</title>
  </head>
  <body>
    <?php
      //commentがPOSTされているなら
      if(isset($_POST["comment"])){
        //エスケープしてから表示
        $name = htmlspecialchars($_POST["name"]);
        $comment = htmlspecialchars($_POST["comment"]);
        print("「 ${name} 」のコメントは「 ${comment} 」です。");
      } else {
    ?>
        <p>名前とコメントを入れてください。</p>
        <form method="POST" action="index.php">
          <label>名前<label/><br>
          <input name="name" /><br>
          <label>コメント<label/><br>
          <input name="comment" />
          <input type="submit" value="送信" />
        </form>
    <?php
      }
    ?>
  </body>
</html>

