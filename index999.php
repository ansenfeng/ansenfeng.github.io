<?php 
 header("Content-Type:text/html;charset=utf-8"); 
  session_start(); 
   if(isset($_COOKIE['username'])) 
 { 
  $_SESSION['username']=$_COOKIE['username']; 
  $_SESSION['islogin']=1; 
 } 
 if(isset($_SESSION['islogin'])) 
 { 
  echo "已登陆";} 
 else 
 { //为登录 
  header('Location:login.html'); 
  echo "你还未登录，请<a href='login.html'>登录</a>"; 
 } 
?>
<!DOCTYPE html>
<html>
<head>
	   <title>安森工作室</title>
        <link rel="stylesheet" href="css/desktop.css" />
        <link type="text/css" rel="stylesheet" href="css/css.css"/>
        <link type="text/css" rel="stylesheet" href="css/jquery.tool.css"/>
        <link type="text/css" rel="stylesheet" href="css/smartMenu.css"/>
        <link rel="stylesheet" href="css/diy.css" />
        <script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
        <script type="text/javascript" src="js/shortcut.js"></script>
        <script type="text/javascript" src="js/templates.js"></script>
        <script type="text/javascript" src="js/core.js"></script>
        <script type="text/javascript" src="js/jquery.tool.js"></script>
        <script type="text/javascript" src="js/jquery-smartMenu.js"></script>
        <script type="text/javascript" src="js/diy.js"></script>
        <link href='css/bootstrap-3.3.7/css/Bootstrap.min.css' rel='stylesheet' />
       

        <script type="text/javascript">
 
            $().ready(function(){
                document.body.onselectstart = document.body.ondrag = function(){return false;}
                Core.init();
              });

        </script>
<style>
#rili{
  height: 800;
  padding: 0px;
  margin: 0px;
  scrolling:no;
  width: 800px;
  border: 0px;
}
 #ccc{  float: right;
        position:relative;
       top: 60px;
       right: 20px;
       height: 500px;
       width: 400px;
       z-index: 1;
        
 }
 #ccc2{
  width: 500px;
  height: 400px;
  color: green;
  margin-top: 40px;
  
 }
 #ccc4{width:500px;
  height: 150px;
            padding: 0.5em;
            font-size: 1.3em;
            text-align: center;
            background: -webkit-linear-gradient(top, transparent 15px, rgb(39,45,57) 0), -webkit-linear-gradient(left, transparent 15px,rgb(39,45,57) 0);
            background-size: 16px 16px;
            background-color: rgb(3,9,23);
box-shadow:5px 2px 6px #000;
  
 }
.timed {
  
  font-size: 70px;
   font-family: pictos;
  letter-spacing: 0,1em;
            
  
}
.date1 {
  letter-spacing: 0.1em;
  font-size: 24px;
}
.textd {
  font-size: 24px;
  
}


  .ace_editor {
    border: 0px solid lightgray;
    margin: auto;
    height: 200px;
    width: 100%;
    font-size: 25px;
    box-shadow:5px 2px 6px #000;
  }
  .scrollmargin {
    height: 80px;
        text-align: center;
  }
  .ace_editor::selection {
    background:maroon; 
    color:red;
}

  #in2{
      font-size: 30px;
border-bottom: 1px solid #dbdbdb;  
border-top:0px;  
border-left:0px;  
border-right:0px;  
    }
    #in2:focus{

    outline: none; 
   border-bottom: 1px solid #dbdbdb;  
border-top:0px;  
border-left:0px;  
border-right:0px;  
}

