<?php
session_start();
include "db_con.php";
?>
<!DOCTYPE html>
<html lang="en">
    
  <head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <title>Movie Seat Booking</title>
  </head>
  <body class="body_seat">
      <form id = "main_form" action = "booking.php" method = "post">
      <div class="date_place_buttons">
          
          
          <div style="margin-right: auto;margin-left: 10px;">
      <a href="content.php" style="text-decoration: none;color: orange;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg>Go Back</a>
      </div>
          
            <div class="movie-container">
      <label>Pick a location and a flat</label>
      <select name = "camera" id="movie" required>
        <option value="1">etaj 1</option>
        <option value="2">etaj 2</option>
        <option value="3">etaj 3</option>
        <option value="4">etaj 4</option>
      </select>
    </div>
          
          
    <div class="movie-container">      
    <div class="dropdown">
    <label>Pick a date: </label>
        <input type="date" name = "data" required>
</div>
        
        </div>
          
          
          
          <div class="movie-container">      
    <div class="dropdown">
    <label>Pick a time to start work: </label>
        <input type="time" name = "start_time" required>
        
</div>
              
              
              
        </div>
          
          
          <div class="movie-container">      
    <div class="dropdown">
    <label>Pick a time to finish work: </label>
        <input type="time" name = "finish_time" required>
    <?php
        $er = $_GET['er'];
        $st = $_GET['st'];
        $ft = $_GET['ft'];
    if ($er == 1){
        echo "<script>alert('Ora de inceput trebuie sa fie mai mica decat ora de sfarsit');</script>";
        }
    if ($er == 2){
        echo "<script>alert('Acest birou este ocupat de la  $st la $ft ');</script>";
    }
        ?>
        
</div>
              
              
              
        </div>
          
      
      
      
    
          
      </div>
      </form>    

    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>Ready for work</small>
      </li>
      <li>
        <div class="seat selectedDefault"></div>
        <small>Selected</small>
      </li>
      <li>
        <div class="seat occupied"></div>
        <small>Occupied</small>
      </li>
    </ul>

    <div class="container">
     

      <div class="row">
        <div name = "s1" class="seat"></div>
           <hr class="solid">
        <div class="seat transparent_seat"></div>
            <hr class="solid">
        <div name = "s2" class="seat"></div>
            <hr class="solid">
        <div class="seat transparent_seat"></div>
             <hr class="solid">
        <div class="seat occupied"></div>
              <hr class="solid">
        <div class="seat transparent_seat"></div>
               <hr class="solid">
        <div name = "s3" class="seat"></div>
               <hr class="solid">
        <div class="seat transparent_seat"></div>
      </div>
        
        <hr class="solid">
        
      <div class="row">
        <div class="seat transparent_seat"></div>
           <hr class="solid">
        <div name = "s4" class="seat" ></div>
            <hr class="solid">
        <div class="seat transparent_seat"></div>
            <hr class="solid">
        <div class="seat occupied"></div>
             <hr class="solid">
        <div class="seat transparent_seat"></div>
              <hr class="solid">
        <div name = "s5" class="seat"></div>
               <hr class="solid">
        <div class="seat transparent_seat"></div>
               <hr class="solid">
        <div name = "s6" class="seat"></div>
      </div>
        
        <hr class="solid">
        
      <div class="row">
        <div name = "s7" class="seat"></div>
           <hr class="solid">
        <div class="seat transparent_seat"></div>
            <hr class="solid">
        <div name = "s8" class="seat"></div>
            <hr class="solid">
        <div class="seat transparent_seat"></div>
             <hr class="solid">
        <div class="seat occupied"></div>
              <hr class="solid">
        <div class="seat transparent_seat"></div>
               <hr class="solid">
        <div name = "s9" class="seat"></div>
               <hr class="solid">
        <div class="seat transparent_seat"></div>
      </div>
        
        <hr class="solid">
        
      <div class="row">
        <div class="seat transparent_seat"></div>
           <hr class="solid">
        <div name = "s10" class="seat"></div>
            <hr class="solid">
        <div class="seat transparent_seat"></div>
            <hr class="solid">
        <div class="seat occupied"></div>
             <hr class="solid">
        <div class="seat transparent_seat"></div>
              <hr class="solid">
        <div name = "s11" class="seat"></div>
               <hr class="solid">
        <div class="seat transparent_seat"></div>
               <hr class="solid">
        <div name = "s12" class="seat"></div>
      </div>
        
        <hr class="solid">
        
      <div class="row">
        <div name = "s13" class="seat"></div>
           <hr class="solid">
        <div class="seat transparent_seat"></div>
            <hr class="solid">
        <div name = "s14" class="seat"></div>
            <hr class="solid">
        <div class="seat transparent_seat"></div>
             <hr class="solid">
        <div class="seat occupied"></div>
              <hr class="solid">
        <div class="seat transparent_seat"></div>
               <hr class="solid">
        <div name = "s15" class="seat"></div>
               <hr class="solid">
        <div class="seat transparent_seat"></div>
      </div>
        
        <hr class="solid">
        
     <div class="row">
        <div class="seat transparent_seat"></div>
           <hr class="solid">
        <div name = "s16" class="seat"></div>
            <hr class="solid">
        <div class="seat transparent_seat"></div>
            <hr class="solid">
        <div class="seat occupied"></div>
             <hr class="solid">
        <div class="seat transparent_seat"></div>
              <hr class="solid">
        <div name = "s17" class="seat"></div>
               <hr class="solid">
        <div class="seat transparent_seat"></div>
               <hr class="solid">
        <div name = "s18" class="seat"></div>
      </div>
        
        
        
    </div>

    <p class="text">
      
        <button style="width: 120px;  margin-left: 40px;"   form="main_form" type="submit">Continue</button>
    </p>

    <script src="script.js"></script>

  </body>
</html>