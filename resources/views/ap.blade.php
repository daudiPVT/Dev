<html>
    <head>
        <title> Hoospital Sponsored By Daud and Hanzla </title>
        <link rel="stylesheet" href="/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
    </head>
    <body>
    <section id="nav-bar">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

            <div class="container-fluid">
              <a class="navbar-brand" href="#"> H&D HOSPITAL </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index">HOME</a>
                  </li>
                  
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="register">Registration</a></li>
                      <li><a class="dropdown-item" href="ap">Appointment</a></li>
                      <li><a class="dropdown-item" href="find">Find Doctor</a></li>
                    
                      <li><a class="dropdown-item" href="lab">Lab Report</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="cov">Covid 19 updates</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#aboutus">ABOUT US</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#testimonials">TESTIMONIALS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#social-media">CONTACT US</a>
                  </li>
                  <?php
                   if(session()->has('id')) 
                   {
                  echo '<li class="nav-item"><a class="nav-link" href="viewappointment">VIEW Appointment</a></li>';
                  echo '<li class="nav-item"><a class="nav-link" href="view">VIEW Doctors</a></li>';
                  echo '<li class="nav-item"><a class="nav-link" href="nurse">Nurse</a></li>';
                 // 
                  
                   }

                  ?>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Login
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     
                    <li><a class="dropdown-item" href="login">Login As Patient</a></li>
                      <li><a class="dropdown-item" href="login1">Login As Doctor</a></li>
             
                
                    </ul>
                  </li>
                 
                </ul>
              
              </div>
            </div>
          </nav>
         
    </section> 
      
        <section class="h-100 bg-dark ">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                  <form class="cmxform" id="signupForm" method="post" action="/ap" autocomplete="off">
                  @csrf 
                  <div class="card card-registration my-4">
                    <div class="row g-0">
                      <div class="col-xl-6 col-sm d-none d-xl-block">
                        <img src="https://media.istockphoto.com/vectors/man-patient-resting-in-hospital-bed-vector-id1137949661?k=20&m=1137949661&s=612x612&w=0&h=zrOUO3fYTUuAPCT7E5bBcyGOoDfm5jkODpkK738W4cM= " 
                          alt="Sample photo" class="img-fluid"
                          style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                      </div>
                     
                      <div class="col-xl-6" >
                        <div class="card-body p-md-5 text-black">
                          <h3 class="mb-5 text-uppercase">Appointment FROM</h3>
          
                          <div class="row">
                            <div class="col-md-6 mb-4">
                              <div class="form-outline">
                                <input type="text"  name="firstname" id="form3Example1m" class="form-control form-control-lg" />
                                <label class="form-label" for="form3Example1m">First name</label>
                              </div>
                            </div>
                            <div class="col-md-6 mb-4">
                              <div class="form-outline">
                                <input type="text"  name="lastname" id="f1" class="form-control form-control-lg" />
                                <label class="form-label" for="form3Example1n">Last name</label>
                              </div>
                            </div>
                          </div>
          
                        
          
                          <div class="form-outline mb-4">
                            <input type="text" id="form3Example8"  name="adress"class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example8">Address</label>
                          </div>
          
                          <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
          
                            <h6 class="mb-0 me-4">VISIT FIRST TIME?: </h6>
          
                            <div class="form-check form-check-inline mb-0 me-4">
                              <input class="form-check-input" required type="radio" name="inlineRadioOptions" id="femaleGender"
                                value="option1"  required/>
                              <label class="form-check-label" for="femaleGender">YES</label>
                            </div>
          
                            <div class="form-check form-check-inline mb-0 me-4">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                                value="option2" />
                              <label class="form-check-label" for="maleGender">NO</label>
                            </div>
          
                            
                          </div>
                          <div class="form-outline mb-4">
                            <label for="daoctorname">doctor name</label>
                            <input type="text"  id="dname" name="dname" required>
                          
                           
                          </div>
          
                        
          
                          <div class="form-outline mb-4">
                            <label for="birthday">DATE:</label>
                            <input type="date" value="birthday" id="birthday" name="date" required>
                          
                           
                          </div>
                          <div class="form-outline mb-4">
                            <label for="time">Time:</label>
                            <input type="time" value="birthday" id="birthday" name="time" required>
                          
                           
                          </div>
                          <div class="form-outline mb-4">
                            <label for="daoctorname">Age</label>
                            <input type="text" value="age" id="Age" name="age" required>
                          
                           
                          </div>
                          
          
                          <div class="form-outline mb-4">
                            <input type="text" id="form3Example99" name="diagnose" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example99">Diagnose with</label>
                          </div>

                          
          
                          <div class="form-outline mb-4">
                            <input type="text" name="username" id="form3Example97" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example97">username</label>
                          </div>
                          
                          <div class="form-outline mb-4">
                            <input type="password" name="password"  id="form3Example97" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example97">password</label>
                          </div>
                          
          
          
                          <div class="d-flex justify-content-end pt-3">
                          <a href="{{ url('/index' ) }}" class="btn btn-xs btn-info pull-right">back</a>
                            <input type="submit" class="btn btn-primary btn-lg"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">
                          </div>
                          
          
                        </div>
                      </div>
                      
                    </div>
                 
                  </div>
                </form>
                </div>
              </div>
            </div>
       
 
          </section>
        
        <script>  
          
         $().ready(function(){
          
         $("#signupForm").validate({
           // in 'rules' user have to specify all the constraints for respective fields
         rules : {
         firstname : "required",
         lastname : "required",
         mothername : "required",
         fathername : "required",
         adress:"required",
         Diagnose:"required",
         
         
         
         username : {
         required : true,
         minlength : 2  //for length of lastname
         },
         cnic : {
         required : true,
         maxlength : 11,
         minlength:11,
         Number:true  //for length of lastname
         },

         password : {
         required : true,
         minlength : 5
         },
         confirm_password : {
         required : true,
         minlength : 5,
         equalTo : "#password" //for checking both passwords are same or not
         },
         email : {
         required : true,
         email : true
         },
         agree : "required"
         },

        

      
             // in 'messages' user have to specify message as per rules
         messages : {
         firstname : "Please enter your firstname",
         
         
         lastname : "Please enter your lastname",
         username :{
         required : "Please enter a username",
         minlength : "Your username must consist of at least 2 characters"
         },
         password : {
         required : "Please enter a password",
         minlength : "Your password must be consist of at least 5 characters"
         },
        
         agree : "Please accept our policy"
         }
         });
         });
          
  
          </script> 
  

    </body>
    </html>