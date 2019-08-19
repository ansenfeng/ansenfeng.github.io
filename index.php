<?php 
 header("Content-Type:text/html;charset=utf-8"); 
  session_start(); 

   if(isset($_COOKIE['username'])) 
 { 
  $_SESSION['username']=$_COOKIE['username']; 
  $_SESSION['islogin']=1; 
 } 
 if(isset($_SESSION['islogin'])) 
 { } 
 else 
 { //为登录 
  header('Location:login.html'); 
  echo "你还未登录，请<a href='login.html'>登录</a>"; 
 } 
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
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
        <!-- <script src='css/bootstrap-3.3.7/js2/bootstrap.min.js'></script> -->
        <script type="text/javascript">
            $().ready(function(){
                document.body.onselectstart = document.body.ondrag = function(){return false;}
                Core.init();
              });
        </script>
<style>
.progress-bar {margin: 1px 0px;
  float: right;
background-color: #eee;
height: 21px;
padding: 2px;
width: 450px;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
border-radius: 5px;
-moz-box-shadow: 0 1px 5px #000 inset, 0 1px 0 #444;
-webkit-box-shadow: 0 1px 5px #000 inset, 0 1px 0 #444;
box-shadow: 0 1px 5px #000 inset, 0 1px 0 #444;
}

