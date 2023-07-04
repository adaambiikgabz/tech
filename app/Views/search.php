
<!DOCTYPE html>
<html lang="en-us">
<link rel="stylesheet" href="<?= base_url('assets/styles.css') ?>">

<head>
  <meta charset="utf-8">
  <title>Results</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="<?= base_url('assets/styles.css') ?>">

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
<link rel="stylesheet" href="<?= base_url('assets/styles.css') ?>">

<body>
  <!-- header -->
  <header class="shadow-bottom sticky-top bg-white">
  <nav class="navbar navbar-expand-md navbar-dark">
  <a class="navbar-brand" href="/">
    <img src="images/csirlogo.png" alt="CSIR Logo" style="width: 120px; height: auto;">
  </a>
      <div class="container">
        <a class="navbar-brand px-2" href="index.html"></a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <link rel="stylesheet" href="<?= base_url('assets/styles.css') ?>">

        
       
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
            <li class="nav-item">
              <a class="nav-link text-dark" href="/about">Inner Page</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- /header -->

  <!-- details page -->
  <section class="single section-sm pb-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="sidebar">
            <ul class="list-styled">
              <a class="back-btn" href="/"></a>
              <li class="sidelist">
                <a href="">Technologies</a>
                <ul>
                  <li class="sidelist active">
                    <a href="/maincropvarieties">Crop Varieties</a>
                  </li>
                  <!--<li class="sidelist">
                    <a href="/mainagroinputs">Agro Inputs</a>
                  </li>-->
                  <li class="sidelist">
                    <a href="/mainmarketable">Marketable Technologies</a>
                  </li>
                  <li class="sidelist">
                    <a href="/mainprocessedfoods">Processed Foods</a>
                  </li>
                  <li class="sidelist">
                    <a href="/mainothertechnologies">Other Technologies</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="p-lg-5 p-4 bg-white">




          <h2 class="mb-5">Search Results</h2>
           <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

<script>

$(document).ready( function () {
    $('#example').DataTable();
} );

</script>

         
          <?php if (isset($searchResults) && !empty($searchResults)) : ?>

            <table id="example" class="display" style="width:100%">
      <thead>
      <tr>
        <th>Technology</th>
        <th>Year</th>
        <th>Attributes</th> 
        <th>Contact</th>
        <th>Telephone</th>
      
      </tr>
    </thead>
    <tbody>
    <?php foreach ($searchResults as $result) : ?>
  <tr>
    <td><?php echo $result->Technology; ?></td>
    <td><?php echo $result->Year; ?></td>
    <td><?php echo $result->Attributes; ?></td>
    <td><?php echo $result->Contact; ?></td>
    <td><?php echo $result->Telephone; ?></td>
   

  </tr>
<?php endforeach; ?>

    </tbody>
  </table>
<?php else : ?>
  <p>Sorry, no results found.</p>
<?php endif; ?>


    





