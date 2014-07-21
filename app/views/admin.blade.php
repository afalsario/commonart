@extends('layouts.master')

@section('content')
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <h1>Users</h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="fa fa-table"></i> Tables</li>
            </ol>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-12">
            <div class="table-responsive">
              <table class="table table-bordered table-hover tablesorter" style="text-align:center;">
                <thead>
                  <tr>
                    <th style="text-align:center;">Id</th>
                    <th style="text-align:center;">First Name</i></th>
                    <th style="text-align:center;">Last Name</i></th>
                    <th style="text-align:center;">Username</i></th>
                    <th style="text-align:center;">Email</th>
                    <th style="text-align:center;">Admin</th>
                    <th style="text-align:center;">Flagged</th>
                    <th colspan="3" style="text-align:center;">Actions</th>
                  </tr>
                </thead>
                <tbody>
@foreach($users as $user)
                <tr>
                    <td>{{{ $user->id }}}</td>
                    <td>{{{ $user->first_name }}}</td>
                    <td>{{{ $user->last_name }}}</td>
                    <td>{{{ $user->username }}}</td>
                    <td>{{{ $user->email }}}</td>
                    <td>
                        <input type="checkbox" name="admin" class="makeAdmin" data-userid="{{ $user->id }}">
                        {{ Form::model($user, array('action' => array('UsersController@update', 'id' => 'makeAdminForm'),'method' => 'PUT')) }}
                        {{ Form::close() }}
                    </td>
                    <td></td>
                    <td><a href="{{ action('UsersController@show', $user->username) }}" class="btn btn-md btn-primary">View</a></td>
                    <td><a href="{{ action('UsersController@edit', $user->id) }}" class="btn btn-md btn-primary">Edit</a></td>
                    <td><a href="#" class="deleteUser btn btn-md btn-primary" data-userid="{{ $user->id }}">Delete</a></td>
                    {{ Form::open(array('action' => 'AdminController@destroy', 'id' => 'deleteForm', 'method' => 'DELETE')) }}
                    {{ Form::close() }}
                </tr>
 @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="/assets/plugins/jquery-1.11.1.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!--     // Page Specific Plugins
    // <script src="js/tablesorter/jquery.tablesorter.js"></script>
    // <script src="js/tablesorter/tables.js"></script>
 -->
    <script type="text/javascript">
       $(".deleteUser").click(function() {
           var userId = $(this).data('userid');
           $("#deleteForm").attr('action', '/profiles/' + userId);
           if(confirm("Are you sure you want to delete this user?")) {
               $('#deleteForm').submit();
           }
       });

       $(".makeAdmin").click(function() {
           var userId = $(this).data('userid');
           $("#makeAdminForm").attr('action', '/profiles/' + userId);
           if(confirm("Are you sure you want to make this user an Administrator?")) {
               $('#makeAdminForm').submit();
           }
       });
    </script>
@stop
