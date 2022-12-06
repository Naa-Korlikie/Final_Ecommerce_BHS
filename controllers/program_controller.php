<?php
//connect to the user account class
include("../classes/program_class.php");

//sanitize data
function cleanText($data)
{
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}


//--INSERT--//

//product
function insert_new_program_ctr($program_title, $program_desc, $program_date)
{
  $insert = new program_class;
  return $insert->add_program_cls($program_title, $program_desc, $program_date);
}

//--SELECT--//

//for program
function select_all_program_ctr()
{
  $log = new program_class;
  return $log->select_all_program_cls();
}
function select_one_program_ctr($programID)
{
  $log = new program_class;
  return $log->select_one_program_cls($programID);
}




//--UPDATE--//

//for program
function edit_program_ctr($programID, $program_title, $program_desc, $program_date)
{
  $logs= new program_class;
  return $logs->edit_program_cls($programID, $program_title, $program_desc, $program_date);
}

//--DELETE--//
// for program
function delete_program_ctr($productID)
{
  $log = new program_class;
  return $log->delete_program_cls($productID);
}

//search product
function search_program_ctr($find)
{
  $log = new program_class;
  return $log->search_program_cls($find);
}
?>