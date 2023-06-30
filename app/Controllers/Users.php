<?php

namespace App\Controllers;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Controller;
use App\Models\SearchModel;
use App\Models\UserModel;

class Users extends BaseController
{
    protected $UserModel;
    protected $searchModel;

    public function __construct()
    {
        $this->UserModel = new UserModel();
        $this->searchModel = new SearchModel();
    }

    public function index()
    {
        $data['pageTittle'] = 'Home';

        return view('home', $data);
    }

    

    public function search()
    {
        // Retrieve search query
        $searchQuery = $this->request->getVar('query');

        // Perform search operation using the search query
        $searchResults = $this->searchModel->searchMultipleTables($searchQuery);

        // Pass search results to the view
        $data['searchResults'] = $searchResults;
         

        // Load the search view and pass the data
        return view('search', $data);
    }

    






    public function dashboard()


    {
        $data = [];
        helper(['form']);

        $url = route_to('dashboard');
    
        
        // echo view('templates/header', $data);
        return view('dashboard', ['url' => $url]);
        // echo view('dashboard', $data);
        // echo view('templates/footer', $data);
    }

    public function cropVarieties()
    {
        $data = [];
        helper(['form']);
        $model = new UserModel();
        $data['cropVarieties'] = $model->getAll();
    
        if ($this->request->getMethod() == 'post') {
            $newData = [
                'Technology' => $this->request->getVar('Technology'),
                'Categories' => $this->request->getVar('Categories'),
                'Year' => $this->request->getVar('Year'),
                'Attributes' => $this->request->getVar('Attributes'),
                'Seedcolour' => $this->request->getVar('Seedcolour'),
                'Maturity_in_days' => $this->request->getVar('Maturity_in_days'),
                'Potential_yield' => $this->request->getVar('Potential_yield'),
                'Applicability' => $this->request->getVar('Applicability'),
                'Benefits' => $this->request->getVar('Benefits'),
                'Contact' => $this->request->getVar('Contact'),
                'Telephone' => $this->request->getVar('Telephone'),
                'Email' => $this->request->getVar('Email'),
                'WebsiteFax' => $this->request->getVar('WebsiteFax'),
            ];
    
            if ($model->insertCropVariety($newData)) {
                $session = session();
                $session->setFlashdata('success', 'Crop variety added successfully.');
                return redirect()->to('/cropvarieties');
            } else {
                $data['error'] = 'Failed to add crop variety.';
            }
        }
    
        echo view('templates/header', $data);
        echo view('cropvarieties', $data);
        echo view('templates/footer', $data);
    }
    

    
    public function agroinput()
{
    $data = [];
    helper(['form']);
    $model = new UserModel();
        $data['agroInputs'] = $model->getAll();

    if ($this->request->getMethod() == 'post') {
        

        $newData = [
            'Shopname' => $this->request->getVar('Shopname'),
            'ProductSold' => $this->request->getVar('ProductSold'),
            'Phone Number' => $this->request->getVar('Phone Number'),
            'Association' => $this->request->getVar('Association'),
            'Location' => $this->request->getVar('Location'),
            'ProductCategory' => $this->request->getVar('ProductCategory'),
            'Fertilizers' => $this->request->getVar('Fertilizers'),
            'Implements' => $this->request->getVar('Implements'),
        ];

        if ($model->insertAgroInputs($newData)) {
            $session = session();
            $session->setFlashdata('success', 'Agro Input added successfully.');
            return redirect()->to('/agroinputs');
        } else {
            $data['error'] = 'Failed to add crop variety.';
        }
    }

     echo view('templates/header', $data);
    echo view('agroinputs', $data);
    echo view('templates/footer', $data);
}


    public function processedfoods()


    {
        $data = [];
        helper(['form']);

        $model = new UserModel();
        $data['processedFoods'] = $model->getAll();
    
        if ($this->request->getMethod() == 'post') {
            $newData = [
                'Technology' => $this->request->getVar('Technology'),
                'Year' => $this->request->getVar('Year'),
                'Attributes' => $this->request->getVar('Attributes'),
                'Applicability' => $this->request->getVar('Applicability'),
                'Benefits' => $this->request->getVar('Benefits'),
                'Contact' => $this->request->getVar('Contact'),
                'Telephone' => $this->request->getVar('Telephone'),
                'Email' => $this->request->getVar('Email'),
                'Website' => $this->request->getVar('Website'),
            ];
    
            if ($model->insertProcessedFoods($newData)) {
                $session = session();
                $session->setFlashdata('success', 'Processed Foods added successfully.');
                return redirect()->to('/processedfoods');
            } else {
                $data['error'] = 'Failed to add Processed Foods.';
            }
        }

        

        
        echo view('templates/header', $data);
        echo view('processedfoods', $data);
        echo view('templates/footer', $data);
    }

    public function marketableTechnologies()


    {
        $data = [];
        helper(['form']);
        $model = new UserModel();
        $data['marketableTechnologies'] = $model->getAll();

          
        if ($this->request->getMethod() == 'post') {
            $newData = [
                'Technologies' => $this->request->getVar('Technologies'),
                
                'Year' => $this->request->getVar('Year'),
                
            ];
    
            if ($model->insertMarketableTechnologies($newData)) {
                $session = session();
                $session->setFlashdata('success', 'Other Technologies added successfully.');
                return redirect()->to('/marketabletechnologies');
            } else {
                $data['error'] = 'Failed to add Other Technologies.';
            }
        }
     
        
    
        
        echo view('templates/header', $data);
        echo view('marketabletechnologies', $data);
        echo view('templates/footer', $data);
    }

