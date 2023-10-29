<?php

namespace App\Controllers;
use App\Models\PromptModel; // Adjust the namespace as needed


class Prompt extends BaseController
{
    public function __construct()
    {
        $this->PromptModel= new PromptModel();
    }



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

        $data['Store_Id'] = $_POST['store'];
        $data['Times_Id'] = $_POST['store_eta'];
        $data['Prompts_Id'] = $_POST['prompt'];
        $data['Intentions_Id'] = $_POST['intention'];
        $data['Table_Number'] = $_POST['table'];
        $data['Answer'] = $_POST['answer'];
        $response=$this->PromptModel->saverecords($data);



        // $initalForm->save($data);
        return redirect()->to('answers');

        // $request = service('request');

        // echo $request->getpost('intention');
        // echo $request->getpost('spot_eta');


    }


}
?>