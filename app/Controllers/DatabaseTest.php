<?php
namespace App\Controllers;

class DatabaseTest extends BaseController
{
    public function index() {

$db = \Config\Database::connect();
$query   = $db->query('SELECT Store_Id, Store_Name FROM stores');
$results = $query->getResult();

foreach ($results as $row) {
    echo $row->Store_Id;
    echo $row->Store_Name;
}

echo 'Total Results: ' . count($results);


    }
}
