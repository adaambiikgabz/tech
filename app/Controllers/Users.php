<?php

namespace App\Controllers;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Controller;
use App\Models\SearchModel;
use App\Models\UserModel;
use monken\TablesIgniter;
use ReCaptcha\ReCaptcha;
use Config\Services;


class Users extends BaseController
{
    protected $UserModel;
    protected $searchModel;

    public function __construct()
    {
        $this->UserModel = new UserModel();
        $this->searchModel = new SearchModel();

        
    }

    // Home page
    public function index()
    {
        $data['pageTittle'] = 'Home';

        return view('home', $data);
    }

    
     // Search functionality
    public function search()
    {
        $searchQuery = $this->request->getVar('query'); // Retrieve search query

        // Perform search operation using the search query
        $searchResults = $this->searchModel->searchMultipleTables($searchQuery);

        // Pass search results to the view
        $data['searchResults'] = $searchResults;
         

        // Load the search view and pass the data
        return view('search', $data);
    }

      // Dashboard page
    public function dashboard()
    {
        $data = [];
        helper(['form']);

        $url = route_to('dashboard');
    
        
       
        return view('dashboard', ['url' => $url]); 
    }

    // Crop varieties data input  page
    public function cropVarieties()
    {
        $data = [];
        helper(['form']);
        $model = new UserModel();
        $data['cropVarieties'] = $model->getAll();
        
        if ($this->request->getMethod() == 'post') 
        {
            // Get form input data
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
    
            if ($model->insertCropVariety($newData))
            {
                $session = session();
                $session->setFlashdata('success', 'Crop variety added successfully.');
                return redirect()->to('/cropvarieties');
            }
          else
            {
                $data['error'] = 'Failed to add crop variety.';
            }
        }
    
        echo view('templates/header', $data);
        echo view('cropvarieties', $data);
        echo view('templates/footer', $data);
    }
    

     // Agro Inputs data input page
    public function agroinput()
{
    $data = [];
    helper(['form']);
    $model = new UserModel();
        $data['agroInputs'] = $model->getAll();

    if ($this->request->getMethod() == 'post') 
    {
        
         // Get form input data
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

        if ($model->insertAgroInputs($newData)) 
        {
            $session = session();
            $session->setFlashdata('success', 'Agro Input added successfully.');
            return redirect()->to('/agroinputs');
        }
       else
        {
            $data['error'] = 'Failed to add crop variety.';
        }
    }

    echo view('templates/header', $data);
    echo view('agroinputs', $data);
    echo view('templates/footer', $data);
}

    // Processed Foods data input page
    public function processedfoods()


    {
        $data = [];
        helper(['form']);

        $model = new UserModel();
        $data['processedFoods'] = $model->getAll();
    
        if ($this->request->getMethod() == 'post') 
        {
            // Get form input data
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
    
            if ($model->insertProcessedFoods($newData)) 
            {
                $session = session();
                $session->setFlashdata('success', 'Processed Foods added successfully.');
                return redirect()->to('/processedfoods');
            } 
           else 
            {
                $data['error'] = 'Failed to add Processed Foods.';
            }
        }

        

        
        echo view('templates/header', $data);
        echo view('processedfoods', $data);
        echo view('templates/footer', $data);
    }

    // Marketable Technologies data input page
    public function marketableTechnologies()


    {
        $data = [];
        helper(['form']);
        $model = new UserModel();
        $data['marketableTechnologies'] = $model->getAll();

          
        if ($this->request->getMethod() == 'post')
         {
            // Get form input data
            $newData = [
                'Technologies' => $this->request->getVar('Technologies'),
                
                'Year' => $this->request->getVar('Year'),
                
            ];
    
            if ($model->insertMarketableTechnologies($newData))
            {
                $session = session();
                $session->setFlashdata('success', 'Other Technologies added successfully.');
                return redirect()->to('/marketabletechnologies');
            }
          else
            {
                $data['error'] = 'Failed to add Other Technologies.';
            }
        }
     
        
    
        
        echo view('templates/header', $data);
        echo view('marketabletechnologies', $data);
        echo view('templates/footer', $data);
    }

    
    // Other Technologies data input page
      public function otherTechnologies()


