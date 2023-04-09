<html>
    <head>
        <title> Hoospital Sponsored By Daud and Hanzla </title>
        <link rel="stylesheet"  href="/css/style.css">>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
    </head>
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
    <h1 ><center>ADD DOCTOR</center></h1>
    <body>
      <div class="container">
      
      <form    action="/view" method="post" class="cmxform" id="signupForm" >
@csrf 
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="text" name="id" id="form3Example1" class="form-control" required/>
                <label class="form-label" for="form3Example1">id</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form3Example2" name="name" class="form-control" required/>
                <label class="form-label" for="form3Example2">name</label>
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="text" name="department" id="form3Example1" class="form-control" required/>
                <label class="form-label" for="form3Example1">department</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form3Example2" name="duty" class="form-control"required />
                <label class="form-label" for="form3Example2">duty</label>
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="time" name="startTime" id="form3Example1" class="form-control" required/>
                <label class="form-label" for="form3Example1">Start Time</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="time" id="form3Example2" name="endTime" class="form-control"required />
                <label class="form-label" for="form3Example2">end time</label>
              </div>
            </div>
          </div>
          <div class="col">
              <div class="form-outline">
                <input type="text" id="form3Example2" name="status" class="form-control"required />
                <label class="form-label" for="form3Example2">status</label>
                
              </div>
              
            </div>
            
        
         
        
          <!-- Checkbox -->
          
        
          <!-- Submit button -->
          <a href="{{ url('/index' ) }}" class="btn btn-xs btn-info pull-right">back</a>
          <button type="submit" class="btn btn-primary btn-block mb-4 ">ADD</button>
           
        
         
          </div>
          
        </form>
   
      </div>
        <div class="container mt-3">
            <h2>DOCTORS</h2>
              
            <table class="table">
              <thead>
                <tr>
                  <th>id</th>
                  <th>name</th>
                  <th>deartment</th>
                  <th>duty</th>
                  <th>start time</th>
                  <th>end time</th>
                  <th>status</th>
                  <th>update</th>
                  <th>delete</th>

                </tr>
              </thead>
              <tbody>
              <?php 
           // echo $fishData;
			 foreach ($data as $fData) { 

                print "<tr>";
                    print "<td>" .$fData->id. "</td>";
                    print "<td>" .$fData->name. "</td>";
                    print "<td>" .$fData->department. "</td>";
                    print "<td>" .$fData->duty. "</td>";
                    print "<td>" .$fData->startTime. "</td>";
                    print "<td>" .$fData->endTime. "</td>";
                    print "<td>" .$fData->status. "</td>";
                    print '<td><button  class="btn btn-danger btn-sm" onclick="myFunction('.$fData->id.')">delete</button> </td>';
                    print '<td><a href="/edit?id='.$fData->id.'"><button class="btn btn-success btn-sm">edit</button></a> </td>';
                 
                print "</tr>";
            }
			?>
                
              </tbody>
            </table>
          </div>
          <section id="footer">
  <img src="images/wave2.png" class="footer-img">
  <div class="container">
    <div class="row">
      <div class="col-md-4 footer-box">
        <img src="images/06bc8952bef585843cc8c03d367ebd57.jpg" style="width: 120px; margin-bottom:20px;">
        <p> So visit us and don't compromize on your health <br>
        or make an appointment in best of the time through our online appointment section</p>
      </div>
      <div class="col-md-4 footer-box" style="margin-top: 40px;">
        <p><b>Contact US</b></p>
        <P><i class="fa fa-map-marker"></i> Comsats University Islamabad</P>
        <P><i class="fa fa-map-marker" ></i>+92-4567897655443</P>
        <P><i class="fa fa-map-marker"></i>daud.pvt , hanzla_on_insta</P>

      </div>
      <div class="col-md-4 footer-box" style="margin-top: 40px;">
        <p><b>Make An Appointment</b></p>
        <input type="email" class="form-control" placeholder="Your Email">
        <button type="button" class="btn btn-primary"> Appointment</button>
        

      </div>
    </div>
  </div>

</section>

          <script>
		
    function myFunction(id)
    {
       var r = confirm("Are you sure you want to delete this record?");
             alert(id);
       if(r == true)
       {
                  alert("run");
                  //let url = "{{ route('delete', 'id=:id') }}";
                  //url = url.replace(':id', id);
                  //document.location.href=url;

                  //let url = "{{ route('delete', 'id=:id') }}";
                  //url = url.replace(':id', id);
                  //window.location.assign(url);

                  window.location.assign("delete?id=" + id);

                  alert(url);
       }
    } 
    
  </script> 
    </body>          