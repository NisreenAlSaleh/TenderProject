
<link href="theams/css/style.css" rel="stylesheet" type="text/css"/>
<<<<<<< HEAD

=======
>>>>>>> origin/master
<?php define('URL', dirname(__FILE__) );

define(  'PATH', $_SERVER['REQUEST_URI']);

?>
<<<<<<< HEAD
 <div id="all">
     <div id="header">
                  <?php
=======
<!-- start header -->
<div id="header">
    <?php
>>>>>>> origin/master
include'general/Rout.php';
include '/general/errors.php';
include '/general/genral.php';
include '/general/system_array.php';

$genral = new Genral();
$rout = new Routing();
?>
<<<<<<< HEAD
  <?php
  include'theams/Views/header.php';
echo $genral->GenerateMenu($menu11,"menu");
 
  ?>

 <img src="theams/img/ten1.jpg" width="1200" height="300" alt="" />
     </div>

    <div class="content">
        <?php
        include '/view/login_form.php';
        ?>
         </div>
     
         <div class="leftblock">
             <div class="bodymenulink">
            <?php
           // 
         echo $genral->GenerateMenu($menu1,".bodymenulink");
         ?>
       </div>
        </div>
         <div class="rightblock">
         <?php
         include'theams/Views/right_menu.php';
         ?> 
         </div>
        
        <div id="rout">
         
         <div class="centerblock">
              <?php
         $rout->router();
         
        ?>
        
        </div>

        
         
          </div>
	 

       

       
    
 

    <div id="footer">
      <?php
       include'theams/Views/footer.php';
      ?>
    </div>
     
</div>
=======
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
    <div class="flower"><img src="theams/img/ten1.jpg" alt="" width="510" height="250" /></div>
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

>>>>>>> origin/master
