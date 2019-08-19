

<!DOCTYPE html>
<html >
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	   <title>安森工作室</title>
        <link rel="stylesheet" href="css/bootstrap.css" />
        <script type="text/javascript" src="js/bootstarp.js"></script>
        <script src="http://cdn.bootcss.com/jquery/1.12.3/jquery.min.js"></script>
         <script src="js/layer/layer.js"></script>

<script>
			function tc(){

			      layer.open({
			      type: 1,
			      title:'添加记录面板',
			      area: ['350px', '422px'],
			    
			      content: '\ <div style="margin-top:30px"><form class="form-horizonta" role="form" action="write.php" method="post"><div class="form-group"> <label class="control-label" for="nsername">地址</label><input type="text" class="input-large"  name="url" placeholder="请输入地址"></div><div class="form-group"><label class="control-label" for="name">用户名</label><input type="text"  name="uid" placeholder="请输入用户名"> </div><div class="form-group"> <label class="control-label" for="name">密码</label><input type="text"   name="psw" placeholder="请输入密码"></div><div class="form-group"><label class="control-label" for="name">注释</label><input type="text"   name="note" placeholder="请输入注释"></div><button type="reset" class="btn btn-warning btn-lg"value="Reset">重填</button><button type="submit" class="btn btn-primary btn-lg " >确认输入</button></form></div>'
			    });
			};

				var aa = 'www.qq.com';

				 function tc2(aa){
				  layer.open({
				    type: 2,
				    title: '欢迎页',
				    skin: 'layui-layer-lan',
				    shade: 0,
				    moveOut: true,
				    anim: 1,
				    maxmin: true,
				    area: ['800px', '500px'],
				    content: aa,
				    end: function(){
				      layer.tips('Hi', '#about', {tips: 1})
				    }
				  });
				 };
</script>

<style type="text/css">
	.topline{
		text-align: left;
		margin-left: 10px;
	}
</style>
</head>
<body style="text-align:center">
<div style="margin:0 auto">
<div class="topline">
<?php 
header("Content-Type:text/html;charset=utf-8"); 
 session_start(); 
 //首先判断Cookie是否有记住用户信息 
 if(isset($_COOKIE['username'])) 
 { 
  $_SESSION['username']=$_COOKIE['username']; 
  $_SESSION['islogin']=1; 
 } 
 if(isset($_SESSION['islogin'])) 
 { 
  //已经登录 
  echo $_SESSION['username'].""; 
  echo "<a href='../../logout.php'>注销</a>  "; 
 } 
 else 
 { //为登录 
  header('Location:../../login.html'); 
  echo "你还未登录，请<a href='../../login.html'>登录</a>"; 
 } 

	 ?>
</div>
	<h1>记号本</h1>
	<a href="javascript:void(0);" onclick="tc()">添加记录 </a>
 





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
      echo "<p class='text-right'> <font  size='1' color=‘green’>链接正常</font> </p>";
   }

   $sql =<<<EOF
      SELECT * from myuid;
EOF;
//将留言内容读取
	echo "<table border=‘1’ class='table table-bordered table-striped table-hover'> <th></th><th>地址</th><th>用户名</th><th>密码</th><th>注释</th><th>时间</th>";

  $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
			echo '<tr><td>'.$row['ID'].'</td><td><font color="gree">'.$row['URL'].'</font></td><td><font color="red">'.$row['UID'].'</font></td>';
			echo '<td><font color="gree">'.$row['psw'].'</font></td><td><font color="red">'.$row['NOTE'].'</font></td><td>'.date('Y-m-d H:i:s',$row['time1']);
			echo "</td></tr>";
			};
   $db->close();
	echo "</table>";
echo date("Y-m-d H:i");


?>
</div>
</body>
</html>