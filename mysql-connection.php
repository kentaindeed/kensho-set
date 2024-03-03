<?php


#------------------------------------------------------------------------------
#変数定義
#-----------------------------------------------------------------------------

//hostname 
define("HOSTNAME", "your_database_hostname");

// port
define("DB_PORT","3306");

// username
define("USERNAME","root");

// password
define("PASSWORD","your_password");

// database name
define("DATABASE","your_database");


try {

   $dbconnect = new PDO('mysql:host='. HOSTNAME . ';dbname=' . DATABASE, USERNAME, PASSWORD);

   $msg = "MySQL への接続に成功しました";

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