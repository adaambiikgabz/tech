<?php

namespace App\Controllers;

class agroinput extends BaseController
{
    {
        public function index()
        {

            $data = [];


            echo view('templates/header', $data);
            echo view('marketabletechnologies');
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