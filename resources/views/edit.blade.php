<html>
    <head>
        <title> Hoospital Sponsored By Daud and Hanzla </title>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
    </head>
    <h1 ><center>ADD DOCTOR</center></h1>
    <body>
      <div class="container">
      
      <form    action="/update?id={{$id}}" method="post" class="cmxform" id="signupForm" >
@csrf 
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row mb-4">
           
          
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
          <button type="submit" class="btn btn-primary btn-block mb-4 ">update</button>
        
         
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
                  
                 
                print "</tr>";
            }
			?>
                
              </tbody>
            </table>
          </div>
          
		
    
    </body>          