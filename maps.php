<?php

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
      <div class="date_place_buttons">
          
          
          <div style="margin-right: auto;margin-left: 10px;">
      <a href="javascript:history.back()" style="text-decoration: none;color: orange;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg>Go Back</a>
      </div>
          
            <div class="movie-container">
      <label>Pick a room</label>
      <select name = "camera"id="movie">
        <option value="1">room 1</option>
        <option value="2">room 2</option>
        <option value="3">room 3</option>
        <option value="4">room 4</option>
      </select>
    </div>
          
          
    <div class="movie-container">      
    <div class="dropdown">
    <label>Pick a date: </label>
        <input type="date">
</div>
        </div>
          
          
          
          <div class="movie-container">      
    <div class="dropdown">
    <label>Pick a time to start work: </label>
        <input type="time">
        
</div>
              
              
              
        </div>
          
          
          <div class="movie-container">      
    <div class="dropdown">
    <label>Pick a time to finish work: </label>
        <input type="time">
        
</div>
              
              
              
        </div>
          
      
      
      
    
          
      </div>
          

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
        <div class="seat"></div>
           <hr class="solid">
        <div class="seat transparent_seat"></div>
            <hr class="solid">
        <div class="seat"></div>
            <hr class="solid">
        <div class="seat transparent_seat"></div>
             <hr class="solid">
        <div class="seat occupied"></div>
              <hr class="solid">
        <div class="seat transparent_seat"></div>
               <hr class="solid">
        <div class="seat"></div>
               <hr class="solid">
        <div class="seat transparent_seat"></div>
      </div>
        
        <hr class="solid">
        
      <div class="row">
        <div class="seat transparent_seat"></div>
           <hr class="solid">
        <div class="seat"></div>
            <hr class="solid">
        <div class="seat transparent_seat"></div>
            <hr class="solid">
        <div class="seat occupied"></div>
             <hr class="solid">
        <div class="seat transparent_seat"></div>
              <hr class="solid">
        <div class="seat"></div>
               <hr class="solid">
        <div class="seat transparent_seat"></div>
               <hr class="solid">
        <div class="seat"></div>
      </div>
        
        <hr class="solid">
        
      <div class="row">
        <div class="seat"></div>
           <hr class="solid">
        <div class="seat transparent_seat"></div>
            <hr class="solid">
        <div class="seat"></div>
            <hr class="solid">
        <div class="seat transparent_seat"></div>
             <hr class="solid">
        <div class="seat occupied"></div>
              <hr class="solid">
        <div class="seat transparent_seat"></div>
               <hr class="solid">
        <div class="seat"></div>
               <hr class="solid">
        <div class="seat transparent_seat"></div>
      </div>
        
        <hr class="solid">
        
     <div class="row">
        <div class="seat transparent_seat"></div>
           <hr class="solid">
        <div class="seat"></div>
            <hr class="solid">
        <div class="seat transparent_seat"></div>
            <hr class="solid">
        <div class="seat occupied"></div>
             <hr class="solid">
        <div class="seat transparent_seat"></div>
              <hr class="solid">
        <div class="seat"></div>
               <hr class="solid">
        <div class="seat transparent_seat"></div>
               <hr class="solid">
        <div class="seat"></div>
      </div>
        
        
        
    </div>

    <p class="text">
      You have selected <span id="count">0</span> seats for work<span
</span>
        <button style="width: 120px;  margin-left: 40px;" type="submit">Continue</button>
    </p>

    <script src="script.js"></script>
  </body>
</html>