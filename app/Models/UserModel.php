<?php 
namespace App\Models;

use CodeIgniter\Model;
use Config\Database;


class UserModel extends Model{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username','fullname','email','password',];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

   
    


    protected function beforeInsert(array $data){

        $data = $this->passwordHash($data);

        return $data;
    }

     protected function beforeUpdate(array $data){

        $data = $this->passwordHash($data);
        return $data;
    }

    protected function passwordHash(array $data){
        if(isset($data['data']['password']))
    
        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);

        return $data;
    }

    public function register($username)
    {
        $builder = $db->table('users');
      

    }

       // Function used during signup/registration, as the name suggests
       public function insertdata($data)
       {
          
           if ($this->db->table('users')->insert($data))
           {
               return true;
           }
          
       }

      

      



    protected function hashPassword(array $data)
    {
        if (isset($data['password'])) {
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        }
      return $data;
    }



public function getAll()
{

    $db      = \Config\Database::connect();
    $builder = $db->table('users');
    $query   = $builder->get();  // Produces: SELECT * FROM mytabl
    return $builder->get()->getResult();  // return the query result

}

public function insertCropVariety($data)
{
    $db = \Config\Database::connect();
    $builder = $db->table('cropVarieties');
    return $builder->insert($data);
}

public function insertMarketableTechnologies($data)
{
    $db = \Config\Database::connect();
    $builder = $db->table('marketableTechnologies');
    return $builder->insert($data);
}

public function insertOtherTechnologies($data)
{
    $db = \Config\Database::connect();
    $builder = $db->table('otherTechnologies');
    return $builder->insert($data);
}

public function insertProcessedFoods($data)
{
    $db = \Config\Database::connect();
    $builder = $db->table('processedFoods');
    return $builder->insert($data);
}

public function insertAgroInputs($data)
{
    $db = \Config\Database::connect();
    $builder = $db->table('agroInputs');
    return $builder->insert($data);
}

}