<?php
/* 
    This will focus on all URLS
     * Creates URL
     * Loads Core Controller
     * URL Format = /controller/method/parameters
*/ 

class Core 
{
    protected $currentController = 'Pages';     //Default Controller
    protected $currentMethod = 'Index';
    protected $params = [];

    public function __construct()
    {
        // print_r($this->getUrl()); 
        $url = $this->getUrl();
        
        //Look for a first value in the controllers
        //ucwords will capitalize first letter
        if(isset($url[0]) && file_exists('../App/Controllers/' . ucwords($url[0]. '.php'))) 
        { 
           //If exists, set as controller
           $this->currentController = ucwords($url[0]);
           
           //Unset 0 Index
           unset($url[0]); 
        }
        //Require the controller 
        require_once '../App/Controllers/'. $this->currentController . '.php';

        // instantiate the controller
        $this->currentController = new $this->currentController;
/////////////////////////////////////////////////////////////////////////////////////////


        //check to seee if the method exists
        if(isset($url[1]) && method_exists($this->currentController, $url[1]))
        {
            $this->currentMethod = $url[1];

            //unset 1 index
            unset($url[1]);
        }
       
       //Get Params
       $this->params = $url ? array_values($url) : [];

       //Call a callback with array of params
       call_user_func_array([$this->currentController, $this->currentMethod], $this->params);


    }




    // This method will explode the query string and break it down into an array separated by '/'.
    public function getUrl()
    {
        if(isset($_GET['url']))
        {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
