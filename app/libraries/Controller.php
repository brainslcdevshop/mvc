<?php
/*
 * Base Controller
 * Load Models and Views
*/

class Controller {

  //Load model
  public function model($model) {
    require_once('../app/models/' . $model . '.php');
    return new $model();
  }
  
  //Load view
  public function view($view, $data = []) {
    if (file_exists('../app/views/' . $view . '.php')) {
      require_once('../app/views/' . $view . '.php');
    }else{
      die('View does noe exists');
    }
  }
  
}
