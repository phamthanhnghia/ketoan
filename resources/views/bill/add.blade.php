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

    
    <?php
    if( $id == 1){
      echo "<h2>PHIẾU THU TIỀN MẶT</h2>";
    }else{
      echo "<h2>PHIẾU CHI TIỀN MẶT</h2>";
    }
    ?>
    
    <form role="form" method="post" action="{{Request::root()}}/bill/add-bill-post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="bill_type">Thứ tự mã phiếu:</label>
            <input type="text" class="form-control" id="pso" name="pso" value="{{ $pso }}">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="bill_type">Tài khoản:</label>
            <input type="text" class="form-control" id="acc_code" name="acc_code" value="C1111">
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
            <select class="form-control" id="bill_type" name="bill_type">
              <option value="1" <?= ( $id == 1) ? "selected" : ""; ?> >Phiếu thu</option>
              <option value="2" <?= ( $id != 1) ? "selected" : ""; ?> >Phiếu chi</option>
            </select>
          </div>
        </div>

        <div class="col-md-2">
          <div class="form-group">
            <label for="user_id">Mã khách hàng:</label>
            <input type="text" class="form-control" id="customer-search" name="user_id">
            <input type="text" style="display:none;" class="form-control" id="user_id" name="user_id">
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="user_id">Họ tên:</label>
            <input type="text" class="form-control" id="name" name="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="user_id">Địa chỉ:</label>
            <input type="text" class="form-control" id="address" name="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="reason_note">Lý do:</label>
            <input type="text" class="form-control" id="reason_note" name="reason_note">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="original_docs">Chứng từ gốc:</label>
            <input type="text" class="form-control" id="original_docs" name="original_docs">
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label for="wh_id">Mã kho:</label>
            <input type="number" class="form-control" id="wh_id" name="wh_id" value="1" >
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
            <?php 
            for ($i=0; $i < 5; $i++): ?>
              <tr>
              <td><input type="text" class="form-control" id="" name="detail[<?= $i ?>][acc_code]"></td>
              <td><input type="date" class="form-control" id="" name="detail[<?= $i ?>][released_date]"></td>
              <td><input type="text" class="form-control" id="" name="detail[<?= $i ?>][invoice_number]"></td>
              <td><input type="text" class="form-control" id="" name="detail[<?= $i ?>][invoice_type]"></td>
              <td><input type="number" class="form-control" id="" name="detail[<?= $i ?>][total]"></td>
              <td><input type="number" class="form-control" id="" name="detail[<?= $i ?>][exchange_rate]"></td>
            </tr>
            <?php
              endfor;
            ?>
            
            
            
          </tbody>
        </table>
      </div>
      <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
  </div>
</body>

<script>
$( function() {
    var availableTags = <?php echo json_encode($aSearchUser);?> ;
    $( "#customer-search" ).autocomplete({
      source: availableTags,
      select: function(event, ui) {
        // console.log(ui);
        event.preventDefault();
        $("#name").val(ui.item.name);
        $("#address").val(ui.item.address);
        $("#user_id").val(ui.item.value);
      } 
    });
  } );
</script>
</html>
