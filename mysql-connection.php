<?php


#------------------------------------------------------------------------------
#変数定義
#-----------------------------------------------------------------------------


define("HOSTNAME", "localhost");

// データベースサーバ ポート番号(省略可)
define("DB_PORT","3306");

// データベースサーバ ユーザ名
define("USERNAME","root");

// データベースサーバ パスワード
define("PASSWORD","(at{%9ZATCI");

// データベースサーバ データベース名
define("DATABASE","root");


try {

   $dbconnect = new PDO('mysql:host='. HOSTNAME . ';dbname=' . DATABASE, USERNAME, PASSWORD);

   $msg = "there is no problem connecting with mysql";

} catch(PDOException $e){

   $msg       = "MySQL への接続に失敗しました。<br>(" . $e->getMessage() . ")";

}

?>


<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>MySQL接続確認</title>
  </head>
  <body>
    <h1>MySQL接続確認</h1>
    <p><?php echo $msg; ?></p>
  </body>
</html>
~