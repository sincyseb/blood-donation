<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation</title>
    <style>
        h1{
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
      
    </style>
</head>
<body>
    <h1>BLOOD DONATION</h1>
<nav class="navbar navbar-expand-sm bg-danger ">
 <div class="topnav">
 <ul class="navbar-nav">
      <li class="nav-item">
          <a href="/home">Home</a>
      </li>
      <li class="nav-item">
          <a href="/view">Update</a>
      </li>
      <li class="nav-item">
          <a href="/logout">Logout</a>
      </li>
      
     

  </ul> 
 </div> 
</nav>

        @foreach($result as $value)
        <h1 style="padding-top:150px;">WELCOME {{$value->name}}</h1>
        @endforeach
</body>
</html>