<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tables - SB Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="/sb-admin/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/sb-admin/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="/sb-admin/font-awesome/css/font-awesome.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">CommonArt Admin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active"><a href="tables.html"><i class="fa fa-table"></i> Tables</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Admin<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

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
          <div class="col-lg-6">
            <div class="table-responsive">
              <table class="table table-bordered table-hover tablesorter">
                <thead>
                  <tr>
                    <th>Id<i class="fa fa-sort"></i></th>
                    <th>First Name<i class="fa fa-sort"></i></th>
                    <th>Last Name<i class="fa fa-sort"></i></th>
                    <th>Email<i class="fa fa-sort"></i></th>
                    <th>Admin</th>
                    <th>Flagged</th>
                  </tr>
                </thead>
                <tbody>
@foreach($users as $user)
                <tr>
                    <td>{{{ $user->id }}}</td>
                    <td>{{{ $user->first_name }}}</td>
                    <td>{{{ $user->last_name }}}</td>
                    <td>{{{ $user->email }}}</td>
                    <td><input type="checkbox" name="admin"></td>
                    <td><a href="{{ action('UsersController@show', $user->id) }}" class="btn btn-md btn-primary">Edit</a></td>
                    <td><a href="#" class="deleteUser btn btn-md btn-primary" data-userid="{{ $user->id }}">Delete</a></td>
                    {{ Form::open(array('action' => 'UsersController@destroy', 'id' => 'deleteForm', 'method' => 'DELETE')) }}
                    {{ Form::close() }}
                </tr>
 @endforeach
                </tbody>
              </table>
            </div>
          </div>

    <!-- JavaScript -->
<!--     // <script src="js/jquery-1.10.2.js"></script>
    // <script src="js/bootstrap.js"></script>

    // Page Specific Plugins
    // <script src="js/tablesorter/jquery.tablesorter.js"></script>
    // <script src="js/tablesorter/tables.js"></script> -->

    <script type="text/javascript">
       $(".deleteUser").click(function() {
           var userId = $(this).data('userid');
           $("#deleteForm").attr('action', '/profiles/' + userId);
           if(confirm("Are you sure you want to delete this user?")) {
               $('#deleteForm').submit();
           }
       });
    </script>

  </body>
</html>
