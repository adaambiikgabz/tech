<!DOCTYPE html>
<html lang="en-us">

<head>
  <meta charset="utf-8">
  <title>Cropvarieties</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** CSS Plugins Needed for the Project ** -->

  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!--Favicon-->
  <link rel="icon" href="images/favicon.png" type="image/x-icon">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
  <!-- Main Stylesheet -->
  <link href="assets/style.css" rel="stylesheet" media="screen" />
</head>

   

<body>
  <!-- header -->
  <header class="shadow-bottom sticky-top bg-white">
  <nav class="navbar navbar-expand-md navbar-dark">
  <a class="navbar-brand" href="/">
    <img src="images/csirlogo.png" alt="CSIR Logo" style="width: 120px; height: auto;">
  </a>
      
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navigation">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link text-dark" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="/faq">Faq</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="/contact">contact</a>
            </li>
         
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- /header -->

  
          <div class="p-lg-5 p-4 bg-white">




          <h2 class="mb-5">Crop Varieties</h2>
           <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

<script>

$(document).ready( function () {
    $('#example').DataTable();
} );

</script>

   


         <table id="example" class="display" style="width:100%">
          
    <thead>
        <tr>
            <th>Technology</th>
            <th>Categories</th>
            <th>Year</th>
            <th>Attributes</th>
            <th>Seedcolor</th>
            <th>Maturity_in_days</th>
            <th>Potential_yield</th>
            <th>Applicability</th>
            <!--<th>Benefits</th>-->
            <!--<th>Contact</th>
            <th>Telephone</th>-->
            <!--<th>Email</th>
            <th>WebsiteFax</th>-->
            <!-- Add other relevant table headers -->
        </tr>
    </thead>
    <tbody>
        <?php foreach ($cropdatas as $cropdata) : ?>
            <tr>
                <td><?php echo $cropdata->Technology; ?></td>
                <td><?php echo $cropdata->Categories; ?></td>
                <td><?php echo $cropdata->Year; ?></td>
                <td><?php echo $cropdata->Attributes; ?></td>
                <td><?php echo $cropdata->Seedcolour; ?></td>
                <td><?php echo $cropdata->Maturity_in_days; ?></td>
                <td><?php echo $cropdata->Potential_yield; ?></td>
                <td><?php echo $cropdata->Applicability; ?></td>
                
               
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>
          <link rel="stylesheet" href="<?= base_url('assets/styles.css') ?>">

     


  <!-- footer -->
  <footer class="section pb-4">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-8 text-md-left text-center">
          <p class="mb-md-0 mb-4"><a
              href=""></a></p>
        </div>
        <div class="col-md-4 text-md-right text-center">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="text-color d-inline-block p-2" href="http://facebook.com/insti.csir100"><i
                  class="ti-facebook"></i></a></li>
            <li class="list-inline-item"><a class="text-color d-inline-block p-2" href="https://twitter.com/csir_insti100"><i
                  class="ti-twitter-alt"></i></a></li>
            <li class="list-inline-item"><a class="text-color d-inline-block p-2" href="https://www.instagram.com/insti_csir/"><i class="ti-instagram"></i></a>
            </li>
           
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- /footer -->



</html>
