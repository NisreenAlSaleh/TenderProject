

    <?php
class lookup1{
    
function  valide(){
    $eusername='';
 $username='';
$var=0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if(empty($_POST['username']))  {
    $eusername='Eusername requer';
$var=1;
 }
   else {
       $username=$_POST['username'] ;
       
       }
}
       
      
      


}
}



  ?>
