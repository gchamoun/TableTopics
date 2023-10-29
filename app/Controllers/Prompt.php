<?php

namespace App\Controllers;

class Prompt extends BaseController
{
    public function index()
    {


    	$table = $_GET['table'];
        $store = $_GET['store'];
        $intention = $_GET['intention'];
        $store_eta = $_GET['store_eta'];


        $header = view('header', [], ['saveData' => true]); // Load the 'header' view
        $navbar = view('navbar', [], ['saveData' => true]); // Load the 'navbar' view
        $content = view('prompt_create',['table' => $table, 'store' => $store,'intention' => $intention,'store_eta' => $store_eta ]); // Load the 'prompt_create' view
        $footer = view('footer'); // Load the 'footer' view

        $output = $header . $navbar . $content . $footer;

        return $output;
    }
public function submit()
    {

        // $initalForm = new initalForm();

    
        $table = $_POST['table'];
        $store = $_POST['store'];
        $intention = $_POST['intention'];
        $store_eta = $_POST['store_eta'];
        $prompt = $_POST['prompt'];
        $answer = $_POST['answer'];


        // $initalForm->save($data);
        return redirect()->to('answers');

        // $request = service('request');

        // echo $request->getpost('intention');
        // echo $request->getpost('spot_eta');


    }


}
?>