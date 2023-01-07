<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
       
        $data = array();
        
        return view('templates/header') 
                . view('welcome_message') 
                . view('templates/footer');
    }
    
    public function view($page = 'home')
    {
        
        $data = array();
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
    
}
