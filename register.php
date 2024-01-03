<?php
include "nav.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    <title>Log IN And Sign Up</title>
</head>

<style type="text/css" media="screen">
    body {
        background-color: rgba(0, 239, 127, 0.263);
    }
</style>

<body>

    <section class="h-60 gradient-form">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <img src="https://upload.wikimedia.org/wikipedia/en/0/09/Ravenshaw_University_Logo.png"
                          style="width: 185px;" alt="logo">
                          <h4 class="mt-1 mb-5 pb-1">MCA/CS Library</h4>
                        <p>Please fill your details</p>
                      </div>
      
                      <form action="registerdb.php" method="POST">
                        <div class="form-outline mb-4"> 
                            <label class="form-label" for="sname">Name</label>
                            <input type="text" class="form-control" id="sname" name="sname" placeholder="enter your name" required >
                          
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="sroll">Roll Number</label>
                            <input type="text" class="form-control" id="sroll" name="sroll" placeholder="enter your roll number" required >
                          
                        </div>

                        <div class="form-outline mb-4">
                          <label class="form-label" for="semail">Email</label>
                          <input type="email" class="form-control" id="semail" name="semail" placeholder="enter your email" required >

                        
                      </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="snum">Contact Number</label>
                            <input type="number" class="form-control" id="snum" name="snum" placeholder="enter your contact number" required >

                          
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" class="form-control" id="spass" name="spass" placeholder="enter your password" required >
                        </div>
                        <div class="text-center pt-1 mb-5 pb-1">
                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Register</button>
                            </div>
      
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2">Already have an account?</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <a class="text-muted" href="login.php">LOG IN NOW</a>
                        </div>
      
                      </form>
      
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">Some Famous Quotes On Reading</h4>
                      <p class="small mb-0">A capacity, and taste, for reading gives access to whatever has already been discovered by others. —Abraham Lincoln</p>
                     <br>
                      <p class="small mb-0">Reading is an exercise in empathy; an exercise in walking in someone else’s shoes for a while. —Malorie Blackman</p>
                      <br>
                      <p class="small mb-0">Reading is an act of civilization; it’s one of the greatest acts of civilization because it takes the free raw material of the mind and builds castles of possibilities.   —Ben Okri</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
     integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
     crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
     integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
     crossorigin="anonymous"></script> 
</body>
</html>