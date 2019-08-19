<?php
	//追加方式打开文件	//设置时间
ini_set("error_reporting","E_ALL & ~E_NOTICE");// 解决 PHP Notice: Undefined variable
	$time=time();
	//得到用户名
	$name=trim($_POST['name']);
	$age=trim($_POST['age']);
	$address=trim($_POST['address']);
	$proj=trim($_POST['proj']);
   $vipcard=trim($_POST['vipcard']);
   $imp=trim($_POST['imp']);
 
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
      INSERT INTO MYVIP (ID,NAME,AGE,ADDRESS,VIPCARD,PROJ,IMP,time1)
      VALUES (NULL,'$name', '$age', '$address', '$vipcard','$proj','$imp','$time');

EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Records created successfully\n";
   }
   $db->close();
header("location:index.html");
 ?>