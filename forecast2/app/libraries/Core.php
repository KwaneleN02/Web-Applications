<?php
//What this file does.

// App Core Class
// Creates URL and loads core controller
// URL format - /controller/method.params
//This gets intialized in the index file

class Core 
{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
      // print_r($this->getUrl());
      $url = $this->getUrl();

      //Look for controlers first value
      if(file_exists('../forecast2/app/controllers/'. ucwords($url[0]). '.php'));
        {
            //If it does exist, set it as current controller
            $this->currentController = ucwords($url[0]);
            
            unset($url[0]);                 //unset zero index
        }

    //Require the controller
    require_once '../forecast2/app/controllers/'.$this->currentController . '.php';

    $this->currentController = new $this->currentController;
    
    }
 

    public function getUrl()
    {
        if(isset($_GET['url']))
        {
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);                  //Query string to an array separated by '/'
            return $url;
        }
    }

}

