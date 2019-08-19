<<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	   <title>安森工作室</title>       
        <link type="text/css" rel="stylesheet" href="css/css.css"/>
        <link type="text/css" rel="stylesheet" href="css/jquery.tool.css"/>
        <link type="text/css" rel="stylesheet" href="css/smartMenu.css"/>
        <link rel="stylesheet" href="css/desktop.css" />
        <link rel="stylesheet" href="css/diy.css" />
        <script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
        <script type="text/javascript" src="js/shortcut.js"></script>
        <script type="text/javascript" src="js/templates.js"></script>
        <script type="text/javascript" src="js/core.js"></script>
        <script type="text/javascript" src="js/jquery.tool.js"></script>
        <script type="text/javascript" src="js/jquery-smartMenu.js"></script>
        <script type="text/javascript" src="js/diy.js"></script>
        <script type="text/javascript" src="js/jquery.hotkeys.js"></script>
        <script type="text/javascript">
            $().ready(function(){
                document.body.onselectstart = document.body.ondrag = function(){return false;}
                Core.init();
              });
               jQuery(document).bind('keydown.f1',function (evt){
                        myFunction(); return false; });
               jQuery(document).bind('keydown.f4',function (evt){
                        Core.showDesktop(); return false; });
               jQuery(document).bind('keydown.f8',function (evt){
                        $('ui.menu1').show(); return false; });
               jQuery(document).bind('keydown.f6',function (evt){
                        myFunction(); return false; });
        </script>
        <style>


        </style>
        <script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
 <script type="text/javascript">

        </script>

</head>

 <body  id="lxcn" style="background:url(images/background.jpg) repeat ;">
 
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
                <ul id="tianqi">
                    <li> <a class="menu_trigger1" href="javascript:void(0);">通知栏</a>
                      <ul  class="menu1">
                        <li> <a >关于本站</a> </li>
                        <li> <a href="javascript:void(0);">163</a> </li>
                        <li> 
                      </li>
                        <li> <iframe name="weather_inc" src="http://i.tianqi.com/index.php?c=code&id=64" width="540" height="291" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe></iframe> </li>
                        <li> <a href="javascript:void(0);">jQuery UI</a> </li>
                        <li> <a id="clock11" href="javascript:void(0);" ></a></li>
                      </ul>
                    </li>
                    
                  </ul>
               </div>
        <span class="float_right" id="clock"></span>
            <ul>
              <li> <a class="menu_trigger" href="javascript:void(0);">home</a>
                <ul class="menu">
                  <li> <a >关于本站</a> </li>
                  <li> 
                      </li>
                      <li> <div id="clock1" href="javascript:void(0);" ></div> </li>
                  <li> <div id="cal-wrap"></div> </li>
                  
                  <li> <a href="javascript:void(0);">jQuery UI</a> </li>
                  <li> <a href="javascript:void(0);">2019年5月14日</a> </li>
                </ul>
              </li>
              <li> <a class="menu_trigger" href="javascript:void(0);">学习</a>
                <ul class="menu">
                  <li> <a href="https://wallstreetcn.com/live/global">华尔街快讯</a> </li>
                  <li> <a href="http://finance.sina.com.cn/7x24/">新浪时事新闻</a> </li>
                  <li> <a href="http://apps.swufe-online.com/ols/Login/Index">西财在线</a> </li>
                  <li> <a href="http://ke.qq.com">腾讯课堂</a> </li>
                  <li> <a href="https://docs.qq.com/desktop/">腾讯文档</a> </li>
                  <li> <a href="http://www.lanrenzhijia.com/">HTML5 Super Friends</a> </li>
                </ul>
              </li>
              <li> <a class="menu_trigger" href="javascript:void(0);">生活</a>
                <ul class="menu">
                  <li> <a href="https://58.com">58同城</a> </li>
                  <li> <a href="https://rkb.chengdu.gov.cn/expectScore/show">成都居住证模拟打分</a> </li>
                  <li> <a href="http://i.baidu.com/my/cal">百度日历</a> </li>
                </ul>
              </li>
            <li> <a class="menu_trigger" href="javascript:void(0);">工具</a>
                <ul class="menu">
                  <li> <a href="https://app.yinxiang.com/Login.action">印象笔记</a> </li>
                  <li> <a href="http://lbsyun.baidu.com/customv2/index.html">百度地图编辑器</a> </li>
                  <li> <a href="https://mail.163.com/">网易163</a> </li>
                  <li> <a href="https://wallstreetcn.com/live/global">Desktop - CSS</a> </li>
                  <li> <a href="https://rkb.chengdu.gov.cn/expectScore/show">成都居住证模拟打分</a> </li>
                  <li> <a href="https://cp.aliyun.com/">万网首页</a> </li>
                  
                </ul>
              </li>

              <li> <a class="menu_trigger" href="javascript:void(0);">帮助</a>
                <ul class="menu">
                  <li> <a href="javascript:myFunction();">help</a> </li>
                  <li> <a href="javascript:void(0);">jQuery tool（提示）</a> </li>
                  <li> <a href="javascript:void(0);">jquery-smartMenu(右键菜单)</a> </li>
                </ul>
              </li>
            </ul>
        </div>




</body>
</html>