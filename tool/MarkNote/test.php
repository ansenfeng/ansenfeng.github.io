<?php
	require_once dirname(__FILE__).'/include/user.php';
	require_once dirname(__FILE__).'/include/note.php';

	if(!hasLogin()){
		echo 'Please login';
		exit();
	}


?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Editor</title>
  <script src="js/jquery-1.6.2.min.js"></script>
  <style type="text/css" media="screen">
  body{
  	background: gray;
  }

    .ace_editor, .toolbar {
        border: 1px solid lightgray;
        margin: auto;
        width: 90%;
    } 
    .ace_editor {
        height: 100%;
        font-size: 14px;
    }
    </style>
</head>
<body>
<span id="header-user-name"><?php echo $USERNAME; ?></span>
			<span id="header-user-emailandlogout"><?php echo getUserEmail($USERNAME); ?> | <a style="cursor: pointer;" onclick="$('#header-user-logoutform').submit();">注销</a></span><form id="header-user-logoutform" method="post" action="login2.php">
<!-- load ace -->
<script src="src-min/ace.js"></script>
<!-- load ace language_tools extension -->
<script src="src-min/ext-language_tools.js"></script>
<script>
    var buildDom = require("ace/lib/dom").buildDom;
    var editor = ace.edit();
    editor.setOptions({
    	
        mode: "ace/mode/markdown",
        maxLines: 35,
        minLines: 30,
        wrap: true,
        autoScrollEditorIntoView: true,
    });
    var refs = {};
    function updateToolbar() {
        refs.saveButton.disabled = editor.session.getUndoManager().isClean();
        refs.undoButton.disabled = !editor.session.getUndoManager().hasUndo();
        refs.redoButton.disabled = !editor.session.getUndoManager().hasRedo();
    }
    editor.on("input", updateToolbar);
    editor.session.setValue(localStorage.savedValue || "Welcome to ace Toolbar demo!")
    function save() {
        localStorage.savedValue = editor.getValue(); 
        editor.session.getUndoManager().markClean();
        updateToolbar();
    }
    editor.commands.addCommand({
        name: "save",
        exec: save,
        bindKey: { win: "ctrl-s", mac: "cmd-s" }
    });
    
    buildDom(["div", { class: "toolbar" },
        ["button", {
            ref: "saveButton",
            onclick: save
        }, "save"],
        ["button", {
            ref: "undoButton",
            onclick: function() {
                editor.undo();
            }
        }, "undo"],
        ["button", {
            ref: "redoButton",
            onclick: function() {
                editor.redo();
            }
        }, "redo"],
        ["button", {
            style: "font-weight: bold",
            onclick: function() {
                editor.insertSnippet("**${1:$SELECTION}**");
                editor.renderer.scrollCursorIntoView()
            }
        }, "bold"],
        ["button", {
            style: "font-style: italic",
            onclick: function() {
                editor.insertSnippet("*${1:$SELECTION}*");
                editor.renderer.scrollCursorIntoView()
            }
        }, "Italic"],
    ], document.body, refs);
    document.body.appendChild(editor.container)
    
    window.editor = editor;


			var data1;
            var data2;  
	$.ajxs = function(){
                $.ajax({  
                type: "POST",  
                url: "js/write.php", 
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
                type: "POST",  
                url: "js/wnote.txt",  
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
                        lin = editor.session.getLength();
                        editor.gotoLine(lin, 0);
                        }, 1000 );


          function getsj(){
        editor.setValue(data1);
          };
            
      function possj(){
        data2 = editor.getValue();      
          };
  $(document).keydown(function (event) {
  	if (event.keyCode==13) {
  		possj();
  		$.ajxs();
  	};
 
});



</script>

</body>
</html>

