<head>
<link href="../css/style.css" rel="stylesheet" type="text/css"/>
<style>
    /*admin page*/
/* main styles */
body {
margin:0;
padding:0;
background:#CCE0E0;
color:#000;
font-family:tahoma,arial,sans-serif;
font-size:11px;
}
form {
margin:0;
padding:0
}
img {border:none;}
a {color:#004747;text-decoration: none}
a:hover {text-decoration: underline}
input {vertical-align:middle}
.floatleft {float:left !important}
.floatright {float:right !important}
.clear {clear:both !important}
.bold {font-weight:bold !important}
.normal {font-weight:normal !important}
.block {display:block !important}
input.text,
select,
textarea {
font-family:arial,sans-serif;
color:#004747;
font-size:12px;
vertical-align:middle;
}
input.text {
padding:1px 0 0 4px;
height:14px;
font-weight:normal;
}
/* main container */
#main {
width:992px;
margin:0 auto;
}
/* header */
#header {
position:relative;
width:992px;
height:106px;
background:#E6F0F0 no-repeat left bottom;
}
/* site logo */
a.logo {
position:absolute;
top:5px;
left:20px;
}
	
/* header tabs */
#top-navigation {
position:absolute;
top:60px;
left:20px;
margin:0;
padding:0;
list-style:none;
}
#top-navigation li {
float:left;
margin:0 3px 0 0;
height:34px;
background:#B2D1D1 repeat-x top;
}
#top-navigation li a {
float:left;
display:block;
height:20px;
line-height:19px;
color:#606060;
padding:4px 0 0 0;
}
#top-navigation li span {
float:left;
background:#B2D1D1 no-repeat left top;
}
#top-navigation li span span {
background:#B2D1D1 no-repeat right top;
padding:7px 10px 0 10px;
}
#top-navigation li.active {
padding:0;
height:34px;
background:#B2D1D1 repeat-x top;
margin-right:2px;
}
#top-navigation li.active span {
background:#B2D1D1 no-repeat left top;
height:34px;
}
#top-navigation li.active span span {
background:#B2D1D1 no-repeat right top;
height:23px;
padding:11px 10px 0 10px;
line-height:19px;
color:#606060;
}
	
/* middle */
#middle {
float:left;
width:967px;
background:#B2D1D1 repeat-y left;
padding:0 13px 0 12px;
}
/* left column */
#left-column {
float:left;
padding:1px 14px 0 12px;
width:151px;
}
/* right column */
#right-column {
float:right;
padding:0 9px 0 0;
width:133px;
}
/* center column */
#center-column {
float:left;
width:614px;
background:#B2D1D1 no-repeat left top;
min-height:584px;
padding:12px 16px 0 13px;
}	
* html #center-column {height:584px;}

/* footer */
#footer {
float:left;
width:100%;
background:#B2D1D1 no-repeat;
height:15px;
}
	
/* left column styles */
#left-column a {color:#3E3E3E;}
#left-column h3 {
font-size:11px;
margin:0;
color:#006666;
background:#B2D1D1 no-repeat left top;
height:25px;
line-height:23px;
padding:0 0 0 9px;
}
ul.nav {
margin:0 0 11px 0;
border-bottom:2px solid #006666;
background:#B2D1D1;
list-style:none;
padding:0 2px;
}
ul.nav li {
padding:4px 4px 6px 5px;
background:#B2D1D1 repeat-x bottom;
}
ul.nav a {
padding:0 0 0 12px;
background:#B2D1D1 no-repeat 0 4px;
}
ul.nav a:hover {
font-weight:bold;
}
ul.nav li.last {background:none;}

#left-column .link {
display:block;
width:142px;
height:25px;
background:#4D9494;
margin:0 0 4px 0;
font-weight:bold;
padding:0 0 0 9px;
line-height:25px;
color:#CCE0E0;
}
	
/* center column styles */
.top-bar {
float:left;
width:603px;
border-left:2px solid #006666;
padding:0 0 0 9px;
margin:0 0 4px 0;
}
/* text page header */
.top-bar h1 {
font:20px/21px verdana,sans-serif;
color:#006666;
margin:0 0 4px 0;
}
/* orange button */
.top-bar a.button {
float:right;
display:block;
width:75px;
height:35px;
text-align:center;
color:#E6F0F0;
text-transform:uppercase;
font-weight:bold;
line-height:27px;
background:#338585 no-repeat;
}
	
/* bar with select*/
.select-bar {
clear:both;
border-top:2px solid #006666;
border-bottom:2px solid #006666;
padding:5px 0 3px 0;
margin:0 0 17px 0;
}
.select-bar select {width:145px;margin:0 2px;}