    {
        $data = [];
        helper(['form']);

        $model = new UserModel();
        $data['otherTechnologies'] = $model->getAll();
    
        if ($this->request->getMethod() == 'post') 
        {
            //Get form input data
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
            } 
           else
            {
                $data['error'] = 'Failed to add Other Technologies.';
            }
        }

        

        
        echo view('templates/header', $data);
        echo view('othertechnologies', $data);
        echo view('templates/footer', $data);
    }

     // AgroInputs page
    public function mainagroinputs()
    {
        $data = [];
        helper(['form']);
        return view('mainagroinputs', $data);  
       
    }

     // Crop varieties page
    public function maincropvarieties()
    {
        $data = [];
        helper(['form']);
        return view('maincropvarieties', $data);   
    }

     // Marketable Technologies  page
    public function mainmarketable()
    {
        $data = [];
        helper(['form']);
        return view('mainmarketable', $data); 
    }

     // Other Technologies page
    public function mainothertechnologies()
    {
        $data = [];
        helper(['form']);
        return view('mainothertechnologies', $data);    
    }

     // Processed Foods page
    public function mainprocessedfoods()
    {
        $data = [];
        helper(['form']);
        return view('mainprocessedfoods', $data); 
    }

    // Frequently asked questions page
    public function faq()
    {
        $data = [];
        helper(['form']);
        return view('faq', $data);  
    }

    //Contact Us page 
    public function contact()
    {
        $data = [];
        helper(['form']);
        return view('contact', $data);  
    }

// User login
public function login()
{
    $request = request();
    helper(['form', 'url']);

    if ($request->is('post')) 
    {
       
        $data = [];

        $validationRules = [
            'email' => 'required',
            'password' => 'required'
        ];


        if ($this->validate($validationRules)) {
            $email = $request->getPost('email');
            $password = $request->getPost("password");
         
            

            $user_model = new UserModel();
            $result = $user_model->getLogin($email);
           

            if ((!empty($result)) && (password_verify($password,$result->password)) ) 
            {
               
                return redirect()->to('/dashboard');
            } 
            else 
            {
               
                $session = session();
                $session->setFlashdata('p_error', 'Wrong Email or Password');
                $session->markAsFlashdata('p_error');
               

                return redirect()->back();
                
            }

        } 
        else 
        {
            $data['validation'] = $this->validator;
        }
    } 
    else 
    {
        
    echo view('templates/header');
    echo view('login');
    echo view('templates/footer');
    }

   
}
  
   
  // User registration
public function register()
{
    $data = [];
    helper(['form']);

    // Load the RecaptchaRules class
    helper('recaptcharules');

    if ($this->request->getMethod() == 'post') {
        // Define the validation rules
        $rules = [
            'username' => 'required',
            'fullname' => 'required',
            'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
            'password' => 'required',
            'password_confirm' => 'matches[password]',
            'g-recaptcha-response' => 'validateRecaptcha', // Add the custom validation rule for reCAPTCHA
        ];

        // Set the custom error messages for the reCAPTCHA validation rule
        $errors = [
            'g-recaptcha-response' => [
                'validateRecaptcha' => 'Please complete the reCAPTCHA verification.',
            ],
        ];

        if ($this->validate($rules, $errors)) {
            // Validation passed, proceed with registration logic

            // Create a new instance of the UserModel
            $model = new UserModel();

            // Prepare the data for insertion
            $newData = [
                'username' => $this->request->getVar('username'),
                'fullname' => $this->request->getVar('fullname'),
                'email' => $this->request->getVar('email'),
                'password' => $this->passwordHash($this->request->getVar('password')), // Hash the password
            ];

            // Insert the data into the database
            $model->insertdata($newData);

            $session = session();
            $session->setFlashdata('success', 'Successful Registration');
            return redirect()->to('/login');
        } else {
            $data['validation'] = $this->validator;
        }
    }

    echo view('templates/header', $data);
    echo view('register', $data);
    echo view('templates/footer', $data);
}

// Hash the password
protected function passwordHash($password)
{
    return password_hash($password, PASSWORD_DEFAULT);
}

 // Validate reCAPTCHA response
private function validateRecaptcha($response, $secretKey)
{
    $recaptcha = new ReCaptcha($secretKey);
    $result = $recaptcha->verify($response, $_SERVER['REMOTE_ADDR']);

    return [
        'success' => $result->isSuccess(),
        'error' => $result->getErrorCodes(),
    ];
}
  
//Display Cropvaritiy data from database    
public function viewcrop()
{

    $cropData = new UserModel();
    $data = [
       'page_tittle' => 'cropVarieties',
       'cropdatas' => $cropData->getAllCrop()

    ];
    return view('maincropvarieties', $data);
}

//Display Processed foods data from database 
public function viewprocessed()
{

    $processedData = new UserModel();
    $data = [
       'page_tittle' => 'processedfoods',
       'processeddatas' => $processedData->getAllProcessed()

    ];
    return view('mainprocessedfoods', $data);
}

//Display Other Technologies data from database 
public function viewother()
{

    $otherData = new UserModel();
    $data = [
       'page_tittle' => 'othertechnologies',
       'otherdatas' => $otherData->getAllOther()

    ];
    return view('mainothertechnologies', $data);
}

//Display Marketable Technologies  data from database 
public function viewmarket()
{

    $marketData = new UserModel();
    $data = [
       'page_tittle' => 'marketabletechnologies',
       'marketdatas' => $marketData->getAllMarket()

    ];
    return view('mainmarketable', $data);
}
    
}
 







    
    
     

 



    

