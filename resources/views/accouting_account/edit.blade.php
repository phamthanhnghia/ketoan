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
        <li><a href="{{Request::root()}}/accouting_account">Manage Accouting_account</a></li>
        <li><a href="{{Request::root()}}/accouting_account/add-accouting_account">Add Accouting_account</a></li>
      </ul>
  </div>
</nav>

<div class="container">

  <h2>Update Accouting_account</h2>  
<form role="form" method="post" action="{{Request::root()}}/accouting_account/edit-accouting_account-post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
 <input type="hidden" value="<?php echo $accouting_account->id ?>"   name="accouting_account_id">


      <div class="form-group">
    <label for="code">Code:</label>
    <input type="text" value="<?php echo $accouting_account->code ?>" class="form-control" id="code" name="code">
  </div>
    <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" value="<?php echo $accouting_account->name ?>" class="form-control" id="name" name="name">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>