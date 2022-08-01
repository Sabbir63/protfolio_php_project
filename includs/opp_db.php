<?php
  class DB{
    function db_connect(){
    return  $db_connect =  mysqli_connect("localhost","root","","php_formvalidation");
    }
  function all($table_name){
    $select_query = "SELECT * FROM $table_name";
    $data_from_db = mysqli_query($this->db_connect(),$select_query);
    // print_r($data_from_db);
    return $data_from_db;
  }
  function count($table){
    $count_query = "SELECT COUNT(*) as total FROM $table";
    $data_db = mysqli_fetch_assoc(mysqli_query($this->db_connect(),$count_query));

    return $data_db;
  }
  }
  $obj_database = new DB;

 ?>
