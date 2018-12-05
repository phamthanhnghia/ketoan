<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHIẾU THU CHI HẰNG NGÀY</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{Request::root()}}/main">PHIẾU THU CHI HẰNG NGÀY</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="">Danh sách</a></li>
      </ul>
    </div>
  </nav>

<div class="container">

@if($data->count() > 0)
  <h2>Danh sách</h2>

  <table class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Tài khoản </th>
        <th>Loại hóa đơn</th>
        <th>Khách hàng</th>
       <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
@foreach($data as $item)
  <tr>
    <td>{{$item->id}}</td>
    <td>{{$item->acc_code}}</td>
    <td> <a href="/check_bill/form/{{$item->id}}" >@if($item->bill_type == 1) {{"Phiếu Thu"}} @else {{"Phiếu Chi"}} @endif</a> </td>
    <td>{{$item->name}}</td>
    <td>
    <a href="/check_bill/check/{{$item->id}}" onclick="return confirm('Bạn có chắc DUYỆT phiếu này?')">
      <i class="fa fa-check"></i>
      Duyệt</a>
      <a href="{{Request::root()}}/bill/delete-bill/{{$item->id}}" onclick="return confirm('are you sure to delete')"><i class="fa fa-trash"></i> Hủy</a>
    </td>

  </tr>
@endforeach
    </tbody>
  </table>
  @else
  <div class="alert alert-info" role="alert">
                    <strong>No Bills Found!</strong>
                </div>
@endif
</div>

</body>
</html>
