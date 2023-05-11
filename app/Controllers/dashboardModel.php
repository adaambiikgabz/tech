<?php

namespace App\Controllers;
use App\Models\UserModel;

class Dashboard extends BaseController
{
    {
        public function index()
        {

            $data = [];
            $users=new UserModel();
           $test = $users->getAll();
echo($test);

            echo view('templates/header', $data);
            echo view('dashboard');
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