<!DOCTYPE html >

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>tender project</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="cssFinal.css" rel="stylesheet" type="text/css" media="all" />

<style>
#all {
	width: 1200px;
	height:1000px;
	margin: 10px auto 10px;
	padding: 0px 0px 0px 0px;
	background: #C2D6D6;
	box-shadow: 0px 0px 5px 5px rgba(0,0,0,.2);
}
#menu2{
height:50px;
 width:50px;
 padding-top:10px;
}
#form{

}


</style>

</head>
<body>
<div id="all">
<div id="header">
   <?php
   include'headerFinal.php';
   ?>
   </div>
    
   <div id="menu1">
   <?php
   include'menuFinal.php';
   ?>
   </div>
   <center>
   <div id="form">
   <?php
   include'D:\wamp\www\tender_project\view\tender_controler.php';
   new tender_controler();
   tender_controler::create();
   ?>
   </center></div>
</div>

<div id="footer">
	 <?php
   include'footerFinal.php';
   ?>
	 </div>


</body>
</html>
