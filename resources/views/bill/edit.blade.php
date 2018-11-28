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
        <li><a href="{{Request::root()}}/bill">Manage Bill</a></li>
        <li><a href="{{Request::root()}}/bill/add-bill">Add Bill</a></li>
      </ul>
  </div>
</nav>

<div class="container">

  <h2>Update Bill</h2>  
<form role="form" method="post" action="{{Request::root()}}/bill/edit-bill-post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
 <input type="hidden" value="<?php echo $bill->id ?>"   name="bill_id">


      <div class="form-group">
    <label for="bill_type">Bill_type:</label>
    <input type="text" value="<?php echo $bill->bill_type ?>" class="form-control" id="bill_type" name="bill_type">
  </div>
    <div class="form-group">
    <label for="user_id">User_id:</label>
    <input type="number" value="<?php echo $bill->user_id ?>" class="form-control" id="user_id" name="user_id">
  </div>
    <div class="form-group">
    <label for="reason_note">Reason_note:</label>
    <input type="text" value="<?php echo $bill->reason_note ?>" class="form-control" id="reason_note" name="reason_note">
  </div>
    <div class="form-group">
    <label for="original_docs">Original_docs:</label>
    <input type="text" value="<?php echo $bill->original_docs ?>" class="form-control" id="original_docs" name="original_docs">
  </div>
    <div class="form-group">
    <label for="wh_id">Wh_id:</label>
    <input type="number" value="<?php echo $bill->wh_id ?>" class="form-control" id="wh_id" name="wh_id">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>