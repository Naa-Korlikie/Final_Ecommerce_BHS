<?php
//connect to database class
include("../settings/dbclass.php");

class program_class extends db_connection
{
    

    // add product
    public function add_program_cls($program_title, $program_desc, $program_date)
    {
        $query = "INSERT INTO programs (program_title, program_description, program_date)
          values('$program_title','$program_desc','$program_date')";

        return $this->db_query($query);
    }

   

    //edit program
public function edit_program_cls($programID, $program_title, $program_desc, $program_date)
    {
        $query = "UPDATE programs set `program_title`='$program_title',
        `program_description`='$program_desc',`program_date`='$program_date' 
        where program_id=$programID";
        return $this->db_query($query);
    }



    //delete product
    public function delete_program_cls($programID)
    {
        $query = "delete from programs where program_id=$programID";
        return $this->db_query($query);
    }
  
    // select all programss
    public function select_all_program_cls()
    {
        $query = "SELECT * FROM programs ";
        return $this->db_fetch_all($query);
    }

    //select one product
    public function select_one_program_cls($programID)
    {
        $sql = "SELECT * FROM `programs` WHERE program_id=$programID";
        return $this->db_fetch_one($sql);
    }

    //search product
    public function search_program_cls($find)
    {
        $sql = "select * from programs where programtitle like '%$find%'";
        return $this->db_fetch_all($sql);
    }

    // select all products
    public function count_program_cls()
    {
        $query = "SELECT count(*) FROM programs; ";
        return $this->db_query($query);
    }
}