body{
/*
            padding: 0.5em;
            font-size: 1.3em;
            text-align: center;
            background: -webkit-linear-gradient(top, transparent 15px, rgb(39,45,57) 0), -webkit-linear-gradient(left, transparent 15px,rgb(39,45,57) 0);
            background-size: 16px 16px;
            background-color: rgb(3,9,23);*/
            background:url(images/background.jpg) no-repeat 0 0;
}
.jsq2{
  padding-left: 10px;
 border: none;
  width: 100%;
  height:100%;
}
</style>
<style>
input.tabs {display:none;}
input.tabs + label {
display:block; font:normal 12px/30px arial, sans-serif; border:1px solid #aaa; background:#69c; text-decoration:none; color:#fff; 
float:right;position:relative; padding:0 20px; margin-right:2px;
}
.tabcontent {width:400px; padding:0px;
  
 box-shadow:5px 2px 6px #000;  position:relative; z-index:10; display:none; clear:right; top:-1px;
}
.tabcontent p {padding:0 0 5px 0; margin:0; font:normal 12px/20px arial, sans-serif; color:#333;}
.tabcontent h4 {padding:0 0 10px 0; margin:0; font:bold 14px/25px arial, sans-serif; color:#000;}
.tabcontent {display:none;}
input.tabs:checked + label {z-index:20;box-shadow:5px 2px 6px #000;}
input#tab1:checked ~ section#view1 {display:block;}
input#tab2:checked ~ section#view2 {display:block;height: 500px;}
input#tab3:checked ~ section#view3 {display:block;}
input#tab4:checked ~ section#view4 {display:block;height: 500px;}
input#tab5:checked ~ section#view5 {display:block;}
#zx{
  z-index: 999;
}
body{
  background: imanges/background.jpg;
}
</style>

</head>

 <body  id="lxcn" style="background: background.jpg">
 
       <div id="task-bar">
            <ul class="task-window">                
            </ul>
            <ul class="task-panel">
                <li class="sys" title="系统设定"><b class="">系统设定</b></li>
            </ul>
        </div>
        <div id="desk"><ul></ul></div>

        <div class="abs" id="bar_top"> 
              <!-- <div  class="float_right">
                <ul>
                    <li> <a class="menu_trigger1" href="javascript:void(0);">通知栏</a>
                      <ul class="menu1">
                        <li> <a href="http://www.baidu.com">关于本站</a> </li>
                        <li> <a href="https://mail.163.com/" target="_blank" >163</a> </li>
                       
                           <li><div id="clock1" href="javascript:void(0);" ></div> </li>
                        <li> <div id="cal-wrap"></div> </li>
                        <li> <a href="#">提醒事项</a> </li>
                     
                      </ul>
                    </li>
                    
                  </ul>
               </div> -->
       <span id="zx" class="float_right"><?php 
  
 //首先判断Cookie是否有记住用户信息 
 if(isset($_SESSION['islogin'])) 
 { 
  echo $_SESSION['username'].""; 
  echo "<a href='logout.php'>注销</a>  "; 
 } 

?></span> <!-- <span class="float_right" id="clock"> --></span>
            <ul>
              <li> <a class="menu_trigger" href="javascript:void(0);">home</a>
                <ul class="menu">
                  <li>  <iframe id="rili" src="tool/calendar/index21.html"></iframe></li>

                  <li> <a href="#">2019年5月14日</a> </li>
                  <li> <a href="logout.php">注销</a> </li>
                </ul>
              </li>
              <li> <a class="menu_trigger" href="javascript:void(0);">学习</a>
                <ul class="menu">
                  <li> <a href="https://wallstreetcn.com/live/global">华尔街快讯</a> </li>
                  <li> <a href="http://finance.sina.com.cn/7x24/">新浪时事新闻</a> </li>
                  <li> <a href="http://apps.swufe-online.com/ols/Login/Index">西财在线</a> </li>
                  <li> <a href="http://ke.qq.com">腾讯课堂</a> </li>
                  <li> <a href="https://docs.qq.com/desktop/">腾讯文档</a> </li>
                  <li> <a href="http://xueshu.baidu.com/">百度学术</a> </li>
                </ul>
              </li>
              <li> <a class="menu_trigger" href="javascript:void(0);">生活</a>
                <ul class="menu">
                  <li> <a href="https://58.com">58同城</a> </li>
                  <li> <a href="https://www.ke.com">贝壳找房</a> </li>
                  <li> <a href="http://i.baidu.com/my/cal">百度日历</a> </li>
                </ul>
              </li>
            <li> <a class="menu_trigger" href="javascript:void(0);">工具</a>
                <ul class="menu">
                  <li> <a href="https://app.yinxiang.com/Login.action">印象笔记</a> </li>
                  <li> <a href="http://lbsyun.baidu.com/customv2/index.html">百度地图编辑器</a> </li>
                  <li> <a href="https://mail.163.com/">网易163</a> </li>
                  <li> <a href="https://fanyi.baidu.com/">百度翻译</a> </li>
                  <li> <a href="https://rkb.chengdu.gov.cn/expectScore/show">成都居住证模拟打分</a> </li>
                  <li> <a href="https://cp.aliyun.com/">万网首页</a> </li>
                  
                </ul>
              </li>

              <li> <a class="menu_trigger" href="javascript:void(0);">帮助</a>
                <ul class="menu">
                  <li> <a href="javascript:void(0);" onclick="bg1();">桌面背景2</a> </li>
                  <li> <a href="javascript:void(0);" onclick="bg2();">桌面背景1</a> </li>
                  <li> <a href="javascript:myFunction();">help</a> </li>
                  <li> <a href="logout.php">注销</a> </li>
                </ul>
              </li>
            </ul>
        </div>


      

<div class="zi3" id="ccc">
<section class="radiotabs">
  <input type="radio" name="tab" id="tab1" class="tabs" checked="checked">
    <label for="tab1">
      便签本
    </label>
  <input type="radio" name="tab" id="tab2" class="tabs">
    <label for="tab2">
      计算器
    </label>
 <!--  <input type="radio" name="tab" id="tab3" class="tabs">
    <label for="tab3">
      tab3
    </label>
  <input type="radio" name="tab" id="tab4" class="tabs">
    <label for="tab4">
      tab4
    </label>
  <input type="radio" name="tab" id="tab5" class="tabs">
    <label for="tab5">
      tab5 -->
    </label>
  <section id="view1" class="tabcontent">
    <pre id="editor2"></pre>
  </section>
  <section id="view2" class="tabcontent">
  <pre id="editor3"></pre>
 
  </section>
  <section id="view3" class="tabcontent">
    内容三
  </section>
  <section id="view4" class="tabcontent">
   
  </section>
  <section id="view5" class="tabcontent">
    
  </section>



</div>
<script src="js/src-min/ace.js"></script>
<script>
    var editor2 = ace.edit("editor2", {
        theme: "ace/theme/tomorrow_night_blue",
        mode: "ace/mode/html",
        autoScrollEditorIntoView: true,
        wrap: true,
        maxLines: 12,
        minLines: 2
    });
        var editor3 = ace.edit("editor3", {
        theme: "ace/theme/tomorrow_night_eighties",
        mode: "ace/mode/html",
        autoScrollEditorIntoView: true,
        wrap: true,
        maxLines: 30,
        minLines: 2
    });
    window.editor3 = editor3;
    window.editor2 = editor2;
          editor2.commands.addCommand({
      name: 'myCommand',
      bindKey: {win: 'Enter', mac: 'Enter'},
      exec: function(editor) {
      possj();
      $.ajxs();
      editor2.insert("\n");
      },
      readOnly: false // 如果不需要使用只读模式，这里设置false
      });

       editor3.commands.addCommand({
      name: 'myCommand',
      bindKey: {win: 'Enter', mac: 'Enter'},
      exec: function(editor) {
      jisuan();
      },
      readOnly: false // 如果不需要使用只读模式，这里设置false
      });

 function jisuan() {
var sec = editor3.session.getTextRange(editor3.selection.selectLine());
var sedc =  eval (sec);
var see = sec.substring(0, sec.length - 1);
editor3.insert(sec+" = "+sedc+"\n");
setTimeout( function(){editor3.insert(''+sedc+'')}, 100 );
}
</script>

</body>
</html>