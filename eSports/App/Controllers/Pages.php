<?php

/* 
We can extend Controllers here from Controllers.php in the Libraries Folder
    * This also gives us access to Models
    * This also gives us access to Views
    * This is also where our views get instantiated
*/


class Pages extends Controller
{
    public function __construct()
    {
       
    }


//--------------------------------------------------------------------------------------------//

//Index is the default Method that gets loaded. This will be the homepage. It brings in views
    public function Index()
    {
        //Call the databse query
        
        $data = 
        [
            'title' => 'Griz eSports',
        ]; 


        $this->view('pages/index', $data);
        
    }

    
//--------------------------------------------------------------------------------------------//


    public function About()
    {
        $data = ['title' => 'About Us']; 
        $this->view('pages/about', $data);

    }

//--------------------------------------------------------------------------------------------//

    public function Teams()
    {
        $data = ['title' => 'Teams']; 
        $this->view('pages/teams', $data);

    }
//--------------------------------------------------------------------------------------------//

    public function Blog()
    {
        $data = ['title' => 'Blog']; 
        $this->view('pages/blog', $data);

    }

}