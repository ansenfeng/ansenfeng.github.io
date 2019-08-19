
jQuery(document).ready(function() {
	JQD.go();
});

//
// Namespace - Module Pattern.
//
var JQD = (function($, window, undefined) {
	// Expose innards of JQD.
	return {
		go: function() {
			for (var i in JQD.init) {
				JQD.init[i]();
			}
		},
		init: {

			clock: function() {
				// if (!$('#clock').length) {
					// return;
				// }

				// Date variables.
				var date_obj = new Date();
				var hour = date_obj.getHours();
				var minute = date_obj.getMinutes();
				var day = date_obj.getDate();
				var year = date_obj.getFullYear();
				var suffix = '上午';

				// Array for weekday.
				var weekday = ['星期日','星期一','星期二','星期三','星期四','星期五','星期六'];

				// Array for month.
				var month = ['一月','二月','三月','四月','五月','六月','七月','八月','九月','十月','十一月','十二月'];

				// Assign weekday, month, date, year.
				weekday = weekday[date_obj.getDay()];
				month = month[date_obj.getMonth()];

				// AM or PM?
				if (hour >= 12) {
					suffix = '下午';
				}


				// Leading zero, if needed.
				if (minute < 10) {
					minute = '0' + minute;
				}

				// Build two HTML strings.
				var clock_time = '登陆时间'+  ':' +weekday + ' ' + hour + ':' + minute + ' ' ;
				var clock_date = year + '年'+month;
				
				// Shove in the HTML.
				// $('#clock').html(clock_time).attr('title', "这里显示首次登陆时间");
				// $('#clock1').html(clock_date);
				
				var dtime1 = weekday+hour + ':' + minute ;
				// var dtime2 = weekday;
				 $('#time2').html(dtime1);
				// $('.textd').html(dtime1);
			

				
				
					// if (hour >= 7 && hour < 8) {
			  //           $("#bbg1").addClass("active");
			  //       } else if (hour >= 8 && hour < 12) {
			  //         $("#bbg2").css("background-color","#73B1E0");
			  //       } else if(hour >= 12 && hour < 14) {
			  //         $("#bbg3").css("background-color","PaleGreen");
			  //       } else if(hour >= 14 && hour < 18) {
			  //          $("#bbg4").css("background-color","#73B1E0");

			  //       } else if(hour >= 18 && hour < 22) {
			  //         $("#bbg5").addClass("active");
			  //       } else if(hour >= 1 && hour < 7) {
			  //         alert("休息时间到");
			  //         $(".flat").css("background-color","orange");
			  //       } 
			  		// if (hour >= 7 && hour < 8) {
			    //         $("#bbg1").addClass("active");
			    //     } else if (hour >= 8 && hour < 12) {
			    //      $("#bars1 span").css("width","100%");
			    //     } else if(hour >= 12 && hour < 14) {
			    //       $("#bars2 span").css("width","100%");
			    //     } else if(hour >= 14 && hour < 18) {
			    //       $("#bars3 span").css("width","100%");
			    //     } else if(hour >= 18 && hour < 22) {
			    //       $("#bars4 span").css("width","100%");
			    //     } else if(hour >= 1 && hour < 7) {
			    //       alert("休息时间到");
			    //       $(".progress-bar").css("background-color","#1a1a1a");
			    //       $(".progress-bar span").css("width","0%");
			    //     } 
			        // $(".progress-bar span").css("width","0%");
		if (hour > 7 && hour < 8) {
           $(".zao").css("background-color","#333");
        } else if (hour > 8 && hour < 12) {
           $(".sw").css("background-color","#333");
        } else if(hour > 12 && hour < 14) {
           $(".midd").css("background-color","#333");
        } else if(hour > 14 && hour < 18) {
           $(".xiawu").css("background-color","#333");
        } else if(hour > 18 && hour < 22) {
          $(".wan").css("background-color","#333");
        } else if(hour > 22 && hour < 23) {
           ZENG.msgbox.show("该睡觉了", 5, 20000);
        } 
        if (hour >= 12 && hour <= 14) {
        	var xiu = Math.round(((hour-12)*60+minute)/120*100);
        $("#bars5").removeClass("blue");	
		$("#bars5").addClass("green");
		$("#bars5 span").css("width",100-xiu+"%");
		$('#time3').html("休息时间到");
        }else if (hour >= 0 && hour < 7) {
        	$('#time3').html("暂停服务");
        	$("#bars5 span").css("width","0%");
        	ZENG.msgbox.show("下班时间", 5, 20000);
        }else{
        	$("#bars5").removeClass("green");	
			$("#bars5").addClass("blue");
        	$("#bars5 span").css("width",Math.round((hour-7) / 14 * 100) + "%");
			$('#time3').html(Math.round((hour-7) / 14 * 100)  + "%");
        }
			        
				// Update every 60 seconds.
				setTimeout(JQD.init.clock, 600000);
			},
			//
			// Initialize the desktop.
			//
			desktop: function() {

				$(document).mousedown(function(ev) {
					if (!$(ev.target).closest('a').length) {
						JQD.util.clear_active();
						ev.preventDefault();
						ev.stopPropagation();
					}
				}).bind('contextmenu', function() {
					return false;
				});


				$('a.menu_trigger').live('mousedown', function() {
					if ($(this).next('ul.menu').is(':hidden')) {
						JQD.util.clear_active();
						$(this).addClass('active').next('ul.menu').show();
					}
					else {
						JQD.util.clear_active();
					}
				}).live('mouseenter', function() {
					// Transfer focus, if already open.
					if ($('ul.menu').is(':visible')) {
						JQD.util.clear_active();
						$(this).addClass('active').next('ul.menu').show();
					}
				});

				$('a.menu_trigger1').live('mousedown', function() {
					if ($(this).next('ul.menu1').is(':hidden')) {
						JQD.util.clear_active();
						$(this).addClass('active').next('ul.menu1').show();
					}
					else {
						JQD.util.clear_active();
					}
				}).live('mouseenter', function() {
					// Transfer focus, if already open.
					if ($('ul.menu1').is(':visible')) {
						JQD.util.clear_active();
						$(this).addClass('active').next('ul.menu1').show();
					}
				});

				}

		},
		util: {
			//
			// Clear active states, hide menus.
			//
			clear_active: function() {
				$('a.active, tr.active').removeClass('active');
				$('ul.menu').hide();
				$('ul.menu1').hide();
			},


		}
	};
// Pass in jQuery.
})(jQuery, this);


