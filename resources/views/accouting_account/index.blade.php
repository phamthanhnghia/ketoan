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
        <li class="active" ><a href="{{Request::root()}}/accouting_account">Manage Accouting_account</a></li>
        <li><a href="{{Request::root()}}/accouting_account/add-accouting_account">Add Accouting_account</a></li>
      </ul>
  </div>
</nav>

<div class="container">

  <h2>Manage Accouting_account</h2>

@if(Session::has('message'))
  <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span>{{  Session::get('message') }}</strong>
                </div>
@endif

@if(count($accouting_accounts)>0)
  <table class="table table-hover">
    <thead>
      <tr>
        <th>SL No</th>
        <th>code</th>
       <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1 ?>
@foreach($accouting_accounts as $accouting_account)
      <tr>
        <td>{{$i}} </td>
        <td> <a href="{{Request::root()}}/accouting_account/view-accouting_account/{{$accouting_account->id}}" > {{$accouting_account->code }}</a> </td>

        <td>
        <a href="{{Request::root()}}/accouting_account/change-status-accouting_account/{{$accouting_account->id }}" > @if($accouting_account->status==0) {{"Activate"}}  @else {{"Dectivate"}} @endif </a>
        <a href="{{Request::root()}}/accouting_account/edit-accouting_account/{{$accouting_account->id}}" >Edit</a>
        <a href="{{Request::root()}}/accouting_account/delete-accouting_account/{{$accouting_account->id}}" onclick="return confirm('are you sure to delete')">Delete</a>
        </td>

      </tr>
    <?php $i++;  ?>
    @endforeach
    </tbody>
  </table>
   @else
  <div class="alert alert-info" role="alert">
                    <strong>No Accouting_accounts Found!</strong>
                </div>
 @endif
</div>

</body>
</html>