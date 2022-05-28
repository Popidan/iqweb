<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <title>Movie Seat Booking</title>
  </head>
  <body class="body_seat">
      <div class="date_place_buttons">
          
          
            <div class="movie-container">
      <label>Pick a room</label>
      <select id="movie">
        <option value="10">room 1</option>
        <option value="12">room 2</option>
        <option value="8">room 3</option>
        <option value="9">room 4</option>
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
        <div class="seat selected"></div>
        <small>Selected</small>
      </li>
      <li>
        <div class="seat occupied"></div>
        <small>Occupied</small>
      </li>
    </ul>

    <div class="container">
     

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