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
        <li><a href="{{Request::root()}}/bill_detail">Manage Bill_detail</a></li>
        <li class="active" ><a href="{{Request::root()}}/bill_detail/add-bill_detail">Add Bill_detail</a></li>
      </ul>
  </div>
</nav>

<div class="container">

  <h2>Add Bill_detail</h2>  
<form role="form" method="post" action="{{Request::root()}}/bill_detail/add-bill_detail-post" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
    <label for="bill_id">Bill_id:</label>
    <input type="number" class="form-control" id="bill_id" name="bill_id">
  </div>
    <div class="form-group">
    <label for="acc_id">Acc_id:</label>
    <input type="number" class="form-control" id="acc_id" name="acc_id">
  </div>
  <div class="form-group">
    <label for="released_date">Released_date:</label>
    <input type="date" class="form-control" id="released_date" name="released_date">

</div>
    <div class="form-group">
    <label for="invoice_number">Invoice_number:</label>
    <input type="number" class="form-control" id="invoice_number" name="invoice_number">
  </div>
    <div class="form-group">
    <label for="invoice_type">Invoice_type:</label>
    <input type="text" class="form-control" id="invoice_type" name="invoice_type">
  </div>
    <div class="form-group">
    <label for="total">Total:</label>
    <input type="number" class="form-control" id="total" name="total">
  </div>
    <div class="form-group">
    <label for="exchange_rate">Exchange_rate:</label>
    <input type="number" class="form-control" id="exchange_rate" name="exchange_rate">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>