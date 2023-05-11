<?php

namespace App\Controllers;

class Processedfoods extends BaseController
{
    {
        public function index()
        {

            $data = [];


            echo view('templates/header', $data);
            echo view('processedfoods');
            echo view('templates/footer');


            
        }
    }
    
    $this->load->database();
    public function admin()
    {
        $query = $this->db->query("SELECT * FROM admin");
        $data['admin'] = $query->getResultArray();
        return view('admin', $data);
    }


}