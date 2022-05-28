<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
     <link rel="stylesheet" href="font-awesome/css/all.min.css">
     <style>
        .header a {color: #171717 !important;}
        .header-right a:hover{ background-color: #0075c9 !important;}
    </style>
</head>
<body>
     
<?php include_once("header.php"); ?>  

<!-- Container (About Section) -->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Tired of not having your <span style="color:#0075c9">desk</span> at work? <br> We are here for <span style="color:#0075c9">you.</span></h2>
      <h3>
            We are tired of this problem. That's why our <br> 
            team made this system. Now you can reserve <br> 
            your desk from home, go to work and everything <br> 
            is set-up for you. We try to give our customers the <br>
            <span style="font-size:35px; color:#0075c9">best experience possible.</span>
        </h3>      
      <button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2>
      <h4><strong>MISSION:</strong> Our mission is to satisfy our customers needs,<br>
       we listen to their words, the customer is the <span style="color:#0075c9">leader.</span></h4>      
      <p><strong>VISION:</strong> Performance. Improvement. Future.</p>
    </div>
  </div>
</div>

    
    <?php include_once("footer.php"); ?>  
    
</body>
</html>