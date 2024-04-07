 <?php
  session_start();
  session_destroy();
  ?>



 <!DOCTYPE html>
 <html lang="en">

 <head>
   <title>Bootstrap Example</title>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <style>
     body {
       display: flex;
       justify-content: center;
       align-items: center;
       height: 100vh;
     }

     button {
       width: 100%;

     }
   </style>
 </head>

 <body>
   <div class="container">
     <div class="row">
       <div class="col-md-6 mt-5 mx-auto p-3 border rounded">
         <h4>Log out sucessfully</h4>
         <p>Your account has been logged out from the system</p>
         <p>Click <a href="login.php">Here</a> to come back to login page, or it will automatically navigate after <span class="text-danger">10</span> second.</p>
         <a href="index.php" class="btn btn-dark px-5">Come back to home page</a>
       </div>
     </div>
   </div>

   <script>
     let countdown = 10;
     let countdownElement = document.querySelector('.text-danger');
     let intervalId = setInterval(function() {
       countdown--;
       countdownElement.textContent = countdown;
       if (countdown <= 0) {
         clearInterval(intervalId);
         window.location.href = 'index.php';
       }
     }, 1000);
   </script>
 </body>

 </html>