<?php

 include 'DBconnection.php';
class organization {
   
 
         
         
         
    var $organization_name,$address,$email,$phone,$organization_description,$password,$organization_supportin_category;
     public function __construct() {
          
        
     }
     function  insert(){
      $connect2=  new createConnection ();
  $connect2->connectToDatabase();
  
 
         echo 'hallo this is insertion';
        
     $sql3=mysqli_query($connect2->conn,"INSERT INTO org_table(org_name,address,email,phone,org_disc,org_supp_cat)VALUES ('".$_POST['organizatoin_name']."','".$_POST['org_address']."','".$_POST['org_email']."','".$_POST['org_phone']."','".$_POST['organization_discription']."','".$_POST['organization_supportin_category']."')");
if($sql3){
    echo 'insertion succses';
}

     }
<<<<<<< HEAD
 function retrive($username=''){
=======
 function view($parm){
>>>>>>> origin/master

   $connect2=  new createConnection ();
  $connect2->connectToDatabase();

<<<<<<< HEAD
     $sql = "SELECT * FROM org_table WHERE org_name='$username'";
$result = mysqli_query($connect2->conn,$sql);


if ( $result->num_rows >0)
    {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["org_id"]." </br>"."Organization Name: ".$row['org_name']."</br>"."Organization Phone :".$row['phone']."</br>"."email :".$row['email']."</br>";
           }
    }
else {
    echo "0 results";
     }
=======
     $sql = "SELECT * FROM org_table WHERE org_id='$parm'";
$query = mysqli_query($connect2->conn,$sql);
  $mydata=  mysqli_fetch_array($query);

  echo"<table>";
      echo"<tr>";
      echo"<th>"."<lable>"."org. ID"."</lable>"."</th>";
          echo"<td>".$mydata['org_id']."</td>";
           echo"</tr>";
          echo"<tr>";
            echo"<th>"."<lable>"."org. name"."</lable>"."</th>";
          echo"<td>".$mydata['org_name']."</td>";
          echo"</tr>";
          echo"<tr>";
          echo"<th>"."<lable>"." phone"."</lable>"."</th>";
          echo"<td>".$mydata['phone']."</td>";
          echo"</tr>";
          echo"<tr>";
           echo"<th>"."<lable>"."email"."</lable>"."</th>";
          echo"<td>".$mydata['email']."</td>";
          echo"</tr>";
          echo"<tr>";
           echo"<th>"."<lable>"."Address"."</lable>"."</th>";
          echo"<td>". $mydata['address']."</td>";
          echo"</tr>";
          echo"<tr>";
           echo"<th>"."<lable>"."org. discription"."</lable>"."</th>";
          echo"<td>".$mydata['org_disc']."</td>";
          echo"</tr>";
          echo"<tr>";
            echo"<th>"."<lable>"."org. supporting category"."</lable>"."</th>";
          echo"<td>".$mydata['org_supp_cat']."</td>";
           
          echo"</tr>";          
 echo"</table>"; 
>>>>>>> origin/master
     $connect2->closeConnection();
 }
 
  
 function  check_db(){
     $connect2=  new createConnection ();
  $connect2->connectToDatabase();
  $username=$_POST['organizatoin_name'];
  $email=$_POST['org_email'];
  
$q= "SELECT org_name,email FROM org_table WHERE org_name='$username' AND email='$email'";
     $sql2=mysqli_query($connect2->conn,$q);
  $result=  mysqli_fetch_array($sql2);
   
    if($result[0]&&$result[1] ){
        echo 'you are already regesterd';
        
        
    }
    else{
      
      organization:: insert();
    }
 }
<<<<<<< HEAD
 function delete($org_name){
   $connect2=  new createConnection ();
  $connect2->connectToDatabase();
 $sql1="SELECT org_name FROM org_table WHERE org_name='$org_name'";
   $select=mysqli_query($connect2->conn,$sql1);
  $result=  mysqli_fetch_array($select);
  if($result[0]){
      
  $sql="DELETE FROM org_table WHERE org_name='$org_name'";
  $delete=mysqli_query($connect2->conn,$sql);
  if($delete){
      echo $org_name.'is DELETED';
=======
 function delete($parm){
   $connect2=  new createConnection ();
  $connect2->connectToDatabase();
 $sql1="SELECT org_id FROM org_table WHERE org_id='$parm'";
   $select=mysqli_query($connect2->conn,$sql1);
  $result=  mysqli_fetch_array($select);
 
  if($result[0]){
      
  $sql="DELETE FROM org_table WHERE org_id='$parm'";
  $delete=mysqli_query($connect2->conn,$sql);
  if($delete){
      return true;
>>>>>>> origin/master
  }
  }
  else{
      echo'no organization with this name existes ';
  }
  $connect2->closeConnection();
 }
 
 
 
 
 
<<<<<<< HEAD
   function update($orgname){
=======
   function update($parm){
>>>>>>> origin/master
    $connect2=  new createConnection ();
  $connect2->connectToDatabase();
   
  $sql="SELECT org_id,org_name,phone,email,address,org_disc,org_supp_cat 
<<<<<<< HEAD
  FROM org_table WHERE org_name='$orgname'";

  $select=  mysqli_query($connect2->conn, $sql);

$res=mysqli_fetch_array($select);

$user_id=$res['org_id'];
           echo$user_id;
  if($select){
   
     ?>
      <form action="<?php echo '';?>"method="POST">
=======
  FROM org_table WHERE org_id='$parm'";
  

  $select=  mysqli_query($connect2->conn, $sql);


  if($select){
   
     ?>
      <form action="<?php echo '';?>"method="post">
>>>>>>> origin/master
        <?php  
      while($row=  mysqli_fetch_array($select)){
          
        $org_name=$row['org_name'];
        $org_phone=$row['phone'];
        $org_email=$row['email'];
        $address=$row['address'];
        $org_disc=$row['org_disc'];
         $org_id=$row['org_id'];
         $org_supp_cat=$row['org_supp_cat'];

<<<<<<< HEAD
     
          echo"<tr>";
            echo"<lable>"."organization name"."</lable>";
          echo"<input type='text' name='org_name' value=' $org_name'>";
          echo"<lable>"."org phone"."</lable>";
          echo"<input type='text' name='phone' value=' $org_phone'>";
           echo"<lable>"." email"."</lable>";
          echo"<input type='text' name='email' value=' $org_email'>";
           echo"<lable>"."address"."</lable>";
          echo"<input type='text' name='address'value=' $address'>";
           echo"<lable>"."org discription"."</lable>";
          echo"<input type='text' name='org_disc' value=' $org_disc'>";
             echo"<lable>"."org dupporting category"."</lable>";
          echo"<input type='text' name='org_supp_cat' value=' $org_supp_cat'>";
           echo"<input type='hidden' name='user_id' value=' $org_id'>";
=======
     echo"<table>";
          echo"<tr>";
            echo"<th>"."<lable>"."organization name"."</lable>"."</th>";
          echo"<td>"."<input type='text' name='org_name' value=' $org_name'>"."</td>";
           echo"</tr>";
          echo"<tr>";
          echo"<th>"."<lable>"."org phone"."</lable>"."</th>";
          echo"<td>"."<input type='text' name='phone' value=' $org_phone'>"."</td>";
           echo"</tr>";
          echo"<tr>";
           echo"<th>"."<lable>"." email"."</lable>"."</th>";
          echo"<td>"."<input type='text' name='email' value=' $org_email'>"."</td>";
           echo"</tr>";
          echo"<tr>";
           echo"<th>"."<lable>"."address"."</lable>"."</th>";
          echo"<td>"."<input type='text' name='address'value=' $address'>"."</td>";
           echo"</tr>";
          echo"<tr>";
           echo"<th>"."<lable>"."org discription"."</lable>"."</th>";
          echo"<td>"."<input type='text' name='org_disc' value=' $org_disc'>"."</td>";
           echo"</tr>";
          echo"<tr>";
             echo"<th>"."<lable>"."org dupporting category"."</lable>"."</th>"."</td>";
          echo"<td>"."<input type='text' name='org_supp_cat' value=' $org_supp_cat'>"."</td>";
        echo"</tr>";   
>>>>>>> origin/master
        
          
         
 echo"<td>" ."</td><td><input type='submit'  value='update'>". "</td>";
<<<<<<< HEAD
=======
 echo"</table>";
>>>>>>> origin/master
          echo"</form>";      
    
     
      }
  }
          
<<<<<<< HEAD
        if (isset($_POST['update'])){
            $org_name=$row['org_name'];
        $org_phone=$row['phone'];
        $org_email=$row['email'];
        $address=$row['address'];
        $org_disc=$row['org_disc'];
         $org_id=$row['org_id'];
         $org_supp_cat=$row['org_supp_cat'];

            
  

           echo 'mmmmmmmm';
           
     $sql="UPDATE user_profile SET org_name='$org_name',phone='$phone',email='$email',
      address='$address',org_disc='$org_disc',org_supp_cat='$org_supp_cat' WHERE org_id='$org_id'"; 
  
  
   echo $sql;
      $update=mysqli_query($connect2->conn,$sql);
      if($update){
          echo'table is updated';
=======
        if (isset($_POST['org_name'])){
            
            $org_name=$_POST['org_name'];
        $org_phone=$_POST['phone'];
        $org_email=$_POST['email'];
        $address=$_POST['address'];
        $org_disc=$_POST['org_disc'];
         
         $org_supp_cat=$_POST['org_supp_cat'];

          
           
     $sql="UPDATE org_table SET org_name='$org_name',phone='$org_phone',email='$org_email',
      address='$address',org_disc='$org_disc',org_supp_cat='$org_supp_cat' WHERE org_id='$parm'"; 
  

         $update=mysqli_query($connect2->conn,$sql);

      $update=mysqli_query($connect2->conn,$sql);
      if($update){
    return true;
>>>>>>> origin/master
      }
      else{
          echo'not updated';
      }
        }
        
  
  
  }
  function validate(){


$organizatoin_name=$organization_supportin_category=$email=$address=$organization_discription=$phone=$password=$rpassword="";
$ename=$ecategory=$eaddress=$eemail=$ediscription=$ephone=$epassword=$erpassword=$pass="";
$erorrs=array(
    $ename=>'organization name is required',
    $ecategory=>'category is requierd',
    $eaddress=>'address is reqiured ',
    $eemail=>'email is required',
    $ediscription=>'discription is required'
);
 $var =true;
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
 if (!empty($_POST["organizatoin_name"])) {
      $organizatoin_name = ($_POST["organizatoin_name"]);
     
     
   } else {
    
    $ename='organization name is required';
	 $var=false;
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$organizatoin_name)) {
       $ename = "Only letters and white space allowed";
     }
   }

    if (empty($_POST["organization_supportin_category"])) {
    $ecategory= "organization is required";
     $var=false;

   } else {
     $organization_supportin_category= ($_POST["organization_supportin_category"]);
     // check if e-mail address is well-formed
if (!preg_match("/^[a-zA-Z ]*$/",$organization_supportin_category)) {
       $ecategory= "Only letters and white space allowed"; }
     }

    if (empty($_POST["org_email"])) {
     $eemail = "email name is required";
	 $var=false;
   } else {
     $email= ($_POST["org_email"]);
     // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $eemail = "Invalid email format";
     }

     }
if (empty($_POST["org_address"])) {
     $eaddress = "address is required";
	 $var=false;
   } else {
     $address= ($_POST["org_address"]);
  

   }
 if (empty($_POST["organization_discription"])) {
     $ediscription = "discription is required";
	 $var=false;
   } else {
     $organization_discription = ($_POST["organization_discription"]);
     // check if e-mail address is well-formed
    if (!preg_match("/^[a-zA-Z ]*$/",$organization_discription)) {
       $ediscription= "Only letters and white space allowed"; }
   }
if (empty($_POST["org_phone"])) {
     $ephone = "phone is required";
	 $var=false;
   } else {
     $phone= ($_POST["org_phone"]);
  

   }

 

	}
        return $var;
	}
 




function valid_pass($candidate) {
    $matches=" ";
    if (!preg_match_all('$\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$', $candidate,$matches))
        return FALSE;
        return TRUE;
}
function validate_d_u(){
$var=true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if(empty($_POST['orgname']))  {
    echo'please enter an organization name ';
$var=false;
 }
   else {
      $orgname=$_POST['orgname'];
    
       }
       

    

}
return $var;
}
 }