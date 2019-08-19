<?php
	//设置时区
	date_default_timezone_set('PRC');
	
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
      // echo "<p class='text-right'> <font  size='1' color=‘green’>链接正常</font> </p>";
   }

   $sql =<<<EOF
      SELECT * FROM MYVIP;
EOF;
//将留言内容读取

  $ret = $db->query($sql);
  $arr = '';

  echo '{"data":';

  while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
  $arr = array(
    'id' => $row['ID'], 
    'name' => $row['NAME'], 
    'age' => $row['AGE'], 
    'address' => $row['ADDRESS'], 
    'vipcard' => $row['VIPCARD'],
     'proj' => $row['PROJ'],
     'imp' => $row['IMP'],
     'time1' => date('Y-m-d H:i:s',$row['time1'])
     );

  $res[] = $arr;

    };
    echo json_encode($res,JSON_UNESCAPED_UNICODE);
 echo "}";

  $db->close();


?>