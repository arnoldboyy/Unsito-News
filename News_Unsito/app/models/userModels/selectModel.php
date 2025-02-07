<?php

class SelectModel extends Model {

  public function __construct(){
    parent::__construct();
  }
  
  public function select(){
    $sql= 'SELECT * FROM NOTICES ORDER BY DATE DESC';
    return $sql;
  }
  public function selectWhere($sect){
    $sql= 'SELECT * FROM NOTICES WHERE SECTION="'.$sect.'" ORDER BY DATE DESC';

    return $sql;
  }
  
  public function getData($sql){
    try{
      $data= null;
      
      if($consult= $this->db->query($sql)){
        while($row= $consult->fetch(PDO::FETCH_ASSOC)){
          $data[]= $row;
        }
      }
      return $data;
      
    }catch(PDOException $e){
      echo 'Error DB: '.$e->getMessage();
    }
  }
  
}

?>