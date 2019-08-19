<?php
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
      CREATE TABLE MYUID
      (ID INTEGER PRIMARY KEY AUTOINCREMENT,
      NAME           TEXT ,
      URL           TEXT  ,
      UID           TEXT  ,
      psw           TEXT ,
      NOTE           TEXT  ,
      ADDRESS        CHAR(50) ,
      time1           TEXT  ,
      SALARY         REAL);
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Table created successfully\n";
   }
   $db->close();
?>