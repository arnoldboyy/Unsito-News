<?php

class efemerides extends Controller {
  
  public function __construct(){
    parent::__construct();  
    $this->view->renderUser('efemerides/index');
  }
  
}

?>