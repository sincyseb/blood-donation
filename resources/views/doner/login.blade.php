<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation</title>
    <style>
        h1,h3{
            text-align: center;
        }
        nav{
            height:60px;
            font-size:25px;
        }
        .navbar a {
        float: left;
        padding: 12px;
        color: white;
        text-decoration: none;
        font-size: 17px;
        width: 30%; 
        text-align: center; 
        }
        h3{
            margin-top:30px;
        }
      
    </style>
</head>
<body>
    <h1>BLOOD DONATION</h1>
<nav class="navbar navbar-expand-sm bg-danger ">
 <div class="topnav">
 <ul class="navbar-nav">
      <li class="nav-item">
          <a href="/register">Register</a>
      </li>
      <li class="nav-item">
          <a href="/login">Login</a>
      </li>
      <li class="nav-item">
          <a href="/viewdetails">Find Doner</a>
      </li>

  </ul> 
 </div> 
</nav>
<div class="container">
    <div class="col-sm-6">
        <form action="loginaction" method="post">
            @csrf
            <h3>Login Here</h3>
              <div class="form-group">
                    <label> User Name:</label>
                    <input type="text" name="uname" class="form-control">
              </div>
              <div class="form-group">
                    <label> Password:</label>
                    <input type="password" name="password" class="form-control">
              </div>
              <div>
                  <input type="submit" class="btn btn-danger" value="Submit" name="submit">
                  <input type="reset" class="btn btn-danger" value="reset" name="reset">
              </div>
        </form>
    </div>
</div>
</body>
</html>