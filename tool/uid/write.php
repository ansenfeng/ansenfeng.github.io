<?php
	//追加方式打开文件	//设置时间
ini_set("error_reporting","E_ALL & ~E_NOTICE");// 解决 PHP Notice: Undefined variable
	$time=time();
	//得到用户名
	$url=trim($_POST['url']);
	$uid=trim($_POST['uid']);
	$psw=trim($_POST['psw']);
	$note=trim($_POST['note']);
 
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('mydb.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }

   $sql =<<<EOF
      INSERT INTO MYUID (ID,NAME,URL,UID,PSW,NOTE,time1)
      VALUES (NULL, '$name', '$url', '$uid', '$psw','$note','$time');

EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Records created successfully\n";
   }
   $db->close();
header("location:index.php");
 ?>