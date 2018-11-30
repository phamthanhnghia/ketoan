<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHIẾU THU CHI HẰNG NGÀY</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{Request::root()}}/main">PHIẾU THU CHI HẰNG NGÀY</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{Request::root()}}/bill">Danh sách</a></li>
        <!-- <li class="active"><a href="{{Request::root()}}/bill/add-bill">Add Bill</a></li> -->
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