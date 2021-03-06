<?php

class View {
  
  public static function make($view, $data = []){

    // convert the $data array to variables
    extract($data);

    if($view[0] == '/'){
      // do nothing
    } else {
      $view = '/'.$view;
    }

    // check for any errors
    if(count($GLOBALS['errors']) == 0){
      require_once __DIR__.'/../resources/views'.$view.'.php';
    }
  }

  public static function render($view, $data = array()){
    View::make($view, $data);
  }
  
}