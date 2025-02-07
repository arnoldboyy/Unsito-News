<?php

class Social extends Controller {
  
  public function __construct(){
    parent::__construct();  
    $this->view->renderUser('social/index');
  }
  
}

?>