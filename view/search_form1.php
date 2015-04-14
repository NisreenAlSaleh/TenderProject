
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?php

  $eusername=$etable='';
 $username=$table_name='';
$var=0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if(empty($_POST['username']))  {
    $eusername='Eusername requer';
$var=1;
 }
   else {
       $username=$_POST['username'] ;
       
       }
        if(empty($_POST['table_name']))  {
    $etable='Eusername requer';
$var=1;
 }
   else {
       $table_name=$_POST['table_name'] ;
       
       }
       //ggggggggggggggggggggg
       if($var!=1){
       
       if(preg_match('/user/',$table_name)){
    include'user.php';
    new user();
    user::retrive($username);
       }
       elseif(preg_match('/organization/', $table_name)){
           include'organization.php';
           new organization();
           organization::retrive($username);
       }
       elseif(preg_match('/tender/', $table_name)){
             include'tender.php';
             new tender();
             tender::retrive($username);
       }
       
       
       
       
       
 
       
       
              else{
           echo'table not found in database';
       }
       
       
      
      
}

}




  ?>
  </head>
  <body>
    
 <form action="<?php echo($_SERVER["PHP_SELF"]);?>"method="post">
        <table>
<tr> <td> username:</td><td> <input type="text" name="username"> </td><td>
<span class= "error">*<?php echo $eusername ; ?></span></td></tr>
<tr> <td> username:</td><td> <input type="text" name="table_name"> </td><td>
<span class= "error">*<?php echo $etable ; ?></span></td></tr>
      <tr><td> </td><td><input type="submit"  value="search"> </td> </tr>
      <tr><td> </td><td><input type="submit"  value="login"> </td> </tr>
        </table>


      </form>

  </body>
 
</html>