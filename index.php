
<link href="theams/css/style.css" rel="stylesheet" type="text/css"/>

<?php define('URL', dirname(__FILE__) );

define(  'PATH', $_SERVER['REQUEST_URI']);

?>
 <div id="all">
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