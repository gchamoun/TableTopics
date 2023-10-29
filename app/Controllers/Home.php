<?php

namespace App\Controllers;

use App\Controllers\Admin\Config as AdminConfig;

class Home extends BaseController
{
    public function index()
    {
        $table = $_GET['table'];
        $store = $_GET['store'];

        // Autoload Composer's autoloader
        $config['composer_autoload'] = FCPATH.'vendor/autoload.php';

        $header = view('header', [], ['saveData' => true]); // Load the 'header' view
        $navbar = view('navbar', [], ['saveData' => true]); // Load the 'header' view
        $content = view('home',['table' => $table, 'store' => $store]);
        $footer = view('footer'); // Load the 'home' view

        $output = $header . $navbar . $content . $footer;

        return $output;
    }

public function myForm()
    {
        return view('myForm');
    }

public function submit()
    {
        // $initalForm = new initalForm();
        // $data = [
        //     'intention' -> $this->request->getPost('intention'),
        //     'spot_eta' -> $this->request->getPost('spot_eta')

        // ];
        $table = $_POST['table'];
        $store = $_POST['store'];
        $intention = $_POST['intention'];
        $store_eta = $_POST['store_eta'];

        // $initalForm->save($data);

    return redirect()->to('prompt?table=' . $table . '&store='.  $store . '&intention='.  $intention. '&store_eta='.  $store_eta);

        // $request = service('request');

        // echo $request->getpost('intention');
        // echo $request->getpost('spot_eta');


    }

}
