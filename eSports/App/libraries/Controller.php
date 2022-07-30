<?php
/* 
    * This will be extended by controllers
    * It loads both the models and views 
    * This is just a class. All views will be rendered in Controllers by Pages.php
*/

class Controller 
{
    //Load model
    public function model($model)
    {
        //Require model file
        require_once '../App/Models/' . $model . '.php';

        //Instantiate the model
        return new $model();
    }

    //Load View

    public function view($view, $data = [])
    {
        if(file_exists('../App/Views/' . $view . '.php'))
        {
            require_once '../App/Views/' . $view . '.php';
        } 
        
        else
        {
            // View Does not exist
            die('<h1/> This page does not Exist!');
        }
    }
}