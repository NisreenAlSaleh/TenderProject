<?php 

class lookup_area_con{

public function _construct(){       
}

function  add(){ 
include "view/lookup/lookup_area/lookup_area_add.php";
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
include "modle/lookup_area_model.php";
new lookup_area_model();
lookup_area_model::insert($name);
}
lookup_area_con::grid_view();
}
}// end of add function

static function view(){
include "/modle/lookup_area_model.php";
include "view/lookup/lookup_area/lookup_area_view.php";
new lookup_area_model();
lookup_area_model::select();

}

function update($parm){

include "modle/lookup_area_model.php";

include "view/lookup/lookup_area/lookup_area_update.php";
if(isset($_POST['submit']))
{

$value=$_POST['sel'];

new lookup_area_model();
lookup_area_model::update($value,$parm);
}
lookup_area_con::grid_view();
}

// here is the delete function 
function delete($parm){
$name=$parm;
include "modle/lookup_area_model.php";
new lookup_area_model();
lookup_area_model::delete($name);
lookup_area_con::grid_view();

}
function grid_view(){
include "view/lookup/lookup_area/lookup_area_grid.php";
$lookup1_grid_view= new lookup1_grid_view();
$lookup1_grid_view->generate_grid();
}      

function view2($parm){
new lookup_area_model();
lookup_area_model::view($parm);
}
}
?>