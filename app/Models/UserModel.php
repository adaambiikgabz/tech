<?php 
namespace App\Models;

use CodeIgniter\Model;
use Config\Database;


class UserModel extends Model{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['Categories','fullname','email','password',];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

   
    


 
    public function insertdata($data)
    {
        return $this->db->table($this->table)->insert($data);
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

public function getAllCrop()
{
   $db = db_connect();
   $builder = $db->table('cropVarieties');
   $query = $builder->get();
   return $query->getResult();
   $db->close();


}

public function getAllProcessed()
{
   $db = db_connect();
   $builder = $db->table('processedFoods');
   $query = $builder->get();
   return $query->getResult();
   $db->close();


}

public function getAllOther()
{
   $db = db_connect();
   $builder = $db->table('otherTechnologies');
   $query = $builder->get();
   return $query->getResult();
   $db->close();


}

public function getAllMarket()
{
   $db = db_connect();
   $builder = $db->table('marketableTechnologies');
   $query = $builder->get();
   return $query->getResult();
   $db->close();


}

public function getLogin($email)
{
    $db = db_connect();
    $builder = $db->table('users');
    $query = $builder->getWhere(['email' => $email]);
    $result = $query->getRow();
    
    return $result;
}

}




