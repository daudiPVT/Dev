<html>
    <head>
        <title> Hoospital Sponsored By Daud and Hanzla </title>
        <link rel="stylesheet"  href="/css/style.css">>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
        <script src="jquery-3.6.0.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <div class="container">
      
    <form name="myform" method="post" action="abc.jsp" >  
@csrf 
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row mb-4">
            <h1>NURSE TIME TABLE</h1>
            <div class="col">
              <div class="form-outline">
                <input type="text" name="id"id="form3Example1" class="id form-control" required/>
                <label class="form-label" for="form3Example1">id</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form3Example2" name="name" class="name form-control" required/>
                <label class="form-label" for="form3Example2">name</label>
              </div>
            </div>
          </div>
         
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form3Example2" name="duty" class="duty   form-control"required />
                <label class="form-label" for="form3Example2">duty</label>
              </div>
            </div>
          
          
          <div class="col">
              <div class="form-outline">
                <input type="text" id="form3Example2" name="status" class="status form-control"required />
                <label class="form-label" for="form3Example2">status</label>
              </div>
            </div>
        
         
        
          <!-- Checkbox -->
          
        
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-4 ">ADD</button>
          <button type="button" class="btn btn-primary btn-block mb-4 add_nurse">Save</button>
        
        
         
          </div>
        </form>
   
      </div>
    

    <table class="table  table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">duty</th>
      <th scope="col">status</th>
      <th scope="col">Date</th>
     
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>
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


</body>

<script>
    $(document).ready(function(){
        fetchNurse();
        function fetchNurse(){
            var today= new Date().toLocaleDateString();
            $.ajax({
                type: "GET",
                url:"/fetch-nurse",
                dataType:"json",
                success: function (response){
                    // console.log(response.data);
                    $.each(response.data,function(key , item){
                        $('tbody').append( '<tr>\
                           <td>'+item.id+'</td>\
                           <td>'+item.name+'</td>\
                           <td>'+item.duty+'</td>\
                           <td>'+item.status+'</td>\
                           <td>'+today+'</td>\
                     </tr>');
                  
                  
                    });
                }

            });
        }
        

        $(document).on('click','.add_nurse',function(e){
            e.preventDefault();
            console.log("hello");
            var data={
                
                'id': $('.id').val(),
                'name': $('.name').val(),
                'duty': $('.duty').val(),
                'status': $('.status').val(),
               
            }
            console.log(data);
            $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
            $.ajax({
                type: "POST",
                url:"/nurses",
                data: data,
                dataType:"json",
                success: function(response){

                    console.log(response);
                    if(response.status==200){
                        fetchNurse();

                    }
                }
            })
           
        
        });
        
    

    });
    </script>

</html>