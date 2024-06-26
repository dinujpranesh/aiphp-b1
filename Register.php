<!doctype html>
<html lang="en" lang="en" data-bs-theme="theme-switch">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!--favicons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="img/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png">
    <link rel="manifest" href="img/fav/site.webmanifest">
    <style>
       .hero-text {
      background-color: #f8f9fa;
      padding: 10px;
      text-align: center;
      margin-top: 00vh;
      margin-bottom: 05vb;
    }
    .card {
  box-sizing: border-box;
  border: 1px solid white;
  box-shadow: 12px 17px 51px rgba(0, 0, 0, 0.22);
  text-align: center;
  cursor: pointer;
  transition: all 0.5s;
  display: flex;
  align-items: center;
  justify-content: center;
  user-select: none;
  font-weight: bolder;
}


    </style>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="img/fav/favicon-32x32.png" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="p-2 text-primary-emphasis --bs-primary-text-emphasis border-primary rounded-3 nav-link active" aria-current="page" href="home.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="p-2 text-primary-emphasis --bs-primary-text-emphasis border-primary rounded-3 nav-link active" aria-current="page" href="Register.php">Register</a>
              </li>
              <li class="nav-item">
                <a class="p-2 text-primary-emphasis --bs-primary-text-emphasis border-primary rounded-3 nav-link active" aria-current="page" href="login.php">Login</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      
        <div class="card container-md text-center border-primary"  style="max-width: 400px;">
          <div class="mb-4 hero-text">
          <h2 class="mt-4 mb-4 fw-light text-success-emphasis ">Let's begin the journey!</h2>
          <div class="mt-3 mb-3">
            <form action="dbregister.php" method="POST"> 
            <div class="d-flex">
          <div class="col-md-6 mb-3">
            <input type="text" onkeyup="hideAlertBox()" class="p-1 rounded-3 form-control form-control-lg text-center fw-medium border-primary" id="firstName" name="firstName" placeholder="First Name" style="margin-right: 10px;">
          </div>
          <div class="col-md-6 mb-3">
            <input type="text" onkeyup="hideAlertBox()" class="p-1 rounded-3 form-control form-control-lg text-center fw-medium border-primary" id="lastName" name="lastName" placeholder="Last Name" style="margin-left: 02px;">
          </div>
          </div> 
          <div class="mb-3">    
            <input type="email" class="p-1 rounded-3 form-control form-control-lg text-center fw-medium border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Email Address">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="d-flex">
        <div class="col-md-6 mb-3">
            <input type="password" class="p-1 rounded-3 form-control form-control-lg text-center fw-medium border-primary" id="password" name="password" placeholder="Password" style="margin-right: 10px;">
          </div>
          <div class="col-md-6 mb-3">
            <input type="password" class="p-1 rounded-3 form-control form-control-lg text-center fw-medium border-primary" id="confirmPassword" placeholder="Confirm Password" style="margin-left: 02px;">
          </div>
          </div>
          <div class="mb-3">
            <input type="tel" class="p-1 rounded-3 form-control form-control-lg text-center fw-medium border-primary " id="phone" name="phone" placeholder="Phone">
          </div>
          <div class="mb-3">
            <input type="text" class="p-1 rounded-3 form-control form-control-lg text-center fw-medium border-primary" id="salary" name="salary" placeholder="Salary">
          </div>
          <div class="mb-3">
            <input type="date" class="p-1 rounded-3 form-control form-control-lg text-center fw-medium border-primary" id="dob" name="dateOfBirth" placeholder="Date of Birth">
          </div>

          


            
            <div class="container text-center">
              <form style="display: inline-block;">
                <!-- Other form fields -->
                
                <div class="mb-3">
                  <label>Gender</label><br>
                  <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="male" name="Gender" value="m" checked>
                    <label class="form-check-label" for="male">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="female" name="Gender" value="f">
                    <label class="form-check-label" for="female">Female</label>
                  </div>
                </div>
                
                <button type="submit" class="btn btn-outline-primary">Register</button>
              </form>
              <?php

              if(isset($_GET['error'])) {
                echo('
                   <div id="alertbox" class="alert alert-danger mt-3" role="alert">
                   User with this email already exists
               </div>'); 

               
              }
              ?>
            </div>
          </div>
          <script>
             function hideAlertBox() {
                const alertBox = document.getElementById("alertbox");
                 alertBox.style.display = "none";
             }
            </script>

            <div>
              
            </div>

            
            
            
 

        


            
    

</body>
</html>