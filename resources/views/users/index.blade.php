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
        <li class="active" ><a href="{{Request::root()}}/users">Manage Users</a></li>
        <li><a href="{{Request::root()}}/users/add-users">Add Users</a></li>
      </ul>
  </div>
</nav>

<div class="container">

  <h2>Manage Users</h2>

@if(Session::has('message'))
  <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span>{{  Session::get('message') }}</strong>
                </div>
@endif

@if(count($userss)>0)
  <table class="table table-hover">
    <thead>
      <tr>
        <th>SL No</th>
        <th>user_code</th>
       <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1 ?>
@foreach($userss as $users)
      <tr>
        <td>{{$i}} </td>
        <td> <a href="{{Request::root()}}/users/view-users/{{$users->id}}" > {{$users->user_code }}</a> </td>

        <td>
        <a href="{{Request::root()}}/users/change-status-users/{{$users->id }}" > @if($users->status==0) {{"Activate"}}  @else {{"Dectivate"}} @endif </a>
        <a href="{{Request::root()}}/users/edit-users/{{$users->id}}" >Edit</a>
        <a href="{{Request::root()}}/users/delete-users/{{$users->id}}" onclick="return confirm('are you sure to delete')">Delete</a>
        </td>

      </tr>
    <?php $i++;  ?>
    @endforeach
    </tbody>
  </table>
   @else
  <div class="alert alert-info" role="alert">
                    <strong>No Userss Found!</strong>
                </div>
 @endif
</div>

</body>
</html>