<?php

class egresados  extends Controller {
  
  public function __construct(){
    parent::__construct();  
    $this->view->renderUser('egresados/index');
  }
  
}

?>