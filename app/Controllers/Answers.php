<?php

namespace App\Controllers;

class Answers extends BaseController
{
    public function index()
    {
        $header = view('header', [], ['saveData' => true]); // Load the 'header' view
        $navbar = view('navbar', [], ['saveData' => true]); // Load the 'navbar' view
        $content = view('answers'); // Load the 'prompt_create' view
        $footer = view('footer'); // Load the 'footer' view

        $output = $header . $navbar . $content . $footer;

        return $output;
    }


}
?>