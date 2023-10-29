<?php

namespace App\Models;

use CodeIgniter\Model;

class PromptModel extends Model
{
    protected $table = 'answers'; // Set the name of your table
  
    protected $allowedFields = ['Store_Id','Times_Id','Prompts_Id','Intentions_Id','Table_Number','Answer']; // Define the fields that are allowed to be modified


	function saverecords($data)
	{
        $this->insert($data);
        return $this->insertID(); // Optional, returns the last inserted ID
	}


}
