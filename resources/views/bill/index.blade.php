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
        <li class="active" ><a href="{{Request::root()}}/bill">Manage Bill</a></li>
        <li><a href="{{Request::root()}}/bill/add-bill">Add Bill</a></li>
      </ul>
  </div>
</nav>

<div class="container">

  <h2>Manage Bill</h2>

@if(Session::has('message'))
  <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span>{{  Session::get('message') }}</strong>
                </div>
@endif

@if(count($bills)>0)
  <table class="table table-hover">
    <thead>
      <tr>
        <th>SL No</th>
        <th>bill_type</th>
       <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1 ?>
@foreach($bills as $bill)
      <tr>
        <td>{{$i}} </td>
        <td> <a href="{{Request::root()}}/bill/view-bill/{{$bill->id}}" > {{$bill->bill_type }}</a> </td>

        <td>
        <a href="{{Request::root()}}/bill/change-status-bill/{{$bill->id }}" > @if($bill->status==0) {{"Activate"}}  @else {{"Dectivate"}} @endif </a>
        <a href="{{Request::root()}}/bill/edit-bill/{{$bill->id}}" >Edit</a>
        <a href="{{Request::root()}}/bill/delete-bill/{{$bill->id}}" onclick="return confirm('are you sure to delete')">Delete</a>
        </td>

      </tr>
    <?php $i++;  ?>
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