    public function about()


    {
        $data = [];
        helper(['form']);
       

          
     
     
        return view('about', $data); 
    
        
        // echo view('templates/header', $data);
        // echo view('', $data);
        // echo view('templates/footer', $data);
    }

    public function mainagroinputs()


    {
        $data = [];
        helper(['form']);
       

          
     
     
        return view('mainagroinputs', $data); 
    
        
        // echo view('templates/header', $data);
        // echo view('', $data);
        // echo view('templates/footer', $data);
    }

    public function maincropvarieties()


    {
        $data = [];
        helper(['form']);
       

          
     
     
        return view('maincropvarieties', $data); 
    
        
        // echo view('templates/header', $data);
        // echo view('', $data);
        // echo view('templates/footer', $data);
    }

      public function info()


    {
        $data = [];
        helper(['form']);
       

          
     
     
        return view('info', $data); 
    
        
        // echo view('templates/header', $data);
        // echo view('', $data);
        // echo view('templates/footer', $data);
    }

    public function mainmarketable()


    {
        $data = [];
        helper(['form']);
       

          
     
     
        return view('mainmarketable', $data); 
    
        
        // echo view('templates/header', $data);
        // echo view('', $data);
        // echo view('templates/footer', $data);
    }

    public function mainothertechnologies()


    {
        $data = [];
        helper(['form']);
       

          
     
     
        return view('mainothertechnologies', $data); 
    
        
        // echo view('templates/header', $data);
        // echo view('', $data);
        // echo view('templates/footer', $data);
    }

    public function mainprocessedfoods()


    {
        $data = [];
        helper(['form']);
       

          
     
     
        return view('mainprocessedfoods', $data); 
    
        
        // echo view('templates/header', $data);
        // echo view('', $data);
        // echo view('templates/footer', $data);
    }


    public function faq()


    {
        $data = [];
        helper(['form']);
       

          
     
     
        return view('faq', $data); 
    
        
        // echo view('templates/header', $data);
        // echo view('', $data);
        // echo view('templates/footer', $data);
    }

    public function contact()


    {
        $data = [];
        helper(['form']);
       

          
     
     
        return view('contact', $data); 
    
        
        // echo view('templates/header', $data);
        // echo view('', $data);
        // echo view('templates/footer', $data);
    }

    public function otherTechnologies()


    {
        $data = [];
        helper(['form']);

        $model = new UserModel();
        $data['otherTechnologies'] = $model->getAll();
    
        if ($this->request->getMethod() == 'post') {
            $newData = [
                'Technology' => $this->request->getVar('Technology'),
                'Year' => $this->request->getVar('Year'),
                'Attributes' => $this->request->getVar('Attributes'),
                'Applicability' => $this->request->getVar('Applicability'),
                'Uses' => $this->request->getVar('Uses'),
                'Contact' => $this->request->getVar('Contact'),
                'Telephone' => $this->request->getVar('Telephone'),
                'Email' => $this->request->getVar('Email'),
                'GPS' => $this->request->getVar('GPS'),
                'Category' => $this->request->getVar('Category'),
            ];
            
    
            if ($model->insertOtherTechnologies($newData)) {
                $session = session();
                $session->setFlashdata('success', 'Other Technologies added successfully.');
                return redirect()->to('/othertechnologies');
            } else {
                $data['error'] = 'Failed to add Other Technologies.';
            }
        }

        

        
        echo view('templates/header', $data);
        echo view('othertechnologies', $data);
        echo view('templates/footer', $data);
    }


   



    public function login()
    {
        $data = [];
        helper(['form']);
        if ($this->request->getMethod() == 'post') {
            //let's do the validation here
            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]', 
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
    
                $user= $model->where('email', $this->request->getvar('email'))
                             ->first();    
                             
                             
                $this->setUserSession($user);
    
                $session = session();
                 $session->setFlashdata('success','Successfully Logged In');
                 return redirect()->to(route_to('dashboard'));

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
    
        
  
    
     public function register()
    {
        $data = [];
        helper(['form']);
    
        $model = new UserModel();
        $data['users'] = $model->getAll();
        // print_r($data);

        //encrypt password before db insertion
        $password = $this->request->getPost('password');
    
        if ($this->request->getMethod() == 'post') {
            // Let's do the validation here
            $rules = [
                'username' => 'required',
                'fullname' => 'required',
                'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
                'password' => 'required',
                'password_confirm' => 'matches[password]',
            ];
    
            if (! $this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
              $model = new UserModel();

              $newData = [
                'username' => $this->request->getVar('username'),
                'fullname' => $this->request->getVar('fullname'),
                'email' => $this->request->getVar('email'),
                'password' => $this->request->getVar('password'),
              ];
              $model->save($newData);
              $session = session();
              $session->setFlashdata('success', 'Successful Registration');
              return redirect()->to('/login');
            }
        }
    
        echo view('templates/header', $data);
        echo view('register', $data);
        echo view('templates/footer', $data);

        
    }


   
    
    
    
    
    

    
    
}
 







    
    
     

 



    

