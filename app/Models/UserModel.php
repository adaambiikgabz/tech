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

   
    


    //insert data into user table here (registration)
    public function insertdata($data)
    {
        return $this->db->table($this->table)->insert($data);
    }


// get information from User table for login process
public function getAll()
{

    $db      = \Config\Database::connect();
    $builder = $db->table('users');
    $query   = $builder->get();  // Produces: SELECT * FROM mytabl
    return $builder->get()->getResult();  // return the query result

}

//insert data into the cropvarieties table 
public function insertCropVariety($data)
{
    $db = \Config\Database::connect();
    $builder = $db->table('cropVarieties');
    return $builder->insert($data);
}

//insert data into the marketabletechnologies table 
public function insertMarketableTechnologies($data)
{
    $db = \Config\Database::connect();
    $builder = $db->table('marketableTechnologies');
    return $builder->insert($data);
}

//insert data into the othertechnologies table 
public function insertOtherTechnologies($data)
{
    $db = \Config\Database::connect();
    $builder = $db->table('otherTechnologies');
    return $builder->insert($data);
}

//insert data into the processedfoods table 
public function insertProcessedFoods($data)
{
    $db = \Config\Database::connect();
    $builder = $db->table('processedFoods');
    return $builder->insert($data);
}

//insert data into the agroinputs table 
public function insertAgroInputs($data)
{
    $db = \Config\Database::connect();
    $builder = $db->table('agroInputs');
    return $builder->insert($data);
}

//Retrive data from cropvarities table to be displayed
public function getAllCrop()
{
   $db = db_connect();
   $builder = $db->table('cropVarieties');
   $query = $builder->get();
   return $query->getResult();
   $db->close();


}

//Retrive data from processedfoods table to be displayed
public function getAllProcessed()
{
   $db = db_connect();
   $builder = $db->table('processedFoods');
   $query = $builder->get();
   return $query->getResult();
   $db->close();


}

//Retrive data from othertechnologies table to be displayed
public function getAllOther()
{
   $db = db_connect();
   $builder = $db->table('otherTechnologies');
   $query = $builder->get();
   return $query->getResult();
   $db->close();


}

//Retrive data from marketabletechnologies table to be displayed
public function getAllMarket()
{
   $db = db_connect();
   $builder = $db->table('marketableTechnologies');
   $query = $builder->get();
   return $query->getResult();
   $db->close();


}

//Retrive data from User table for login process
public function getLogin($email)
{
    $db = db_connect();
    $builder = $db->table('users');
    $query = $builder->getWhere(['email' => $email]);
    $result = $query->getRow();
    
    return $result;
}

}




