# ミドルウェアの構成

- apache(2.4)
- php(8.x)
- MySQL(8.x)

# apache install

yum update
yum install httpd

systemctl start httpd
curl localhost

# php install

```powershell
# amazon linux extras
sudo amazon-linux-extras install php8.2
php -v

# package install
 yum install php-cli php-mbstring php-gd php-intl php-xml

# test
cd /var/www/html/
touch phpinfo.php
vim phpinfo.php

```php
<?php
phpinfo();
?>
```

# start
systemctl start php-fpm.service
systemctl status php-fpm.service

```



# mysql install

```powershell

#mysql repo install
sudo yum install https://dev.mysql.com/get/mysql80-community-release-el7-1.noarch.rpm

# for mysql 8.x
yum-config-manager –enable mysql80-community

# install
yum install mysql-community-server

# start
systemctl start mysqld

# mysql secure installation 

mysql_secure_installation

#password (temp なので問題なし)
(at{%9ZATCI

```

# php 経由でmysql接続

```php

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
   $msg = "MySQL への接続に失敗しました。<br>(" . $e->getMessage() . ")";
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


```
