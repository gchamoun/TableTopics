<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController; 

class Prompt extends BaseController
{
    public function index()
    {
       echo '<H2>A list of prompts</H2>';     
    }


    public function createNew(){
    
            return view('prompt_form');

    }

public function savePrompt(){
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
}



}
