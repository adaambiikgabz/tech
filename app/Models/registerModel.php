<?php namespace App\Models;

use CodeIgniter\Model;

class registerModel extends Model{

protected $table  ='users';
protected $primarykey = 'id';

protected $allowedFields = ['user name','full name','email','password']; 





}