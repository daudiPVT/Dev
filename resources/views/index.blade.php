<html>
    <head>
        <title> Hoospital Sponsored By Daud and Hanzla </title>
        <link rel="stylesheet"  href="/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
        <section id="banner">
          
            <div class="container">
             
              <Div>
              <button class="btn btn-danger btn-md" onclick='location.href="logout";' >Logout</button>
            <?php
             if(session()->has('id') )
             echo  '<h2>'.session('id').' Welcome </h2>';
             else 
             echo  '<h2>'.session('user').' Welcome </h2>';
             
            ?>
                
              
              </Div>
            <div class="row">

                <div class="col-md-12">
                <div class="centerContent"><h1 class="title">Visit E-Hospital </p></div>
                <p>We provide our customers with free treatment and provide them with the best solutions 
                    cause we care about you ......!!
                    <br>
                    So don't wait in matter of your health and visit us as soon as possible
                </p>
                <a href="#"><img src="https://media.istockphoto.com/photos/hospital-building-with-glass-wall-and-mirrored-building-picture-id1179324818?k=20&m=1179324818&s=612x612&w=0&h=CiqTHea8aDm9AFxZM2c7bjrEk2eyvisRYzi5Gd-8MR0=" class="img-fluid" alt="Responsive image"></a>
            </div>
            </div>
            
            </div>

         <img src="images/wave1.png" class="img-botom"> 
        </section>
        <section id="services">
            <div class="container">
                <div class="row" >
                    <h1  class="text-center"> OUR SERVICES </h1>
                    <div class="col-md-4">
                        <img src="images/home2.png" class="service-image">
                        <h4>Experience Staff</h4>
                        <p>We provide you with best staff <br>
                        which guide you through complete process you need to go through <br>
                        Also they make your complete care possible
                    </p>
                        

                    </div>
                    <div class="col-md-4">
                        <img src="images/images (1).png" class="service-image">
                        <h4>Experience Physicans</h4>
                        <p>We provide you with Experience physicans <br>
                          from around the world <br>
                          Which treat you with all  of their experience and love ...!
                      </p>
                          

                    </div>
                    <div class="col-md-4">
                        <img src="images/images (3).png" class="service-image">
                        <h4>Emergency</h4>
                        <p>We have best ICU services in whole of your area<br>
                        and most active reactions when need arise</p>

                    </div>
                    <div class="col-md-4">
                        <img src="images/images (2).png" class="service-image">
                        <h4>Modern Equipments</h4>
                        <p>We provide you with modern and latest machinery<br>
                        from around the world <br>
                        That would make your concerns remove
                       </p>
                        
                        

                    </div>




                </div>
            </div>

        </section>
        
<section id="aboutus">
  <div class="container">
    <h1 class="text-center"> WHY CHOOSE US ..?</h1>
    <div class="row">
      <div class="col-md-6">
        <p  class="about-title"> Why are we different..?</p>
        <ul>
          <li> Services Under One Room</li>
          <li> Critical Care And Emergency Services</li>
          <li> Latest Medical Technologies</li>
          <li> Qualified Medical Professors</li>
          
        </ul>

      </div>
      <div class="col-md-6">
              <img src="images/network.png" class="img-fluid">
      </div>
    </div>
  </div>
  <div class="col col-sm-12 col-md-6 offset-lg-3 col-lg-6">
    <h1 style="text-align:center">Our Location: </h1>
  <iframe  style="border-radius:5%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d425105.40962825646!2d72.59602546691896!3d33.653637487523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfea4aee5bdf8f%3A0xe6b55e05d462beb1!2sCOMSATS%20University%20Islamabad!5e0!3m2!1sen!2s!4v1656066622507!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>
<section id="testimonials">
  <div class="container">
    <h1 class=" text-center"> WHAT OUR CLIENT SAY ..?</h1>
    <div class="row">
      <div class="col-md-5 testimonials offset-1">
        <p>Hanzla And Daud hospital services never disappoint me i visited there whenever i feel any kind of issue... <br>
        These guys are just amazing </p>
          <img src="images/user2.jpg">
          <p class="user-details"><b>Chris Woakes</b><br>Works In US Embassy in Pakistan</p>
      </div>
      <div class="col-md-5 testimonials">
        <p>I have been interacted with this hospital for a long time now but they never disappoint me <br>
        They simply bring the best </p>
          <img src="images/user1.jpg">
          <p class="user-details"><b>Maria John</b><br>Works as a teacher in comsats</p>
      </div>
    </div>
  </div>
</section>
<section id="social-media">
  <div class="container text-center">
    <p> FIND US ON SOCIAL MEDIA</p>
    <div class=" social-icons">
      <a href="#"><img src="images/facebook-icon.png"></a>
      <a href="#"><img src="images/instagram-icon.png"></a>
      <a href="#"><img src="images/whatsapp-icon.png"></a>

    </div>

  </div>
</section>
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
</html>