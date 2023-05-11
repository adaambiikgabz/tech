<?php namespace App\Controllers;



use App\Models\UserModel;

class Users extends BaseController
{

    public function index()
    {
        $data = [];
        helper(['form']);
        $model = new UserModel();
        $data['users'] = $model->findAll();
        echo view('templates/header', $data);
        echo view('home', $data);
        echo view('templates/footer', $data);
    }
    


    public function dashboard()


    {
        $data = [];
        helper(['form']);

        

        
        echo view('templates/header', $data);
        echo view('dashboard', $data);
        echo view('templates/footer', $data);
    }

    public function cropvarieties()


    {
        $data = [];
        helper(['form']);

        

        
        echo view('templates/header', $data);
        echo view('cropvarieties', $data);
        echo view('templates/footer', $data);
    }

    
    public function agroinput()


    {
        $data = [];
        helper(['form']);

        

        
        echo view('templates/header', $data);
        echo view('agroinput', $data);
        echo view('templates/footer', $data);
    }

    public function processedfoods()


    {
        $data = [];
        helper(['form']);

        

        
        echo view('templates/header', $data);
        echo view('processedfoods', $data);
        echo view('templates/footer', $data);
    }

    public function marketabletechnologies()


    {
        $data = [];
        helper(['form']);

        

        
        echo view('templates/header', $data);
        echo view('marketabletechnologies', $data);
        echo view('templates/footer', $data);
    }


    public function othertechnologies()


    {
        $data = [];
        helper(['form']);

        

        
        echo view('templates/header', $data);
        echo view('othertechnologies', $data);
        echo view('templates/footer', $data);
    }

    public function search()


    {
        $data = [];
        helper(['form']);

        

        
        echo view('templates/header', $data);
        echo view('search', $data);
        echo view('templates/footer', $data);
    }



    public function login()
    {
        $data = [];
        helper(['form']);
    
        if ($this->request->getMethod() == 'post') {
            //let's do the validation here
            $rules = [
                'email' => 'required|min_length[6]max_length[50]|valid_email',
                'password' => 'required|min_length[8]max_length[255]|validateUser[email,password]', 
            ];
                     
            $errors = [
                'password' => [
                    'validateUser' => 'Email or Password don\'t match' 
                ]
            ];
            
            if(! $this->validate($rules, $errors)){
                $data['validation']= $this->validator;
            } else {
                $model = new UserModel();
    
                $user= $model->where('email', $this->getvar('email'))
                             ->first();    
                             
                             
                $this->setUserSession($user);
    
                $session = session();
                $session->setFlashdata('success','Successful Registration');
                return redirect()->to('/dashboard');
            }
        }
    
        echo view('templates/header', $data);
        echo view('login', $data);
        echo view('templates/footer', $data);
    }
        
    private function setUserSession($user) {
        $data = [
            'id'=> $user['id'],
            'username'=> $user['username'],
            'fullname'=> $user['fullname'],
            'email'=> $user['email'],
            'isLoggedIn'=> true,
        ];
        session()->set($data);
        return true;
    }
    
        
  
    public function register(){


        $data = [];
        helper(['form']);
        
        if ($this->request->getMethod() == 'post') {
         
        //let's do the validation here
        $rules = [
        'username' => 'required',
        'fullname' => 'required',
        'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',

        'password' => 'required|',
        'password_confirm' => 'matches[password]',
        ];
        
        if(! $this->validate($rules)){
        $data['validation']= $this->validator;

        $model = new UserModel();
$newData = [
    'username' => $this->request->getVar('username'),
    'fullname' => $this->request->getVar('fullname'),
    'email' => $this->request->getVar('email'),
    'password' => $this->request->getVar('password'),
];
$model->insert($newData);

        } else{
        $model = new UserModel();
        $newData = [
        'username' => $this->request->getVar('username'),
        'fullname' => $this->request->getVar('fullname'),
        'email' => $this->request->getVar('email'),
        'password' => $this->request->getVar('password'),
        ];
        $model->save($newData);
        $session = session();
        $session->setFlashdata('sucess','sucessful Registration');
        return redirect()->to('/login');
        
        }
        
        }
        
        
        echo view('templates/header', $data);
        echo view('register', $data);
        echo view('templates/footer', $data);
        }
    
    
     

 



    }

