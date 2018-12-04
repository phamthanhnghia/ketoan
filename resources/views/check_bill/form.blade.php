<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHIẾU THU CHI HẰNG NGÀY</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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


    <form role="form" method="get" action="./../check/{{app('request')->id}}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="bill_type">Tài khoản:</label>
            <input type="text" class="form-control" id="acc_code" name="acc_code" value="C1111" disabled>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="bill_type">Tiền</label>
            <input type="text" class="form-control" id="acc_code" name="acc_code" value="Tiền mặt Việt Nam (VNĐ)"
              disabled>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="bill_type">Loại hóa đơn:</label>
            <!-- <input type="text" class="form-control" id="bill_type" name="bill_type"> -->
            <select disabled class="form-control" id="bill_type" name="bill_type">
              <option>@if($data[0]->bill_type == 1) {{'Phiếu Thu'}} @else {{'Phiếu Chi'}} @endif</option>
            </select>
          </div>
        </div>

        <div class="col-md-2">
          <div class="form-group">
            <label for="user_id">Mã khách hàng:</label>
            <input type="text" class="form-control" id="customer-search" name="user_id" value="{{$data[0]->user_id}}" disabled>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="user_id">Họ tên:</label>
            <input type="text" class="form-control" id="name" name="" value="{{$data[0]->name}}" disabled>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="user_id">Địa chỉ:</label>
            <input type="text" class="form-control" id="address" name="" value="{{$data[0]->address}}" disabled>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="reason_note">Lý do:</label>
            <input type="text" class="form-control" id="reason_note" name="reason_note" value="{{$data[0]->reason_note}}" disabled>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="original_docs">Chứng từ gốc:</label>
            <input type="text" class="form-control" id="original_docs" name="original_docs" value="{{$data[0]->original_docs}}" disabled>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label for="wh_id">Mã kho:</label>
            <input type="number" class="form-control" id="wh_id" name="wh_id" value="1" disabled>
          </div>
        </div>

      </div>
      <div class="row">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>TKĐU</th>
              <th>Ngày PHHĐ</th>
              <th>Số HĐ</th>
              <th>Loại HĐ</th>
              <th>Số tiền</th>
              <th>Tỷ lệ</th>
            </tr>
          </thead>
          <tbody>
          @foreach($data[1] as $item)
              <tr>
              <td><input type="text" class="form-control" id="" name="" disabled value="{{$item->acc_id}}"></td>
              <td><input type="date" class="form-control" id="" name="" disabled value="{{$item->created_at}}"></td>
              <td><input type="text" class="form-control" id="" name="" disabled value="{{$item->invoice_number}}"></td>
              <td><input type="text" class="form-control" id="" name="" disabled value="{{$item->invoice_type}}"></td>
              <td><input type="number" class="form-control" id="" name="" disabled value="{{$item->total}}"></td>
              <td><input type="number" class="form-control" id="" name="" disabled value="{{$item->exchange_rate}}"></td>
            </tr>
          @endforeach



          </tbody>
        </table>
      </div>
      <input type="submit" class="btn btn-primary" value="Duyệt" onclick=" return confirm('Bạn có chắc muốn DUYỆT phiếu này?')">
    </form>
  </div>
</body>

<script>
$( function() {
    var availableTags = []
    $( "#customer-search" ).autocomplete({
      source: availableTags,
      select: function(event, ui) {
        // console.log(ui);
        event.preventDefault();
        $("#name").val(ui.item.name);
        $("#address").val(ui.item.address);
      }
    });
  } );
</script>
</html>
