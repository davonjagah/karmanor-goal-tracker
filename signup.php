<?php
  include 'controller.php'; 
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>The A-Team Login Page</title>
        <!-- fontawesome! -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- bootstrap CSS !-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- style.css -->     
        <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body>
        
        <div class="container-fluid both-col-12">
            <div class="row box-row">
                <div class="col-md-6 left-side">
                    
                    <div class="left-title"><h2>KARMA</h2></div>
                    <div class="container left-side-2">
                        
                        <div class="parent">
                            <div class="row insideParent d-flex justify-content-center">
                                <div class="col-md-10 left-form">
                                    <h4>Welcome Back, Please Register
                                        <br> Your Account
                                    </h4>

                                    <form action="signup.php" Method="POST">
                                        <div class="row mt-5">
                                            <div class="col">
                                                <input type="text" class="form-control input-field" name="firstname" placeholder="First name" required>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control input-field" name="lastname" placeholder="Last name" required>
                                            </div>
                                        </div>
                                        <div class="form-group mt-4">
                                            <?php
                                              if(isset($_POST['submit'])){
                                                    $firstname=$_POST['firstname'];
                                                    $lastname=$_POST['lastname'];
                                                    $name=$firstname.' '.$lastname;
                                                    $email=$_POST['email'];
                                                    $password=$_POST['password'];

                                                    $goaltasker = new goaltracker;
                                                    $goaltasker->signup($name, $email, $password);
                                                      }                                        
      
                                                ?>
                                            <input type="email" class="form-control input-field" id="email" name="email" placeholder="Enter Email Address" required>
                                        </div>
                                        <div class="form-group mt-4 input-group" id="show_hide_password">
                                            <input type="password" class="form-control input-field" id="pwd" name="password" data-toggle="password"  placeholder="Enter Password" required>
                                            <div class="input-group-addon">
                                                <span class="input-group-text eye-btn">
                                                    <i class="fa fa-eye"></i>
                                                </span>

                                            </div>
                                        </div>
                                        <div class="container mt-4">
                                            <div class="row d-flex justify-content-between">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input class="form-check-input" type="checkbox" required="required"> I agree to the Terms and Conditions
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" name="submit" class="mt-4 col-3 btn btn-primary btn-lg submit-button">Register</button>
                                    </form>
                                    <div class="opp-page mt-4">
                                        <p>Already have an account? <a href="index.php">Login</a></p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    
                </div>
                
                <div class="col-md-6 right-side d-none d-md-block form-img">
                    <div class="container">
                        <div class="row left-inner-box-row">
                            <div class="col">
                                <div class="result-left-text">
                                    <h1 class="left-text-h1-2"><strong>KARMA<br> GOAL TRACKER</strong></h1>
                                    <blockquote class="blockquote text-center">
                                        <h3 class="mb-0 mt-4">“If you want to live a happy <br>life, tie it to a goal, <br>not to people or things.”</h3>
                                        <footer class="blockquote-footer mt-5 author"><em>Albert Einstein</em></footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        
        <!-- bootstrap Javascript -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <!-- Javascript file -->
        <script src="js/script.js"></script>
    </body>
    
</html>