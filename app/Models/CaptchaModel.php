<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class CaptchaModel extends Model
{

    function insert($data)
    {
        $this->db->insert('',$data);
    }

}
?>