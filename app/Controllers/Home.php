<?php

namespace App\Controllers;

use App\Controllers\Admin\Config as AdminConfig;

class Home extends BaseController
{
    public function index()
    {
        // Autoload Composer's autoloader
        $config['composer_autoload'] = FCPATH.'vendor/autoload.php';

        $header = view('header', [], ['saveData' => true]); // Load the 'header' view
        $navbar = view('navbar', [], ['saveData' => true]); // Load the 'header' view
        $content = view('home'); // Load the 'home' view
        $footer = view('footer'); // Load the 'home' view

        $output = $header . $navbar . $content . $footer;

        return $output;
    }
}
