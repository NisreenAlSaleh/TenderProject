<?php 

class lookup_cat_con{

public function _construct(){       
}

function  add(){ 
include "view/lookup/lookup_cat/lookup_cat_add.php";
$ename='';
$name=''; 
$var=0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(empty($_POST['name']))  {
echo'name require';
$var=1;
}
else {
$name=$_POST['name'] ;

}

if($var!=1){
include "modle/lookup_cat_model.php";
new lookup_cat_model();
lookup_cat_model::insert($name);
}
lookup_cat_con::grid_view();
}
}// end of add function

static function view(){
include "/modle/lookup_cat_model.php";
include "view/lookup/lookup_cat/lookup_cat_view.php";
new lookup_cat_model();
lookup_cat_model::select();

}

function update($parm){

include "modle/lookup_cat_model.php";

include "view/lookup/lookup_cat/lookup_cat_update.php";
if(isset($_POST['submit']))
{

$value=$_POST['sel'];

new lookup_cat_model();
lookup_cat_model::update($value,$parm);
}
lookup_cat_con::grid_view();
}

// here is the delete function 
function delete($parm){
$name=$parm;
include "modle/lookup_cat_model.php";
new lookup_cat_model();
lookup_cat_model::delete($name);
lookup_cat_con::grid_view();

}
function grid_view(){
include "view/lookup/lookup_cat/lookup_cat_grid.php";
$lookup1_grid_view= new lookup1_grid_view();
$lookup1_grid_view->generate_grid();
}      

function view2($parm){
new lookup_cat_model();
lookup_cat_model::view($parm);
}
}
?>