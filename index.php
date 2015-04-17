
<link href="theams/css/style.css" rel="stylesheet" type="text/css"/>
<?php define('URL', dirname(__FILE__) );

define(  'PATH', $_SERVER['REQUEST_URI']);

?>
<!-- start header -->
<div id="header">
    <?php
include'general/Rout.php';
include '/general/errors.php';
include '/general/genral.php';
include '/general/system_array.php';

$genral = new Genral();
$rout = new Routing();
?>
<?php
 include'theams/Views/header.php';
 ?>
 <div id="menu">
<ul id="main">
<?php 

echo $genral->GenerateMenu($header_menu);
?>
</ul>
</div>
	
</div>
<!-- end header -->

<div id="wrapper">
<!-- start page -->
<div id="page">
  <div id="left_menu" class="sidebar">
      <ul>
	<li>
        <h2>Modulus</h2>
	<?php 
	echo $genral->GenerateMenu($left_menu);
	?>
	</li>

        </br></br></br></br>
	<li>
	<h2></h2>
        <img src="theams/img/11.jpg" width="220px" height="285px" 
	</li>
				
				
      </ul>
  </div>
    
<!-- start content -->
    <div id="content">
  <!--  <div class="flower"><img src="theams/img/ten1.jpg" alt="" width="510" height="180" /></div>-->
	
      <?php
    $rout->router();
    ?>		
   
    </div>
<!-- end content -->

<!-- start sidebars -->
<div id="right_menu" class="sidebar">
   <ul>
	<li>			
	<div>
	<h2>log in</h2>
	<?php
      // include'View/log-in_form.php';
         ?>				
	</div>				
	</li>
        
	<li>
	<h2>Areas bidding</h2>
	<?php
        echo $genral->GenerateMenu($right_menu);
         ?> 
	</li>
				
        <li>
	<h2>Calendar</h2>
	 <?php
       include'theams/Views/calender.php';
         ?>
	</li>
				
			</ul>
		</div>
		<!-- end sidebars -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end page -->
</div>
<div id="footer">
	 <?php
       include'theams/Views/footer.php';
      ?>
</div>

