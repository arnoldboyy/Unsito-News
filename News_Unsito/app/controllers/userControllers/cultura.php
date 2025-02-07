<?php

class cultura extends Controller {
  
  public function __construct(){
    parent::__construct();  
    $this->view->renderUser('cultura/index');
  }
  
}

?>