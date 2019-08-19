<?php 
 header("Content-Type:text/html;charset=utf-8"); 
 session_start(); 
 $username1 = 'feanset';
 $password1 =  '123456';
 if(isset($_POST['login'])) 
 { 
  $username = trim($_POST['usernamec']); 
  $password = trim($_POST['passwordc']); 
  if($username==''||$password=='') 
  { 
   header('refresh:3;url=login.html'); 
   echo "改用户名或密码不能为空，3秒后跳转到登录页面"; 
   exit; 
  } 
  else if($username!=$username1||$password!=$password1) 
  { 
   //用户名或密码错误 
   header('refresh:3;url=login.html'); 
   echo "用户名或密码错误，3秒后跳转到登录页面"; 
   exit; 
  } else if($username == $username1 && $password == $password1) 
  { 
   //登录成功将信息保存到session中 
   $_SESSION['username']=$username; 
   $_SESSION['islogin']=1; 
   //如果勾选7天内自动保存，则将其保存到cookie 
   if(isset($_COOKIE['remember'])) 
   { 
    setcookie("username",$username,time()+7*24*60*60); 
    setcookie("code",md5($username.md5($password)),time()+7*24*60*60); 
   } 
   else 
   { 
    setcookie("username",'',time()-1); 
    setcookie("code",'',time()-1); 
   } 
   //跳转到用户首页 
   header('Location:../desktop/'); 
  } 
 } ;

   






?>