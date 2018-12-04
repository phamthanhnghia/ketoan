<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHIẾU THU CHI HẰNG NGÀY</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
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
  <h1>Report Bill</h1>
  <div class="form-group">
  <label for="sel1">Type Report:</label>
  <select class="form-control" id="type">
    <option @if(!empty($type) && $type=='day') {{'selected'}} @endif value="day">Day</option>
    <option @if(!empty($type) && $type=='month') {{'selected'}} @endif value="month">Month</option>
    <option @if(!empty($type) && $type=='year') {{'selected'}} @endif value="year">Year</option>
  </select>
</div>
  <div class="form-group">
    <label for="pwd">Choose Date</label>
    <input @if(!empty($date)) value="{{$date}}" @endif type="date" class="form-control" id="date">
  </div>
  <div class="form-group">
    <button id="view" class="btn btn-primary">
      <i class="fa fa-eye"></i>
      View</button>
    <button id="print" class="btn btn-warning">
      <i class="fa fa-print"></i>
      Print</button>
  </div>
@if(!empty($data))
    <div id="view-report">
       <table class="table">
         <tr>
           <th>Loại Phiếu</th>
           <th>Khách Hàng</th>
           <th>Reason Note</th>
           <th>Original Docs</th>
           <th>Tài Khoản Thanh Toán</th>
           <th>Ngày Tạo</th>
         </tr>
        @foreach($data as $item)
         <div style="border-left:solid 2px gray">
           <tr>
             <td>@if($item['bill_type'] == 1) {{"Phiếu Thu"}} @else {{"Phiếu Nhập"}} @endif</td>
             <td>{{$item['name']}}</td>
             <td>{{$item['reason_note']}}</td>
             <td>{{$item['original_docs']}}</td>
             <td>{{$item['acc_code']}}</td>
             <td>{{$item['created_at']}}</td>
           </tr>
           <tr>
             <th>Mã Tài Khoản</th>
             <th>Số Hóa Đơn</th>
             <th>Loại Hóa Đơn</th>
             <th>Tổng Tiền</th>
             <th>Tỉ Lệ</th>
             <th>Tài Khoản Thanh Toán</th>
             <th>Ngày Tạo</th>
           </tr>
           <?php $toEnd = count($item['bill_detail']) ?>
           @foreach($item['bill_detail'] as $key => $itm)
           <tr @if($key == ($toEnd-1)){{"style=border-bottom:solid 3px gray"}} @endif>
             <td>{{$itm['acc_id']}}</td>
             <td>{{$itm['invoice_number']}}</td>
             <td>{{$itm['invoice_type']}}</td>
             <td>{{$itm['total']}}</td>
             <td>{{$itm['exchange_rate']}}</td>
             <td>{{$itm['acc_code']}}</td>
             <td>{{$itm['released_date']}}</td>
           </tr>
         </div>
         @endforeach
        @endforeach
       </table>
    </div>
@endif

</div>
<script>
  $(document).ready(function(){
    $("#view").click(()=>{
      var date = $("#date").val();
      var type = $("#type").val();
      window.location = `./report/${type}/${date}`;
    })
    $("#print").click(()=>{
      printJS('view-report','html');
    })
  })
</script>
</body>
</html>
