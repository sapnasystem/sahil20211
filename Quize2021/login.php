<!Doctype html>
<html>
<head>
<title> </title>
<link rel="stylesheet" type="text/css" href="bootsterap.css">
</head>
<body>
<link rel="stylesheet" href="style.css">
  <div class="container">
      <div class="row">
           <div class="col-lg-6">
             <h2>Login Form</h2>

                 <form action="validation.php" method="post">
               
                  <div class="form-group">
                        <label>Username</label> 
                        <input type="text" name="user" class="form-control"><br><br>
                   </div>

                   <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control"><br><br>
                   </div>

                   <button  type="submit" class "btn btn-primary">Login </button>

                 </form>
           </div>
              
           <div class="col-lg-6">
             <h2>Register your self</h2>

                 <form action="registration.php" method="post">
               
                  <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control"><br><br>
                   </div>

                   <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control"><br><br>
                   </div>

                   <button type="submit" class " btn btn-primary">Signin </button>

                 </form>
           </div>


        </div>
  
    </div>


</body>
</html>