<style type="text/css">
<!--
.image {
	width: 200px;
	height: 23px;
	background:#FFF;
	border: 1px solid #aaa;
}

.btn {
    display: inline-block;
    margin-bottom: 0;
	padding:1px 5px;
    font-size: 13px;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
input {
	vertical-align: middle;
	margin: 0;
	padding: 0
}
.file_style {
	position: relative;
	width: 340px
}

.text_style {
	border: 1px solid #cdcdcd;
	width: 140px;
	background:#fff;
}
form{padding:4px;list-style:none;
	margin:0px;}
body {
	font-size:12px;
	color : #0072C6;
	font-family : tahoma, 宋体, fantasy;
	text-align : center;
	margin : 0px auto;
	background:#ededed;/*#c9defa #c9defa*/
}
html {
	overflow-x: hidden;
	overflow-y: auto;
} 
-->
</style>
<!DOCTYPE html>
<body class="body">
<form action="{:admin_url('admin/upload/picture')}" method="post" enctype="multipart/form-data" name="myform" id="myform">
<input name="sid" type="hidden" value="{:input('sid')}"/>
<input name="fileback" type="hidden" value="{:input('fileback')}"/>
<input type="file" name="imgFile" id="imgFile" class="text_style"> 
<input class="btn"  type="submit" value="上 传" class="submit"/>
</form>
</body>
</html>