.progress-bar span {
display: inline-block;
height: 18px;
width: 450px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
border-radius: 3px;
-moz-box-shadow: 0 1px 0 rgba(255, 255, 255, .5) inset;
-webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, .5) inset;
box-shadow: 0 1px 0 rgba(255, 255, 255, .5) inset;
-webkit-transition: width .4s ease-in-out;
-moz-transition: width .4s ease-in-out;
-ms-transition: width .4s ease-in-out;
-o-transition: width .4s ease-in-out;
transition: width .4s ease-in-out;
}
.blue span {
background-color: #34c2e3;float: left;
}
.orange span {
background-color: #fecf23;
background-image: -webkit-gradient(linear, left top, left bottom, from(#fecf23), to(#fd9215));
background-image: -webkit-linear-gradient(top, #fecf23, #fd9215);
background-image: -moz-linear-gradient(top, #fecf23, #fd9215);
background-image: -ms-linear-gradient(top, #fecf23, #fd9215);
background-image: -o-linear-gradient(top, #fecf23, #fd9215);
background-image: linear-gradient(top, #fecf23, #fd9215);
}

.green span {
background-color: #a5df41;
background-image: -webkit-gradient(linear, left top, left bottom, from(#a5df41), to(#4ca916));
background-image: -webkit-linear-gradient(top, #a5df41, #4ca916);
background-image: -moz-linear-gradient(top, #a5df41, #4ca916);
background-image: -ms-linear-gradient(top, #a5df41, #4ca916);
background-image: -o-linear-gradient(top, #a5df41, #4ca916);
background-image: linear-gradient(top, #a5df41, #4ca916);
}
</style>
</head>

 <body  id="lxcn" style="background-image: url(images/background.jpg);">
 
       <div id="task-bar">
            <ul class="task-window">                
            </ul>
            <ul class="task-panel">
                <li class="sys" title="系统设定"><b class="">系统设定</b></li>
            </ul>
        </div>
        <div id="desk"><ul></ul></div>

        <div class="abs" id="bar_top"> 
              <div  class="float_right">
                <ul>
                    <li> <a class="menu_trigger1" href="javascript:void(0);"><span class="tb1 glyphicon glyphicon-th-list"></span></a>
                      <ul class="menu1">
                        <li> <a href="http://www.baidu.com">关于本站</a> </li>
                        <li> <a href="https://mail.163.com/" target="_blank" >163</a> </li>
                       
                        <li><div id="clock1" href="javascript:void(0);" ></div> </li>
                        <li> <div id="cal-wrap"></div> </li>
                      </ul>
                    </li>
                    
                  </ul>
               </div>

        <span class="float_right" id="zx">
<?php 
 //首先判断Cookie是否有记住用户信息 
 $username = isset($_POST['username']) ? filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS) : isset($_GET['username']) ? filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS) : '';
 if(isset($_SESSION['islogin'])) 
 { 
  echo $_SESSION['username'].""; 
  echo "<a href='logout.php'>注销</a>  "; 
 } 
?>
        </span>
        <div style="width: 750px;float: right;margin-right: 80px;">
        <div id="time3" style="float: right;">1%</div>
        <div id="bars5" class="progress-bar blue  stripes" ><span style="width: 0%"></span></div>
       <!--  <div id="bars4" class="progress-bar blue  stripes" ><span style="width: 0%"></span></div>
        <div id="bars3" class="progress-bar green  stripes" ><span style="width: 0%"></span></div>
        <div id="bars2" class="progress-bar blue  stripes" ><span style="width: 0%"></span></div>
        <div id="bars1" class="progress-bar blue  stripes" ><span style="width: 0%"></span></div> --></div>
            <ul>
              <li> <a class="menu_trigger" href="javascript:void(0);"><span class="tb1 glyphicon glyphicon-home"></span></a>
                <ul class="menu">
                  <li>  <iframe id="rili" src="/webos/tool/calendar/index21.html"></iframe></li>
                  <li> <a href="#">2019年5月14日</a> </li>
                </ul>
              </li>

    <?php
$file = 'css/note2/js/wnote.txt'; //先读取文件
$cbody = file($file); //file（）函数作用是返回一行数组，txt里有三行数据，因此一行被识别为一个数组，三行被识别为三个数组
for($i=0;$i<count($cbody);$i++){ //count函数就是获取数组的长度的，长度为3 因为一行被识别为一个数组 有三行
echo $cbody[$i]; //最后是循环输出每个数组，在每个数组输出完毕后 ，输出一个换行，这样就可以达到换行效果
}
?>

           <!--     {dede:channelartlist type="top" tyoid="top"}
                 <li><a class="menu_trigger" href="javascript:void(0);">{dede:field name='typename'/}</a>
              
                   <ul class="menu">
                   {dede:channel}
                   <li><a href="[field:typelink/]" target="_blank" title="[field:typename/]">[field:typename/]</a></li>
                   {/dede:channel}
                   </ul>
                </li>
               {/dede:channelartlist}
 -->

              <li> <a class="menu_trigger" href="javascript:void(0);">帮助</a>
                <ul class="menu">
                  <li> <a href="javascript:void(0);" onclick='bg1("images/background2.jpg");'>桌面背景2</a> </li>
                  <li> <a href="javascript:void(0);" onclick='bg1("images/bg.jpg");'>桌面背景1</a> </li>
                  <li> <a href="css/note2/">修改链接</a> </li>
                  <li> <a href="javascript:myFunction();">help</a> </li>                
                  <li> <?php echo $_SESSION['username']."";  ?> </li>
                  <li><?php  echo "<a href='logout.php'>注销</a>  ";  ?> </li>
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
    <input type="radio" name="tab" id="tab3" class="tabs">
        <label for="tab3">
      list
    </label>
  <section id="view1" class="tabcontent">
    <pre id="editor2"></pre>
  </section>
  <section id="view2" class="tabcontent">
 <pre id="editor3"></pre>
  </section>
  <section id="view3" class="tabcontent">
      <?php
$file = 'css/rc.txt'; //先读取文件
$cbody = file($file); //file（）函数作用是返回一行数组，txt里有三行数据，因此一行被识别为一个数组，三行被识别为三个数组
for($i=0;$i<count($cbody);$i++){ //count函数就是获取数组的长度的，长度为3 因为一行被识别为一个数组 有三行
echo $cbody[$i]; //最后是循环输出每个数组，在每个数组输出完毕后 ，输出一个换行，这样就可以达到换行效果
}
?>
  </section>
  <section id="view4" class="tabcontent">
   
  </section>
  <section id="view5" class="tabcontent">
    
  </section>
<div id="time2">这里显示星期</div>

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