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
      
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
<h3>View Doner</h3>
<form action="/search" method="post">
    @csrf
<input type="text" placeholder="Search.." id="serach" name="search">
<button type="submit" value="search" class="btn btn-danger">search</button>
</form>

<table class="table table-bordered">
  <thead>
  <tr>
        <td>Name</td>
        <td>age</td>
        <td>sex</td>
        <td>blood group</td>
        <td>last donated date</td>
    </tr>
  </thead>
    @foreach($result as $value)
    <tr>
        <td>{{$value->name}}</td>
        <td>{{$value->age}}</td>
        <td>{{$value->sex}}</td>
        <td>{{$value->bgroup}}</td>
        <td>{{$value->date}}</td>
    </tr>
    @endforeach
</table>
</body>
</html>