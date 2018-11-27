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
        <li><a href="{{Request::root()}}/users/manage-users">Manage Users</a></li>
        <li><a href="{{Request::root()}}/users/add-users">Add Users</a></li>
      </ul>
  </div>
</nav>

<div class="container">

 <div class="row">
  <div class="col-xs-12 col-md-10 well">
   user_code  :  <?php echo $users->user_code ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   name  :  <?php echo $users->name ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   address  :  <?php echo $users->address ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   phone  :  <?php echo $users->phone ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   PID  :  <?php echo $users->PID ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   tax_code  :  <?php echo $users->tax_code ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   blank_account_number  :  <?php echo $users->blank_account_number ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   blank_account_name  :  <?php echo $users->blank_account_name ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   password  :  <?php echo $users->password ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   username  :  <?php echo $users->username ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   role  :  <?php echo $users->role ?>
  </div>
</div>

</div>

</body>
</html>