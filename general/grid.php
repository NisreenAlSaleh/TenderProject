<?php
/**
*        The DataGrid class provides an easy interface to create
*        tables using multi-dimensional arrays - most likely gathered
*        from a database.
*/
class OPCDataGrid {
private $dataSource;
private $displayFields;
private $displaySource;

public function __construct($dataSource = '') {
if($dataSource != '' && is_array($dataSource)) {
$this->source($dataSource);
}
}

public function source($array) {
$this->dataSource = $array;
$this->displaySource = array();
$this->displayFields = array();
}

public function fields($arrayFields) {
$this->displayFields = $arrayFields;
foreach($this->dataSource as $i => $row) {
foreach($arrayFields as $aField=>$aValue) {
foreach($row as $field=>$value) {
if($field == $aField) {
$tmpArray[$field] = $value;
}
}
}
if(count($tmpArray) > 0) {
$this->displaySource[] = $tmpArray;
}
}
}
public function field($arrayFields) {
$this->displayFields = $arrayFields;
foreach($this->dataSource as $i => $row) {
foreach($arrayFields as $aField=>$aValue) {
foreach($row as $field=>$value) {
if($field == $aField) {
$tmpArray[$field] = $value;
}
}
}

}
}

public function addField($fieldName,$safeName,$value,$location) {
$this->buildDisplayFields();
if(array_key_exists('after',$location)) {
$this->addFieldAfter($fieldName,$safeName,$value,$location);
$this->addDisplayField($safeName,$fieldName,$location);
}
else if(array_key_exists('before',$location)) {
$this->addFieldBefore($fieldName,$safeName,$value,$location);
$this->addDisplayField($safeName,$fieldName,$location);
}
else {
echo 'Failed, location does not exist';
}
}

private function addFieldAfter($fieldName,$safeName,$value,$location) {
$nVal='';
foreach($this->displaySource as $i => $row) {
if(array_key_exists($location['after'],$row)) {
$tmp = array();
preg_match_all('/{.*?}/',$value,$out);
foreach($row as $field=>$val) {
if($location['after'] == $field) {
$tmp[$field] = $val;
if(count($out[0]) > 0) {
if($nVal == '') $nVal = $value;
foreach($out[0] as $x => $match) {
$key = substr(substr($match,0,-1),1);
$nVal = str_replace($out[0][$x],$this->dataSource[$i][$key],$nVal);
}
}

$tmp[$safeName] = $nVal;
$nVal = '';
}
else {
$tmp[$field] = $val;
}
}
$this->displaySource[$i] = $tmp;
}
}
}

private function addFieldBefore($fieldName,$safeName,$value,$location) {
$nVal='';
foreach($this->displaySource as $i => $row) {
if(array_key_exists($location['before'],$row)) {
$tmp = array();
preg_match_all('/{.*?}/',$value,$out);
foreach($row as $field=>$val) {
if($location['before'] == $field) {
if(count($out[0]) > 0) {
if($nVal == '') $nVal = $value;
foreach($out[0] as $x => $match) {
$key = substr(substr($match,0,-1),1);
$nVal = str_replace($out[0][$x],$this->dataSource[$i][$key],$nVal);
}
}

$tmp[$safeName] = $nVal;
$nVal = '';

$tmp[$field] = $val;
}
else {
$tmp[$field] = $val;
}
}
$this->displaySource[$i] = $tmp;
}
}
}

private function addDisplayField ($safeName,$fieldName,$location) {
if(array_key_exists('after',$location)) {
$tmp = array();
foreach($this->displayFields as $safe=>$actual) {
if($safe == $location['after']) {
$tmp[$safe] = $actual;
$tmp[$safeName] = $fieldName;
}
else {
$tmp[$safe] = $actual;
}
}
$this->displayFields = $tmp;
}
else if(array_key_exists('before',$location)) {
$tmp = array();
foreach($this->displayFields as $safe=>$actual) {
if($safe == $location['before']) {
$tmp[$safeName] = $fieldName;
$tmp[$safe] = $actual;
}
else {
$tmp[$safe] = $actual;
}
}
$this->displayFields = $tmp;
}
else {
echo $location .' is not a valid location';
}
}

private function buildDisplayFields() {
if(count($this->displayFields) < 1) {
$row = $this->dataSource[0];
foreach($row as $field=>$value) {
$this->displayFields[$field] = $field;
}
$this->displaySource = $this->dataSource;
}
}

public function render1() {
echo $this->build1();
}

public function build1() {
$this->buildDisplayFields();
$tmp = '<table collapse=0 border=1>';

$tmp .= $this->createTableHeaders();
foreach($this->displaySource as $i => $row) {

$class = 'odd';
if($i%2 == 0) {
$class = 'even';
}

return $tmp;
}

}
public function render2() {
echo $this->build2();
}

public function build2() {
$this->buildDisplayFields();
$tmp = '';
$tmp .= $this->createTableHeaders();
foreach($this->displaySource as $i => $row) {
$class = 'odd';
if($i%2 == 0) {
$class = 'even';
}
$tmp .= $this->addRowToTable($row,$class);
}

return $tmp;
}

private function createTableHeaders() {
$tmp = '<tr>';
foreach($this->displayFields as $safe=>$actual) {
$tmp .= '<th>'.$actual.'</th>';
}
$tmp .= '</tr>';
return $tmp;
}

private function addRowToTable($row,$class) {
$tmp = '<tr>';
foreach($row as $field=>$val) {
$tmp .= '<td>'.$val.'</td>';
}
$tmp .= '</tr>';

return $tmp;
$tmp .= '</table>';
}
}
?>