/* table container */
div.table {
float:left;
position:relative;
width:614px;
margin:0 0 37px 0;
}
table.listing {
border-bottom:1px solid #9097A9;
width:613px;
padding:0;
margin:0;
border:1px solid #9097A9;
}
table.listing th {
border-top:0 !important;
}
table.listing th.full {border-left:0;border-right:0 !important;text-align:left;text-transform:uppercase;}
div.table img.left {
position:absolute;
top:0;
left:0;
}
div.table img.right {
position:absolute;
top:0;
right:1px;
}
/* table styles */
table.listing td,
table.listing th {
border:1px solid #fff;
text-align:center;
}	
table.listing th {
background:#338585;
color:#E6F0F0;
padding:5px;
}
table.listing td {
background: #B2D1D1;
color:#338585;
padding:3px 5px;
}
table.listing .bg td {
background:#E6F0F0;
}
table.listing .white td {
background:#E6F0F0;
}	
table.listing .first {border-left:0px solid #9097A9;text-align:left;}
table.listing .last {border-right:0px solid #9097A9;}

table.listing th.first {background:#66A3A3  no-repeat left top;border-left:0;}
table.listing th.last {background:#66A3A3 no-repeat right top;border-right:0;}

table.listing .style1 {font-weight:bold;color:#4D9494;}
table.listing .style2 {font-weight:bold;padding-left:16px;}
table.listing .style3 {padding-left:25px;}
table.listing .style4 {padding-left:35px;}
table.form .last {padding:1px 0 1px 5px;text-align:left;}
table.form th,
table.form td {padding-left:10px;}
table.form input.text {width:262px}

/* table select */
div.table .select {
float:right;
margin:2px 1px 0 0;
width:176px;
height:25px;
background:#66A3A3 ;
color:#006666;
}
div.table .select strong {
float:left;
padding:5px 0 0 5px;
}	
div.table .select select {
float:right;
width:78px;
margin:2px 3px 0 0;
text-align:right;	
}
	
/* right column header */
#right-column .h {
float:left;
background:#006666;
border:1px solid #006666;
border-bottom:0;
padding:3px 10px;
color:#fff;
text-transform:uppercase;
}
/* right column box */
#right-column .box {
float:left;
width:121px;
padding:5px;
border:1px solid #006666;
background:#B2D1D1;
margin:0 0 15px 0;
}
	
/* right column buttons */
.buttons {
clear:both;
text-align:center;
padding:30px 0 15px 0;
}
.buttons input {margin:0 0 6px 0;}
</style>
</head>
<div id="main">
	<div id="header">
		<a href="index.html" class="logo"><img src="img/tn.png" width="120" height="50" alt="" /></a>
		<ul id="top-navigation">
			<li class="active"><span><span>Homepage</span></span></li>
			<li><span><span><a href="#">Users</a></span></span></li>
			<li><span><span><a href="#">Orders</a></span></span></li>
			<li><span><span><a href="#">Settings</a></span></span></li>
			<li><span><span><a href="#">Statistics</a></span></span></li>
			<li><span><span><a href="#">Design</a></span></span></li>
			<li><span><span><a href="#">Contents</a></span></span></li>
		</ul>
	</div>
	<div id="middle">
		<div id="left-column">
			<h3>Header</h3>
			<ul class="nav">
				<li><a href="#">Lorem Ipsum dollar</a></li>
				<li><a href="#">Dollar</a></li>
				<li><a href="#">Lorem dollar</a></li>
				<li><a href="#">Ipsum dollar</a></li>
				<li><a href="#">Lorem Ipsum dollar</a></li>
				<li class="last"><a href="#">Dollar Lorem Ipsum</a></li>
			</ul>
			<a href="#" class="link">Link here</a>
			<a href="#" class="link">Link here</a>
		</div>
		<div id="center-column">
			<div class="top-bar">
				<a href="#" class="button">ADD NEW </a>
				<h1>Contents</h1>
				<div class="breadcrumbs"><a href="#">Homepage</a> / <a href="#">Contents</a></div>
			</div><br />
		  <div class="select-bar">
		    <label>
		    <input type="text" name="textfield" />
		    </label>
		    <label>
			<input type="submit" name="Submit" value="Search" />
			</label>
		  </div>
			<div class="table">
				<img src="img/bg-th-left.gif" width="8" height="7" alt="" class="left" />
				<img src="img/bg-th-right.gif" width="7" height="7" alt="" class="right" />
				<table class="listing" cellpadding="0" cellspacing="0">
					<tr>
						<th class="first" width="177">Header Here</th>
						<th>Header</th>
						<th>Head</th>
						<th>Header</th>
						<th>Header</th>
						<th>Head</th>
						<th>Header</th>
						<th class="last">Head</th>
					</tr>
					<tr>
						<td class="first style1">- Lorem Ipsum </td>
						<td><img src="img/add-icon.gif" width="16" height="16" alt="" /></td>
						<td><img src="img/hr.gif" width="16" height="16" alt="" /></td>
						<td><img src="img/save-icon.gif" width="16" height="16" alt="" /></td>
						<td><img src="img/edit-icon.gif" width="16" height="16" alt="" /></td>
						<td><img src="img/login-icon.gif" width="16" height="16" alt="" /></td>
						<td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
						<td class="last"><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
					</tr>
					<tr class="bg">
						<td class="first style2">- Lorem Ipsum </td>
						<td><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
						<td><img src="img/hr.gif" width="16" height="16" alt="" /></td>
						<td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
						<td><img src="img/edit-icon.gif" width="16" height="16" alt="edit" /></td>
						<td><img src="img/login-icon.gif" width="16" height="16" alt="login" /></td>
						<td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
						<td class="last"><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
					</tr>
					<tr>
						<td class="first style3">- Lorem Ipsum </td>
						<td><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
						<td><img src="img/hr.gif" width="16" height="16" alt="" /></td>
						<td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
						<td><img src="img/edit-icon.gif" width="16" height="16" alt="edit" /></td>
						<td><img src="img/login-icon.gif" width="16" height="16" alt="login" /></td>
						<td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
						<td class="last"><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
					</tr>
					<tr class="bg">
						<td class="first style1">- Lorem Ipsum </td>
						<td><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
						<td><img src="img/hr.gif" width="16" height="16" alt="" /></td>
						<td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
						<td><img src="img/edit-icon.gif" width="16" height="16" alt="edit" /></td>
						<td><img src="img/login-icon.gif" width="16" height="16" alt="login" /></td>
						<td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
						<td class="last"><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
					</tr>
					<tr>
						<td class="first style2">- Lorem Ipsum </td>
						<td><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
						<td><img src="img/hr.gif" width="16" height="16" alt="" /></td>
						<td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
						<td><img src="img/edit-icon.gif" width="16" height="16" alt="edit" /></td>
						<td><img src="img/login-icon.gif" width="16" height="16" alt="login" /></td>
						<td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
						<td class="last"><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
					</tr>
					<tr class="bg">
						<td class="first style3">- Lorem Ipsum </td>
						<td><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
						<td><img src="img/hr.gif" width="16" height="16" alt="" /></td>
						<td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
						<td><img src="img/edit-icon.gif" width="16" height="16" alt="edit" /></td>
						<td><img src="img/login-icon.gif" width="16" height="16" alt="login" /></td>
						<td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
						<td class="last"><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
					</tr>
					<tr>
						<td class="first style4">- Lorem Ipsum </td>
						<td><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
						<td><img src="img/hr.gif" width="16" height="16" alt="" /></td>
						<td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
						<td><img src="img/edit-icon.gif" width="16" height="16" alt="edit" /></td>
						<td><img src="img/login-icon.gif" width="16" height="16" alt="login" /></td>
						<td><img src="img/save-icon.gif" width="16" height="16" alt="save" /></td>
						<td class="last"><img src="img/add-icon.gif" width="16" height="16" alt="add" /></td>
					</tr>
				</table>
				<div class="select">
					<strong>Other Pages: </strong>
					<select>
						<option>1</option>
					</select>
			  </div>
			</div>
		  <div class="table">
				<img src="img/bg-th-left.gif" width="8" height="7" alt="" class="left" />
				<img src="img/bg-th-right.gif" width="7" height="7" alt="" class="right" />
				<table class="listing form" cellpadding="0" cellspacing="0">
					<tr>
						<th class="full" colspan="2">Header Here</th>
					</tr>
					<tr>
						<td class="first" width="172"><strong>Lorem Ipsum</strong></td>
						<td class="last"><input type="text" class="text" /></td>
					</tr>
					<tr class="bg">
						<td class="first"><strong>Lorem Ipsum</strong></td>
						<td class="last"><input type="text" class="text" /></td>
					</tr>
					<tr>
						<td class="first""><strong>Lorem Ipsum</strong></td>
						<td class="last"><input type="text" class="text" /></td>
					</tr>
					<tr class="bg">
						<td class="first"><strong>Lorem Ipsum</strong></td>
						<td class="last"><input type="text" class="text" /></td>
					</tr>
				</table>
	        <p>&nbsp;</p>
		  </div>
		</div>
		<div id="right-column">
			<strong class="h">INFO</strong>
			<div class="box">Detect and eliminate viruses and Trojan horses, even new and unknown ones. Detect and eliminate viruses and Trojan horses, even new and </div>
	  </div>
	</div>
	<div id="footer"></div>
</div>

