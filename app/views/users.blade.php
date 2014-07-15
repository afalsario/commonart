<html>
<head>
    <title></title>
</head>
<body>

@foreach($users as $user)
Username: {{{ $user->username }}}
<br>
Email Address: {{{ $user->email }}}
<br>
Password: {{{ $user->password }}}
<br>
Admin: {{{ $user->isAdmin }}}
<br>
<br>
@endforeach


</body>
</html>
