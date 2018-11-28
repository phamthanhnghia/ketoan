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
        <li><a href="{{Request::root()}}/bill_detail/manage-bill_detail">Manage Bill_detail</a></li>
        <li><a href="{{Request::root()}}/bill_detail/add-bill_detail">Add Bill_detail</a></li>
      </ul>
  </div>
</nav>

<div class="container">

 <div class="row">
  <div class="col-xs-12 col-md-10 well">
   bill_id  :  <?php echo $bill_detail->bill_id ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   acc_id  :  <?php echo $bill_detail->acc_id ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   released_date  :  <?php echo $bill_detail->released_date ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   invoice_number  :  <?php echo $bill_detail->invoice_number ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   invoice_type  :  <?php echo $bill_detail->invoice_type ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   total  :  <?php echo $bill_detail->total ?>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-md-10 well">
   exchange_rate  :  <?php echo $bill_detail->exchange_rate ?>
  </div>
</div>

</div>

</body>
</html>