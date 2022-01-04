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

<div class="container">
    <div class="col-sm-6">
    @foreach($result as $value)
        <form action="/updatereg/{{$value->id}}" method="post">
            @csrf
            <h3>Update Here</h3>
          
            <div class="form-group">
                    <label> Name:</label>
                    <input type="text" name="name" value="{{$value->name}}" class="form-control">
            </div>
            <div class="form-group">
                    <label> Age:</label>
                    <input type="text" name="age" value="{{$value->age}}" class="form-control">
            </div>
            <div class="form-group">
                    <label> Sex:</label>
                      Male<input type="radio" value="male" name="sex">
                    Female<input type="radio" value="female" name="sex"><br>
              </div>
              <div class="form-group">
                    <label> Blood Group:</label>
                    <input type="text" name="bgroup"value="{{$value->bgroup}}" class="form-control">
              </div>
              <div class="form-group">
                    <label> Last Blood Donation Date:</label>
                    <input type="date" name="date" value="{{$value->date}}" class="form-control">
              </div>
              <div class="form-group">
                    <label> User Name:</label>
                    <input type="text" name="uname" value="{{$value->uname}}" class="form-control">
              </div>
              <div class="form-group">
                    <label> Password:</label>
                    <input type="password" name="password" value="{{$value->password}}" class="form-control">
              </div>
              <div>
                  <input type="submit" class="btn btn-danger" value="Update" name="update">
                  <input type="reset" class="btn btn-danger" value="Delete" name="delete">
              </div>
            
        </form>
        @endforeach
    </div>
</div>
</body>
</html>