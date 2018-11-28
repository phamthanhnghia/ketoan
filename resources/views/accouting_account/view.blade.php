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
        <li><a href="{{Request::root()}}/accouting_account/manage-accouting_account">Manage Accouting_account</a></li>
        <li><a href="{{Request::root()}}/accouting_account/add-accouting_account">Add Accouting_account</a></li>
      </ul>
  </div>
</nav>

<div class="container">

 <div class="row">
  <div class="col-xs-12 col-md-10 well">
   code  :  <?php echo $accouting_account->code ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   name  :  <?php echo $accouting_account->name ?>
  </div>
</div>

</div>

</body>
</html>