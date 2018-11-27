<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel Crud By Crud Generator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://crudegenerator.in">Laravel Crud By Crud Generator</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{Request::root()}}/users">Manage Users</a></li>
        <li class="active" ><a href="{{Request::root()}}/users/add-users">Add Users</a></li>
      </ul>
  </div>
</nav>

<div class="container">

  <h2>Add Users</h2>  
<form role="form" method="post" action="{{Request::root()}}/users/add-users-post" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
    <label for="user_code">User_code:</label>
    <input type="text" class="form-control" id="user_code" name="user_code">
  </div>
    <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
    <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" class="form-control" id="address" name="address">
  </div>
    <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="text" class="form-control" id="phone" name="phone">
  </div>
    <div class="form-group">
    <label for="PID">PID:</label>
    <input type="text" class="form-control" id="PID" name="PID">
  </div>
    <div class="form-group">
    <label for="tax_code">Tax_code:</label>
    <input type="text" class="form-control" id="tax_code" name="tax_code">
  </div>
    <div class="form-group">
    <label for="blank_account_number">Blank_account_number:</label>
    <input type="text" class="form-control" id="blank_account_number" name="blank_account_number">
  </div>
    <div class="form-group">
    <label for="blank_account_name">Blank_account_name:</label>
    <input type="text" class="form-control" id="blank_account_name" name="blank_account_name">
  </div>
    <div class="form-group">
    <label for="password">Password:</label>
    <input type="text" class="form-control" id="password" name="password">
  </div>
    <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
    <div class="form-group">
    <label for="role">Role:</label>
    <input type="number" class="form-control" id="role" name="role">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>