// function myFunction(){
//  ZENG.msgbox.show("桃花坞里桃花庵，桃花庵里桃花仙，桃花仙人种桃树，又摘桃花换酒钱。", 5, 20000);
//  $('ul.menu').hide();
//  $('a.active, tr.active').removeClass('active');
// };

 var weeks = "一二三四五六日".split(''),
        monthDays = [31,28,31,30,31,30,31,31,30,31,30,31],
        pastMleft ={
                0:6,1:7,2:1,3:2,4:3,5:4,6:5
            };
    var time = new Date(),
        thisY = time.getFullYear(),
        thisM = time.getMonth(),
        thisD = time.getDate();
    function cal(){
        var realM = thisM + 1,
            firstDW = new Date(thisY,thisM,1).getDay(),
            thisMD = monthDays[thisM],
            pastMD = pastMleft[firstDW];
        var lists = [];
        monthDays[1] = (thisY%400 == 0 || (thisY%4 == 0 && thisY%100 == 0 ))?29:28

        for(var i=0,l=weeks.length; i<l; i++)
            lists.push('<span class="week">'+ weeks[i] +'</span>')
        for(var i=0; i < pastMD ; i++)
            lists.push('<span class="past"></span>')
        for(var i=1; i <= thisMD; i++){
            var str = i==thisD?'today':i<thisD?'now':'fur'
            lists.push('<span class="'+ str +'">'+ i +'</span>')
        }
        for(var i=0; i < 42-thisMD-pastMD ; i++)
            lists.push('<span class="next"></span>')
        $('#cal-wrap').html(lists.join(' ')) 
    }
    window.onload = cal;

              function myFunction(){
               $('ul.menu').hide();
               $('a.active, tr.active').removeClass('active');
               alert("\n日历\tfullcalendar\thttps://fullcalendar.io/docs/。\nshortcut.js\t图标 \t core.js\t主体\t\n jquery.tool.js\t消息提示插件\t3\njquery-smartMenu.js\t右键菜单\njquery.hotkeys.js\t快捷键菜单\ndiy.js\t顶部菜单。\n \n制作于 2019年5月14日");
              };
 
 function bg1(bgt){
 	$("body").css("background","url("+bgt+"),no-repeat");
 };
  function bg2(){
 	$("body").css("background","url(/webos/templets/default/images/background3.jpg),repeat");
 };

            var data1;
            var data2;  
	$.ajxs = function(){
                $.ajax({  
                type: "POST",  
                url: "css/write.php", 
                data: { postsend:data2, post2:"post2"}, 
                dataType: "html",  
                success: function(){  
                    console.log(data2);
                },  
                error:function(XMLHttpRequest, textStatus, errorThrown){//请求失败时调用此函数  
                    console.log(XMLHttpRequest.status);  
                    console.log(XMLHttpRequest.readyState);  
                    console.log(textStatus);                              
                }  
            }); };

            $.ajxback = function(){
                $.ajax({  
                type: "GET",  
                url: "css/wnote.txt",  
                dataType: "html",  
                success: function(data){  
                    data1 = data;
                },  
                error:function(XMLHttpRequest, textStatus, errorThrown){//请求失败时调用此函数  
                    console.log(XMLHttpRequest.status);  
                    console.log(XMLHttpRequest.readyState);  
                    console.log(textStatus);                              
                }  
            }); };
                $.ajxback();
          setTimeout( function(){
                        getsj();
                        lin = editor2.session.getLength();
                        editor2.gotoLine(lin, 0);
                        }, 1000 );

          function getsj(){
        var el = document.getElementById("editor2");
        el.env.editor.setValue(data1);
          };
            
      function possj(){
        var el = document.getElementById("editor2");
         data2 = el.env.editor.getValue();      
          };
//   $(document).keydown(function (event) {
//   	if (event.keyCode==13) {
//   		possj();
//   		$.ajxs();
//   	};
 
// });

  


