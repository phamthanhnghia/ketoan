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
        <li><a href="{{Request::root()}}/bill/manage-bill">Manage Bill</a></li>
        <li><a href="{{Request::root()}}/bill/add-bill">Add Bill</a></li>
      </ul>
  </div>
</nav>

<div class="container">

 <div class="row">
  <div class="col-xs-12 col-md-10 well">
   bill_type  :  <?php echo $bill->bill_type ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   user_id  :  <?php echo $bill->user_id ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   reason_note  :  <?php echo $bill->reason_note ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   original_docs  :  <?php echo $bill->original_docs ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   wh_id  :  <?php echo $bill->wh_id ?>
  </div>
</div>

</div>

</body>
</html>