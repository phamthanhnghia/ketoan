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

  <h2>Danh sách</h2>

@if(Session::has('message'))
  <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span>{{  Session::get('message') }}</strong>
                </div>
@endif

@if(count($datas)>0)
  <table class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Mã phiếu </th>
        <th>Loại hóa đơn</th>
        <th>Khách hàng</th>
        <th>Trạng thái</th>
       <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
    <?php 
      $i= ($datas->currentPage() - 1)*10 +1;
      // echo $datas->currentPage();
    ?>
  @foreach($datas as $bill)
      <tr>
        <td>{{$i}} </td>
        <td><a href="{{Request::root()}}/check_bill/form/{{$bill->id}}" >{{ $bill->pso }} </a> </td>
        <td>   @if($bill->bill_type==1) {{"Phiếu thu"}}  @else {{"Phiếu chi"}} @endif </td>
        <td>{{ $bill->getUserName() }} </td>
        <td>@if($bill->status ==1) {{"Đã duyệt"}}  @else {{"Chưa Duyệt"}} @endif </td>
        <td>
        <!-- <a href="{{Request::root()}}/bill/change-status-bill/{{$bill->id }}" > @if($bill->status==0) {{"Activate"}}  @else {{"Dectivate"}} @endif </a> -->
        <!-- <a href="{{Request::root()}}/bill/edit-bill/{{$bill->id}}" >Edit</a> -->
        <a href="{{Request::root()}}/bill/delete-bill/{{$bill->id}}" onclick="return confirm('are you sure to delete')">Delete</a>
        </td>

      </tr>
    <?php $i++;  ?>
    @endforeach
    {{ $datas->links() }}
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